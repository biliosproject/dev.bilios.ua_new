<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerProductCategory extends Controller {

				protected function madeurl ($querys = array()) {
					if ($querys) {
						$get = $this->request->get;
						foreach ($get as $key => $value) {
							if(!in_array($key, $querys) || !isset($value)) {
								unset($get[$key]);
							}
						}
						return empty($get) ? '' : '&'.http_build_query($get);
					}
				}
			
	public function index() {
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

				$this->load->model('account/wishlist');
				$this->load->language('revolution/revolution');
				$data['setting_all_settings'] = $this->config->get('revtheme_all_settings');
				$data['revpopuporder_settings'] = $revpopuporder_settings = $this->config->get('revtheme_catalog_popuporder');
				$data['revpopuporder'] = $revpopuporder_settings['status'];
				$setting_sort_default = $this->config->get('revtheme_catalog_sorts_category');
				$data['setting_catalog_all'] = $setting_catalog_all = $this->config->get('revtheme_catalog_all');
				$data['podcategory_status'] = $setting_catalog_all['podcategory_status'];
				$data['podcategory_imgs'] = $setting_catalog_all['podcategory_imgs'];
				$data['popup_view'] = $setting_catalog_all['popup_view'];
				$data['img_slider'] = $setting_catalog_all['img_slider'];
				$data['rev_srav_prod'] = $setting_catalog_all['rev_srav_prod'];
				$data['rev_wish_prod'] = $setting_catalog_all['rev_wish_prod'];
				$data['ch_quantity'] = $setting_catalog_all['ch_quantity'];
				if (isset($setting_catalog_all['vid_grid'])) { $data['vid_grid'] = true; } else { $data['vid_grid'] = false; }
				if (isset($setting_catalog_all['vid_list'])) { $data['vid_list'] = true; } else { $data['vid_list'] = false; }
				if (isset($setting_catalog_all['vid_price'])) { $data['vid_price'] = true; } else { $data['vid_price'] = false; }
				$product_settings = $this->config->get('revtheme_product_all');
				$data['zakaz'] = $product_settings['zakaz'];
				$data['zakaz_price_null'] = $product_settings['zakaz_price_null'];
				$data['text_catalog_stiker_netu_2'] = $this->language->get('text_catalog_stiker_netu');
				$data['recalc_price'] = $product_settings['recalc_price'];
				$data['q_zavisimost'] = $product_settings['q_zavisimost'];
				$data['opt_price'] = $product_settings['opt_price'];
				$data['text_catalog_stiker_last'] = $this->language->get('text_catalog_stiker_last');
				$data['text_catalog_stiker_best'] = $this->language->get('text_catalog_stiker_best');
				$data['text_catalog_revpopup_purchase'] = $this->language->get('text_catalog_revpopup_purchase');
				$data['text_catalog_revpopup_view'] = $this->language->get('text_catalog_revpopup_view');
				$data['text_catalog_price_na_zakaz'] = $this->language->get('text_catalog_price_na_zakaz');
				$description_options = $this->config->get('revtheme_cat_attributes');
				$data['description_options'] = $this->config->get('revtheme_cat_attributes');
				$data['text_select'] = $this->language->get('text_select');
				$data['revtheme_product_all'] = $this->config->get('revtheme_product_all');
				$data['text_option_option'] = $this->language->get('text_option_option');
				$revpopuppredzakaz_settings = $this->config->get('revtheme_predzakaz');
				$data['predzakaz_button'] = $revpopuppredzakaz_settings['status'];
				$data['text_predzakaz'] = $this->config->get('revtheme_predzakaz')['notify_status'] ? $this->language->get('text_predzakaz_notify') : $this->language->get('text_predzakaz');
				if ($setting_catalog_all['category_desc']) { $data['category_description_class'] = 'c_desc_top'; } else { $data['category_description_class'] = 'dnone'; }
				$data['chislo_ryad'] = $setting_catalog_all['chislo_ryad'];
				$config_image_product_width = $data['catalog_img_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width');
				$config_image_product_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height');
				$currency = $this->session->data['currency'];
				$config_product_description_length = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length');
				$config_product_limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
				$data['currency_code'] = $this->session->data['currency'];
				$var_currency = array();
				$var_currency['value'] = $this->currency->getValue($currency);
				$var_currency['symbol_left'] = $this->currency->getSymbolLeft($currency);
				$var_currency['symbol_right'] = $this->currency->getSymbolRight($currency);
				$var_currency['decimals'] = $this->currency->getDecimalPlace($currency);
				$var_currency['decimal_point'] = $this->language->get('decimal_point');
				$var_currency['thousand_point'] = $this->language->get('thousand_point');
				$data['currency'] = $var_currency;
				if ($this->config->get('revtheme_all_settings')['mobile_on']) {
					$is_mobile = $data['is_mobile'] = $this->mobiledetect->isMobile();
					$is_desctope = $data['is_desctope'] = !$this->mobiledetect->isMobile() || $this->mobiledetect->isTablet();
				} else {
					$is_mobile = $data['is_mobile'] = true;
					$is_desctope = $data['is_desctope'] = true;
				}
			


		$data['text_empty'] = $this->language->get('text_empty');

        if ($this->config->get('config_noindex_disallow_params')) {
            $params = explode ("\r\n", $this->config->get('config_noindex_disallow_params'));
            if(!empty($params)) {
                $disallow_params = $params;
            }
        }

		if (isset($this->request->get['filter'])) {
			$filter = $this->request->get['filter'];
			if (!in_array('filter', $disallow_params, true) && $this->config->get('config_noindex_status')){
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$filter = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
            if (!in_array('sort', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$sort = $setting_sort_default['sort_default'];
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
            if (!in_array('order', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$order = $setting_sort_default['sort_default_adesc'];
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
            if (!in_array('page', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
            if (!in_array('limit', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}


				$data['text_loading'] = $this->language->get('text_loading');
				$data['button_upload'] = $this->language->get('button_upload');
				$data['revtheme_filter_status'] = $this->config->get('revtheme_filter')['status'];
				$data['text_revtheme_filter_pusto'] = false;
				if (isset($this->request->get['filter_gr']) && !empty($this->request->get['filter_gr'])) {
					$filter_gr = $this->request->get['filter_gr'];
				} else {
					$filter_gr = $setting_sort_default['group_default'];
				}
			

				if (isset($this->request->get['limit']) && !empty($this->request->get['limit'])) {
					$limit = (int)$this->request->get['limit'];
				} else {
					$limit = $config_product_limit;
				}
				if (isset($this->request->get['path']) && !empty($this->request->get['path'])) {
					$path = $this->request->get['path'];
					$parts = explode('_', (string)$path);
					$category_id = (int)array_pop($parts);
				} else {
					$path = 0;
					$category_id = 0;
				}
				if (isset($this->request->get['filter_price']) && !empty($this->request->get['filter_price'])) {
					$filter_price = $this->request->get['filter_price'];
				} else {
					$filter_price = '0;0';
				}
				if (isset($this->request->get['filter_manufactures']) && !empty($this->request->get['filter_manufactures'])) {
					$filter_manufactures = $this->request->get['filter_manufactures'];
				} else {
					$filter_manufactures = '';
				}
				if (isset($this->request->get['filter_options']) && !empty($this->request->get['filter_options'])) {
					$filter_options = $this->request->get['filter_options'];
				} else {
					$filter_options = '';
				}
				if (isset($this->request->get['filter_attributes']) && !empty($this->request->get['filter_attributes'])) {
					$filter_attributes = $this->request->get['filter_attributes'];
				} else {
					$filter_attributes = '';
				}
				if (isset($this->request->get['filter_instock']) && !empty($this->request->get['filter_instock'])) {
					$filter_instock = $this->request->get['filter_instock'];
				} else {
					$filter_instock = false;
				}
				if (isset($this->request->get['isrevfilter']) && !empty($this->request->get['isrevfilter'])) {
					$isrevfilter = $this->request->get['isrevfilter'];
				} else {
					$isrevfilter = false;
				}
				if (isset($this->request->get['filter_categories']) && !empty($this->request->get['filter_categories'])) {
					$filter_categories = $this->request->get['filter_categories'];
				} else {
					$filter_categories = '';
				}
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['path'])) {
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path . $url)
					);
				}
			}
		} else {
			$category_id = 0;
		}

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {

			if ($category_info['meta_title']) {
				$this->document->setTitle($category_info['meta_title']);
			} else {
				$this->document->setTitle($category_info['name']);
			}

			if ($category_info['noindex'] <= 0 && $this->config->get('config_noindex_status')) {
				$this->document->setRobots('noindex,follow');
			}

			if ($category_info['meta_h1']) {
				$data['heading_title'] = $category_info['meta_h1'];
			} else {
				$data['heading_title'] = $category_info['name'];
			}

			$this->document->setDescription($category_info['meta_description']);
			$this->document->setKeywords($category_info['meta_keyword']);

			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

			// Set the last category breadcrumb
			$data['breadcrumbs'][] = array(
				'text' => $category_info['name'],
				'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'])
			);

			if ($category_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');

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
					foreach ($data['rev_geos'] as $rev_geo) {
						if (strpos($data['description'], $rev_geo['code'])) {
							$data['description'] = str_replace($rev_geo['code'], $rev_geo['text'], $data['description']);
						}
					}
				}
			
			$data['compare'] = $this->url->link('product/compare');

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


				$url = $this->madeurl(array('sort', 'order', 'filter', 'limit'));
			
			$data['categories'] = array();

			$results = $this->model_catalog_category->getCategories($category_id);

			foreach ($results as $result) {
				$filter_data = array(
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => true
				);


				$config_image_category_width = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width');
				$config_image_category_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height');
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $config_image_category_width, $config_image_category_height);
				} else {
					$image = $this->model_tool_image->resize('no_image.png', $config_image_category_width, $config_image_category_height);
				}
				$data['revpath'] = $this->request->get['path'];
			
				$data['categories'][] = array(

				'thumb' => $image,
			
					'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
				);
			}


				$this->load->model('revolution/revolution');
				$settings_stikers = $this->config->get('revtheme_catalog_stiker');
				if ($settings_stikers['status']) {
					$data['stikers_status'] = true;

					if ($settings_stikers['new_status']) {
						$settings_last = $this->config->get('revtheme_catalog_last');
						if ($settings_last['last_products'] != '') {
							$date_added = array_flip(explode(',', $settings_last['last_products']));
						} else {
							if ($settings_last['filter_day']) {
								$filter_day = date('Y-m-d H:i:s', strtotime('now - ' . $settings_last['filter_day'] . ' days'));
							} else {
								$filter_day = false;
							}
							$data_last = array(
								'sort'  => 'p.date_added',
								'order' => 'DESC',
								'start' => 0,
								'limit' => $settings_last['limit'],
								'filter_day' => $filter_day
								);
							$date_added = $this->model_revolution_revolution->getLastProducts($data_last);
						}
					}

					if ($settings_stikers['best_status']) {
						$settings_best = $this->config->get('revtheme_catalog_best');
						if ($settings_best['best_products'] != '') {
							$best_seller = array_flip(explode(',', $settings_best['best_products']));
						} else {
							$data_best = array(
								'sort'  => 'p.sales',
								'order' => 'DESC',
								'start' => 0,
								'limit' => $settings_best['limit'],
								'filter_buy' => $settings_best['filter_buy']
							);
							$best_seller = $this->model_revolution_revolution->getBestProducts($data_best);
						}
					}
				} else {
					$data['stikers_status'] = false;
				}
			
			$data['products'] = array();

				$this->load->model('revolution/revolution');
				list($filter_price_min, $filter_price_max) = explode(";", $filter_price);
				$revfilter_man = $this->model_revolution_revolution->getrevman($filter_manufactures);
				$revfilter_opt = $this->model_revolution_revolution->getrevopt($filter_options);
				$revfilter_atr = $this->model_revolution_revolution->getrevatr($filter_attributes);
			

			$filter_data = array(
				'filter_category_id' => $category_id,
				'filter_filter'      => $filter,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit

				,'filter_categories' => $filter_categories,	'filter_instock' => $filter_instock, 'filter_price_min' => $filter_price_min/$this->currency->getValue($currency), 'filter_price_max' => $filter_price_max/$this->currency->getValue($currency), 'filter_manufacturer_id' => $revfilter_man, 'filter_options' => $revfilter_opt, 'filter_attributes' => $revfilter_atr,	'init_filter' => false
			
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {

				if (isset($this->session->data['compare'])) {
					if (in_array($result['product_id'], $this->session->data['compare'])) {
						$compare_class = 'in_compare';
						$button_compare = $this->language->get('button_compare_out');
					} else {
						$compare_class = '';
						$button_compare = $this->language->get('button_compare');
					}
				} else {
					$compare_class = '';
					$button_compare = $this->language->get('button_compare');
				}
				
				if (isset($this->session->data['wishlist'])) {
					if (in_array($result['product_id'], $this->session->data['wishlist'])) {
						$wishlist_class = 'in_wishlist';
						$button_wishlist = $this->language->get('button_wishlist_out');
					} else {
						$wishlist_class = '';
						$button_wishlist = $this->language->get('button_wishlist');
					}
				} else {
					$wishlist_class = '';
					$button_wishlist = $this->language->get('button_wishlist');
				}
				
				if ($this->customer->isLogged()) {
					$this->load->model('account/wishlist');
					$wishlist_register = $this->model_account_wishlist->getWishlist();
					if ($wishlist_register) {
						$wishlist_register2 = array();
						foreach ($wishlist_register as $result_wishlist_register_id) {
							$wishlist_register_id[] = $result_wishlist_register_id['product_id'];
						}
						if (in_array($result['product_id'], $wishlist_register_id)) {
							$wishlist_class = 'in_wishlist';
							$button_wishlist = $this->language->get('button_wishlist_out');
						} else {
							$wishlist_class = '';
							$button_wishlist = $this->language->get('button_wishlist');
						}
					}
				}
				
				if ($settings_stikers['new_status']) {
					if (isset($date_added[$result['product_id']])) {
						$stiker_last = true;
					} else {
						$stiker_last = false;
					}
				} else {
					$stiker_last = false;
				}
				
				if ($settings_stikers['best_status']) {
					if (isset($best_seller[$result['product_id']])) {
						$stiker_best = true;	
					} else {
						$stiker_best = false;
					}
				} else {
					$stiker_best = false;
				}
				
				if ($settings_stikers['spec_status']) {
					$stiker_spec = true;
				} else {
					$stiker_spec = false;
				}
				
				if ($settings_stikers['stock_status']) {
					$stiker_stock = true;
				} else {
					$stiker_stock = false;
				}
				
				if ($settings_stikers['upc']) {
					$stiker_upc = $result['upc'];
				} else {
					$stiker_upc = false;
				}
				if ($settings_stikers['ean']) {
					$stiker_ean = $result['ean'];
				} else {
					$stiker_ean = false;
				}
				if ($settings_stikers['jan']) {
					$stiker_jan = $result['jan'];
				} else {
					$stiker_jan = false;
				}
				if ($settings_stikers['isbn']) {
					$stiker_isbn = $result['isbn'];
				} else {
					$stiker_isbn = false;
				}
				if ($this->config->get('revtheme_product_all')['ed_izm']) {
					$ed_izm = $result['isbn'];
				} else {
					$ed_izm = false;
				}
				if ($settings_stikers['mpn']) {
					if ($settings_stikers['mpn_to_model']) {
						$stiker_mpn = $result['model'];
					} else {
						$stiker_mpn = $result['mpn'];
					}
				} else {
					$stiker_mpn = false;
				}
				if ($settings_stikers['stiker_netu_stock']) {
					$text_catalog_stiker_netu = $result['stock_status'];
				} else {
					$text_catalog_stiker_netu = $this->language->get('text_catalog_stiker_netu');
				}
				if ($settings_stikers['sklad_status']) {
					$stiker_sklad_status = $result['stock_status'];
				} else {
					$stiker_sklad_status = false;
				}
			
				if ($result['image']) {

				if ($setting_catalog_all['img_slider'] && $is_desctope) {
					$images = array();
					$this->load->model('catalog/product');
					$add_images = $this->model_catalog_product->getProductImages($result['product_id']);
					if ($setting_catalog_all['img_slider'] == '2') {
						$add_images = array_slice($add_images, 0, 1);
					}
					foreach ($add_images as $add_image) {
						$images[] = array(
							'thumb' => $this->model_tool_image->resize($add_image['image'], $config_image_product_width, $config_image_product_height)
						);
					}
				} else {
					$images = false;
				}
			
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
$images = false;
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
$price_number = round($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), 2);
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
$price_number = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
$special_number = round($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), 2);
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
$special_number = false;
					$tax_price = (float)$result['price'];
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


				$brand = $this->model_revolution_revolution->get_pr_brand($result['product_id']);
				
				if ($this->config->get('config_review_status')) {
					$reviews = (int)$result['reviews'];
				} else {
					$reviews = false;
				}
				
				$description = '';
				$options = false;
				if ($description_options['description_on']) {
					if ($description_options['zamena_description']) {
						$description = $this->model_revolution_revolution->getAttrText($result['product_id']);
					} else {
						$description = utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $config_product_description_length) . '...';
					}
				}
				if ($description_options['options_in_cat']) {
					$options = array();
					$cache = 'options_data.' . crc32((int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$result['product_id']);
					$pr_options = $this->cache->get($cache);
					if (!$pr_options) {
						$pr_options = $this->model_catalog_product->getProductOptions($result['product_id']);
						if ($this->config->get('revtheme_all_settings')['cache_on']) {$this->cache->set($cache, $pr_options);}
					}
				
					foreach ($pr_options as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								if ($option_value['price_prefix'] == '=') {
									$price_prefix = '';
								} else {
									$price_prefix = $option_value['price_prefix'];
								}
								
								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'quantity'            	  => $option_value['quantity'],
									'model'            	  	  => $option_value['model'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_prefix'            => $price_prefix
								);
							}
						}

						$options[] = array(
							'product_option_id'    => $option['product_option_id'],
							'product_option_value' => $product_option_value_data,
							'option_id'            => $option['option_id'],
							'name'                 => $option['name'],
							'type'                 => $option['type'],
							'value'                => $option['value'],
							'required'             => $option['required'],
							'opt_image'            => $option['opt_image']
						);
					}
				}
				$product_in_cart = false;
				if ($setting_catalog_all['product_in_cart']) {
					$products_in_cart = $this->cart->getProducts();
					foreach ($products_in_cart as $product_cart) {
						if ($product_cart['product_id'] == $result['product_id']) {
							$product_in_cart = true;
						}
					}
				}
			

				$group_text = '';
				if ($filter_gr) {
					if (preg_match('/fa_/', $filter_gr)) {
						$attr_gr_id = preg_replace('/fa_/', '', $filter_gr);
						$attribute_from = $this->model_revolution_revolution->getrevAttributes_gr($result['product_id'], $attr_gr_id);
						if ($attribute_from) {
							if ($attribute_from[0]['text'] != '') {
								$group_text = $attribute_from[0]['text'];
							} else {
								$group_text = '111';
							}
						} else {
						$group_text = '111';
					}
					} else if (preg_match('/fo_/', $filter_gr)) {
						$opt_gr_id = preg_replace('/fo_/', '', $filter_gr);
						$option_from = $this->model_revolution_revolution->getrevOptions($result['product_id'], $opt_gr_id);
						if ($option_from) {
							if ($option_from[0]['product_option_value'][0]['name'] != '') {
								$group_text = $option_from[0]['product_option_value'][0]['name'];
							} else {
								$group_text = '111';
							}
						} else {
						$group_text = '111';
					}
					} else if (preg_match('/fman/', $filter_gr)) {
						$group_text = $result['manufacturer'];
					} else if (preg_match('/stock/', $filter_gr)) {
						$group_text = $result['stock_status'];
					}
				}
			
				$data['products'][] = array(

				'ed_izm' => $ed_izm,
				'options' => $options,
				'price_number' => $price_number,
				'special_number' => $special_number,
				'stiker_last' => $stiker_last,
				'stiker_best' => $stiker_best,
				'stiker_spec' => $stiker_spec,
				'stiker_stock' => $stiker_stock,
				'stiker_sklad_status' => $stiker_sklad_status,
				'stiker_upc' => $stiker_upc,
				'stiker_ean' => $stiker_ean,
				'stiker_jan' => $stiker_jan,
				'stiker_isbn' => $stiker_isbn,
				'stiker_mpn' => $stiker_mpn,
				'quantity' => $result['quantity'],
				'compare_class' => $compare_class,
				'wishlist_class' => $wishlist_class,
				'button_compare' => $button_compare,
				'button_wishlist' => $button_wishlist,
				'text_catalog_stiker_netu' => $text_catalog_stiker_netu,
				'brand' => $brand,
				'images' => $images,
				'reviews' => $reviews,
				'options_buy' => $result['options_buy'],
				'model' => $result['model'],
				'short_description' => html_entity_decode($result['short_description'], ENT_QUOTES, 'UTF-8'),
				'product_in_cart' => $product_in_cart,
			
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'], 'group_text' => $group_text,
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
'description' => $description,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

	
				$filter_gr = array();
				foreach($data['products'] as $product) {
					if($product['group_text']) {
						$filter_gr[$product['group_text']]['products'][] = $product;
					} else {
						$filter_gr['']['products'][] = $product;
					}
				}
				ksort($filter_gr);
				$data['products'] = $filter_gr;
			
				$setting_revtheme_product_mods = $this->config->get('revtheme_cat_mods');
				if ($setting_revtheme_product_mods['viewed_products']) {
				
					$data['viewed_products_zagolovok'] = $setting_revtheme_product_mods[$this->config->get('config_language_id')]['viewed_products_zagolovok'];
					$data['viewed_products'] = array();
					$viewed_products = array();

					if (isset($this->request->cookie['viewed'])) {
						$viewed_products = explode(',', $this->request->cookie['viewed']);
					} else if (isset($this->session->data['viewed'])) {
						$viewed_products = $this->session->data['viewed'];
					}

					if (empty($setting_revtheme_product_mods['viewed_products_limit'])) {
						$setting_revtheme_product_mods['viewed_products_limit'] = 8;
					}

					$viewed_products = array_slice($viewed_products, 0, (int)$setting_revtheme_product_mods['viewed_products_limit']);
					
					foreach ($viewed_products as $product_id) {
						$product_info = $this->model_catalog_product->getProduct($product_id);
						
						$product_id2 = isset($this->request->get['product_id']) ? $this->request->get['product_id'] : 0;
						
						if ($product_info and $product_id != $product_id2) {
							if (isset($this->session->data['compare'])) {
								if (in_array($product_info['product_id'], $this->session->data['compare'])) {
									$compare_class = 'in_compare';
									$button_compare = $this->language->get('button_compare_out');
								} else {
									$compare_class = '';
									$button_compare = $this->language->get('button_compare');
								}
							} else {
								$compare_class = '';
								$button_compare = $this->language->get('button_compare');
							}
							if (isset($this->session->data['wishlist'])) {
								if (in_array($product_info['product_id'], $this->session->data['wishlist'])) {
									$wishlist_class = 'in_wishlist';
									$button_wishlist = $this->language->get('button_wishlist_out');
								} else {
									$wishlist_class = '';
									$button_wishlist = $this->language->get('button_wishlist');
								}
							} else {
								$wishlist_class = '';
								$button_wishlist = $this->language->get('button_wishlist');
							}
							
							if ($this->customer->isLogged()) {
								$this->load->model('account/wishlist');
								$wishlist_register = $this->model_account_wishlist->getWishlist();
								if ($wishlist_register) {
									$wishlist_register2 = array();
									foreach ($wishlist_register as $result_wishlist_register_id) {
										$wishlist_register_id[] = $result_wishlist_register_id['product_id'];
									}
									if (in_array($product_info['product_id'], $wishlist_register_id)) {
										$wishlist_class = 'in_wishlist';
										$button_wishlist = $this->language->get('button_wishlist_out');
									} else {
										$wishlist_class = '';
										$button_wishlist = $this->language->get('button_wishlist');
									}
								}
							}
							
							if ($settings_stikers['new_status']) {
								if (isset($date_added[$product_info['product_id']])) {
									$stiker_last = true;
								} else {
									$stiker_last = false;
								}
							} else {
								$stiker_last = false;
							}
							
							if ($settings_stikers['best_status']) {
								if (isset($best_seller[$product_info['product_id']])) {
									$stiker_best = true;	
								} else {
									$stiker_best = false;
								}
							} else {
								$stiker_best = false;
							}
							
							if ($settings_stikers['spec_status']) {
								$stiker_spec = true;
							} else {
								$stiker_spec = false;
							}
							
							if ($settings_stikers['stock_status']) {
								$stiker_stock = true;
							} else {
								$stiker_stock = false;
							}
							
							if ($settings_stikers['upc']) {
								$stiker_upc = $product_info['upc'];
							} else {
								$stiker_upc = false;
							}
							if ($settings_stikers['ean']) {
								$stiker_ean = $product_info['ean'];
							} else {
								$stiker_ean = false;
							}
							if ($settings_stikers['jan']) {
								$stiker_jan = $product_info['jan'];
							} else {
								$stiker_jan = false;
							}
							if ($settings_stikers['isbn']) {
								$stiker_isbn = $product_info['isbn'];
							} else {
								$stiker_isbn = false;
							}
							if ($this->config->get('revtheme_product_all')['ed_izm']) {
								$ed_izm = $product_info['isbn'];
							} else {
								$ed_izm = false;
							}
							if ($settings_stikers['mpn']) {
								if ($settings_stikers['mpn_to_model']) {
									$stiker_mpn = $product_info['model'];
								} else {
									$stiker_mpn = $product_info['mpn'];
								}
							} else {
								$stiker_mpn = false;
							}
							if ($settings_stikers['stiker_netu_stock']) {
								$text_catalog_stiker_netu = $product_info['stock_status'];
							} else {
								$text_catalog_stiker_netu = $this->language->get('text_catalog_stiker_netu');
							}
							if ($settings_stikers['sklad_status']) {
								$stiker_sklad_status = $product_info['stock_status'];
							} else {
								$stiker_sklad_status = false;
							}
							
							$brand = $this->model_revolution_revolution->get_pr_brand($product_info['product_id']);
						
							if ($product_info['image']) {
								if ($setting_catalog_all['img_slider'] && $is_desctope) {
									$images = array();
									$this->load->model('catalog/product');
									$add_images = $this->model_catalog_product->getProductImages($product_info['product_id']);
									if ($setting_catalog_all['img_slider'] == '2') {
										$add_images = array_slice($add_images, 0, 1);
									}
									foreach ($add_images as $add_image) {
										$images[] = array(
											'thumb' => $this->model_tool_image->resize($add_image['image'], $config_image_product_width, $config_image_product_height)
										);
									}
								} else {
									$images = false;
								}
								$image = $this->model_tool_image->resize($product_info['image'], $config_image_product_width, $config_image_product_height);
							} else {
								$images = false;
								$image = $this->model_tool_image->resize('no_image.png', $config_image_product_width, $config_image_product_height);
							}

							if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
								$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $currency);
								$price_number = round($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), 2);
							} else {
								$price = false;
								$price_number = false;
							}
						
							if ((float)$product_info['special']) {
								$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $currency);
								$special_number = round($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), 2);
							} else {
								$special = false;
								$special_number = false;
							}

							if ($this->config->get('config_tax')) {
								$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $currency);
							} else {
								$tax = false;
							}

							if ($this->config->get('config_review_status')) {
								$rating = (int)$product_info['rating'];
							} else {
								$rating = false;
							}
							
							if ($this->config->get('config_review_status')) {
								$reviews = (int)$product_info['reviews'];
							} else {
								$reviews = false;
							}
							
							$description = '';
							$options = false;
							if ($description_options['description_on']) {
								if ($description_options['zamena_description']) {
									$description = $this->model_revolution_revolution->getAttrText($product_info['product_id']);
								} else {
									$description = utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $config_product_description_length) . '...';
								}
							}
							if ($description_options['options_in_cat']) {
								$options = array();
								$cache = 'options_data.' . crc32((int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$product_info['product_id']);
								$pr_options = $this->cache->get($cache);
								if (!$pr_options) {
									$pr_options = $this->model_catalog_product->getProductOptions($product_info['product_id']);
									if ($this->config->get('revtheme_all_settings')['cache_on']) {$this->cache->set($cache, $pr_options);}
								}
							
								foreach ($pr_options as $option) {
									$product_option_value_data = array();

									foreach ($option['product_option_value'] as $option_value) {
										if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
											if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
												$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
											} else {
												$option_price = false;
											}

											if ($option_value['price_prefix'] == '=') {
												$price_prefix = '';
											} else {
												$price_prefix = $option_value['price_prefix'];
											}
											
											$product_option_value_data[] = array(
												'product_option_value_id' => $option_value['product_option_value_id'],
												'quantity' 				  => $option_value['quantity'], 
												'model' 				  => $option_value['model'],
												'option_value_id'         => $option_value['option_value_id'],
												'name'                    => $option_value['name'],
												'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
												'price'                   => $option_price,
												'price_prefix'            => $price_prefix
											);
										}
									}

									$options[] = array(
										'product_option_id'    => $option['product_option_id'],
										'product_option_value' => $product_option_value_data,
										'option_id'            => $option['option_id'],
										'name'                 => $option['name'],
										'type'                 => $option['type'],
										'value'                => $option['value'],
										'required'             => $option['required'],
										'opt_image'            => $option['opt_image']
									);
								}
							}
							
							$product_in_cart = false;
							if ($setting_catalog_all['product_in_cart']) {
								$products_in_cart = $this->cart->getProducts();
								foreach ($products_in_cart as $product_cart) {
									if ($product_cart['product_id'] == $product_info['product_id']) {
										$product_in_cart = true;
									}
								}
							}

							$data['viewed_products'][] = array(
								'ed_izm' => $ed_izm,
								'options' => $options,
								'price_number' => $price_number,
								'special_number' => $special_number,
								'stiker_last' => $stiker_last,
								'stiker_best' => $stiker_best,
								'stiker_spec' => $stiker_spec,
								'stiker_stock' => $stiker_stock,
								'stiker_sklad_status' => $stiker_sklad_status,
								'stiker_upc' => $stiker_upc,
								'stiker_ean' => $stiker_ean,
								'stiker_jan' => $stiker_jan,
								'stiker_isbn' => $stiker_isbn,
								'stiker_mpn' => $stiker_mpn,
								'text_catalog_stiker_netu' => $text_catalog_stiker_netu,
								'quantity' => $product_info['quantity'],
								'compare_class' => $compare_class,
								'wishlist_class' => $wishlist_class,
								'button_compare' => $button_compare,
								'button_wishlist' => $button_wishlist,
								'brand' => $brand,
								'images' => $images,
								'reviews' => $reviews,
								'options_buy' => $product_info['options_buy'],
								'model' => $product_info['model'],
								'short_description' => html_entity_decode($product_info['short_description'], ENT_QUOTES, 'UTF-8'),
								'product_in_cart' => $product_in_cart,
								'product_id'  => $product_info['product_id'],
								'thumb'       => $image,
								'name'        => $product_info['name'],
								'description' => $description,
								'price'       => $price,
								'special'     => $special,
								'tax'         => $tax,
								'minimum'     => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
								'rating'      => $rating,
								'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
							);
						}
					}
				
				} else {
					$data['viewed_products'] = false;
				}
			

				$url = $this->madeurl(array('filter', 'limit', 'path', 'filter_price', 'filter_manufactures', 'filter_options', 'filter_attributes', 'filter_categories', 'filter_instock', 'filter_gr'));
			
			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=DESC' . $url)
			);


				require(DIR_APPLICATION.'controller/product/sorts_category.php');
			
			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), $config_product_limit*2, $config_product_limit*3, $config_product_limit*5, $config_product_limit*10));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


				$url = $this->madeurl(array('sort', 'order', 'filter', 'limit', 'path', 'filter_price', 'filter_manufactures', 'filter_options', 'filter_attributes', 'filter_categories', 'filter_instock', 'filter_gr'));
			
			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            if (!$this->config->get('config_canonical_method')) {
                // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
                if ($page == 1) {
                    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id']), 'canonical');
                } elseif ($page == 2) {
                    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id']), 'prev');
                } else {
                    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page - 1)), 'prev');
                }

                if ($limit && ceil($product_total / $limit) > $page) {
                    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
                }
            } else {

                if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
                    $server = $this->config->get('config_ssl');
                } else {
                    $server = $this->config->get('config_url');
                };

                $request_url = rtrim($server, '/') . $this->request->server['REQUEST_URI'];
                $canonical_url = $this->url->link('product/category', 'path=' . $category_info['category_id']);

                if (($request_url != $canonical_url) || $this->config->get('config_canonical_self')) {
                    $this->document->addLink($canonical_url, 'canonical');
                }

                if ($this->config->get('config_add_prevnext')) {

                    if ($page == 2) {
                        $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id']), 'prev');
                    } elseif ($page > 2)  {
                        $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page - 1)), 'prev');
                    }

                    if ($limit && ceil($product_total / $limit) > $page) {
                        $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
                    }
                }
            }

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			
				if ($isrevfilter) {
					$data['text_revtheme_filter_pusto'] = $this->language->get('text_revtheme_filter_pusto');
				}
				$output = $this->load->view('product/category', $data);
				if ($isrevfilter) {
					$filters = '';
					if (isset($this->config->get('revtheme_filter')['filter_recount']) && $this->config->get('revtheme_filter')['filter_recount']) {
						$filter_data_filters = array(
							'filter_category_id' => $category_id,
							'filter_filter'      => '',
							'sort'               => $sort,
							'order'              => $order,
							'start'              => '0',
							'limit'              => '9999',
							'filter_categories' => $filter_categories,	'filter_instock' => $filter_instock, 'filter_price_min' => $filter_price_min/$this->currency->getValue($currency), 'filter_price_max' => $filter_price_max/$this->currency->getValue($currency), 'filter_manufacturer_id' => $revfilter_man, 'filter_options' => $revfilter_opt, 'filter_attributes' => $revfilter_atr,	'init_filter' => false
						
						);
						$filters = $this->model_revolution_revolution->getfilters($filter_data_filters);
					}
					$json = json_encode(array('html' => $output, 'filters' => $filters));
					$this->response->addHeader('Content-Type: application/json');
					$this->response->setOutput($json);
				} else {
					$this->response->setOutput($output);
				}	
			
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/category', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
