<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_api extends Parent_controller {

  var $parsing_form_input = array('id','id_store','member_id','product_id','product_category','product_name','product_variants','product_photo','stok','created_at','updated_at');
  var $tablename = 'm_product';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_produk_api');

       
    }

    public function index() {
        $data = $this->m_produk_api->get_all($id=NULL,$this->tablename)->result();
     
            echo json_encode(array('status'=>true,'message'=>'success!','data'=>$data));
        
    }

  

    public function product_save_api(){
        $posfile = $this->input->post('product_photo');
        $datapos = $this->m_produk_api->input_array($this->parsing_form_input);
        // echo json_encode($datapos);
        // exit();
        $id = isset($datapos['id']) ? $datapos['id'] : '';
        $save = $this->m_produk_api->save($datapos,$id,$this->tablename);
  
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($posfile != '') {
            $this->upload->do_upload('product_photox');
        }
  
        if($save){
            echo json_encode(array('status'=>true,'message'=>'success!','data'=>$datapos['product_id']));
        }else{
            echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$datapos['product_id']));
        }
  
      }

    public function product_delete_api(){
      $idpost = $this->input->post('id');
      $get = $this->db->query("select * from m_product where id = '$idpost'")->row();
      if($get->product_photo != '' || $get->product_photo == NULL){
          unlink("uploads/".str_replace(" ","_",$get->product_photo));
      }
      $del = $this->m_produk_api->delete($idpost,$this->tablename);
 
      if($del){
        echo json_encode(array('status'=>true,'message'=>'success!','data'=>$idpost));
      }else{
        echo json_encode(array('status'=>false,'message'=>'failed!','data'=>$idpost));
        }
    }





}
