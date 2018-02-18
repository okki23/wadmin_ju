<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_order_api extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

	public function list_order(){
		return $this->db->query('select a.*,b.member_name from m_order a
														left join m_member b on b.id = a.id_member')->result();
	}

  
}
