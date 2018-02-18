<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends Parent_controller {

  var $parsing_form_input = array('id','member_id','order_id','kurir_id','no_status','status','created_at','updated_at');
  var $tablename = 'tracking_numbers';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_tracking');

        if ($this->session->userdata('username') == '') {
            redirect(base_url('login'));
        }
    }

    public function index() {
        $data['judul'] = $this->data['judul'];

        $data['parse_view'] = 'tracking/tracking_view';
        $data['listing'] = $this->m_tracking->get_tracking();

        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['tracking_id'] = $this->session->userdata('tracking_id');

        $this->load->view('template', $data);
    }



    public function store(){
        $id = $this->uri->segment(3);
        $data['judul'] = $this->data['judul'];
          if($id == '' || empty($id) || $id == NULL){
            $data['parseform'] = $this->m_tracking->get_new($this->parsing_form_input);
          }else{
            $data['parseform'] = $this->m_tracking->get_all($id,$this->tablename)->row();
          }

          $data['parse_view'] = 'tracking/tracking_store';
     
          $data['opt_order'] = $this->db->get('orders')->result();
          $data['opt_kurir'] = $this->db->query("select a.* from m_member a
                                        LEFT JOIN m_user b on b.id_member = a.id
                                        where b.level = '2' ")->result();
          //var_dump($data['opt_kurir']);
          //session
          
          $data['username'] = $this->session->userdata('username');
          $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
          $data['tracking_id'] = $this->session->userdata('tracking_id');
          $this->load->view('template', $data);
    }

    public function get_info(){
        $id = $this->uri->segment(3);
    
        $data = $this->db->query("select a.*,b.product_category,b.product_name,b.product_variants,b.product_photo,c.member_name,
        d.store_name,d.store_address,d.store_phone_number from orders a
                LEFT JOIN m_product b on b.product_id = a.product_id
                LEFT JOIN m_member c on c.member_id = a.member_id
                LEFT JOIN m_store d on d.store_id = a.store_id where a.order_id = '$id' ")->row();
                echo json_encode($data);
    }


    public function save(){
      $posfile = $this->input->post('product_photo');
      $datapos = $this->m_tracking->input_array($this->parsing_form_input);
      $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->m_tracking->save($datapos,$id,$this->tablename);

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
         window.location='" . base_url('tracking') . "';
             </script>";
      }

    }

    

    public function delete(){
      $idpost = $this->uri->segment(3);
      $get = $this->db->query("select * from m_product where id = '$idpost'")->row();
      
      $del = $this->m_tracking->delete($idpost,$this->tablename);
 
      if($del){
        echo "<script language=javascript>
         alert('Hapus Data Berhasil');
         window.location='" . base_url('tracking') . "';
             </script>";
      }
    }





}
