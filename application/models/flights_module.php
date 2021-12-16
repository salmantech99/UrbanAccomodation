<?php
class flights_module extends CI_Model {
  function __Construct(){
    parent::__Construct ();
    $this->load->database();
  }
  public function book_flights_order($book_flight = array()){
    $this->db->insert("travo_flight_booking_passenger",$book_flight);
    return $this->db->insert_id();
  } 
  public function book_user_flights_order($book_flight = array()){
    $this->db->insert("user_travo_flight_order",$book_flight);
    return $this->db->insert_id();
  } 
  public function create_flights($value = array()){
    $this->db->insert("flights",$value);
    return $this->db->insert_id();
  }
  public function create_flight_setting($flight_setting = array()){
    $this->db->insert("flight_settings",$flight_setting);
    return $this->db->insert_id();
  }
  public function create_airport($air = array()){
    $this->db->insert("airport",$air);
    return $this->db->insert_id();
  }
  public function create_airline($airline = array()){
    $this->db->insert("airline",$airline);
    return $this->db->insert_id();
  }
  public function create_country($count = array()){
    $this->db->insert("country",$count);
    return $this->db->insert_id();
  }
  public function create_slider($slider = array()){
    $this->db->insert("flight_slider",$slider);
    return $this->db->insert_id();
  }
  function deleteflight($id){
    $this->db->where('id',$id);
    $this->db->delete('flights');
    return true;
  }
  function deleteslider($id){ 
    $this->db->where('id',$id);
    $this->db->delete('flight_slider');
    return true;
  }
  function deletecountry($id){
    $this->db->where('id',$id);
    $this->db->delete('country');
    return true;
  }
  function deleteairport($id){
    $this->db->where('id',$id);
    $this->db->delete('airport');
    return true;
  } 
  function deleteairline($id){
    $this->db->where('id',$id);
    $this->db->delete('airline');
    return true;
  }
  public function edit_flights($flights_edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('flights', $flights_edit);
  }
  public function edit_airports($airports_edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('airport', $airports_edit);
  }
  public function edit_airlines($airlines_edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('airline', $airlines_edit);
  }
  public function edit_countries($countries_edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('country', $countries_edit);
  }
  public function edit_slider($slider_edit ,$id){
    $this->db->where('id', $id);
    $this->db->update('flight_slider', $slider_edit);
  }
  function filter($nam,$flight_checkin,$flight_checkout){
    $this->db->select('f.*,a.*');
    $this->db->from('flights as f');
    $this->db->join('airline as a','f.id = a.flight_id','inner');
    $this->db->like('departure_airline', $nam);
    $this->db->like('departure_date', $flight_checkin);
    $this->db->like('arrival_date', $flight_checkout);
    $query = $this->db->get();
    return $query->result();
  }
  function get_flights($id){
    $this->db->select('f.*,a.*');
    $this->db->from('flights as f');
    $this->db->join('airline as a','f.id = a.flight_id','inner');
    $query = $this->db->get_where('flights', array('a.flight_id' => $id))->row();
    return $query;
  }
  function get_flight_orders(){
    $this->db->select("*"); 
    $this->db->from('travo_flight_booking_passenger');
    $query = $this->db->get();
    return $query->result();
  }
   function get_user_flight_orders(){
    $this->db->select("*"); 
    $this->db->from('user_travo_flight_order');
    $query = $this->db->get();
    return $query->result();
  }
  function get_airports($id){
    $this->db->select("id,code,name,citycode,cityname,countryname,countrycode,timezone,lat,lon,city"); 
    $query = $this->db->get_where('airport', array('id' => $id))->row();
    return $query;
  }
  function get_airlines($id){
    $this->db->select("id,flight_id,thumb,latadesi,digit,country"); 
    $query = $this->db->get_where('airline', array('id' => $id))->row();
    return $query;
  }
  function get_countries($id){
    $this->db->select("id,iso,name,nicename,iso3,numcode,phonecode"); 
    $query = $this->db->get_where('country', array('id' => $id))->row();
    return $query;
  }
  function get_slider($id){
    $this->db->select("id,title,price,thumb,status"); 
    $query = $this->db->get_where('flight_slider', array('id' => $id))->row();
    return $query;
  }
  function getairline(){
    $this->db->select("id,thumb,latadesi,digit,country"); 
    $this->db->from('airline');
    $query = $this->db->get();
    return $query->result();
  }
  function getairport(){
    $this->db->select("id,code,name,citycode,cityname,countryname,countrycode,timezone,lat,lon,city"); 
    $this->db->from('airport');
    $query = $this->db->get();
    return $query->result();
  }
  function getcountries(){
    $this->db->select("id,iso,name,nicename,iso3,numcode,phonecode"); 
    $this->db->from('country');
    $query = $this->db->get();
    return $query->result();
  }
  function getslider(){
    $this->db->select("id,title,price,thumb,status"); 
    $this->db->from('flight_slider');
    $query = $this->db->get();
    return $query->result();
  }
  function get_add_flights(){
    $this->db->select("id,departure_airline,departure_city,arrival_city,status,total_hours,departure_date,arrival_date,departure_time,arrival_time,price_adults,price_infant,price_child"); 
    $this->db->from('flights');
    $query = $this->db->get();
    return $query->result();
  } 
  function get_singleflight_order($fullname){
    $this->db->select('*');
    $query = $this->db->get_where('travo_flight_booking_passenger', array('customer_name' => $fullname))->row();
    return $query;
  }
  function get_single_user_flight_order($fullname,$email){
    $this->db->select('*');
    $this->db->from('user_travo_flight_order');
    $this->db->where('user_name', $fullname);
    $this->db->where('email', $email);
    $query = $this->db->get();
    return $query->result();
  }
  function getflights(){
    $this->db->select("flights.id,flights.departure_city,flights.arrival_city,flights.departure_airline,flights.status,flights.total_hours,flights.departure_date,flights.arrival_date,flights.departure_time,flights.arrival_time,flights.price_adults,flights.price_child,flights.price_infant,airline.thumb"); 
    $this->db->from('flights');
    $this->db->join('airline','flights.id=airline.flight_id');
    $query = $this->db->get();
    return $query->result();
  }
}
?>