<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_api extends Parent_controller {

  var $parsing_form_input = array('id','username','password','id_member','level','remember_token','created_at','update_at');
  var $tablename = 'm_user';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user_api');
    }

    public function index() {
      $data = $this->m_user_api->list_user();
   
          echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
      
    }

 

    public function user_save_api(){

      $datapos = $this->m_user_api->input_array($this->parsing_form_input);
      
      // var_dump($datapos);
      // exit();
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_user_api->save($datapos,$id,$this->tablename);

      if($save){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['username']));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['username']));
      }


    }

    public function user_delete_api(){
      $idpost = $this->input->post('id');
      $del = $this->m_user_api->delete($idpost,$this->tablename);

      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
      }
    }


}
