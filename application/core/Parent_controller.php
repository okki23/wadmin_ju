<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parent_controller extends CI_Controller {

		public function __construct(){
			  parent::__construct();
				$this->data['judul'] = 'E-MARKETPLACE';
				$this->load->helper('crm');

		}



}
