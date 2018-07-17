<?php
class PostModel extends CI_Model {

	function __Construct(){
  parent::__Construct ();
   $this->load->database();

}
 function insert_data($data){
 	$this->db->insert("cars",$data);
 }
 function getPosts(){
  $this->db->select("car_name,car_description,stars"); 
  $this->db->from('cars');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>