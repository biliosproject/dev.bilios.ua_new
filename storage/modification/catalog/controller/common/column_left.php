<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonColumnLeft extends Controller {
	public function index() {
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;

				if ($route == 'revolution/revblog_blog' && isset($this->request->get['revblog_id'])) {
					$this->load->model('revolution/revolution');
					$layout_id = $this->model_revolution_revolution->getBlogLayoutId($this->request->get['revblog_id']);
				}	
				if ($route == 'revolution/revblog_category' && isset($this->request->get['revblog_category_id'])) {
					$this->load->model('revolution/revolution');
					$layout_id = $this->model_revolution_revolution->getBlogCategoryLayoutId($this->request->get['revblog_category_id']);
				}
			

		if ($route == 'product/category' && isset($this->request->get['path'])) {
			$this->load->model('catalog/category');

			$path = explode('_', (string)$this->request->get['path']);

			$layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
		}
		
		if ($route == 'product/manufacturer/info' && isset($this->request->get['manufacturer_id'])) {
			$this->load->model('catalog/manufacturer');
		
			$layout_id = $this->model_catalog_manufacturer->getManufacturerLayoutId($this->request->get['manufacturer_id']);
		}

		if ($route == 'product/product' && isset($this->request->get['product_id'])) {
			$this->load->model('catalog/product');

			$layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
		}

		if ($route == 'information/information' && isset($this->request->get['information_id'])) {
			$this->load->model('catalog/information');

			$layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
		}

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if (!$layout_id) {
			$layout_id = $this->config->get('config_layout_id');
		}

		$this->load->model('setting/module');

		$data['modules'] = array();

		$modules = $this->model_design_layout->getLayoutModules($layout_id, 'column_left');


				if ($route == 'product/category' && isset($this->request->get['path'])) {
					$parts = explode('_', (string)$this->request->get['path']);
					$category_id = (int)array_pop($parts);
					$setting = $this->config->get('revtheme_filter');
					$filter_data = array(
						'filter_category_id' => $category_id,
						'filter_sub_category' => false
					);
					$cache_filters_product_total = 'revfilters_prtotal.' . crc32(serialize($filter_data)) . '.' . (int)$this->config->get('config_store_id');
					$product_total = $this->config->get($cache_filters_product_total);
					if (!$product_total) {
						$this->load->model('catalog/product');
						$product_total = $this->model_catalog_product->getTotalProducts($filter_data);
						if ($this->config->get('revtheme_all_settings')['cache_on']) {
							$this->cache->set($cache_filters_product_total, $product_total);
						}
					}
					if ((!isset($setting['filter_categories']) || (!in_array($category_id, $setting['filter_categories']))) && $product_total > 1) {
						$revfilter = $this->config->get('revtheme_filter');
						if ($revfilter['status']) {
							$data['modules'][] = $this->load->controller('revolution/revfilter');
						}
					}
				}
			
		foreach ($modules as $module) {
			$part = explode('.', $module['code']);

			if (isset($part[0]) && $this->config->get('module_' . $part[0] . '_status')) {
				$module_data = $this->load->controller('extension/module/' . $part[0]);

				if ($module_data) {
					$data['modules'][] = $module_data;
				}
			}

			if (isset($part[1])) {
				$setting_info = $this->model_setting_module->getModule($part[1]);

				if ($setting_info && $setting_info['status']) {
					$output = $this->load->controller('extension/module/' . $part[0], $setting_info);

					if ($output) {
						$data['modules'][] = $output;
					}
				}
			}
		}


				if ($route == 'revolution/revblog_blog' && isset($this->request->get['revblog_id'])) {
					if (isset($this->config->get('revblog_settings')['related_left_status']) && $this->config->get('revblog_settings')['related_left_status']) {
						$this->load->model('revolution/revolution');
						$blog_related_results = $this->model_revolution_revolution->getBlogRelated($this->request->get['revblog_id']);
						if ($blog_related_results) {
							$data['modules'][] = $this->load->controller('revolution/revblog_blog/related_left');
						}
					}
				}
			
		return $this->load->view('common/column_left', $data);
	}
}
