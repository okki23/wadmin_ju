<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_api extends Parent_controller {

  var $parsing_form_input = array('id','member_id','member_name','phone_number','address','email','status','remember_token','created_at','updated_at');
  var $tablename = 'm_member';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_member_api');

       
    }

    public function index() {
      $data = $this->m_member_api->get_all($id=NULL,$this->tablename)->result();
   
          echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
      
    }


  

    public function member_save_api(){

      $datapos = $this->m_member_api->input_array($this->parsing_form_input);
      // var_dump($datapos);
      // exit();
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_member_api->save($datapos,$id,$this->tablename);

      if($save){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['member_id']));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['member_id']));
      }


    }

    public function member_delete_api(){
      $idpost = $this->input->post('id');
      $del = $this->m_member_api->delete($idpost,$this->tablename);

      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
      }
    }





}
