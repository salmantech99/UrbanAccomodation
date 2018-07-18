<?php
class Insert extends CI_Model {

	function __Construct(){
  parent::__Construct ();
   $this->load->database();

}
 public function create($options = array()){
 	$this->db->insert("cars",$options);
 	return $this->db->insert_id();
 }
}
?>