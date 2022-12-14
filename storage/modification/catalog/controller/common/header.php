<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {

				protected function min_css() {
					$css_files = array(
						'view/javascript/bootstrap/css/bootstrap.min.css',
						'view/javascript/revolution/font-awesome/css/font-awesome.min.css',
						'view/theme/revolution/stylesheet/stylesheet.css',
						$this->config->get('revtheme_all_settings')['n_progres'] ? 'view/javascript/revolution/nprogress.css' : false,
						'view/javascript/revolution/jasny-bootstrap.min.css',
						'view/javascript/revolution/magnific-popup.css',
						'view/javascript/revolution/owl-carousel/owl.carousel.css',
						$this->config->get('revtheme_all_settings')['mobile_header'] == '2' ? 'view/javascript/revolution/jquery.mmenu.css' : false,
						'view/theme/revolution/stylesheet/stylesheet_change.css'
					);
					$file_min_css = DIR_APPLICATION . 'view/theme/revolution/stylesheet/stylesheet_min.css';
					if ($css_files && !file_exists($file_min_css)) {
						$all_css = '';
						foreach ($css_files as $css_file) {
							if ($css_file) {
								$all_css .= file_get_contents(DIR_APPLICATION . $css_file);
							}
						}
						$all_css = str_replace('../fonts/', 'fonts/', $all_css);
						$all_css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $all_css);
						$all_css = str_replace(': ', ':', $all_css);
						$all_css = str_replace(array("\r\n", "\r", "\n", "\t"), '', $all_css);
						$all_css = str_replace(array('  ', '    ', '    '), ' ', $all_css);
						file_put_contents($file_min_css, $all_css);
					}
				}
				protected function min_js() {
					$js_files = array(
						'view/javascript/bootstrap/js/bootstrap.min.js',
						'view/javascript/revolution/common.js',
						'view/javascript/revolution/js_change.js',
						$this->config->get('revtheme_header_menu')['type'] ? 'view/javascript/revolution/aim.js' : false,
						$this->config->get('revtheme_header_menu')['type'] ? $this->config->get('revtheme_header_menu')['on_line_cat'] ? 'view/javascript/revolution/amazoncategory_2.js' : 'view/javascript/revolution/amazoncategory.js' : false,
						$this->config->get('revtheme_header_search')['ajax_search_status'] ? 'view/javascript/revolution/ajax_search.js' : false,
						$this->config->get('revtheme_all_settings')['all_document_snow_on'] ? 'view/javascript/revolution/snow.min.js' : false,
						$this->config->get('revtheme_all_settings')['mobile_header'] == '2' ? 'view/javascript/revolution/jquery.mmenu.js' : false
					);
					$file_min_js = DIR_APPLICATION . 'view/javascript/revolution/javascript_min.js';
					if ($js_files) {
						if (!file_exists($file_min_js)) {
							$all_js = '';
							foreach ($js_files as $js_file) {
								if ($js_file) {
									$all_js .= file_get_contents(DIR_APPLICATION . $js_file);
									$all_js .= "\r\n\r\n";
								}
							}
							$all_js = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $all_js);
							$all_js = str_replace(array("\r\n", "\r"), "\n", $all_js);
							$all_js = preg_replace('/[^\S\n]+/', ' ', $all_js);
							$all_js = str_replace(array(" \n", "\n "), "\n", $all_js);
							$all_js = preg_replace('/\n+/', "\n", $all_js);
							$all_js = str_replace(': ', ':', $all_js);
							$all_js = preg_replace(array('(( )+{)','({( )+)'), '{', $all_js);
							$all_js = preg_replace(array('(( )+})','(}( )+)','(;( )*})'), '}', $all_js);
							file_put_contents($file_min_js, $all_js);
						}
					}
				}
			
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();


				// For page specific css
				if (isset($this->request->get['route'])) {
					if (isset($this->request->get['product_id'])) {
						$class = '-' . $this->request->get['product_id'];
					} elseif (isset($this->request->get['path'])) {
						$class = '-' . $this->request->get['path'];
					} elseif (isset($this->request->get['manufacturer_id'])) {
						$class = '-' . $this->request->get['manufacturer_id'];
					} elseif (isset($this->request->get['information_id'])) {
						$class = '-' . $this->request->get['information_id'];
					} else {
						$class = '';
					}

					$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
				} else {
					$data['class'] = 'common-home';
				}
				$data['cart_mobi'] = $this->load->controller('common/cart_mobi');
				$this->load->model('tool/image');
				if ($this->config->get('revtheme_geo_set')['status']) {
					require_once(DIR_SYSTEM . 'library/revolution/SxGeo.php');
					$SxGeo = new SxGeo();
					if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
						$ip = $_SERVER['HTTP_CLIENT_IP'];
					} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					} else {
						$ip = $_SERVER['REMOTE_ADDR'];
					}
					$ip_city = $SxGeo->getCity($ip)['city']['name_ru'];
					$ip_region = $SxGeo->getCityFull($ip)['region']['name_ru'];
					$rev_geo_data = $this->config->get('revtheme_geo');
					$data['rev_geos'] = array();
					if (!empty($rev_geo_data)){
						foreach ($rev_geo_data as $rev_geo) {
							if ($ip_city == $rev_geo['city'] || $ip_region == $rev_geo['city']) {
								$data['rev_geos'][] = array(
									'code' => $rev_geo['code'],
									'text' => $rev_geo['text'][$this->config->get('config_language_id')]
								);
							}
						}
					}
				}
				$data['config_customer_price'] = $this->config->get('config_customer_price');
				$data['stikers_settings'] = $this->config->get('revtheme_catalog_stiker');
				$data['setting_header_search'] = $setting_header_search = $this->config->get('revtheme_header_search');
				$setting_all_settings = $this->config->get('revtheme_all_settings');
				$data['setting_all_settings'] = $this->config->get('revtheme_all_settings');
				$data['revtheme_cat_attributes'] = $this->config->get('revtheme_cat_attributes');
				$data['revtheme_product_all'] = $this->config->get('revtheme_product_all');
				$data['header_search_doptext'] = '';
				if ($setting_all_settings['mobile_on']) {
					$is_mobile = $data['is_mobile'] = $this->mobiledetect->isMobile();
					$is_desctope = $data['is_desctope'] = !$this->mobiledetect->isMobile() || $this->mobiledetect->isTablet();
				} else {
					$is_mobile = $data['is_mobile'] = true;
					$is_desctope = $data['is_desctope'] = true;
				}
				if ($setting_all_settings['minif_on']) {
					$this->min_css();
					$this->min_js();
				} else {
					if ($setting_header_search['ajax_search_status']) {
						$this->document->addScript('catalog/view/javascript/revolution/ajax_search.js');
					}
				}
				if ($setting_header_search['ch_text']) {
					$data['header_search_doptext'] = html_entity_decode($setting_header_search[$this->config->get('config_language_id')]['doptext'], ENT_QUOTES, 'UTF-8');
				}
				$setting_header_menu = $this->config->get('revtheme_header_menu');
				$data['cats_status'] = $setting_header_menu['cats_status'];
				if ($setting_header_menu['type']) {
					$data['amazon'] = true;
				} else {
					$data['amazon'] = false;
				}
				if ($setting_header_menu['image_in_ico']) {
					$data['image_in_ico'] = true;
				} else {
					$data['image_in_ico'] = false;
				}
				if ($setting_header_menu['tri_level']) {
					$data['tri_level'] = true;
				} else {
					$data['tri_level'] = false;
				}
				if ($setting_header_menu['image_in_ico_m']) {
					$data['image_in_ico_m'] = true;
				} else {
					$data['image_in_ico_m'] = false;
				}
				$this->load->language('revolution/revolution');
				$data['text_mobile_catalog'] = $this->language->get('text_mobile_catalog');
				$data['text_header_back'] = $this->language->get('text_header_back');
				$data['text_header_information'] = $this->language->get('text_header_information');
				$data['text_header_revpopup_phone'] = $this->language->get('text_header_revpopup_phone');
				$data['text_header_menu2_heading'] = $this->language->get('text_header_menu2_heading');
				$data['text_rev_text_order'] = $this->language->get('text_rev_text_order');
				$data['text_rev_text_download'] = $this->language->get('text_rev_text_download');
				$data['revmenu'] = $this->load->controller('revolution/revmenu');
				$settings_popupphone = $this->config->get('revtheme_header_popupphone');
				$data['revtheme_header_popupphone'] = $settings_popupphone;
				$settings_header_standart_links = $this->config->get('revtheme_header_standart_links');
				$data['popup_login'] = $settings_header_standart_links['popup_login'];
				$data['rev_lang'] = $settings_header_standart_links['rev_lang'];
				$data['rev_curr'] = $settings_header_standart_links['rev_curr'];
				$data['rev_srav'] = $settings_header_standart_links['rev_srav'];
				$data['rev_wish'] = $settings_header_standart_links['rev_wish'];
				$data['rev_acc'] = $settings_header_standart_links['rev_acc'];
				
				$data['microdata_status'] = $setting_all_settings['microdata_status'];
				$data['microdata_postcode'] = $setting_all_settings['microdata_postcode'];
				$data['microdata_city'] = $setting_all_settings['microdata_city'];
				$data['microdata_adress'] = $setting_all_settings['microdata_adress'];
				$data['microdata_email'] = $setting_all_settings['microdata_email'];
				if ($setting_all_settings['microdata_phones']) {
					$microdata_phones = explode(",", $setting_all_settings['microdata_phones']);
					$microdata_phones = array_map('trim',$microdata_phones);
					$data['microdata_phones'] = array_diff($microdata_phones, array(''));
				} else {
					$data['microdata_phones'] = false;
				}		
				if ($setting_all_settings['microdata_social']) {
					$microdata_social = explode(",", $setting_all_settings['microdata_social']);
					$microdata_social = array_map('trim',$microdata_social);
					$data['microdata_social'] = array_diff($microdata_social, array(''));
				} else {
					$data['microdata_social'] = false;
				}
				$data['setting_catalog_all'] = $this->config->get('revtheme_catalog_all');

				$dop_contact_status = $this->config->get('revtheme_header_dop_contacts_status');
				if ($dop_contact_status){
					$dop_contact = $this->config->get('revtheme_header_dop_contact');
					if (!empty($dop_contact)){
						foreach ($dop_contact as $result) {
							$style = '';
							if ($result['icontype']) {
								if ($result['icon'] == 'fa none') {
									$style = ' hidden';
								}
								$result_icon = '<i class="'.$result['icon'].$style.'"></i>';
							} else {
								if (!$result['image'] || $result['image'] == 'no_image.png') {
									$style = ' hidden';
								}
								$result_icon = '<span class="mask"></span><img class="'.$style.'" src="'.$this->model_tool_image->resize($result['image'], 21, 21).'" alt=""/>';
							}
							$number = $result['number'][$this->config->get('config_language_id')];
							if ($this->config->get('revtheme_geo_set')['status']) {
								foreach ($data['rev_geos'] as $rev_geo) {
									if ($number == $rev_geo['code']) {
										$number = $rev_geo['text'];
									}
								}
							}
							
							$data['dop_contacts'][] = array(
								'icon' 		=> $result_icon,
								'number' 	=> $number,
								'href' 		=> $result['href'][$this->config->get('config_language_id')],
								'sort'  	=> $result['sort']
							);
						}
						
						foreach ($data['dop_contacts'] as $key => $value) {
							$sort_dop_contacts[$key] = $value['sort'];
						}
						if (count($data['dop_contacts']) > 1) {
							array_multisort($sort_dop_contacts, SORT_ASC, $data['dop_contacts']);
						}

					} else {
						$data['dop_contacts'] = false;
					}
				} else {
					$data['dop_contacts'] = false;
				}
				$header_phone = $this->config->get('revtheme_header_phone');
				$data['header_phone_text'] = $header_phone[$this->config->get('config_language_id')]['text'];
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if ($data['header_phone_text'] == $rev_geo['code']) {
							$data['header_phone_text'] = $rev_geo['text'];
						}
					}
				}
				$data['header_phone_text2'] = $header_phone[$this->config->get('config_language_id')]['text2'];
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if ($data['header_phone_text2'] == $rev_geo['code']) {
							$data['header_phone_text2'] = $rev_geo['text'];
						}
					}
				}
				$data['header_phone_cod'] = $header_phone[$this->config->get('config_language_id')]['cod'];
				$data['header_phone_number'] = $header_phone[$this->config->get('config_language_id')]['number'];
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if ($data['header_phone_number'] == $rev_geo['code']) {
							$data['header_phone_number'] = $rev_geo['text'];
						}
					}
				}
				$data['header_phone_cod2'] = $header_phone[$this->config->get('config_language_id')]['cod2'];
				$data['header_phone_number2'] = $header_phone[$this->config->get('config_language_id')]['number2'];
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if ($data['header_phone_number2'] == $rev_geo['code']) {
							$data['header_phone_number2'] = $rev_geo['text'];
						}
					}
				}
				if ($header_phone['icontype']) {
					if ($header_phone['icon'] == 'fa none') {
						$data['header_phone_image'] = '';
					}
					$data['header_phone_image'] = '<i class="'.$header_phone['icon'].'"></i>';
				} else {
					if (!$header_phone['image'] || $header_phone['image'] == 'no_image.png') {
						$data['header_phone_image'] = '';
					}
					$data['header_phone_image'] = '<img src="'.$this->model_tool_image->resize($header_phone['image'], 32, 32).'" alt=""/>';
				}
				
				$this->load->model('catalog/information');

				$data['informations'] = array();
				$data['informations2'] = array();

				foreach ($this->model_catalog_information->getInformations() as $result) {
					if ($result['top']) {
						$data['informations'][] = array(
							'title' => $result['title'],
							'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
						);
					}
					if ($result['top2']) {
						$data['informations2'][] = array(
							'title' => $result['title'],
							'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
						);
					}
				}

				$results_h_links = $this->config->get('revtheme_header_link');
				if (!empty($results_h_links)){
					foreach ($results_h_links as $result) {
						$data['revtheme_header_links'][] = array(
							'link'  => $result['link'][$this->config->get('config_language_id')],
							'title' => $result['title'][$this->config->get('config_language_id')],
							'sort'  => $result['sort']
						);
					}
				} else {
					$data['revtheme_header_links'] = false;
				}
				if (!empty($data['revtheme_header_links'])){
					foreach ($data['revtheme_header_links'] as $key => $value) {
						$sort[$key] = $value['sort'];
					}
					if (count($data['revtheme_header_links']) > 1) {
					array_multisort($sort, SORT_ASC, $data['revtheme_header_links']);
					}
				}
				
				$results_h_links2 = $this->config->get('revtheme_header_link2');
				if (!empty($results_h_links2)){
					foreach ($results_h_links2 as $result) {
						$style = '';
						if ($result['icontype']) {
							if ($result['icon'] == 'fa none') {
								$style = ' hidden';
							}
							$image = '<i class="hidden-md '.$result['icon'].$style.'"></i>';
						} else {
							if (!$result['image'] || $result['image'] == 'no_image.png') {
								$style = ' hidden';
							}
							$image = '<span class="hidden-md '.$style.'"><img src="'.$this->model_tool_image->resize($result['image'], 21, 21).'" alt=""/></span>';
						}
						$result_title = ($image . $result['title'][$this->config->get('config_language_id')]);
						
						$data['revtheme_header_links2'][] = array(
							'link'  => $result['link'][$this->config->get('config_language_id')],
							'title' => $result_title,
							'sort'  => $result['sort']
						);
					}
				} else {
					$data['revtheme_header_links2'] = false;
				}
				if (!empty($data['revtheme_header_links2'])){
					foreach ($data['revtheme_header_links2'] as $key => $value) {
						$sort2[$key] = $value['sort'];
					}
					if (count($data['revtheme_header_links2']) > 1) {
					array_multisort($sort2, SORT_ASC, $data['revtheme_header_links2']);
					}
				}

				$data['text_compare'] = sprintf($this->language->get('text_revcompare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
				$data['compare'] = $this->url->link('product/compare');
				$data['manuf_status'] = $setting_header_menu['manuf'];
				$config_image_category_width = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width');
				$config_image_category_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height');
				if ($setting_header_menu['manuf']) {
					$data['text_revmenu_manufs'] = $this->language->get('text_revmenu_manufs');
					$data['url_revmenu_manufs'] = $this->url->link('product/manufacturer');
					$data['n_column'] = $setting_header_menu['n_column'];
					$style = '';
					if ($this->config->get('revtheme_header_menu')['manuf_icontype']) {
						if ($this->config->get('revtheme_header_menu')['manuf_icon'] == 'fa none') {
							$style = ' hidden';
						}
						$data['manuf_image'] = '<i class="hidden-md '.$this->config->get('revtheme_header_menu')['manuf_icon'].$style.'"></i>';
					} else {
						if (!$this->config->get('revtheme_header_menu')['manuf_image'] || $this->config->get('revtheme_header_menu')['manuf_image'] == 'no_image.png') {
							$style = ' hidden';
						}
						$data['manuf_image'] = '<span class="hidden-md'.$style.'"><img src="'.$this->model_tool_image->resize($this->config->get('revtheme_header_menu')['manuf_image'], 21, 21).'" alt=""/></span>';
					}	
					$this->load->model('catalog/manufacturer');
					$data['categories_m'] = array();
					$results = $this->model_catalog_manufacturer->getManufacturers();
					foreach ($results as $result) {
						$name = $result['name'];
						if (is_numeric(utf8_substr($name, 0, 1))) {
							$key = '0 - 9';
						} else {
							$key = utf8_substr(utf8_strtoupper($name), 0, 1);
						}
						if (!isset($data['categories_m'][$key])) {
							$data['categories_m'][$key]['name'] = $key;
						}
						if ($result['image']) {
							$thumb = $this->model_tool_image->resize($result['image'], $config_image_category_width, $config_image_category_height);
						} else {
							$thumb = $this->model_tool_image->resize('no_image.png', $config_image_category_width, $config_image_category_height);
						}
						$data['categories_m'][$key]['manufacturer'][] = array(
							'thumb' => $thumb,
							'name' => $name,
							'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
						);
					}
				}
				$results_amazon_links = $this->config->get('revtheme_header_menu_link');
				if ($setting_header_menu['type'] && !empty($results_amazon_links)){
					foreach ($results_amazon_links as $result) {
						$data['revtheme_header_menu_links'][] = array(
							'link'  => $result['link'][$this->config->get('config_language_id')],
							'title' => $result['title'][$this->config->get('config_language_id')],
							'sort'  => $result['sort']
						);
					}
				} else {
					$data['revtheme_header_menu_links'] = false;
				}
				if (!empty($data['revtheme_header_menu_links'])){
					foreach ($data['revtheme_header_menu_links'] as $key => $value) {
						$sort[$key] = $value['sort'];
					}
					if (count($data['revtheme_header_menu_links']) > 1) {
					array_multisort($sort, SORT_ASC, $data['revtheme_header_menu_links']);
					}
				}
				if ($setting_all_settings['opacity_cont']) {
					$data['opacity_cont_class'] = 'opacity_minus';
				} else {
					$data['opacity_cont_class'] = 'opacity_minus_products';
				}
				$revtheme_dop_menu = $this->config->get('revtheme_dop_menu');
				if (!empty($revtheme_dop_menu)){
					$data['revtheme_dop_menus'] = json_decode(htmlspecialchars_decode($revtheme_dop_menu), true);
					$data['config_language_id'] = $this->config->get('config_language_id');
					foreach($data['revtheme_dop_menus'] as $key => $val){
						if (!empty($data['revtheme_dop_menus'][$key]['dop_menu_image'])){
							$data['revtheme_dop_menus'][$key]['dop_menu_image'] = $this->model_tool_image->resize($data['revtheme_dop_menus'][$key]['dop_menu_image'], $config_image_category_width, $config_image_category_height);
						} else {
							$data['revtheme_dop_menus'][$key]['dop_menu_image'] = false;
						}
						if (isset($data['revtheme_dop_menus'][$key]['children'])){
							$children = $data['revtheme_dop_menus'][$key]['children'];
							foreach($children as $key2 => $val2){
								if (!empty($data['revtheme_dop_menus'][$key]['children'][$key2]['dop_menu_image'])){
									$data['revtheme_dop_menus'][$key]['children'][$key2]['dop_menu_image'] = $this->model_tool_image->resize($data['revtheme_dop_menus'][$key]['children'][$key2]['dop_menu_image'], $config_image_category_width, $config_image_category_height);
								} else {
									$data['revtheme_dop_menus'][$key]['children'][$key2]['dop_menu_image'] = false;
								}
							}
						}
						if (!empty($data['revtheme_dop_menus'][$key]['column'])){
							$data['revtheme_dop_menus'][$key]['column'] = $data['revtheme_dop_menus'][$key]['column'];
						} else {
							$data['revtheme_dop_menus'][$key]['column'] = 1;
						}
					}
				} else {
					$data['revtheme_dop_menus'] = false;
				}
				$revtheme_dop_menu_2 = $this->config->get('revtheme_dop_menu_2');
				if (!empty($revtheme_dop_menu_2)){
					$data['revtheme_dop_menus_2'] = json_decode(htmlspecialchars_decode($revtheme_dop_menu_2), true);
					$data['config_language_id'] = $this->config->get('config_language_id');
				} else {
					$data['revtheme_dop_menus_2'] = false;
				}
				$revtheme_dop_menu_3 = $this->config->get('revtheme_dop_menu_3');
				$data['image_in_ico_dop3'] = $this->config->get('revtheme_dop_menu_3_image_in_ico');
				if (!empty($revtheme_dop_menu_3)){
					$data['revtheme_dop_menus_3'] = json_decode(htmlspecialchars_decode($revtheme_dop_menu_3), true);
					$data['config_language_id'] = $this->config->get('config_language_id');
					foreach($data['revtheme_dop_menus_3'] as $key => $val){
						if (!empty($data['revtheme_dop_menus_3'][$key]['dop_menu_image_3'])){
							$data['revtheme_dop_menus_3'][$key]['dop_menu_image_3'] = $this->model_tool_image->resize($data['revtheme_dop_menus_3'][$key]['dop_menu_image_3'], $config_image_category_width, $config_image_category_height);
						} else {
							$data['revtheme_dop_menus_3'][$key]['dop_menu_image_3'] = false;
						}
						if (isset($data['revtheme_dop_menus_3'][$key]['children'])){
							$children = $data['revtheme_dop_menus_3'][$key]['children'];
							foreach($children as $key2 => $val2){
								if (!empty($data['revtheme_dop_menus_3'][$key]['children'][$key2]['dop_menu_image_3'])){
									$data['revtheme_dop_menus_3'][$key]['children'][$key2]['dop_menu_image_3'] = $this->model_tool_image->resize($data['revtheme_dop_menus_3'][$key]['children'][$key2]['dop_menu_image_3'], $config_image_category_width, $config_image_category_height);
								} else {
									$data['revtheme_dop_menus_3'][$key]['children'][$key2]['dop_menu_image_3'] = false;
								}
							}
						}
						if (!empty($data['revtheme_dop_menus_3'][$key]['column'])){
							$data['revtheme_dop_menus_3'][$key]['column'] = $data['revtheme_dop_menus_3'][$key]['column'];
						} else {
							$data['revtheme_dop_menus_3'][$key]['column'] = 1;
						}
					}
				} else {
					$data['revtheme_dop_menus_3'] = false;
				}
				$data['phone_dop_text'] = html_entity_decode($header_phone[$this->config->get('config_language_id')]['doptext']);
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if (strpos($data['phone_dop_text'], $rev_geo['code'])) {
							$data['phone_dop_text'] = html_entity_decode(str_replace($rev_geo['code'], $rev_geo['text'], $header_phone[$this->config->get('config_language_id')]['doptext2']));
						}
					}
				}
				$data['phone_dop_text2'] = html_entity_decode($header_phone[$this->config->get('config_language_id')]['doptext2']);
				if ($this->config->get('revtheme_geo_set')['status']) {
					foreach ($data['rev_geos'] as $rev_geo) {
						if (strpos($data['phone_dop_text2'], $rev_geo['code'])) {
							$data['phone_dop_text2'] = html_entity_decode(str_replace($rev_geo['code'], $rev_geo['text'], $header_phone[$this->config->get('config_language_id')]['doptext2']));
						}
					}
				}
				$data['revtheme_header_cart'] = $revtheme_header_cart = $this->config->get('revtheme_header_cart');
				if ($revtheme_header_cart['cart_size'] == 'small') {
					$data['cart_size_class_1'] = 'col-md-7';
					$data['cart_size_class_2'] = 'col-xs-6 col-md-2';
					$data['cart_size_class_3'] = 'col-md-10';
				} else if ($revtheme_header_cart['cart_size'] == 'mini') {
					$data['cart_size_class_1'] = 'col-md-8';
					$data['cart_size_class_2'] = 'col-xs-6 col-md-1';
					$data['cart_size_class_3'] = 'col-md-11';
				} else {
					$data['cart_size_class_1'] = 'col-md-6';
					$data['cart_size_class_2'] = 'col-xs-6 col-md-3';
					$data['cart_size_class_3'] = 'col-md-9';
				}
				if ($revtheme_header_cart['type'] == 'floating' || $revtheme_header_cart['cart_position']) {
					$data['cart_size_class_1'] = 'col-md-9';
					if (!$revtheme_header_cart['cart_position']) {
						$data['cart_size_class_2'] = 'col-xs-6 floating_hcart';
					} else {
						$data['cart_size_class_2'] = 'col-xs-6 hidden-md hidden-lg';
					}
					$data['cart_size_class_3'] = 'col-md-12';
				}
				
				$data['revblog_status'] = $setting_header_menu['revblog_status'];
				if ($setting_header_menu['revblog_status']){
					if (isset($setting_header_menu['image_in_ico_revblog']) && $setting_header_menu['image_in_ico_revblog']) {
						$data['image_in_ico_revblog'] = true;
					} else {
						$data['image_in_ico_revblog'] = false;
					}
					if (isset($setting_header_menu['revblog_in_amazon']) && $setting_header_menu['revblog_in_amazon']) {
						$data['revblog_in_amazon'] = true;
					} else {
						$data['revblog_in_amazon'] = false;
					}
					$data['text_revmenu_manufs'] = $this->language->get('text_revmenu_manufs');
					$data['url_revmenu_manufs'] = $this->url->link('product/manufacturer');
					$data['revblog_column'] = $setting_header_menu['revblog_column'];
					$this->load->model('revolution/revolution');
					$data['blog_categories'] = array();
					$blog_categories = $this->model_revolution_revolution->getBlogCategories();
					foreach ($blog_categories as $category) {
						$children_data = array();
						$children = $this->model_revolution_revolution->getBlogCategories($category['category_id']);
						foreach($children as $child) {
							if ($child['image']) {
								$thumb = $this->model_tool_image->resize($child['image'], $config_image_category_width, $config_image_category_height);
							} else {
								$thumb = $this->model_tool_image->resize('placeholder.png', $config_image_category_width, $config_image_category_height);
							}
							$children_data_level2 = array();
							if (!$setting_header_menu['image_in_ico'] || $setting_header_menu['tri_level']) {
								$children_level2 = $this->model_revolution_revolution->getBlogCategories($child['category_id']);
								foreach ($children_level2 as $child_level2) {
									$children_data_level2[] = array(
										'name'  =>  $child_level2['title'],
										'category_id' => $child_level2['category_id'],
										'href'  => $this->url->link('revolution/revblog_category', 'revblog_category_id=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_level2['category_id'])
									);
								}
							}
							$children_data[] = array(
								'category_id' => $child['category_id'],
								'children'    => $children_data_level2,
								'name'  => $child['title'],
								'thumb' => $thumb,
								'href'  => $this->url->link('revolution/revblog_category', 'revblog_category_id=' . $category['category_id'] . '_' . $child['category_id'])
							);
						}
						$data['blog_categories'][] = array(
							'category_id' => $category['category_id'],
							'name'        => $category['title'],
							'href'        => $this->url->link('revolution/revblog_category', 'revblog_category_id=' . $category['category_id']),
							'children'    => $children_data
						);
					}
				}
				if ($settings_header_standart_links['rev_acc_zagolovok'] == 'name' && $this->customer->isLogged()) {
					$data['text_revlogged'] = sprintf('%s', $this->customer->getFirstName());
				} else if ($settings_header_standart_links['rev_acc_zagolovok'] == 'email' && $this->customer->isLogged()) {
					$data['text_revlogged'] = sprintf('%s', $this->customer->getEmail());
				} else {
					$data['text_revlogged'] = $this->language->get('text_account');
				}
			
		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['robots'] = $this->document->getRobots();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}


				$data['og_url'] = (isset($this->request->server['HTTPS']) ? HTTPS_SERVER : HTTP_SERVER) . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
				$data['og_image'] = false;
			
		$this->load->language('common/header');
		
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['og_url'] = $this->url->link('common/home');
		} else {
			$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		$data['og_image'] = $this->document->getOgImage();
		


		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['currency'] = $this->load->controller('common/currency');
		if ($this->config->get('configblog_blog_menu')) {
			$data['blog_menu'] = $this->load->controller('blog/menu');
		} else {
			$data['blog_menu'] = '';
		}
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		
				$cache_data = $this->cache->get('revmenu.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));
				if ($cache_data) {
					$data['categories'] = $cache_data;
				} else {
					$this->load->model('catalog/category');
					$this->load->model('catalog/product');
					
					$data['categories'] = array();
					$categories = $this->model_catalog_category->getCategories(0);

					foreach ($categories as $category) {
						if ($category['top']) {
							// Level 2
							$children_data = array();
							$children = $this->model_catalog_category->getCategories($category['category_id']);

							foreach ($children as $child) {
								$children_data_level2 = array();
								if (!$setting_header_menu['image_in_ico'] || $setting_header_menu['tri_level']) {
									$children_level2 = $this->model_catalog_category->getCategories($child['category_id']);
									foreach ($children_level2 as $child_level2) {
										$data_level2 = array(
											'filter_category_id'  => $child_level2['category_id'],
											'filter_sub_category' => true
										);
										
										$filter_data_2 = array(
											'filter_category_id'  => $child_level2['category_id'],
											'filter_sub_category' => true
										);

										$children_data_level2[] = array(
											'name'  =>  $child_level2['name'] . ($this->config->get('config_product_count') ? ' <sup>' . $this->model_catalog_product->getTotalProducts($filter_data_2) . '</sup>' : ''),
											'category_id' => $child_level2['category_id'],
											'href'  => $this->url->link('product/category', 'path=' . $child['category_id'] . '_' . $child_level2['category_id']),
											
										);
									}
								}
								
								$filter_data_1 = array(
									'filter_category_id'  => $child['category_id'],
									'filter_sub_category' => true
								);

								$child_info = $this->model_catalog_category->getCategory($child['category_id']);
								if ($child_info) {
									if ($child_info['image']) {
										$thumb = $this->model_tool_image->resize($child_info['image'], $config_image_category_width, $config_image_category_height);
									} else {
										$thumb = $this->model_tool_image->resize('no_image.png', $config_image_category_width, $config_image_category_height);
									}
									if ($setting_header_menu['image_in_ico']) {
										$style = ' hidden';
									} else {
										$style = '';
									}
									if ($child_info['category_icontype']) {
										if ($child_info['category_icon'] == 'fa none') {
											$style = ' hidden';
										}
										$category_image = '<i class="am_category_icon '.$child_info['category_icon'].$style.'"></i>';
									} else {
										if (!$child_info['category_image'] || $child_info['category_image'] == 'no_image.png') {
											$style = 'hidden';
										}
										$category_image = '<span class="'.$style.'"><img src="'.$this->model_tool_image->resize($child_info['category_image'], 21, 21).'" alt=""/></span>';
									}
								}
								
								$children_data[] = array(
									'name'        	 => $child['name'] . ($this->config->get('config_product_count') ? ' <sup>' . $this->model_catalog_product->getTotalProducts($filter_data_1) . '</sup>' : ''),
									'thumb' 		 => $thumb,
									'category_image' => $category_image,
									'category_id' 	 => $child['category_id'],
									'children'   	 => $children_data_level2,
									'href'        	 => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
								);
							}
							
							$category_info = $this->model_catalog_category->getCategory($category['category_id']);
							if ($category_info) {
								if ($category_info['image2']) {
									$thumb2 = $this->model_tool_image->resize($category_info['image2'], 300, 300);
								} else {
									$thumb2 = '';
								}
								$style = '';
								if ($category_info['category_icontype']) {
									if ($category_info['category_icon'] == 'fa none') {
										$style = ' hidden';
									}
									$category_image = '<i class="am_category_icon hidden-md '.$category_info['category_icon'].$style.'"></i>';
								} else {
									if (!$category_info['category_image'] || $category_info['category_image'] == 'no_image.png') {
										$style = ' hidden';
									}
									$category_image = '<span class="hidden-md'.$style.'"><img src="'.$this->model_tool_image->resize($category_info['category_image'], 21, 21).'" alt=""/></span>';
								}
							}
							
							$data['categories'][] = array(
								'category_id' 	 => $category['category_id'],
								'name'     		 => $category['name'],
								'thumb2'   		 => $thumb2,
								'category_image' => $category_image,
								'children' 		 => $children_data,
								'column'   		 => $category['column'] ? $category['column'] : 1,
								'href'    		 => $this->url->link('product/category', 'path=' . $category['category_id'])
							);
						
						}
					}

					if ($this->config->get('revtheme_all_settings')['cache_on']) {
						$this->cache->set('revmenu.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $data['categories']);
					}
				}
			

		return $this->load->view('common/header', $data);
	}
}
