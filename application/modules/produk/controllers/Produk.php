<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends Parent_controller {

  var $parsing_form_input = array('id','id_store','member_id','product_id','product_category','product_name','product_variants','product_photo','stok','created_at','updated_at');
  var $tablename = 'm_product';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_produk');

        if ($this->session->userdata('username') == '') {
            redirect(base_url('login'));
        }
    }

    public function index() {
        $data['judul'] = $this->data['judul'];

        $data['parse_view'] = 'produk/produk_view';
        $data['listing'] = $this->m_produk->get_all($id=NULL,$this->tablename);

        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['produk_id'] = $this->session->userdata('produk_id');

        $this->load->view('template', $data);
    }



    public function store(){
        $id = $this->uri->segment(3);
        $data['judul'] = $this->data['judul'];
          if($id == '' || empty($id) || $id == NULL){
            $data['parseform'] = $this->m_produk->get_new($this->parsing_form_input);
          }else{
            $data['parseform'] = $this->m_produk->get_all($id,$this->tablename)->row();
          }

          $data['parse_view'] = 'produk/produk_store';
          $data['opt_store'] = $this->db->get('m_store')->result();
          //var_dump($data['opt_store']);
          //session
          $data['username'] = $this->session->userdata('username');
          $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
          $data['produk_id'] = $this->session->userdata('produk_id');
          $this->load->view('template', $data);
    }


    public function save(){
      $posfile = $this->input->post('product_photo');
      $datapos = $this->m_produk->input_array($this->parsing_form_input);
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_produk->save($datapos,$id,$this->tablename);

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
        echo "<script language=javascript>
         alert('Simpan Data Berhasil');
         window.location='" . base_url('produk') . "';
             </script>";
      }

    }

    public function product_save_api(){
        $posfile = $this->input->post('product_photo');
        $datapos = $this->m_produk->input_array($this->parsing_form_input);
        echo json_encode($datapos);
        exit();
        $id = isset($datapos['id']) ? $datapos['id'] : '';
        $save = $this->m_produk->save($datapos,$id,$this->tablename);
  
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
          echo "<script language=javascript>
           alert('Simpan Data Berhasil');
           window.location='" . base_url('produk') . "';
               </script>";
        }
  
      }

    public function delete(){
      $idpost = $this->uri->segment(3);
      $get = $this->db->query("select * from m_product where id = '$idpost'")->row();
      if($get->product_photo != '' || $get->product_photo == NULL){
          unlink("uploads/".str_replace(" ","_",$get->product_photo));
      }
      $del = $this->m_produk->delete($idpost,$this->tablename);
 
      if($del){
        echo "<script language=javascript>
         alert('Hapus Data Berhasil');
         window.location='" . base_url('produk') . "';
             </script>";
      }
    }





}
