<?php
class vacation_module extends CI_Model {
	function __Construct(){
  		parent::__Construct ();
   		$this->load->database();
	}
	public function book_order_vacation($book_order = array()){
	  	$this->db->insert("vacation_order",$book_order);
	  	return $this->db->insert_id();
    }
     public function book_user_order_vacation($book_order = array()){
	  	$this->db->insert("user_travo_vacation_order",$book_order);
	  	return $this->db->insert_id();
    }
    public function create_vacation($vacation = array()){
	 	$this->db->insert("vacation",$vacation);
	 	return $this->db->insert_id();
	}
	public function create_booking_vacation($booking_vacation = array()){
	  	$this->db->insert("vacation_booking",$booking_vacation);
	  	return $this->db->insert_id();
	}
	public function create_vacation_extra($vacation_extra = array()){
	 	$this->db->insert("vacation_extras",$vacation_extra);
	 	return $this->db->insert_id();
	}
	public function create_vacation_settings($vacation_setting = array()){
	 	$this->db->insert("vacation_settings",$vacation_setting);
	 	return $this->db->insert_id();
	}
	function deleteuser($id){
	    $this->db->where('id',$id);
	    $this->db->delete('vacation');
	    return true;
	}
	function delete_extra_vacation($id){
	    $this->db->where('id',$id);
	    $this->db->delete('vacation_extras');
	    return true;
	}
	function filter($nam,$vacation_checkin,$vacation_type){
 		$this->db->select("*");
 		$this->db->from('vacation');
 		$this->db->like('vacation_name', $nam);
 		$this->db->like('featured_from', $vacation_checkin);
 		$this->db->like('vacation_type', $vacation_type);
 		$query = $this->db->get();
	 	return $query->result();
    }
    function get_single_vacation($id){
    	$this->db->select("*"); 
	  	$query = $this->db->get_where('vacation', array('id' => $id))->row();
	 	return $query;
	}
	function get_vacation(){
	 	$this->db->select("*"); 
	  	$this->db->from('vacation');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function get_vacation_orders(){
	 	$this->db->select("*"); 
	  	$this->db->from('vacation_order');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function get_user_vacation_orders(){
	 	$this->db->select("*"); 
	  	$this->db->from('user_travo_vacation_order');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function get_vacation_extras(){
	  	$this->db->select("*"); 
	  	$this->db->from('vacation_extras');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function get_vacation_extra_update($id){
	    $this->db->select("id,name,thumb,status,price"); 
	  	$query = $this->db->get_where('vacation_extras', array('id' => $id))->row();
	  	return $query;
	}
	function get_singlevacation($id){
      	$this->db->select('*');
        $query = $this->db->get_where('vacation', array('id' => $id))->row();
	    return $query;
    }
    function get_single_user_vacation_order($fullname,$email){
    $this->db->select('*');
    $this->db->from('user_travo_vacation_order');
    $this->db->where('user_name', $fullname);
    $this->db->where('email', $email);
    $query = $this->db->get();
    return $query->result();
    }
    function get_singlevacation_order($fullname){
      	$this->db->select('*');
        $query = $this->db->get_where('vacation_order', array('customer_name' => $fullname))->row();
	 	return $query;
    }
	public function update_vacation($vacation_edit ,$id){
		$this->db->where('id', $id);
		$this->db->update('vacation', $vacation_edit);
	}
	public function update_vacation_extra_one($update_vacation_extra ,$id){
		$this->db->where('id', $id);
		$this->db->update('vacation_extras', $update_vacation_extra);
	}
} 
?>