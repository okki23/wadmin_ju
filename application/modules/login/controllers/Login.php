<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Parent_controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('m_login');
      /*
      session list - role access
      1.superadmin = all menu, all master
      2.ppic = request goods and view status
      3.adminproduksi = using goods and result goods
      4.purchasing = request goods for payment status
      5.supervisor = report using and result goods
      */
    }

    public function index() {
        $data['judul'] = 'Program Aplikasi CRM pada PT.LG';
        $this->load->view('login/login_view', $data);
    }

    public function auth(){
      $datapos = array('username'=>$this->input->post('username'),
                      'password'=>md5($this->input->post('password')));
      $avail = $this->m_login->auth($datapos)->num_rows();
      $usersess = $this->m_login->auth($datapos)->row();

      if($avail > 0){
  			$list = array('username'=>$usersess->username,'user_group'=>$usersess->level,'user_id'=>$usersess->id_member);
  			$this->session->set_userdata($list);

  		 	redirect(base_url('dashboard'));
  		}else{

  			redirect(base_url('login'));
  		}
    }

    public function logout(){
		//mematikan seluruh session yang sudah terdaftar dan kembali ke halaman login
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}
