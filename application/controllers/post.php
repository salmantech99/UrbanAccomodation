<?php
class Post extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->model('PostModel'); // load model 
 }
 
 public function index() {
   $data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
   $this->load->view('cars', $data); // load the view file , we are passing $data array to view file
 }
 
 
}
?>