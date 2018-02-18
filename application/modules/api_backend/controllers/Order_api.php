<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_api extends Parent_controller {
 
  var $parsing_form_input = array('id','order_id','product_id','member_id','store_id','qty','total','created_at','updated_at');
  var $tablename = 'orders';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_order_api');
    }

    public function index() {
      $data = $this->m_order_api->list_order();
   
          echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
      
    }

 

    public function order_save_api(){

      $datapos = $this->m_order_api->input_array($this->parsing_form_input);
      
      // var_dump($datapos);
      // exit();
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_order_api->save($datapos,$id,$this->tablename);

      if($save){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['order_id']));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['order_id']));
      }


    }

    public function order_delete_api(){
      $idpost = $this->input->post('id');
      $del = $this->m_order_api->delete($idpost,$this->tablename);

      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
      }
    }


}
