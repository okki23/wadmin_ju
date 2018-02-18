<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tracking_api extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_tracking) {
						$setting->$column_tracking = '';
				}

				return $setting;
	}

	public function get_tracking(){
		return $this->db->query('select a.*,c.member_name as nama_kurir from tracking_numbers a
		LEFT JOIN m_user b on b.id_member = a.kurir_id
		LEFT JOIN m_member c on c.member_id = a.kurir_id group by a.kurir_id order by created_at desc')->result();
	}
  
}
