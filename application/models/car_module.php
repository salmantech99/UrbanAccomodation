<?php
class car_module extends CI_Model {
	function __Construct(){
    parent::__Construct ();
    $this->load->database();
  }
  public function book_order_car($book_order = array()){
    $this->db->insert("travo_car_booking",$book_order);
    return $this->db->insert_id();
  }
  public function book_user_order_car($book_order = array()){
    $this->db->insert("user_travo_car_order",$book_order);
    return $this->db->insert_id();
  }
	public function create($options = array()){
 	  $this->db->insert("cars",$options);
 	  return $this->db->insert_id();
  } 
  public function create_booking_car($booking_car = array()){
    $this->db->insert("booking_car",$booking_car);
    return $this->db->insert_id();
  }
  public function create_one($one = array()){
    $this->db->insert("car_extra",$one);
    return $this->db->insert_id();
  }
  public function create_set($set = array()){
    $this->db->insert("car_settings",$set);
    return $this->db->insert_id();
  }
  function deletecarextra($id){
    $this->db->where('id',$id);
    $this->db->delete('car_extra');
    return true;
  }
  function deletecar($id){
    $this->db->where('id',$id);
    $this->db->delete('cars');
    return true;
  }
  public function edit_cars($edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('cars', $edit);
  }
  public function edit_cars_extra($extra_car_update ,$id){
    $this->db->where('id', $id);
    $this->db->update('car_extra', $extra_car_update);
  }
  public function edit_extra_cars($edit_extra ,$id){
    $this->db->where('id', $id);
    $this->db->update('car_extra', $edit_extra);
  }
  function filter($nam,$car_pickup,$car_checkin,$car_checkout){
    $this->db->select("*");
    $this->db->from('cars');
    $this->db->like('Car_name', $nam);
    $this->db->like('pickup_location1', $car_pickup);
    $this->db->like('featured_from', $car_checkin);
    $this->db->like('featured_to', $car_checkout);
    $query = $this->db->get();
    return $query->result();
  }
  function get_single_car($id){
    $this->db->select('*');
    $query = $this->db->get_where('cars', array('id' => $id))->row();
    return $query;
  }
  function get_single_book($booking_car){
    $res = $booking_car;
    return $res;
  }
  function get_singlecar($id){
    $this->db->select("id,car_name,car_type,car_description,car_image,stars,milage,pick_up,pickup_location1,dropoff_location1,dropoff_location2,dropoff_location3,dropoff_location4,dropoff_location5,dropoff_location6,dropoff_location7,dropoff_location8,dropoff_location9,dropoff_location10,price1,price2,price3,price4,price5,price6,price7,price8,price9,price10,car_type,car_image,passenger,car_doors,transmission,baggage,airport_pickup,featured,featured_from,featured_to,deposit,deposit_price,vat_tax,vat_tax_detail,related,meta_title,meta_keywords,meta_description,policy_options,policy_and_terms"); 
    $query = $this->db->get_where('cars', array('id' => $id))->row();
    return $query;
  }
  function getcars(){
    $this->db->select("id,car_name,car_type,car_description,stars,milage,pick_up,pickup_location1,dropoff_location1,dropoff_location2,dropoff_location3,dropoff_location4,dropoff_location5,dropoff_location6,dropoff_location7,dropoff_location8,dropoff_location9,dropoff_location10,price1,price2,price3,price4,price5,price6,price7,price8,price9,price10,car_type,car_image,passenger,car_doors,transmission,baggage,airport_pickup,featured,featured_from,featured_to,deposit,vat_tax,vat_tax_detail,related,meta_title,meta_keywords,meta_description,policy_options,policy_and_terms"); 
    $this->db->from('cars');
    $query = $this->db->get();
    return $query->result();
  }
  function get_result($keyword){
    $this->db->select("*"); 
    $this->db->from('cars');
    $this->db->like('Car_name', $keyword);
    $query = $this->db->get();
    return $query->result();
  }
  function get_car_orders(){
    $this->db->select("*"); 
    $this->db->from('travo_car_booking');
    $query = $this->db->get();
    return $query->result();
  }
  function get_user_car_orders(){
    $this->db->select("*"); 
    $this->db->from('user_travo_car_order');
    $query = $this->db->get();
    return $query->result();
  }
  function getextra(){
    $this->db->select("id,name,thumb,price"); 
    $this->db->from('car_extra');
    $query = $this->db->get();
    return $query->result();
  }
  function get_single_extracar($id){
    $this->db->select("id,name,thumb,price"); 
    $query = $this->db->get_where('car_extra', array('id' => $id))->row();
    return $query;
  }
  function get_singlecar_order($fullname){
    $this->db->select('*');
    $query = $this->db->get_where('travo_car_booking', array('customer_name' => $fullname))->row();
    return $query;
  }
  function get_single_user_car_order($fullname,$email){
    $this->db->select('*');
    $this->db->from('user_travo_car_order');
    $this->db->where('user_name', $fullname);
    $this->db->where('email', $email);
    $query = $this->db->get();
    return $query->result();
  }
  function modify_filter($modify_check_in,$modify_check_out){
    $this->db->select("*");
    $this->db->from('cars');
    $this->db->where('featured_from', $modify_check_in);
    $this->db->where('featured_to', $modify_check_out);
    $query = $this->db->get();
    return $query->result();
  } 
} 
?>