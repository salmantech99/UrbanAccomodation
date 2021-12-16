<?php
class login_module extends CI_Model {
	function __Construct(){
  		parent::__Construct ();
  		$this->load->database();
	}
    public function create_user($register_user = array()){
	 	$this->db->insert("travo_register",$register_user);
	 	return $this->db->insert_id();
	}
	function can_login($email,$password ){
		$this->db->select("*");
 		$this->db->from('admin_user');
 		$this->db->where('email_address', $email);
 		$this->db->where('password', $password);
 		$query = $this->db->get();
	 	return $query->result();
    }
    public function edit_user_profile($user_edit  ,$user_email){
		$this->db->where('register_email', $user_email);
		$this->db->update('travo_register', $user_edit);
	}
	public function edit_admin_user($admin_edit = array()){
		$this->db->where('id', '1');
		$this->db->update('admin_user', $admin_edit);
	}
	function get_single_user($email){
	    $this->db->select('*');
	    $query = $this->db->get_where('travo_register', array('register_email' => $email))->row();
	    return $query;
	 }
	function get_single_hotel_user_booking($email){
    	$this->db->select('*');
    	$this->db->from('user_travo_hotel_order');
    	$this->db->where('email' ,$email);
    	$query = $this->db->get();
	  	return $query->result();
    }
    function get_single_car_user_booking($email){
    	$this->db->select('*');
    	$this->db->from('user_travo_car_order');
    	$this->db->where('email' ,$email);
    	$query = $this->db->get();
	  	return $query->result();
    }
    function get_single_flight_user_booking($email){
    	$this->db->select('*');
    	$this->db->from('user_travo_flight_order');
    	$this->db->where('email' ,$email);
    	$query = $this->db->get();
	  	return $query->result();
    }
    function get_single_vacation_user_booking($email){
    	$this->db->select('*');
    	$this->db->from('user_travo_vacation_order');
    	$this->db->where('email' ,$email);
    	$query = $this->db->get();
	  	return $query->result();
    }
    function get_admin_data(){
    	$this->db->select('*');
    	$this->db->from('admin_user');
    	$query = $this->db->get();
	  	return $query->result();
    }
    function get_profile_data(){
    	$this->db->select('*');
    	$this->db->from('admin_user');
    	$this->db->where('id' ,'1');
    	$query = $this->db->get();
	  	return $query->result();
    }
	public function login($email,$password){
		$this->db->select("*");
 		$this->db->from('travo_register');
 		$this->db->where('register_email', $email);
 		$this->db->where('register_password', $password);
 		$query = $this->db->get();
	 	return $query->result(); 
	}
    function mail_exists($key)
	{
	    $this->db->where('email',$key);
	    $query = $this->db->get('travo_register');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
}
?>