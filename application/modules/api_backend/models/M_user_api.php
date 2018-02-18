<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_api extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

	public function list_user(){
		return $this->db->query('select a.*,b.member_name from m_user a
														left join m_member b on b.id = a.id_member')->result();
	}

  
}
