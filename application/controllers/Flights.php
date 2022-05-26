<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Flights extends CI_Controller {
	public function __construct(){
		parent::__construct();
	    $this->load->model('flights_module');// load model
	    $this->load->model('login_module');// load model
	}                                                                                                                                                                                                                                                                                         
	public function flights_add(){
	    if ($this->session->userdata('email_address') != '') {	
			$value['posts'] = $this->flights_module->get_add_flights(); // calling Post model method getPosts() 
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_flight',$value);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function airport_add(){
		if ($this->session->userdata('email_address') != '') {	
		    $air['posts'] = $this->flights_module->getairport(); // calling Post model method getPosts()	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airport' ,$air);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function flight_settings(){
	    if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/flight_settings');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function airlines_add(){
		if ($this->session->userdata('email_address') != '') {		
			$airline['posts'] = $this->flights_module->getairline(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airlines' ,$airline);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function countries_add(){
		if ($this->session->userdata('email_address') != '') {	
			$count['posts'] = $this->flights_module->getcountries(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_countries' ,$count);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function flight_slider(){
		if ($this->session->userdata('email_address') != '') {	
			$slider['posts'] = $this->flights_module->getslider(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/flight_slider',$slider);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function routes_add(){
		if ($this->session->userdata('email_address') != '') {		
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/routes_add');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_flight(){
		if ($this->session->userdata('email_address') != '') {
		    $id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_flights($id);	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/update_flights',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function flight_search(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
		    $value['posts'] = $this->flights_module->getflights();
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/flights/flight-search-list',$value);
		}else
		{
			$value['posts'] = $this->flights_module->getflights();
			$this->load->view('templates/header');
			$this->load->view('content/flights/flight-search-list',$value);
		}
	}
	public function book_flight_order(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[2]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "DATA NOT FOUND";
			}else{
				$book_flight =array(
				 	'flight_id'              => $this->input->post('foo'),
				 	'airline_id'             => $this->input->get('id'),
				 	'flight_departure'       => $this->input->post('flight_departure'),
				 	'flight_dep_date'        => $this->input->post('flight_dep_date'),
				 	'flight_arrival'         => $this->input->post('flight_arrival'),
			     	'flight_arr_date'        => $this->input->post('flight_arr_date'),
			     	'flight_dep_time'        => $this->input->post('flight_dep_time'),
			     	'flight_arr_time'        => $this->input->post('flight_arr_time'),
			     	'flight_hours'           => $this->input->post('flight_hours'),
				 	'flight_price_adult'     => $this->input->post('flight_price_adult'),
				 	'flight_price_child'     => $this->input->post('flight_price_child'),
				 	'flight_price_infant'    => $this->input->post('flight_price_infant'),
			     	'flight_total_pass_price'=> $this->input->post('flight_total_pass_price'),
			     	'flight_tax_price'       => $this->input->post('flight_tax_price'),
			     	'flight_total_price'     => $this->input->post('flight_total_price'),
			     	'flight_deposit_price'   => $this->input->post('flight_deposit_price'),
			     	'user_name'         	 => $this->input->post('fullname'),
			     	'user_name'  	   		 => $this->input->post('fullname'),
				    'phone_number'     		 => $this->input->post('fnumber'),
					'email'            		 => $this->input->post('email'),
					'address'          		 => $this->input->post('address'),
				); 
			    $query =$this->flights_module->book_user_flights_order($book_flight);
			    if ($query) {
			    	$id=$this->input->get('id');
			    	$data['post'] = $this->flights_module->get_flights($id);
			    	$ordr = array_merge($data, $book_flight);
			    	$fullname = $this->input->post('fullname');
			    	$val['posts']  = $this->flights_module->get_single_user_flight_order($fullname,$email);
			    	$this->load->view('content/flights/user_invoice',array_merge($ordr, $val));
			    }
			}
		}else
		{
			$this->form_validation->set_rules('title', 'title', 'required|min_length[2]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "DATA NOT FOUND";
			}else{
				$book_flight =array(
				 	'flight_id'              => $this->input->post('foo'),
				 	'airline_id'             => $this->input->get('id'),
				 	'flight_departure'       => $this->input->post('flight_departure'),
				 	'flight_dep_date'        => $this->input->post('flight_dep_date'),
				 	'flight_arrival'         => $this->input->post('flight_arrival'),
			     	'flight_arr_date'        => $this->input->post('flight_arr_date'),
			     	'flight_dep_time'        => $this->input->post('flight_dep_time'),
			     	'flight_arr_time'        => $this->input->post('flight_arr_time'),
			     	'flight_hours'           => $this->input->post('flight_hours'),
				 	'flight_price_adult'     => $this->input->post('flight_price_adult'),
				 	'flight_price_child'     => $this->input->post('flight_price_child'),
				 	'flight_price_infant'    => $this->input->post('flight_price_infant'),
			     	'flight_total_pass_price'=> $this->input->post('flight_total_pass_price'),
			     	'flight_tax_price'       => $this->input->post('flight_tax_price'),
			     	'flight_total_price'     => $this->input->post('flight_total_price'),
			     	'flight_deposit_price'   => $this->input->post('flight_deposit_price'),
					'title'                  => $this->input->post('title'),
			     	'customer_name'          => $this->input->post('fullname'),
			     	'dob'                    => $this->input->post('date'),
				 	'gender'                 => $this->input->post('gender'),
				 	'address'                => $this->input->post('address'),
				 	'type'                   => $this->input->post('passport_type'),
				 	'nationality'            => $this->input->post('nationality'),
			     	'passport_issue_country' => $this->input->post('issue_country'),
			     	'passport_expiry'        => $this->input->post('expiry_date'),
			     	'passport_number'        => $this->input->post('passport_number'),
			     	'meal_preference'        => $this->input->post('mpreference'),
				 	'special_assistance'     => $this->input->post('special_assistance'),
				 	'flayer_number'          => $this->input->post('flayer_number'),
				 	'flayer-number'          => $this->input->post('flayer-number'),
				 	'telephone_code'         => $this->input->post('country_code'),
			     	'telephone_area_code'    => $this->input->post('area_code'),
			     	'telephone_number'       => $this->input->post('telephone'),
			     	'mobile_code'            => $this->input->post('mobile_telephone'),
				 	'mobile_number'          => $this->input->post('mobile'),
				 	'email'                  => $this->input->post('detail_email'),
				); 
			    $query =$this->flights_module->book_flights_order($book_flight);
			    if ($query) {
			    	$id=$this->input->get('id');
			    	$data['post'] = $this->flights_module->get_flights($id);
			    	$ordr = array_merge($data, $book_flight);
			    	$fullname = $this->input->post('fullname');
			    	$val['posts']  = $this->flights_module->get_singleflight_order($fullname);
			    	$this->load->view('content/flights/invoice',array_merge($ordr, $val));
			    }
			}
		}

	}
	public function flight_orders(){
		if ($this->session->userdata('email_address') != '') {	
			$data['posts'] = $this->flights_module->get_flight_orders(); // calling Post model method getPosts() 
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function user_flight_orders(){
		if ($this->session->userdata('email_address') != '') {	
			$data['posts'] = $this->flights_module->get_user_flight_orders(); // calling Post model method getPosts() 
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/user_orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function search_by_form(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$nam = $this->input->post('flight_search');
			$flight_checkin  = $this->input->post('flight_checkin');
			$flight_checkout = $this->input->post('flight_checkout');
			if($data['posts'] = $this->flights_module->filter($nam,$flight_checkin,$flight_checkout)){
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/flights/flight-search-list-page',$data);
			}else{
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/flights/flight-search-list-page-result');
			}
		}else
		{
			$nam = $this->input->post('flight_search');
			$flight_checkin  = $this->input->post('flight_checkin');
			$flight_checkout = $this->input->post('flight_checkout');
			if($data['posts'] = $this->flights_module->filter($nam,$flight_checkin,$flight_checkout)){
				$this->load->view('templates/header');
				$this->load->view('content/flights/flight-search-list-page',$data);
			}else{
				$this->load->view('templates/header');
				$this->load->view('content/flights/flight-search-list-page-result');
			}
		}
	}
	public function flight_book(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
		    $id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_flights($id);	
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/flights/user-flight-booking',array_merge($data1, $data));
			$this->load->view('templates/footer');
		}else
		{ 
			$id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_flights($id);	
			$this->load->view('templates/header');
			$this->load->view('content/flights/flights-booking',$data);
			$this->load->view('templates/footer');
		}
	} 
	public function insert_flight(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('routes_add');
			}else{
				//Setting values for tabel columns
				$value =array(
				 	'status'            => $this->input->post('status'),
			     	'total_hours'       => $this->input->post('total-hours'),
			     	'vat_tax'           => $this->input->post('vat-tax'),
			     	'deposit'           => $this->input->post('deposit'),
				 	'price_adults'      => $this->input->post('adult'),
				 	'price_child'       => $this->input->post('child'),
				 	'price_infant'      => $this->input->post('infant'),
				 	'departure_city'    => $this->input->post('pickup_location1'),
				 	'departure_airline' => $this->input->post('pickup_location2'),
				 	'departure_flightno'=> $this->input->post('flight-no'),
			     	'departure_date'    => $this->input->post('date'),
			     	'departure_time'    => $this->input->post('check-in'),
			     	'arrival_city'      => $this->input->post('pickup_location3'),
			     	'arrival_airline'   => $this->input->post('pickup_location4'),
			     	'arrival_flightno'  => $this->input->post('flights-no'),
			     	'arrival_date'      => $this->input->post('ar-child'),
			     	'arrival_time'      => $this->input->post('ar-infant'),
			     	'description'      => $this->input->post('editor1'),
				);
				//Transfering data to Model
				$this->flights_module->create_flights($value);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data();
				echo "<script>alert('Data Inserted Successfully');</script>";
				echo "<script>alert('Please Select Airline From Airline List Then Your Flight Properly Works And Display On Search Page ');</script>"; 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/routes_add');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_flight(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('flight_id');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('routes_add');
			}else{
				//Setting values for tabel columns
				$flights_edit =array(
				 	'status'            => $this->input->post('status'),
			     	'total_hours'       => $this->input->post('total-hours'),
			     	'vat_tax'           => $this->input->post('vat-tax'),
			     	'deposit'           => $this->input->post('deposit'),
				 	'price_adults'      => $this->input->post('adult'),
				 	'price_child'       => $this->input->post('child'),
				 	'price_infant'      => $this->input->post('infant'),
				 	'departure_city'    => $this->input->post('pickup_location1'),
				 	'departure_airline' => $this->input->post('pickup_location2'),
				 	'departure_flightno'=> $this->input->post('flight-no'),
			     	'departure_date'    => $this->input->post('date'),
			     	'departure_time'    => $this->input->post('check-in'),
			     	'arrival_city'      => $this->input->post('pickup_location3'),
			     	'arrival_airline'   => $this->input->post('pickup_location4'),
			     	'arrival_flightno'  => $this->input->post('flights-no'),
			     	'arrival_date'      => $this->input->post('ar-child'),
			     	'arrival_time'      => $this->input->post('ar-infant'),
			     	'description'      => $this->input->post('editor1'),
				);
				$this->db->set($flights_edit);
				//Transfering data to Model
				$this->flights_module->edit_flights($flights_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/routes_add');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function airport_extras(){
		if ($this->session->userdata('email_address') != '') {
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/airport_extras');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
    public function update_airport(){
    	if ($this->session->userdata('email_address') != '') {
	        $id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_airports($id);	
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/update_airports' ,$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}	
	public function insert_airport(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[1]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/airport_extras');
			}else{
				//Setting values for tabel columns
				$air =array(
				 	'code'            => $this->input->post('code'),
			     	'name'            => $this->input->post('name'),
			     	'citycode'        => $this->input->post('citycode'),
			     	'cityname'        => $this->input->post('cityname'),
				 	'countryname'     => $this->input->post('countryname'),
				 	'countrycode'     => $this->input->post('countrycode'),
				 	'timezone'        => $this->input->post('timezone'),
				 	'lat'             => $this->input->post('lat'),
				 	'lon'             => $this->input->post('lon'),
				 	'city'            => $this->input->post('city'),
				);
				//Transfering data to Model
				$this->flights_module->create_airport($air);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/airport_extras');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_airport(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('code', 'code', 'required|min_length[1]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/airport_extras');
			}else{
				//Setting values for tabel columns
				$airports_edit =array(
				 	'code'            => $this->input->post('code'),
			     	'name'            => $this->input->post('name'),
			     	'citycode'        => $this->input->post('citycode'),
			     	'cityname'        => $this->input->post('cityname'),
				 	'countryname'     => $this->input->post('countryname'),
				 	'countrycode'     => $this->input->post('countrycode'),
				 	'timezone'        => $this->input->post('timezone'),
				 	'lat'             => $this->input->post('lat'),
				 	'lon'             => $this->input->post('lon'),
				 	'city'            => $this->input->post('city'),
				);
				$this->db->set($airports_edit);
				//Transfering data to Model
				$this->flights_module->edit_airports($airports_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/airport_extras');
				$this->load->view('backend/template/footer');
			}
		}
		else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_flight_settings(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('flight-test', 'flight-test', 'required|min_length[1]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/flight_settings');
			}else{
				//Setting values for tabel columns
				$flight_setting =array(
				 	'testing_mode'            => $this->input->post('flight-test'),
				);
				//Transfering data to Model
				$this->flights_module->create_flight_setting($flight_setting);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_settings');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function airline_extras(){
		if ($this->session->userdata('email_address') != '') {
			$value['posts'] = $this->flights_module->get_add_flights();
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/airline_extras',$value);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_airline(){
		if ($this->session->userdata('email_address') != '') {	
			$id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_airlines($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/update_airline',$data);
			$this->load->view('backend/template/footer');
		}else{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_airline(){
		if ($this->session->userdata('email_address') != '') {
			$this->form_validation->set_rules('airline', 'airline', 'required');
			$this->form_validation->set_rules('thumb', 'Thumb', 'required');
			$this->form_validation->set_rules('latadesi', 'Latadesi', 'required');
			$this->form_validation->set_rules('digit', 'Digit', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/airline_extras',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
	            $data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/airline_extras',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == False and !empty($_FILES['thumb']['name'][0])){	
				if(!$this->upload->do_upload('thumb')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
				    $data1['posts'] = $this->login_module->get_profile_data(); 
	        		$this->load->view('backend/template/header',$data1);
					$this->load->view('backend/template/nav');
					$this->load->view('backend/content/flights/airline_extras',$error);
					$this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$airline =array(
			     		'flight_id'       => $this->input->post('airline'),
			     		'thumb'           => $data['file_name'],
			     		'latadesi'        => $this->input->post('latadesi'),
				 		'digit'           => $this->input->post('digit'),
				 		'country'         => $this->input->post('country'),
					);
					//Transfering data to Model
					$query = $this->flights_module->create_airline($airline);
					if ($query) {
						$value['posts'] = $this->flights_module->get_add_flights();
						$data1['posts'] = $this->login_module->get_profile_data(); 
		        		$this->load->view('backend/template/header',$data1);
						$this->load->view('backend/template/nav');
						$this->load->view('backend/content/flights/airline_extras',$value);
						$this->load->view('backend/template/footer');
					}
				}
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_airline(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[1]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('airline_extras');
			}else{
				//Setting values for tabel columns
				$airline_edit =array(
			     	'flight_id'       => $this->input->post('name'),
			     	'latadesi'        => $this->input->post('latadesi'),
				 	'digit'           => $this->input->post('digit'),
				 	'country'         => $this->input->post('country'),
				);
				$this->db->set($airline_edit);
				//Transfering data to Model
				$this->flights_module->edit_airlines($airline_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/airline_extras');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function country_extras(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/country_extras');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_countries(){	
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_countries($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/update_countries',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_country(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[2]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/country_extras');
			}else{
				//Setting values for tabel columns
				$count =array(
				 	'iso'            => $this->input->post('iso'),
			     	'name'           => $this->input->post('name'),
			     	'nicename'       => $this->input->post('nicename'),
			     	'iso3'           => $this->input->post('iso3'),
				 	'numcode'        => $this->input->post('numcode'),
				 	'phonecode'      => $this->input->post('phonecode'),
				);
				//Transfering data to Model
				$this->flights_module->create_country($count);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/country_extras');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_country(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[2]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/country_extras');
			}else{
				//Setting values for tabel columns
				$countries_edit =array(
				 	'iso'            => $this->input->post('iso'),
			     	'name'           => $this->input->post('name'),
			     	'nicename'       => $this->input->post('nicename'),
			     	'iso3'           => $this->input->post('iso3'),
				 	'numcode'        => $this->input->post('numcode'),
				 	'phonecode'      => $this->input->post('phonecode'),
				);
				$this->db->set($countries_edit);
				//Transfering data to Model
				$this->flights_module->edit_countries($countries_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/country_extras');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function flight_slider_extras(){
		if ($this->session->userdata('email_address') != '') {
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/flight_slider_extras');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_slider(){
		if ($this->session->userdata('email_address') != '') {
		    $id =$this->input->get('id');
			$data['post'] = $this->flights_module->get_slider($id);	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/update_flight_slider',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_slider(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('title', 'title', 'required|min_length[5]|max_length[35]');
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_slider_extras',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_slider_extras',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['thumb']['name'][0])){
				!$this->upload->data();
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_slider_extras',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['thumb']['name'][0])){
				if(!$this->upload->do_upload('thumb')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_slider_extras',$error);
				$this->load->view('backend/template/footer');
				}else{

					$data = $this->upload->data();
					$slider =array(
					 'title'            => $this->input->post('title'),
				     'price'            => $this->input->post('price'),
				     'thumb'            => $data['file_name'],
				     'status'           => $this->input->post('status'),
					);
					$query = $this->flights_module->create_slider($slider);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
		        		$this->load->view('backend/template/header',$data1);
						$this->load->view('backend/template/nav');
						$this->load->view('backend/content/flights/flight_slider_extras');
						$this->load->view('backend/template/footer');
					}
				}
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_slider(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
			$this->load->library('form_validation');
	    	$this->form_validation->set_rules('title', 'title', 'required|min_length[5]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/flights/flight_slider_extras');
			}else{
				//Setting values for tabel columns
				$slider_edit =array(
				 	'title'            => $this->input->post('title'),
			     	'price'            => $this->input->post('price'),
			     	'status'           => $this->input->post('status'),
				);
				$this->db->set($slider_edit);
				//Transfering data to Model
				$this->flights_module->edit_slider($slider_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/flights/flight_slider_extras');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function delete4(){
		$id =$this->input->get('id');
		if ($this->flights_module->deleteflight($id)) {
			$data['posts'] = $this->flights_module->getflights();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_flight',$data);
			$this->load->view('backend/template/footer');
		}
	}

    public function delete_flights(){
		$id =$this->input->post('ids');
		if ($this->flights_module->deleteflight($id)) {
			$data['posts'] = $this->flights_module->getflights();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_flight',$data);
			$this->load->view('backend/template/footer');
		}
	}	
	public function delete_airports(){
		$id =$this->input->post('ids');
		if ($this->flights_module->deleteairport($id)) {
			$data['posts'] = $this->flights_module->getairport();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airport',$data);
			$this->load->view('backend/template/footer');
		}
	}	
	public function delete_airlines(){
		$id =$this->input->post('ids');
		if ($this->flights_module->deleteairline($id)) {
			$data['posts'] = $this->flights_module->getairline();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airlines',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_countries(){
		$id =$this->input->post('ids');
		if ($this->flights_module->deletecountry($id)) {
			$data['posts'] = $this->flights_module->getcountries();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_countries',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_flight_slider(){
		$id =$this->input->post('ids');
		if ($this->flights_module->deleteslider($id)) {
			$data['posts'] = $this->flights_module->getslider();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/flight_slider',$data);
			$this->load->view('backend/template/footer');
		}
	}	
	public function delete6(){
		$id =$this->input->get('id');
		if ($this->flights_module->deleteairline($id)) {
			$data['posts'] = $this->flights_module->getairline();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airlines',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete5(){
		$id =$this->input->get('id');
		if ($this->flights_module->deleteairport($id)) {
			$data['posts'] = $this->flights_module->getairport();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_airport',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete7(){
		$id =$this->input->get('id');
		if ($this->flights_module->deletecountry($id)) {
			$data['posts'] = $this->flights_module->getcountries();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/add_countries',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete8(){
		$id =$this->input->get('id');
		if ($this->flights_module->deleteslider($id)) {
			$data['posts'] = $this->flights_module->getslider();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/flights/flight_slider',$data);
			$this->load->view('backend/template/footer');
		}
	}
}