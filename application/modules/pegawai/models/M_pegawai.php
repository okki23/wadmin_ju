<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

  public function opt_pegawai(){
	 return	$this->db->get('m_employee')->result();
	}

	public function list_pegawai(){
		return $this->db->query('select a.*,b.nama from m_pegawai a
														left join m_employee b on b.id = a.id_pegawai')->result();
	}

}
