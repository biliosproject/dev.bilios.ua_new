<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelCatalogProduct extends Model {
	public function updateViewed($product_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET viewed = (viewed + 1) WHERE product_id = '" . (int)$product_id . "'");
	}

	public function getProduct($product_id) {
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name, p.image, p.noindex AS noindex, m.name AS manufacturer, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT points FROM " . DB_PREFIX . "product_reward pr WHERE pr.product_id = p.product_id AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "') AS reward, (SELECT ss.name FROM " . DB_PREFIX . "stock_status ss WHERE ss.stock_status_id = p.stock_status_id AND ss.language_id = '" . (int)$this->config->get('config_language_id') . "') AS stock_status, (SELECT wcd.unit FROM " . DB_PREFIX . "weight_class_description wcd WHERE p.weight_class_id = wcd.weight_class_id AND wcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS weight_class, (SELECT lcd.unit FROM " . DB_PREFIX . "length_class_description lcd WHERE p.length_class_id = lcd.length_class_id AND lcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS length_class, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r2 WHERE r2.product_id = p.product_id AND r2.status = '1' GROUP BY r2.product_id) AS reviews, p.sort_order FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return array(
				'product_id'       => $query->row['product_id'],
				'name'             => $query->row['name'],
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'noindex'          => $query->row['noindex'],
				'meta_h1'	       => $query->row['meta_h1'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'model'            => $query->row['model'],
				'sku'              => $query->row['sku'],
				'upc'              => $query->row['upc'],
				'ean'              => $query->row['ean'],
				'jan'              => $query->row['jan'],
				'isbn'             => $query->row['isbn'],
				'mpn'              => $query->row['mpn'],
				'location'         => $query->row['location'],
				'quantity'         => $query->row['quantity'],
				'stock_status'     => $query->row['stock_status'],
				'image'            => $query->row['image'],
				'manufacturer_id'  => $query->row['manufacturer_id'],
				'manufacturer'     => $query->row['manufacturer'],
				'price'            => ($query->row['discount'] ? $query->row['discount'] : $query->row['price']),
				'special'          => $query->row['special'],
				'reward'           => $query->row['reward'],
				'points'           => $query->row['points'],
				'tax_class_id'     => $query->row['tax_class_id'],
				'date_available'   => $query->row['date_available'],
				'weight'           => $query->row['weight'],
				'weight_class_id'  => $query->row['weight_class_id'],
				'length'           => $query->row['length'],
				'width'            => $query->row['width'],
				'height'           => $query->row['height'],
				'length_class_id'  => $query->row['length_class_id'],
				'subtract'         => $query->row['subtract'],
				'rating'           => round($query->row['rating']),
				'reviews'          => $query->row['reviews'] ? $query->row['reviews'] : 0,
				'minimum'          => $query->row['minimum'],
				'sort_order'       => $query->row['sort_order'],
				'status'           => $query->row['status'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
,'options_buy' => $query->row['options_buy'], 'short_description' => html_entity_decode($query->row['short_description'], ENT_QUOTES, 'UTF-8')
			);
		} else {
			return false;
		}
	}

	public function getProducts($data = array()) {
		$sql = "SELECT p.product_id, p.price, p.quantity > 0 as nalichie, p.price > 0 as nalichie2, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";

				if ($this->config->get('config_tax')) {
					$sql .= ", (SELECT SUM(rate) AS summ FROM " . DB_PREFIX . "tax_rate trt1 WHERE trt1.type = 'P' AND trt1.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rule trl1 WHERE trl1.tax_class_id = p.tax_class_id) AND trt1.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rate_to_customer_group trtcg1 WHERE trtcg1.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "')) AS ptax, (SELECT SUM(rate) AS summ FROM " . DB_PREFIX . "tax_rate trt2 WHERE trt2.type = 'F' AND trt2.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rule trl2 WHERE trl2.tax_class_id = p.tax_class_id) AND trt2.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rate_to_customer_group trtcg2 WHERE trtcg2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'))AS ftax";
				}
			

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}


				if (!empty($data['filter_options'])) {
					foreach ($data['filter_options'] as $i => $filter_option) {
						$sql .= " LEFT JOIN " . DB_PREFIX . "product_option_value po" . (int)$i . " ON (po" . (int)$i . ".product_id = p.product_id AND po" . (int)$i . ".option_id = '" . (int)$filter_option['option_id'] . "' AND po" . (int)$i . ".quantity > 0)";
					}
				}
				if (!empty($data['filter_attributes'])) {
					foreach ($data['filter_attributes'] as $i => $filter_attribute) {
						$sql .= " LEFT JOIN " . DB_PREFIX . "product_attribute pa" . (int)$i . " ON (pa" . (int)$i . ".product_id = p.product_id AND pa" . (int)$i . ".attribute_id = '" . (int)$filter_attribute['attribute_id'] . "' AND pa" . (int)$i . ".language_id = '" . (int)$this->config->get('config_language_id') . "')";
					}
				}
			
		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {
				
				if (!empty($data['filter_categories'])) {
					if (is_array($data['filter_categories'])) {
						$implode = array();
						foreach ($data['filter_categories'] as $cat_id) {
							$implode[] = (int)$cat_id;
						}
						$sql .= " AND p2c.category_id IN (" . implode(',', $implode) . ")";
					}
					 else {
						$sql .= " AND p2c.category_id = '" . (int)$data['filter_categories'] . "'";
					}
				} else {
					$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
				}
			
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}


				if (!empty($data['filter_options'])) {
					foreach ($data['filter_options'] as $i => $filter_option) {
						if (is_array($filter_option['option_value'])) {
							$implode = array();
							foreach ($filter_option['option_value'] as $value_id) {
								$implode[] = (int) $value_id;
							}
							$sql .= " AND po" . (int)$i . ".option_value_id IN (" . implode(',', $implode ) . ")";
						}
						 else {
							$sql .= " AND po" . (int)$i . ".option_value_id = '" . $filter_option['option_value'] . "'";
						}
					}
				}
				$d = $this->config->get('revtheme_filter')['razdelitel'];
				if (!empty($data['filter_attributes'])) {
					foreach ($data['filter_attributes'] as $i => $filter_attribute) {
						if (is_array($filter_attribute['attribute_value'])) {
							$implode = array();
							foreach ($filter_attribute['attribute_value'] as $text) {
								$implode[] = "(pa" . (int)$i . ".text = '" . $this->db->escape($text) . "' OR pa" . (int)$i . ".text like '" . $this->db->escape($text) . $d . "%' OR pa" . (int)$i . ".text like '%" . $d . $this->db->escape($text) . "' OR pa" . (int)$i . ".text like '%" . $d . $this->db->escape($text) . $d . "%')";
							}
							$sql .= " AND pa" . (int)$i . ".attribute_id = " . (int)$filter_attribute['attribute_id'] . " AND  (" . implode(' OR ', $implode) . ")";
						} else {
							$sql .= " AND pa" . (int)$i . ".text = '" . $this->db->escape($filter_attribute['attribute_value']) . "'";
						}
					}
				}
				if (isset($data['filter_instock']) && $data['filter_instock']) {
					$sql .= " AND p.quantity > 0";
				}
			
		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		
			if (!empty($data['filter_manufacturer_id'])) {
				if (is_array($data['filter_manufacturer_id'])) {
					$implode = array();
					foreach ($data['filter_manufacturer_id'] as $man_id) {
						$implode[] = (int) $man_id;
					}
					$sql .= " AND p.manufacturer_id IN (" . implode(',', $implode) . ")";
				}
				 else {
					$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
				}
			}
			$sql .= " GROUP BY p.product_id";
			if ($this->config->get('config_tax')) {
				if (!empty($data['filter_price_min'])) {
					if (!$data['filter_instock']) {
						$sql .= " HAVING ((CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) >= '" . $data['filter_price_min'] . "' OR (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) = 0)";
					} else {
						$sql .= " HAVING (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) >= '" . $data['filter_price_min'] . "'";
					}
				}
				if (!empty($data['filter_price_max'])) {
					if (!empty($data['filter_price_min'])) {
						$sql .= " AND";
					}
					 else {
						$sql .= " HAVING";
					}
					$sql .= " (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) <= '" . $data['filter_price_max'] . "'";
				}
			} else {
				if (!empty($data['filter_price_min'])) {
					if (!$data['filter_instock']) {
						$sql .= " HAVING ((CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) >= '" . $data['filter_price_min'] . "' OR (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) = 0)";
					} else {
						$sql .= " HAVING (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) >= '" . $data['filter_price_min'] . "'";
					}
				}
				if (!empty($data['filter_price_max'])) {
					if (!empty($data['filter_price_min'])) {
						$sql .= " AND";
					}
					 else {
						$sql .= " HAVING";
					}
					$sql .= " (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) <= '" . $data['filter_price_max'] . "'";
				}
			}
			if (!empty($data['filter_day'])) {
				$sql .= " AND p.date_added BETWEEN '" . $data['filter_day'] . "' AND NOW()";
			}
			

		

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'p.sort_order',
			'p.date_added'
		);


				$product_settings = $this->config->get('revtheme_product_all');
				$zakaz = $product_settings['zakaz'];
				$zakaz_price_null = $product_settings['zakaz_price_null'];
			
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, LCASE(" . $data['sort'] . ")";
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, LCASE(" . $data['sort'] . ")";
				} else {
					$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, LCASE(" . $data['sort'] . ")";
				}
			
			} elseif ($data['sort'] == 'p.price') {
				
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
				} else {
					$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
				}
			
			} else {
				
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY " . $data['sort'];
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, " . $data['sort'];
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, " . $data['sort'];
				} else {
					$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, " . $data['sort'];
				}
			
			}
		} else {
			
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY p.sort_order";
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, p.sort_order";
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, p.sort_order";	
				} else {
					//if (isset($data['init_filter'])) {
					//	$sql .= " ORDER BY p.sort_order";
					//} else {
						$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, p.sort_order";
					//}
				}
			
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getProductSpecials($data = array()) {
		$sql = "SELECT DISTINCT ps.product_id, p.price, p.quantity > 0 as nalichie, p.price > 0 as nalichie2, (SELECT AVG(rating) FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = ps.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) GROUP BY ps.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'ps.price',
'ps.date_end',
			'rating',
			'p.sort_order'
		);


				$product_settings = $this->config->get('revtheme_product_all');
				$zakaz = $product_settings['zakaz'];
				$zakaz_price_null = $product_settings['zakaz_price_null'];
			
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, LCASE(" . $data['sort'] . ")";
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, LCASE(" . $data['sort'] . ")";
				} else {
					$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, LCASE(" . $data['sort'] . ")";
				}
			
			} else {
				
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY " . $data['sort'];
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, " . $data['sort'];
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, " . $data['sort'];
				} else {
					$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, " . $data['sort'];
				}
			
			}
		} else {
			
				if ($zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY p.sort_order";
				} else if ($zakaz && !$zakaz_price_null) {
					$sql .= " ORDER BY nalichie2 DESC, p.sort_order";
				} else if (!$zakaz && $zakaz_price_null) {
					$sql .= " ORDER BY nalichie DESC, p.sort_order";	
				} else {
					//if (isset($data['init_filter'])) {
					//	$sql .= " ORDER BY p.sort_order";
					//} else {
						$sql .= " ORDER BY nalichie2 DESC, nalichie DESC, p.sort_order";
					//}
				}
			
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getLatestProducts($limit) {
		$product_data = $this->cache->get('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.date_added DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getPopularProducts($limit) {
		$product_data = $this->cache->get('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);
	
		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.viewed DESC, p.date_added DESC LIMIT " . (int)$limit);
	
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}
			
			$this->cache->set('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}
		
		return $product_data;
	}

	public function getBestSellerProducts($limit) {
		$product_data = $this->cache->get('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$product_data = array();

			$query = $this->db->query("SELECT op.product_id, SUM(op.quantity) AS total FROM " . DB_PREFIX . "order_product op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id) LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE o.order_status_id > '0' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' GROUP BY op.product_id ORDER BY total DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getProductAttributes($product_id) {
		$product_attribute_group_data = array();

		$product_attribute_group_query = $this->db->query("SELECT ag.attribute_group_id, agd.name FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_group ag ON (a.attribute_group_id = ag.attribute_group_id) LEFT JOIN " . DB_PREFIX . "attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE pa.product_id = '" . (int)$product_id . "' AND agd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY ag.attribute_group_id ORDER BY ag.sort_order, agd.name");

		foreach ($product_attribute_group_query->rows as $product_attribute_group) {
			$product_attribute_data = array();

			$product_attribute_query = $this->db->query("SELECT a.attribute_id, ad.name, pa.text FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE pa.product_id = '" . (int)$product_id . "' AND a.attribute_group_id = '" . (int)$product_attribute_group['attribute_group_id'] . "' AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pa.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY a.sort_order, ad.name");

			foreach ($product_attribute_query->rows as $product_attribute) {
				$product_attribute_data[] = array(
					'attribute_id' => $product_attribute['attribute_id'],
					'name'         => $product_attribute['name'],
					'text'         => html_entity_decode($product_attribute['text'], ENT_QUOTES, 'UTF-8')
				);
			}

			$product_attribute_group_data[] = array(
				'attribute_group_id' => $product_attribute_group['attribute_group_id'],
				'name'               => $product_attribute_group['name'],
				'attribute'          => $product_attribute_data
			);
		}

		return $product_attribute_group_data;
	}

	public function getProductOptions($product_id) {
		$product_option_data = array();

		$product_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option po LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE po.product_id = '" . (int)$product_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY o.sort_order");

		foreach ($product_option_query->rows as $product_option) {
			$product_option_value_data = array();

			$product_option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_id = '" . (int)$product_id . "' AND pov.product_option_id = '" . (int)$product_option['product_option_id'] . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order");

			foreach ($product_option_value_query->rows as $product_option_value) {
				$product_option_value_data[] = array(
					'product_option_value_id' => $product_option_value['product_option_value_id'],
					'option_value_id'         => $product_option_value['option_value_id'],
					'name'                    => $product_option_value['name'],
					'image'                   => $product_option_value['image'],
					'quantity'                => $product_option_value['quantity'],
					'subtract'                => $product_option_value['subtract'],
					'price'                   => $product_option_value['price'],
					'price_prefix'            => $product_option_value['price_prefix'],

				'points' => $product_option_value['points'],
				'points_prefix' => $product_option_value['points_prefix'],
				'opt_image' => $product_option_value['opt_image'],
				'model' => $product_option_value['model'],
			
					'weight'                  => $product_option_value['weight'],
					'weight_prefix'           => $product_option_value['weight_prefix']
				);
			}

			$product_option_data[] = array(
				'product_option_id'    => $product_option['product_option_id'],
				'product_option_value' => $product_option_value_data,
				'option_id'            => $product_option['option_id'],
				'name'                 => $product_option['name'],
				'type'                 => $product_option['type'],
				'value'                => $product_option['value'],
				'required'             => $product_option['required']
,'opt_image' => $product_option['opt_image']
			);
		}

		return $product_option_data;
	}

	public function getProductDiscounts($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity > 1 AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity ASC, priority ASC, price ASC");

		return $query->rows;
	}

	public function getProductImages($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getProductRelated($product_id) {
		$product_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_related pr LEFT JOIN " . DB_PREFIX . "product p ON (pr.related_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pr.product_id = '" . (int)$product_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		foreach ($query->rows as $result) {
			$product_data[$result['related_id']] = $this->getProduct($result['related_id']);
		}

		return $product_data;
	}

	public function getProductLayoutId($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getCategories($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->rows;
	}

	public function getTotalProducts($data = array()) {
		
				$sql = "SELECT COUNT(*) as total FROM (SELECT p.product_id, p.price, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity > 0 AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount";
				if ($this->config->get('config_tax')) {
					$sql .= ", (SELECT SUM(rate) AS summ FROM " . DB_PREFIX . "tax_rate trt1 WHERE trt1.type = 'P' AND trt1.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rule trl1 WHERE trl1.tax_class_id = p.tax_class_id) AND trt1.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rate_to_customer_group trtcg1 WHERE trtcg1.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "')) AS ptax, (SELECT SUM(rate) AS summ FROM " . DB_PREFIX . "tax_rate trt2 WHERE trt2.type = 'F' AND trt2.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rule trl2 WHERE trl2.tax_class_id = p.tax_class_id) AND trt2.tax_rate_id IN (SELECT tax_rate_id FROM " . DB_PREFIX . "tax_rate_to_customer_group trtcg2 WHERE trtcg2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'))AS ftax";
				}
			

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}


				if (!empty($data['filter_options'])) {
					foreach ($data['filter_options'] as $i => $filter_option) {
						$sql .= " LEFT JOIN " . DB_PREFIX . "product_option_value po" . (int)$i . " ON (po" . (int)$i . ".product_id = p.product_id AND po" . (int)$i . ".option_id = '" . (int)$filter_option['option_id'] . "' AND po" . (int)$i . ".quantity > 0)";
					}
				}
				if (!empty($data['filter_attributes'])) {
					foreach ($data['filter_attributes'] as $i => $filter_attribute) {
						$sql .= " LEFT JOIN " . DB_PREFIX . "product_attribute pa" . (int)$i . " ON (pa" . (int)$i . ".product_id = p.product_id AND pa" . (int)$i . ".attribute_id = '" . (int)$filter_attribute['attribute_id'] . "' AND pa" . (int)$i . ".language_id = '" . (int)$this->config->get('config_language_id') . "')";
					}
				}
			
		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {
				
				if (!empty($data['filter_categories'])) {
					if (is_array($data['filter_categories'])) {
						$implode = array();
						foreach ($data['filter_categories'] as $cat_id) {
							$implode[] = (int)$cat_id;
						}
						$sql .= " AND p2c.category_id IN (" . implode(',', $implode) . ")";
					}
					 else {
						$sql .= " AND p2c.category_id = '" . (int)$data['filter_categories'] . "'";
					}
				} else {
					$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
				}
			
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}


				if (!empty($data['filter_options'])) {
					foreach ($data['filter_options'] as $i => $filter_option) {
						if (is_array($filter_option['option_value'])) {
							$implode = array();
							foreach ($filter_option['option_value'] as $value_id) {
								$implode[] = (int) $value_id;
							}
							$sql .= " AND po" . (int)$i . ".option_value_id IN (" . implode(',', $implode ) . ")";
						}
						 else {
							$sql .= " AND po" . (int)$i . ".option_value_id = '" . $filter_option['option_value'] . "'";
						}
					}
				}
				$d = $this->config->get('revtheme_filter')['razdelitel'];
				if (!empty($data['filter_attributes'])) {
					foreach ($data['filter_attributes'] as $i => $filter_attribute) {
						if (is_array($filter_attribute['attribute_value'])) {
							$implode = array();
							foreach ($filter_attribute['attribute_value'] as $text) {
								$implode[] = "(pa" . (int)$i . ".text = '" . $this->db->escape($text) . "' OR pa" . (int)$i . ".text like '" . $this->db->escape($text) . $d . "%' OR pa" . (int)$i . ".text like '%" . $d . $this->db->escape($text) . "' OR pa" . (int)$i . ".text like '%" . $d . $this->db->escape($text) . $d . "%')";
							}
							$sql .= " AND pa" . (int)$i . ".attribute_id = " . (int)$filter_attribute['attribute_id'] . " AND  (" . implode(' OR ', $implode) . ")";
						} else {
							$sql .= " AND pa" . (int)$i . ".text = '" . $this->db->escape($filter_attribute['attribute_value']) . "'";
						}
					}
				}
				if (isset($data['filter_instock']) && $data['filter_instock']) {
					$sql .= " AND p.quantity > 0";
				}
			
		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		
			if (!empty($data['filter_manufacturer_id'])) {
				if (is_array($data['filter_manufacturer_id'])) {
					$implode = array();
					foreach ($data['filter_manufacturer_id'] as $man_id) {
						$implode[] = (int) $man_id;
					}
					$sql .= " AND p.manufacturer_id IN (" . implode(',', $implode) . ")";
				}
				 else {
					$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
				}
			}
			$sql .= " GROUP BY p.product_id";
			if ($this->config->get('config_tax')) {
				if (!empty($data['filter_price_min'])) {
					if (!$data['filter_instock']) {
						$sql .= " HAVING ((CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) >= '" . $data['filter_price_min'] . "' OR (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) = 0)";
					} else {
						$sql .= " HAVING (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) >= '" . $data['filter_price_min'] . "'";
					}
				}
				if (!empty($data['filter_price_max'])) {
					if (!empty($data['filter_price_min'])) {
						$sql .= " AND";
					}
					 else {
						$sql .= " HAVING";
					}
					$sql .= " (CASE WHEN special IS NOT NULL THEN special + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN special * (ptax / 100) ELSE 0 END) WHEN discount IS NOT NULL THEN discount + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN discount * (ptax / 100) ELSE 0 END) ELSE p.price + (CASE WHEN ftax IS NOT NULL THEN ftax ELSE 0 END) + (CASE WHEN ftax IS NOT NULL THEN p.price * (ptax / 100) ELSE 0 END) END) <= '" . $data['filter_price_max'] . "'";
				}
			} else {
				if (!empty($data['filter_price_min'])) {
					if (!$data['filter_instock']) {
						$sql .= " HAVING ((CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) >= '" . $data['filter_price_min'] . "' OR (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) = 0)";
					} else {
						$sql .= " HAVING (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) >= '" . $data['filter_price_min'] . "'";
					}
				}
				if (!empty($data['filter_price_max'])) {
					if (!empty($data['filter_price_min'])) {
						$sql .= " AND";
					}
					 else {
						$sql .= " HAVING";
					}
					$sql .= " (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END) <= '" . $data['filter_price_max'] . "'";
				}
			}
			if (!empty($data['filter_day'])) {
				$sql .= " AND p.date_added BETWEEN '" . $data['filter_day'] . "' AND NOW()";
			}
			

				$sql .= ") as total";
			

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getProfile($product_id, $recurring_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring r JOIN " . DB_PREFIX . "product_recurring pr ON (pr.recurring_id = r.recurring_id AND pr.product_id = '" . (int)$product_id . "') WHERE pr.recurring_id = '" . (int)$recurring_id . "' AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'");

		return $query->row;
	}

	public function getProfiles($product_id) {
		$query = $this->db->query("SELECT rd.* FROM " . DB_PREFIX . "product_recurring pr JOIN " . DB_PREFIX . "recurring_description rd ON (rd.language_id = " . (int)$this->config->get('config_language_id') . " AND rd.recurring_id = pr.recurring_id) JOIN " . DB_PREFIX . "recurring r ON r.recurring_id = rd.recurring_id WHERE pr.product_id = " . (int)$product_id . " AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getTotalProductSpecials() {
		$query = $this->db->query("SELECT COUNT(DISTINCT ps.product_id) AS total FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW()))");

		if (isset($query->row['total'])) {
			return $query->row['total'];
		} else {
			return 0;
		}
	}
}
