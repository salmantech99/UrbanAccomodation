<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_module');
	}
	public function index(){
		$this->load->view('backend/content/login/login');
	}
}