<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends CI_Controller {


	public function __construct(){
		  parent::__construct();
          $this->load->model('Fly');
	}

	public function flight(){	
		$data['flights'] = $this->Fly->get_flights();
		$this->load->view('templates/header');
		$this->load->view('content/flights',$data);
		$this->load->view('templates/footer');
	}

	// public function hotel($id = NULL){
	// 	$data['hotels'] = $this->Hotels->get_hotels($id);
	// 	$this->load->view('templates/header');
	// 	$this->load->view('content/hotel-single',$data);
	// 	$this->load->view('templates/footer');
	// }
	// public function hotel_order($id){	
	// 	$data['hotels'] = $this->Hotels->get_hotels($id);
	// 	$this->load->view('templates/header');
	// 	$this->load->view('content/hotel-order-page', $data);
	// 	$this->load->view('templates/footer');
	// } 
	// 	public function backend(){	
	// 	$this->load->view('backend/template/header');
	// 	$this->load->view('backend/template/nav');
	// 	$this->load->view('backend/content/hotel');
	// 	$this->load->view('backend/template/footer');
	// }

}
