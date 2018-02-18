<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tracking_kurir extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

  public function opt_tracking_kurir(){
	 return	$this->db->get('m_employee')->result();
	}

	public function get_tracking_kurir($idkurir){
		return $this->db->query('select a.*,c.member_name as nama_kurir from tracking_numbers a
		LEFT JOIN m_user b on b.id_member = a.kurir_id
		LEFT JOIN m_member c on c.member_id = a.kurir_id where a.kurir_id = "'.$idkurir.'" ')->result();
	}

}
