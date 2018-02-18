<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Store_api extends Parent_controller {

  var $parsing_form_input = array('id','store_id','member_id','store_name','store_address','store_phone_number','created_at','updated_at');
  var $tablename = 'm_store';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_store_api');
 
    }

    public function index() {
      $data = $this->m_store_api->get_all($id=NULL,$this->tablename)->result();
   
          echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
      
    }

 

    public function store_save_api(){

      $datapos = $this->m_store_api->input_array($this->parsing_form_input);
      // var_dump($datapos);
      // exit();
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_store_api->save($datapos,$id,$this->tablename);

      if($save){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['store_id']));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['store_id']));
      }


    }

    public function store_delete_api(){
      $idpost = $this->input->post('id');
      $del = $this->m_store_api->delete($idpost,$this->tablename);

      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
      }
    }





}
