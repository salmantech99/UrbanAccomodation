<?php
class Main extends CI_Controller {

	public function index() {
   $this->load->view("cars_add");
   } 
   public function form_validation(){
   	echo "Ok";
   }
 }