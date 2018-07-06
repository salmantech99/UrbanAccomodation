<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
 
		public function overview(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/overview');
		$this->load->view('backend/template/footer');
	}
		public function hotels(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels');
		$this->load->view('backend/template/footer');
	}
	

}