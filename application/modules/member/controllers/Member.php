<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Parent_controller {

  var $parsing_form_input = array('id','member_id','member_name','phone_number','address','email','status','remember_token','created_at','updated_at');
  var $tablename = 'm_member';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_member');

        if ($this->session->userdata('username') == '') {
            redirect(base_url('login'));
        }
    }

    public function index() {
        $data['judul'] = $this->data['judul'];

        $data['parse_view'] = 'member/member_view';
        $data['listing'] = $this->m_member->get_all($id=NULL,$this->tablename);

        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['member_id'] = $this->session->userdata('member_id');

        $this->load->view('template', $data);
    }



    public function store(){
        $id = $this->uri->segment(3);
        $data['judul'] = $this->data['judul'];
          if($id == '' || empty($id) || $id == NULL){
            $data['parseform'] = $this->m_member->get_new($this->parsing_form_input);
          }else{
            $data['parseform'] = $this->m_member->get_all($id,$this->tablename)->row();
          }

          $data['parse_view'] = 'member/member_store';
          //session
          $data['username'] = $this->session->userdata('username');
          $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
          $data['member_id'] = $this->session->userdata('member_id');
          $this->load->view('template', $data);
    }


    public function save(){

      $datapos = $this->m_member->input_array($this->parsing_form_input);
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_member->save($datapos,$id,$this->tablename);

      if($save){
        echo "<script language=javascript>
         alert('Simpan Data Berhasil');
         window.location='" . base_url('member') . "';
             </script>";
      }

    }

    public function delete(){
      $idpost = $this->uri->segment(3);
      $del = $this->m_member->delete($idpost,$this->tablename);

      if($del){
        echo "<script language=javascript>
         alert('Hapus Data Berhasil');
         window.location='" . base_url('member') . "';
             </script>";
      }
    }





}
