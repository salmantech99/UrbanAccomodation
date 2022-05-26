<?php
class hotel_module extends CI_Model {
	function __Construct(){
  		parent::__Construct ();
   		$this->load->database();
    }
    public function book_order_hotel($book_order = array()){
 		$this->db->insert("travo_hotel_order",$book_order);
 		return $this->db->insert_id();
	}
	public function book_user_order_hotel($book_order = array()){
 		$this->db->insert("user_travo_hotel_order",$book_order);
 		return $this->db->insert_id();
	}
	public function create_hotels($work = array()){
	 	$this->db->insert("hotels",$work);
	 	return $this->db->insert_id();
	}
	public function create_contacts($contact = array()){
	 	$this->db->insert("travo_contact",$contact);
	 	return $this->db->insert_id();
	}
	public function create_user_contacts($contact = array()){
	 	$this->db->insert("user_travo_contact",$contact);
	 	return $this->db->insert_id();
	}
	public function create_room($rom = array()){
 		$this->db->insert("room",$rom);
 		return $this->db->insert_id();
	}
	public function create_extra($extra = array()){
	 	$this->db->insert("hotel_extra",$extra);
	 	return $this->db->insert_id();
	}
	public function create_sett($sett = array()){
	  	$this->db->insert("hotel_settings",$sett);
	  	return $this->db->insert_id();
	}
	function deleteuser($id){
    	$this->db->where('id',$id);
    	$this->db->delete('hotels');
    	return true;
    }
    function deleteextra($id){
	    $this->db->where('id',$id);
	    $this->db->delete('hotel_extra');
	    return true;
	}
	function deletereview($id){
	    $this->db->where('id',$id);
	    $this->db->delete('hotel_extra');
	    return true;
	}
	function deleteuser1($id){
	    $this->db->where('id',$id);
	    $this->db->delete('room');
	    return true;
	}
	public function edit_hotels($hotel_edit ,$id){
		$this->db->where('id', $id);
		$this->db->update('hotels', $hotel_edit);
	}
	function filter($nam,$checkin,$checkout){
 		$this->db->select("*");
 		$this->db->from('hotels');
 		$this->db->like('hotel_name', $nam);
 		$this->db->like('featured_from', $checkin);
 		$this->db->like('featured_to', $checkout);
 		$query = $this->db->get();
	 	return $query->result();
    }
	
    function get_singlehotel($id){
	  	$this->db->select('h.*,r.*');
        $this->db->from('hotels as h');
        $this->db->join('room as r','h.id = r.hotel_id','right');
        $query = $this->db->get_where('hotels', array('h.id' => $id))->row();
        return $query;
    }
    function get_single_hotel_room($id){
	  	$this->db->select('*');
        $this->db->from('room');
 		$this->db->where('hotel_id', $id);
 		$query = $this->db->get();
	 	return $query->result();
    }
    function get_hotel_orders(){
	  	$this->db->select("*"); 
        $this->db->from('travo_hotel_order');
    	$query = $this->db->get();
    	return $query->result();
    }
     function get_user_hotel_orders(){
	  	$this->db->select("*"); 
        $this->db->from('user_travo_hotel_order');
    	$query = $this->db->get();
    	return $query->result();
    }
    function get_room_single($id){
	  	$this->db->select('h.*,r.*');
        $this->db->from('hotels as h');
        $this->db->join('room as r','h.id = r.hotel_id','inner');
        $query = $this->db->get_where('hotels', array('r.hotel_id' => $id))->row();
        return $query;
    }
    function get_book_summary($id){
	  	$this->db->select('h.*,r.*');
        $this->db->from('hotels as h');
        $this->db->join('room as r','h.id = r.hotel_id','inner');
        $query = $this->db->get_where('room', array('r.id' => $id))->row();
        return $query;
    }
    function get_user_book_summary($id){
	  	$this->db->select('h.*,r.*');
        $this->db->from('hotels as h');
        $this->db->join('room as r','h.id = r.hotel_id','inner');
        $query = $this->db->get_where('room', array('r.id' => $id))->row();
        return $query;
    }
    function get_singleroom($id){
    	$this->db->select("id,room_type,hotel_id,price,quantity,minimum_stay,max_adults,max_children,extra_beds,extra_bed_charges"); 
    	$query = $this->db->get_where('room', array('id' => $id))->row();
   		return $query;
    } 
    function get_hotel_extra($id){
    	$this->db->select("id,name,thumb,status,price"); 
 		$query = $this->db->get_where('hotel_extra', array('id' => $id))->row();
  		return $query;
    }
	function getrooms(){
	 	$this->db->select("room.id,room.room_type,room.price,room.quantity,room.max_adults,room.max_children,hotels.hotel_image"); 
		$this->db->from('room');
		$this->db->join('hotels','hotels.id=room.hotel_id');
		$query = $this->db->get();
	  	return $query->result();
	}
	function get_singlehotel_order($fullname){
        $this->db->select('*');
        $query = $this->db->get_where('travo_hotel_order', array('customer_name' => $fullname))->row();
    return $query;
    }
    function get_single_user_hotel_order($email){
        $this->db->select('*');
        $query = $this->db->get_where('travo_hotel_order', array('email' => $email))->row();
    return $query;
    }
	function getreview(){
	  	$this->db->select("id,name,thumb"); 
	  	$this->db->from('hotel_extra');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function getextra(){
	 	$this->db->select("id,name,thumb,price"); 
	  	$this->db->from('hotel_extra');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function getuser(){
	 	$this->db->select("*"); 
	  	$this->db->from('hotels');
	  	$query = $this->db->get();
	  	return $query->result();
	}
	public function modify_hotels($hotel_modify ,$id){
		$this->db->select('*');
		$this->db->from('hotels');
	}
	function modify_filter($modify_check_in,$modify_check_out){
 		$this->db->select("*");
 		$this->db->from('hotels');
 		$this->db->where('featured_from', $modify_check_in);
 		$this->db->where('featured_to', $modify_check_out);
 		$query = $this->db->get();
	 	return $query->result();
    }
	public function update_room($rom_edit ,$id){
		$this->db->where('id', $id);
		$this->db->update('room', $rom_edit);
	}
	public function update_extra_one($update_extra ,$id){
		$this->db->where('id', $id);
		$this->db->update('hotel_extra', $update_extra);
	}
	
}
?>
