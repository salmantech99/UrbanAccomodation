<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
 
		public function overview(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/overview');
		$this->load->view('backend/template/footer');
	}
		public function hotels(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotels');
		$this->load->view('backend/template/footer');
	}
		public function add_facilities(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-add');
		$this->load->view('backend/template/footer');
	}
		public function cars(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/addcar');
		$this->load->view('backend/template/footer');
	}
	

}