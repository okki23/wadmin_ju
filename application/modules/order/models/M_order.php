<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

  public function opt_order(){
	 return	$this->db->get('m_employee')->result();
	}

	public function list_order(){
		return $this->db->query('select a.*,b.product_category,b.product_name,b.product_variants,b.product_photo,c.member_name,d.store_name,
		d.store_address,d.store_phone_number,e.status,e.updated_at as last_update,f.member_name as nama_kurir from orders a
				LEFT JOIN m_product b on b.product_id = a.product_id
				LEFT JOIN m_member c on c.member_id = a.member_id
				LEFT JOIN m_store d on d.store_id = a.store_id
		LEFT JOIN tracking_numbers e on e.order_id = a.order_id 
		left join m_member f on f.member_id = e.kurir_id')->result();
	}

	public function list_order_kurir($idkurir){
		return $this->db->query('select a.*,b.product_category,b.product_name,b.product_variants,b.product_photo,c.member_name,d.store_name,
		d.store_address,d.store_phone_number,e.status,e.updated_at as last_update,f.member_name as nama_kurir from orders a
				LEFT JOIN m_product b on b.product_id = a.product_id
				LEFT JOIN m_member c on c.member_id = a.member_id
				LEFT JOIN m_store d on d.store_id = a.store_id
		LEFT JOIN tracking_numbers e on e.order_id = a.order_id 
		left join m_member f on f.member_id = e.kurir_id
		where e.kurir_id = "'.$idkurir.'" ')->result();
	}

}
