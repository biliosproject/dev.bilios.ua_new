<?php
class ControllerExtensionModuleFastImages extends Controller {
    public function get_webp($route, &$data) {
        $DIR_ROOT = $_SERVER['DOCUMENT_ROOT'].'/';
        $DIR_ROOT = str_replace('//' ,'/', $DIR_ROOT);

        $src = rawurldecode($_SERVER['REQUEST_URI']);
        $ext = mb_strtolower(mb_substr($src, mb_strrpos($src, '.') + 1));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
            if (mb_substr($src, 0, 1) == '/') {
                $src = mb_substr($src, 1);
            }
            if ($ext !== 'webp') {
                $img = $src;
                $webp = preg_replace('/\.(jpe?g|png)$/i', '-$1.webp', $src);
            } else {
                $img = preg_replace('/\-(jpe?g|png)\.webp$/i', '.$1', $src);
                $webp = $src;
                $ext = mb_strtolower(mb_substr($img, mb_strrpos($img, '.') + 1));
            }
            if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                $imgFilename = $DIR_ROOT . $img;
                if (file_exists($imgFilename)) {
                    $returnFile = $imgFilename;
                    $webpFilename = $DIR_ROOT . $webp;

                    if ($this->config->get('module_fast_images_status') and mb_strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
                        $gd = gd_info();
                        if ($gd['WebP Support'] and function_exists('imagewebp')) {
                            $webp = $this->createWebp($imgFilename, $webpFilename);
                            if ($webp) $returnFile = $webp;
                        }
                    }
                    $fileSize = filesize($returnFile);
                    $aSize = getimagesize($returnFile);

                    if (ob_get_level()) ob_end_clean();
                    http_response_code(200);
                    header('Content-Type: ' . $aSize['mime']);
                    header('Content-Length: ' . $fileSize);
                    header('Accept-Ranges: bytes');
                    header_remove('Server');
                    header_remove('x-powered-by');
                    if (function_exists('apache_setenv')) {
                        apache_setenv('no-gzip', 1);
                    } else {
                        header('Content-Encoding: none');
                    }
                    readfile($returnFile);
                    die;
                }
            }
        }
    }
    public function header_before($route, &$data) {
        if ($this->config->get('module_fast_images_status') and $this->config->get('module_fast_images_lazy')) {
            $this->document->addScript('catalog/view/javascript/fast_images.min.js');
        }
    }
    public function header_after($route, &$args, &$output) {
        if ($this->config->get('module_fast_images_status') and $this->config->get('module_fast_images_lazy')) {
            $h = preg_replace("/<!--.*?-->/s", " ", $output);
            preg_match("/<html[^>]*>/i", $h, $aMatches);
            if (!empty($aMatches[0])) {
                $sFrom = $aMatches[0];
                if (preg_match('/class=["\']/i', $sFrom)) {
                    $sTo = preg_replace('/class=(["\'])(["\']*)["\']/i', 'class=$1$2 no-js$1', $sFrom);
                } else {
                    $sTo = str_replace('>', ' class="no-js">', $sFrom);
                }
                $output = str_replace($sFrom, $sTo, $output);
            }
            $output = str_replace('</title>', '</title><script>var h=document.getElementsByTagName("html")[0];h.className=h.className.replace("no-js","js")</script><style>.no-js img.lazyload{display:none}</style>', $output);
        }
    }
    public function output_after($route, &$args, &$output) {
        if($this->config->get('module_fast_images_status')) {
            $h = $this->response->getOutput();
            if ($this->config->get('module_fast_images_towebp') and mb_strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
                $gd = gd_info();
                if ($gd['WebP Support'] and function_exists('imagewebp')) {
                    $h = $this->toWebP($h);
                }
            }
            if ($this->config->get('module_fast_images_lazy')) {
                $h = $this->lazyLoad($h);
            }
            $this->response->setOutput($h);
        }
    }

    private function toWebP($h){
        if($this->config->get('module_fast_images_status') and mb_strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
            $URL_ROOT = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;
            $DIR_ROOT = str_replace('//' ,'/', $_SERVER['DOCUMENT_ROOT'] . '/');

            $aFrom = $aTo = [];
            $aMatches = [];
            preg_match_all('/<img.+?src=(["\'][^"\']+["\'])/is', $h, $aMatches);
            if (!empty($aMatches)) {
                foreach ($aMatches[1] as $match) {
                    $quote = mb_substr($match, 0, 1);
                    $src = $src_ = mb_substr($match, 1, -1);
                    $src = rawurldecode($src);
                    $src = trim($src);

                    if (mb_strpos($src, $URL_ROOT) === 0) {
                        $src = str_replace($URL_ROOT, '', $src);
                    }
                    if (mb_strpos($src, 'http') !== false) continue;
                    if (mb_substr($src, 0, 1) == '/') {
                        $src = mb_substr($src, 1);
                    }

                    $ext = mb_strtolower(mb_substr($src, mb_strrpos($src, '.') + 1));

                    if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                        $from = 'src='. $quote . $src_ ;
                        $to = preg_replace('/\.(jpe?g|png)$/i', '-$1.webp', $from);

                        $webp = true;
                        if ($this->config->get('module_fast_images_pregen')) {
                            $imgFilename = $DIR_ROOT . $src;
                            if (!is_file($imgFilename) and is_file($imgFilename)) {
                                $webpFilename = preg_replace('/\.(jpe?g|png)$/i', '-$1.webp', $imgFilename);
                                $webp = $this->createWebp($imgFilename, $webpFilename);
                            }
                        }
                        if ($webp) {
                            if (!in_array($from, $aFrom)) {
                                array_push($aFrom, $from);
                                array_push($aTo, $to);
                            }
                        };

                    }
                }

                $h = str_replace($aFrom, $aTo, $h);
            }
        }
        return $h;
    }
    private function createWebp($imgFilename, $webpFilename){
        $returnFile = '';
        $aSize = getimagesize($imgFilename);
        $format = strtolower(substr($aSize['mime'], strpos($aSize['mime'], '/') + 1));
        $icfunc = "imagecreatefrom" . $format;
        if (function_exists($icfunc)) {
            $im = $icfunc($imgFilename);
            if ($im !== false) {
                $ext = mb_strtolower(mb_substr($imgFilename, mb_strrpos($imgFilename, '.') + 1));
                if ($ext == 'png') {
                    imagepalettetotruecolor($im);
                    imagealphablending($im, true);
                    imagesavealpha($im, true);
                }
                if (imagewebp($im, $webpFilename, $this->config->get('module_fast_images_quality'))) {
                    $fileSize = filesize($webpFilename);
                    if ($fileSize) {
                        $returnFile = $webpFilename;
                    } else {
                        if (file_exists($webpFilename)) {
                            unlink($webpFilename);
                        }
                    }
                }
                imagedestroy($im);
            }
        }
        return $returnFile;
    }

    private function lazyLoad($h)
    {
        preg_match_all('/<img[\s\r\n]+(.*?)>/is', $h, $aMatches);

        $aFrom = $aTo = [];
        $class = 'lazyload';

        foreach ($aMatches[0] as $hImg) {
            if (!in_array($hImg, $aFrom)) {
                if (strpos($hImg, 'data-src') !== false || strpos($hImg, 'data-srcset') !== false) continue;
                if (strpos($hImg, 'no-lazyload') !== false) continue;

                $aSize = $this->getImageSizes($hImg);

                $width = $aSize[0] ? $aSize[0] : 32;
                $height = $aSize[1] ? $aSize[1] : 32;
                $lazySrc = 'data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22' . $width . '%22%20height=%22' . $height . '%22%20viewBox=%220%200%20' . $width . '%20' . $height . '%22%3E%3C/svg%3E';

                $hImgTo = preg_replace('/<img(.*?)src=/is', '<img $1src="' . $lazySrc . '" data-src=', $hImg);
                if (preg_match('/class=["\']/i', $hImgTo)) {
                    $hImgTo = preg_replace('/class=(["\'])([^"\']+)["\']/is', 'class=$1$2 ' . $class . '$1', $hImgTo);
                } else {
                    $hImgTo = preg_replace('/<img/is', '<img class="' . $class . '"', $hImgTo);
                }
                $hImgTo = '<noscript>' . $hImg . '</noscript>' . $hImgTo;

                array_push($aFrom, $hImg);
                array_push($aTo, $hImgTo);
            }
        }

        $h = str_replace($aFrom, $aTo, $h);

        return $h;
    }
    private function getImageSizes($h)
    {
        $aSize = [0, 0];
        $aWidth = $aHeight = $aSizes = [];

        preg_match('/width=["\']([0-9]+)["\']/i', $h, $aWidth);
        preg_match('/height=["\']([0-9]+)["\']/i', $h, $aHeight);

        if (!empty($aWidth) and !empty($aHeight)) {
            $aSize = [$aWidth[1], $aHeight[1]];
        } else {
            preg_match('/-([0-9]+x[0-9]+)[\.\-]/i', $h, $aSizes);
            if (!empty($aSizes[1])){
                $aSize = explode('x', $aSizes[1]);
            }
        }
        return $aSize;
    }
}