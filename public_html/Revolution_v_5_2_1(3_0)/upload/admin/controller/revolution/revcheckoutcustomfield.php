<?php
class ControllerRevolutionRevcheckoutcustomfield extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('revolution/revcheckoutcustomfield');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('revolution/revcheckoutcustomfield');

		$this->getList();
	}

	public function add() {
		$this->load->language('revolution/revcheckoutcustomfield');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('revolution/revcheckoutcustomfield');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_revolution_revcheckoutcustomfield->addCustomField($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('revolution/revcheckoutcustomfield');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('revolution/revcheckoutcustomfield');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_revolution_revcheckoutcustomfield->editCustomField($this->request->get['custom_field_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('revolution/revcheckoutcustomfield');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('revolution/revcheckoutcustomfield');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $custom_field_id) {
				$this->model_revolution_revcheckoutcustomfield->deleteCustomField($custom_field_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cfd.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_revtheme'),
			'href' => $this->url->link('revolution/revtheme', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('revolution/revcheckoutcustomfield/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('revolution/revcheckoutcustomfield/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['custom_fields'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$custom_field_total = $this->model_revolution_revcheckoutcustomfield->getTotalCustomFields();

		$results = $this->model_revolution_revcheckoutcustomfield->getCustomFields($filter_data);

		foreach ($results as $result) {
			$type = '';

			switch ($result['type']) {
				case 'select':
					$type = $this->language->get('text_select');
					break;
				case 'radio':
					$type = $this->language->get('text_radio');
					break;
				case 'checkbox':
					$type = $this->language->get('text_checkbox');
					break;
				case 'input':
					$type = $this->language->get('text_input');
					break;
				case 'text':
					$type = $this->language->get('text_text');
					break;
				case 'textarea':
					$type = $this->language->get('text_textarea');
					break;
				case 'file':
					$type = $this->language->get('text_file');
					break;
				case 'date':
					$type = $this->language->get('text_date');
					break;
				case 'datetime':
					$type = $this->language->get('text_datetime');
					break;
				case 'time':
					$type = $this->language->get('text_time');
					break;
			}

			$data['custom_fields'][] = array(
				'custom_field_id' => $result['custom_field_id'],
				'name'            => $result['name'],
				'location'        => $this->language->get('text_' . $result['location']),
				'type'            => $type,
				'status'          => $result['status'],
				'sort_order'      => $result['sort_order'],
				'edit'            => $this->url->link('revolution/revcheckoutcustomfield/edit', 'user_token=' . $this->session->data['user_token'] . '&custom_field_id=' . $result['custom_field_id'] . $url, true)
			);
		}
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_location'] = $this->language->get('column_location');
		$data['column_type'] = $this->language->get('column_type');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . '&sort=cfd.name' . $url, true);
		$data['sort_location'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . '&sort=cf.location' . $url, true);
		$data['sort_type'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . '&sort=cf.type' . $url, true);
		$data['sort_status'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . '&sort=cf.status' . $url, true);
		$data['sort_sort_order'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . '&sort=cf.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $custom_field_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($custom_field_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($custom_field_total - $this->config->get('config_limit_admin'))) ? $custom_field_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $custom_field_total, ceil($custom_field_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('revolution/revcheckout_custom_field_list', $data));
	}

	protected function getForm() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['custom_field_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['text_choose'] = $this->language->get('text_choose');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_radio'] = $this->language->get('text_radio');
		$data['text_checkbox'] = $this->language->get('text_checkbox');
		$data['text_input'] = $this->language->get('text_input');
		$data['text_text'] = $this->language->get('text_text');
		$data['text_textarea'] = $this->language->get('text_textarea');
		$data['text_file'] = $this->language->get('text_file');
		$data['text_date'] = $this->language->get('text_date');
		$data['text_datetime'] = $this->language->get('text_datetime');
		$data['text_time'] = $this->language->get('text_time');
		$data['text_account'] = $this->language->get('text_account');
		$data['text_address'] = $this->language->get('text_address');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_regex'] = $this->language->get('text_regex');

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_location'] = $this->language->get('entry_location');
		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_value'] = $this->language->get('entry_value');
		$data['entry_mask'] = $this->language->get('entry_mask');
		$data['entry_custom_value'] = $this->language->get('entry_custom_value');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_required'] = $this->language->get('entry_required');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_shipping'] = $this->language->get('entry_shipping');

		$data['help_regex'] = $this->language->get('help_regex');
		$data['help_sort_order'] = $this->language->get('help_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_custom_field_value_add'] = $this->language->get('button_custom_field_value_add');
		$data['button_remove'] = $this->language->get('button_remove');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = array();
		}

		if (isset($this->error['custom_field_value'])) {
			$data['error_custom_field_value'] = $this->error['custom_field_value'];
		} else {
			$data['error_custom_field_value'] = array();
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_revtheme'),
			'href' => $this->url->link('revolution/revtheme', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['custom_field_id'])) {
			$data['action'] = $this->url->link('revolution/revcheckoutcustomfield/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('revolution/revcheckoutcustomfield/edit', 'user_token=' . $this->session->data['user_token'] . '&custom_field_id=' . $this->request->get['custom_field_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('revolution/revcheckoutcustomfield', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['custom_field_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$custom_field_info = $this->model_revolution_revcheckoutcustomfield->getCustomField($this->request->get['custom_field_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['custom_field_description'])) {
			$data['custom_field_description'] = $this->request->post['custom_field_description'];
		} elseif (isset($this->request->get['custom_field_id'])) {
			$data['custom_field_description'] = $this->model_revolution_revcheckoutcustomfield->getCustomFieldDescriptions($this->request->get['custom_field_id']);
		} else {
			$data['custom_field_description'] = array();
		}

		if (isset($this->request->post['location'])) {
			$data['location'] = $this->request->post['location'];
		} elseif (!empty($custom_field_info)) {
			$data['location'] = $custom_field_info['location'];
		} else {
			$data['location'] = '';
		}

		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (!empty($custom_field_info)) {
			$data['type'] = $custom_field_info['type'];
		} else {
			$data['type'] = '';
		}

		if (isset($this->request->post['value'])) {
			$data['value'] = $this->request->post['value'];
		} elseif (!empty($custom_field_info)) {
			$data['value'] = $custom_field_info['value'];
		} else {
			$data['value'] = '';
		}
		
		if (isset($this->request->post['mask'])) {
			$data['mask'] = $this->request->post['mask'];
		} elseif (!empty($custom_field_info)) {
			$data['mask'] = $custom_field_info['mask'];
		} else {
			$data['mask'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($custom_field_info)) {
			$data['status'] = $custom_field_info['status'];
		} else {
			$data['status'] = '';
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($custom_field_info)) {
			$data['sort_order'] = $custom_field_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		if (isset($this->request->post['custom_field_value'])) {
			$custom_field_values = $this->request->post['custom_field_value'];
		} elseif (isset($this->request->get['custom_field_id'])) {
			$custom_field_values = $this->model_revolution_revcheckoutcustomfield->getCustomFieldValueDescriptions($this->request->get['custom_field_id']);
		} else {
			$custom_field_values = array();
		}

		$data['custom_field_values'] = array();

		foreach ($custom_field_values as $custom_field_value) {
			$data['custom_field_values'][] = array(
				'custom_field_value_id'          => $custom_field_value['custom_field_value_id'],
				'custom_field_value_description' => $custom_field_value['custom_field_value_description'],
				'sort_order'                     => $custom_field_value['sort_order']
			);
		}

		if (isset($this->request->post['custom_field_customer_group'])) {
			$custom_field_customer_groups = $this->request->post['custom_field_customer_group'];
		} elseif (isset($this->request->get['custom_field_id'])) {
			$custom_field_customer_groups = $this->model_revolution_revcheckoutcustomfield->getCustomFieldCustomerGroups($this->request->get['custom_field_id']);
		} else {
			$custom_field_customer_groups = array();
		}

		$data['custom_field_customer_group'] = array();

		foreach ($custom_field_customer_groups as $custom_field_customer_group) {
			$data['custom_field_customer_group'][] = $custom_field_customer_group['customer_group_id'];
		}

		$data['custom_field_required'] = array();

		foreach ($custom_field_customer_groups as $custom_field_customer_group) {
			if ($custom_field_customer_group['required']) {
				$data['custom_field_required'][] = $custom_field_customer_group['customer_group_id'];
			}
		}
		
		if (isset($this->request->post['custom_field_shipping_code'])) {
			$custom_field_shipping_codes = $this->request->post['custom_field_shipping_code'];
		} elseif (isset($this->request->get['custom_field_id'])) {
			$custom_field_shipping_codes = $this->model_revolution_revcheckoutcustomfield->getCustomFieldShippingCode($this->request->get['custom_field_id']);
		} else {
			$custom_field_shipping_codes = array();
		}
		$data['custom_field_shipping_code'] = array();
		foreach ($custom_field_shipping_codes as $custom_field_shipping_code) {
			$data['custom_field_shipping_code'][] = $custom_field_shipping_code['shipping_code'];
		}
		
		$this->load->model('setting/extension');
		$shipping_extensions = $this->model_setting_extension->getInstalled('shipping');
        $tmp = array();
        foreach ($shipping_extensions as $extension) {
            if ($this->config->get('shipping_' . $extension . '_status')) {
                $tmp[] = $extension;
            }
        }
        $shipping_extensions = $tmp;
        $data['shipping_extensions'] = array();
		$files = glob(DIR_CATALOG . 'model/extension/shipping/*.php');
        if ($files) {
            foreach ($files as $file) {
                $extension = basename($file, '.php');
                if (in_array($extension, $shipping_extensions)) {
					$this->load->language('extension/shipping/' . $extension);
                    $data['shipping_extensions'][$extension] = $this->language->get('heading_title');
                }
            }
        }

		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('revolution/revcheckout_custom_field_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'revolution/revcheckoutcustomfield')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['custom_field_description'] as $language_id => $value) {
			if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 128)) {
				$this->error['name'][$language_id] = $this->language->get('error_name');
			}
		}

		if (($this->request->post['type'] == 'select' || $this->request->post['type'] == 'radio' || $this->request->post['type'] == 'checkbox')) {
			if (!isset($this->request->post['custom_field_value'])) {
				$this->error['warning'] = $this->language->get('error_type');
			}

			if (isset($this->request->post['custom_field_value'])) {
				foreach ($this->request->post['custom_field_value'] as $custom_field_value_id => $custom_field_value) {
					foreach ($custom_field_value['custom_field_value_description'] as $language_id => $custom_field_value_description) {
						if ((utf8_strlen($custom_field_value_description['name']) < 1) || (utf8_strlen($custom_field_value_description['name']) > 128)) {
							$this->error['custom_field_value'][$custom_field_value_id][$language_id] = $this->language->get('error_custom_value');
						}
					}
				}
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'revolution/revcheckoutcustomfield')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}