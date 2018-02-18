<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking_kurir_api extends Parent_controller {

  var $parsing_form_input = array('id','member_id','order_id','kurir_id','no_status','status','created_at','updated_at');
  var $tablename = 'tracking_numbers';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_tracking_kurir_api');
 
    }

    public function index() {
      $data = $this->m_tracking_kurir_api->get_tracking();
   
          echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
      
    }

  
    public function tracking_kurir_save_api(){

      $datapos = $this->m_tracking_kurir_api->input_array($this->parsing_form_input);
     
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_tracking_kurir_api->save($datapos,$id,$this->tablename);

      if($save){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['order_id']));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['order_id']));
      }


    }

    public function tracking_kurir_delete_api(){
      $idpost = $this->input->post('id');
      $del = $this->m_tracking_kurir_api->delete($idpost,$this->tablename);

      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
      }
    }







}
