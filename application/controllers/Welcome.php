<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct(){
		  parent::__construct();
          $this->load->model('hotel_module');
	}
	public function index(){
	       $work['posts'] = $this->hotel_module->getuser(); 
		   $this->load->view('templates/header');
			$this->load->view('content/content/02-index',$work);
	}
}
