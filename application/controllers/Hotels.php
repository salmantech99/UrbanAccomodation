<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hotels extends CI_Controller {
	public function __construct(){
		  parent::__construct();
	   $this->load->model('hotel_module');// load model
	   $this->load->model('login_module');// load model
	} 
	public function urban(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data['posts'] = $this->login_module->get_single_user($email);
		    $work['posts'] = $this->hotel_module->getuser(); 
		    $this->load->view('templates/user/header',$data);
			$this->load->view('content/content/02-index',$work);
		}else
		{ 
			$work['posts'] = $this->hotel_module->getuser(); 
		    $this->load->view('templates/header');
			$this->load->view('content/content/02-index',$work);
		}
	}
	public function add_hotels(){	
		if ($this->session->userdata('email_address','password','id') != '') {
			$work['posts'] = $this->hotel_module->getuser(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/add-hotels' ,$work);
			$this->load->view('backend/template/footer');
		}else{
			$this->load->view('backend/content/login/login');
		}	
	}
	public function login_validation(){
		$this->form_validation->set_rules('email', 'email', 'required|min_length[3]|max_length[35]');
		if($this->form_validation->run() == TRUE) {
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$result   = $this->login_module->can_login($email,$password);
			if ($result) {
				$session_data = array(
                    'email_address'    => $email,
                    'password' => $password,
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Hotels/add_hotels');
			}else
			{
				$this->session->set_flashdata('error','Invalid useraname and password');
				$this->load->view('backend/content/login/login');
			}
		}else
		{
            $this->load->view('backend/content/login/login');
		}
	}
	public function logout(){
  		$this->session->unset_userdata('email_address');
  		$this->load->view('backend/content/login/login');
	}
	public function add_contact(){	
		$data1['posts'] = $this->login_module->get_profile_data(); 
    	$this->load->view('backend/template/header',$data1);
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-contact');
		$this->load->view('backend/template/footer');
	} 
	public function contact_data(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$this->form_validation->set_rules('c_name', 'c_name', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');
				$this->load->view('content/content/contact');
				$this->load->view('templates/footer');
			}else
			{
		     	$contact =array(
				 	'contact_name'          => $this->input->post('c_name'),
			     	'contact_subject'       => $this->input->post('c_subject'),
			     	'contact_email'         => $this->input->post('c_email'),
			     	'contact_comment'       => $this->input->post('c_comment'),
				); 
			    $query =$this->hotel_module->create_user_contacts($contact);
			    if ($query) {
				    echo "<script>alert('Message Send Successfully');</script>";
					$this->load->view('templates/user/header',$data1);
					$this->load->view('content/content/user_contact',$data1);
					$this->load->view('templates/footer');
				}
			}
		}else
		{
			$this->form_validation->set_rules('c_name', 'c_name', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');
				$this->load->view('content/content/contact');
				$this->load->view('templates/footer');
			}else
			{
		     	$contact =array(
				 	'contact_name'          => $this->input->post('c_name'),
			     	'contact_subject'       => $this->input->post('c_subject'),
			     	'contact_email'         => $this->input->post('c_email'),
			     	'contact_comment'       => $this->input->post('c_comment'),
				); 
			    $query =$this->hotel_module->create_contacts($contact);
			    if ($query) {
				    echo "<script>alert('Message Send Successfully');</script>";
					$this->load->view('templates/header');
					$this->load->view('content/content/contact');
					$this->load->view('templates/footer');
				}
			}
		}
	}
	public function hotel_one(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel-one');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_hotel_one(){	
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_singlehotel($id);
			$data1['posts'] = $this->login_module->get_profile_data();
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/update_hotel_one',$data);
			$this->load->view('backend/template/footer');
	    }else
	    {
	    	$this->load->view('backend/content/login/login');
	    }
	} 
	public function hotel_order(){	
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_book_summary($id);
	
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/hotels/user-hotel-order-page',array_merge($data, $data1));
			$this->load->view('templates/footer');
		}else
		{
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_book_summary($id);
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-order-page',$data);
			$this->load->view('templates/footer');
		}
	}
	public function book_hotel(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/hotel-one');
			}else{
				$book_order =array(
					'hotel_id'         => $this->input->post('hotel_id'),
					'room_id'          => $this->input->get('id'),
					'hotel_name'       => $this->input->post('hotel_name'),
					'hotel_location'   => $this->input->post('hotel_location'),
					'tax'              => $this->input->post('hotel_tax'),
					'total_price'      => $this->input->post('hotel_total_price'),
				    'deposit_now'      => $this->input->post('hotel_deposit_price'),
				    'user_name'  	   => $this->input->post('fullname'),
				    'phone_number'     => $this->input->post('fnumber'),
					'email'            => $this->input->post('email'),
					'address'          => $this->input->post('address'),
				); 
			    $query =$this->hotel_module->book_user_order_hotel($book_order);
			    if ($query) {
			    	$id=$this->input->get('id');
			    	$data['post']  = $this->hotel_module->get_user_book_summary($id);
			    	$ordr = array_merge($data, $book_order);
			    	$val['posts']  = $this->hotel_module->get_single_user_hotel_order($email);
			    	$this->load->view('content/hotels/user_invoice',array_merge($ordr, $val));
			    }
			}
		}else
		{
		    $this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/hotel-one');
			}else{
				$book_order =array(
					'hotel_id'         => $this->input->post('hotel_id'),
					'room_id'          => $this->input->get('id'),
					'hotel_name'       => $this->input->post('hotel_name'),
					'hotel_location'   => $this->input->post('hotel_location'),
					'tax'              => $this->input->post('hotel_tax'),
					'total_price'      => $this->input->post('hotel_total_price'),
				    'deposit_now'      => $this->input->post('hotel_deposit_price'),
				    'customer_name'    => $this->input->post('fullname'),
				    'phone_number'     => $this->input->post('fnumber'),
					'email'            => $this->input->post('email'),
					'address'          => $this->input->post('address'),
					'coupun_code'      => $this->input->post('coupon_id'),
				); 
			    $query =$this->hotel_module->book_order_hotel($book_order);
			    if ($query) {
			    	$id=$this->input->get('id');
			    	$data['post']  = $this->hotel_module->get_book_summary($id);
			    	$ordr = array_merge($data, $book_order);
			    	$fullname = $this->input->post('fullname');
			    	$val['posts']  = $this->hotel_module->get_singlehotel_order($fullname);
			    	$this->load->view('content/hotels/invoice',array_merge($ordr, $val));
			    }
			}	
		}
	}
	public function hotel_orders(){
		if ($this->session->userdata('email_address') != '') {
			$data['posts'] = $this->hotel_module->get_hotel_orders(); 
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function user_hotel_orders(){
		if ($this->session->userdata('email_address') != '') {
			$data['posts'] = $this->hotel_module->get_user_hotel_orders(); 
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/user_orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function hotel_search(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data['posts'] = $this->login_module->get_single_user($email);
			$work['posts'] = $this->hotel_module->getuser(); 
			$this->load->view('templates/user/header',$data);
			$this->load->view('content/hotels/hotel-search' ,$work);
			$this->load->view('templates/footer');
		}else
		{
			$work['posts'] = $this->hotel_module->getuser(); 
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-search' ,$work);
			$this->load->view('templates/footer');
		}
	}
	public function hotel_search_grid(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data['posts'] = $this->login_module->get_single_user($email);	
			$work['posts'] = $this->hotel_module->getuser(); 
			$this->load->view('templates/user/header',$data);
			$this->load->view('content/hotels/hotel-search-grid' ,$work);
			$this->load->view('templates/footer');
		}else
		{
			$work['posts'] = $this->hotel_module->getuser(); 
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-search-grid' ,$work);
			$this->load->view('templates/footer');
		}
	}
	public function about(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);		
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/content/about');
			$this->load->view('templates/footer');
		}else
		{
			$this->load->view('templates/header');
			$this->load->view('content/content/about');
			$this->load->view('templates/footer');
		}
	}
	public function terms(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);		
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/content/terms-of-use');
			$this->load->view('templates/footer');
		}else
		{
			$this->load->view('templates/header');
			$this->load->view('content/content/terms-of-use');
			$this->load->view('templates/footer');
		}
	}
	public function contact_us(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);		
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/content/user_contact',$data1);
			$this->load->view('templates/footer');
		}else
		{
            $this->load->view('templates/header');
			$this->load->view('content/content/contact');
			$this->load->view('templates/footer');
		}
	} 
	public function hotel_single(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);	
		    $id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_singlehotel($id);	
			$data2['posts'] = $this->hotel_module->get_single_hotel_room($id);
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/hotels/hotel-single',array_merge($data, $data2));
			$this->load->view('templates/footer');
		}else
		{
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_singlehotel($id);
			$data1['posts'] = $this->hotel_module->get_single_hotel_room($id);	
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-single',array_merge($data, $data1));
			$this->load->view('templates/footer');
		}
	}
	public function room_single(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_book_summary($id);
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/hotels/room-booking',$data);
			$this->load->view('templates/footer');
		}else
		{
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_book_summary($id);
			$this->load->view('templates/header');
			$this->load->view('content/hotels/room-booking',$data);
			$this->load->view('templates/footer');
		}
	}
	public function dashboard_login(){
		$this->load->view('backend/content/login/dashboard-login');
	}
	public function admin_login(){
		$this->load->view('backend/content/login/login');
	}
	public function admin_forgotten_password(){
		$this->load->view('backend/content/login/forgot_password');
	} 
	public function search_by_form(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$nam = $this->input->post('query');
			$checkin = $this->input->post('hotel_checkin');
			$checkout = $this->input->post('hotel_checkout');
			if($data['posts'] = $this->hotel_module->filter($nam,$checkin,$checkout)){
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/hotels/hotel-search-page',$data);
				$this->load->view('templates/footer');
			}else
			{
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/hotels/hotel-search-page-result');
				$this->load->view('templates/footer');
			}
		}else
		{
			$nam = $this->input->post('query');
			$checkin = $this->input->post('hotel_checkin');
			$checkout = $this->input->post('hotel_checkout');
			if($data['posts'] = $this->hotel_module->filter($nam,$checkin,$checkout)){
				$this->load->view('templates/header');
				$this->load->view('content/hotels/hotel-search-page',$data);
				$this->load->view('templates/footer');
			}else
			{
				$this->load->view('templates/header');
				$this->load->view('content/hotels/hotel-search-page-result');
				$this->load->view('templates/footer');
			}
		}
	}
	public function modify_search_by_form(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$modify_check_in = $this->input->post('modify_checkin');
			$modify_check_out = $this->input->post('modify_checkout');
			$data['posts'] = $this->hotel_module->modify_filter($modify_check_in,$modify_check_out);
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/hotels/hotel-search-page',$data);
			$this->load->view('templates/footer');
		}else
		{
			$modify_check_in = $this->input->post('modify_checkin');
			$modify_check_out = $this->input->post('modify_checkout');
			$data['posts'] = $this->hotel_module->modify_filter($modify_check_in,$modify_check_out);
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-search-page',$data);
			$this->load->view('templates/footer');
		}
	}
	public function insert_hotel(){
    	$this->form_validation->set_rules('status', 'status', 'required|min_length[5]|max_length[35]');
    	$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$this->load->library('upload',$config);
		if($this->form_validation->run() == FALSE and empty($_FILES['hotel_image']['name'][0])){
			$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel-one',$error);
			$this->load->view('backend/template/footer');

		}elseif($this->form_validation->run() == TRUE and empty($_FILES['hotel_image']['name'][0])){
			$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel-one',$error);
			$this->load->view('backend/template/footer');

		}elseif($this->form_validation->run() == FALSE and !empty($_FILES['hotel_image']['name'][0])){
			!$this->upload->data();
			$error = array('error_title' => 'Give Title' , 'error_file' => '');
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel-one',$error);
			$this->load->view('backend/template/footer');
		}elseif($this->form_validation->run() == TRUE and !empty($_FILES['hotel_image']['name'][0])){	
			if(!$this->upload->do_upload('hotel_image')){
				$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
				$data1['posts'] = $this->login_module->get_profile_data(); 
    			$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/hotel-one',$error);
				$this->load->view('backend/template/footer');
			}else{
				$data = $this->upload->data();
				$work =array(
				 	'status'              => $this->input->post('status'),
			     	'hotel_name'          => $this->input->post('hotel_name'),
			     	'hotel_description'   => $this->input->post('editor1'),
			     	'stars'               => $this->input->post('stars'),
				 	'hotel_type'          => $this->input->post('hotel_type'),
				 	'hotel_image'         => $data['file_name'],
				 	'location'            => $this->input->post('location'),
				 	'price1'              => $this->input->post('price1'),
				 	'airport_pickup'      => $this->input->post('airport_pickup'),
				 	'featured'            => $this->input->post('featured'),
				 	'featured_from'       => $this->input->post('featured_from'),
				 	'featured_to'         => $this->input->post('featured_to'),
			     	'vat_tax'       	   => $this->input->post('vat_tax'),
			     	'vat_tax_detail'      => $this->input->post('vat_tax_detail'),
			     	'related'  	       => $this->input->post('related_hotels'),
			     	'address_location'    => $this->input->post('google'),
			     	'latitude'  		   => $this->input->post('latitude'),
			     	'longitude'  		   => $this->input->post('longitude'),
			     	'meta_title'  		   => $this->input->post('meta_title'),
			     	'meta_keywords'  	   => $this->input->post('meta_keyword'),
			     	'meta_descriptions'   => $this->input->post('meta_description'),
			     	'hotel_email'  	   => $this->input->post('hotel_email'),
			     	'hotel_website' 	   => $this->input->post('hotel_website'),
			     	'hotel_phone_number'  => $this->input->post('hotel_phone'),
			     	'policy_checkin' 	   => $this->input->post('check_in'),
			     	'policy_checkout' 	   => $this->input->post('check_out'),
			     	'payment_option' 	   => $this->input->post('payment_options'),
			     	'policy_and_terms'    => $this->input->post('policy_and_terms'),
				);
				//Transfering data to Model
				$query =$this->hotel_module->create_hotels($work);
				if ($query) {
				echo "<script>alert('Data Inserted Successfully');</script>";
				echo "<script>alert('Please Select Room From Room List Then Your Hotel Display On index page ');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/hotel-one');
				$this->load->view('backend/template/footer');
				}
		    }
		}
	}
	public function insert_update_hotel(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('hotel_id');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[2]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/hotel-one');
			}else{
				//Setting values for tabel columns
				$hotel_edit =array(
				 	'status'              => $this->input->post('status'),
			     	'hotel_name'          => $this->input->post('hotel_name'),
			     	'hotel_description'   => $this->input->post('editor1'),
			     	'stars'               => $this->input->post('stars'),
				 	'hotel_type'          => $this->input->post('hotel_type'),
				 	'location'            => $this->input->post('location'),
				 	'price1'              => $this->input->post('price1'),
				 	'airport_pickup'      => $this->input->post('airport_pickup'),
				 	'featured'            => $this->input->post('featured'),
				 	'featured_from'       => $this->input->post('featured_from'),
				 	'featured_to'         => $this->input->post('featured_to'),
			     	'vat_tax'       	  => $this->input->post('vat_tax'),
			     	'vat_tax_detail'      => $this->input->post('vat_tax_detail'),
			     	'related'  	          => $this->input->post('related_hotels'),
			     	'address_location'    => $this->input->post('google'),
			     	'latitude'  		  => $this->input->post('latitude'),
			     	'longitude'  		  => $this->input->post('longitude'),
			     	'meta_title'  		  => $this->input->post('meta_title'),
			     	'meta_keywords'  	  => $this->input->post('meta_keyword'),
			     	'meta_descriptions'   => $this->input->post('meta_description'),
			     	'hotel_email'  	      => $this->input->post('hotel_email'),
			     	'hotel_website' 	  => $this->input->post('hotel_website'),
			     	'hotel_phone_number'  => $this->input->post('hotel_phone'),
			     	'policy_checkin' 	  => $this->input->post('check_in'),
			     	'policy_checkout' 	  => $this->input->post('check_out'),
			     	'payment_option' 	  => $this->input->post('payment_options'),
			     	'policy_and_terms'    => $this->input->post('policy_and_terms'),
				);
				$this->db->set($hotel_edit);
				//Transfering data to Model
				$this->hotel_module->edit_hotels($hotel_edit,$id);
				echo "<script>alert('Data Updated Successfully');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/hotel-one');
				$this->load->view('backend/template/footer');	
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_modify_hotel(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('modify_checkin', 'Modify_checkin', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$data['post'] = $this->hotel_module->get_book_summary($id);
				$this->load->view('templates/header');
				$this->load->view('content/hotels/hotel-order-page',$data);
				$this->load->view('templates/footer');
			}else{
				//Setting values for tabel columns
				$hotel_modify =array(
				 	'featured_from'       => $this->input->post('modify_checkin'),
				 	'featured_to'         => $this->input->post('modify_checkout'),
				);
				$this->db->set($hotel_modify);
				//Transfering data to Model
				$this->hotel_module->modify_hotels($hotel_modify,$id);
				$data['post'] = $this->hotel_module->get_book_summary($id);
				$this->load->view('templates/header');
				$this->load->view('content/hotels/hotel-order-page',$data);
				$this->load->view('templates/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function room_one(){
		if ($this->session->userdata('email_address') != '') {
			$work['posts'] = $this->hotel_module->getuser();
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/room-one',$work);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_room_one(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_singleroom($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/update_room_one' ,$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_room(){
		if ($this->session->userdata('email_address') != '') {
			$this->load->library('form_validation');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[2]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/room-one');
			}else{
				//Setting values for tabel columns
				$rom =array(
				 	'status'              => $this->input->post('status'),
			     	'room_type'           => $this->input->post('room_type'),
			     	'hotel_id'            => $this->input->post('hotel'),
			     	'price'               => $this->input->post('price'),
				 	'quantity'            => $this->input->post('quantity'),
				 	'minimum_stay'        => $this->input->post('minimum-stay'),
				 	'max_adults'          => $this->input->post('max-adults'),
				 	'max_children'        => $this->input->post('max-children'),
				 	'extra_beds'          => $this->input->post('extra-beds'),
				 	'extra_bed_charges'   => $this->input->post('extra-bed-charges'),
			     	// 'amnesty'       	   => $this->input->post('amnesty[]'),
				);
				//Transfering data to Model
				$rm = $this->hotel_module->create_room($rom);
				if ($rm) {
					echo "<script>alert('Data Inserted Successfully');</script>";
					//Loading View
					$work['posts'] = $this->hotel_module->getuser();
					$data1['posts'] = $this->login_module->get_profile_data(); 
		        	$this->load->view('backend/template/header',$data1);
					$this->load->view('backend/template/nav');
					$this->load->view('backend/content/hotels/room-one',$work);
					$this->load->view('backend/template/footer');
				}
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_update_room(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/room-one');
			}else{
				//Setting values for tabel columns
				$rom_edit =array(
				 	'status'              => $this->input->post('status'),
			     	'room_type'           => $this->input->post('room_type'),
			     	'price'               => $this->input->post('price'),
				 	'quantity'            => $this->input->post('quantity'),
				 	'minimum_stay'        => $this->input->post('minimum-stay'),
				 	'max_adults'          => $this->input->post('max-adults'),
				 	'max_children'        => $this->input->post('max-children'),
					 'extra_beds'          => $this->input->post('extra-beds'),
				 	'extra_bed_charges'   => $this->input->post('extra-bed-charges'),
				);
				$this->db->set($rom_edit);
				//Transfering data to Model
				$this->hotel_module->update_room($rom_edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				echo "<script>alert('Data Updated Successfully');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$work['posts'] = $this->hotel_module->getuser();
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/room-one',$work);
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	} 
	public function rooms(){
		if ($this->session->userdata('email_address') != '') {
		    $rom['posts'] = $this->hotel_module->getrooms(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/rooms' ,$rom);
			$this->load->view('backend/template/footer');
	    }else
	    {
	    	$this->load->view('backend/content/login/login');
	    } 
	}
	public function room_extra(){
	    if ($this->session->userdata('email_address') != '') {	
			$extra['posts'] = $this->hotel_module->getextra(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/extra' ,$extra);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}

	public function extras_one(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/extras-one');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_hotel_extras(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->hotel_module->get_hotel_extra($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/update_extra_one' ,$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_extra(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[35]');
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/hotels/extras-one',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/hotels/extras-one',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['thumb']['name'][0])){
				!$this->upload->data();
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/hotels/extras-one',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['thumb']['name'][0])){
				if(!$this->upload->do_upload('thumb')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
					$data1['posts'] = $this->login_module->get_profile_data(); 
	        		$this->load->view('backend/template/header',$data1);
				    $this->load->view('backend/template/nav');
				    $this->load->view('backend/content/hotels/extras-one',$error);
					$this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$extra =array(
					 	'name'               => $this->input->post('name'),
					 	'thumb'              => $data['file_name'],
				     	'status'             => $this->input->post('status'),
				     	'price'              => $this->input->post('price'),
					);
					//Transfering data to Model
					$query = $this->hotel_module->create_extra($extra);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
		        		$this->load->view('backend/template/header',$data1);
					    $this->load->view('backend/template/nav');
					    $this->load->view('backend/content/hotels/extras-one');
						$this->load->view('backend/template/footer');
					}
			    }
		    }
		}else
		{
			$this->load->view('backend/content/login/login');
		}
    }
	public function insert_update_extra(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/extras-one');
			}else{
				//Setting values for tabel columns
				$update_extra =array(
				 	'name'               => $this->input->post('name'),
			     	'status'             => $this->input->post('status'),
			     	'price'              => $this->input->post('price'),
				);
				$this->db->set($update_extra);
				//Transfering data to Model
				$this->hotel_module->update_extra_one($update_extra,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				echo "<script>alert('Data Updated Successfully');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/extras-one');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function hotel_reviews(){
		if ($this->session->userdata('email_address') != '') {	
			$extra['posts'] = $this->hotel_module->getreview(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/reviews' ,$extra);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function hotel_settings(){
		if ($this->session->userdata('email_address') != '') {
		    $work['posts'] = $this->hotel_module->getuser();	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel-settings',$work);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_hotelsettings(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('target', 'target', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/hotels/hotel-settings');
			}else{
				//Setting values for tabel columns
				$sett =array(
				 	'target'               => $this->input->post('target'),
				 	'header_title'         => $this->input->post('header_title'),
			     	'home_features'       => $this->input->post('home_features'),
			     	'display_order1'       => $this->input->post('display_order1'),
			     	'listing_hotels'       => $this->input->post('listing_hotels'),
				 	'display_order2'       => $this->input->post('display_order2'),
			     	'search_hotels'        => $this->input->post('search_hotels'),
			     	'display_order3'       => $this->input->post('display_order3'),
			     	'related_hotels'       => $this->input->post('related_hotels'),
				 	'minimum_price'        => $this->input->post('minimum_price'),
			     	'maximum_price'        => $this->input->post('maximum_price'),
			     	'check_in'             => $this->input->post('check_in'),
			     	'check_out'            => $this->input->post('check_out'),
					'meta_keywords'        => $this->input->post('meta_keywords'),
			     	'meta_descriptions'    => $this->input->post('meta_descriptions'),
				);
				//Transfering data to Model
				$this->hotel_module->create_sett($sett);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/hotels/hotel-settings');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function delete(){
		$id =$this->input->get('id');
		if ($this->hotel_module->deleteuser($id)) {
			$data['posts'] = $this->hotel_module->getuser();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/add-hotels',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_selected_hotels(){
		$id =$this->input->post('ids');
		if ($this->hotel_module->deleteuser($id)) {
			$data['posts'] = $this->hotel_module->getuser();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/add-hotels');
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_extra_hotel(){
		$id =$this->input->post('ids');
		if ($this->hotel_module->deleteextra($id)) {
			$data['posts'] = $this->hotel_module->getextra();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/extra',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_rooms(){
		$id =$this->input->post('ids');
		if ($this->hotel_module->deleteuser1($id)) {
			$data['posts'] = $this->hotel_module->getrooms();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/rooms',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_reviews(){
		$id =$this->input->post('ids');
		if ($this->hotel_module->deletereview($id)) {
			$data['posts'] = $this->hotel_module->getreview();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/reviews',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete1(){
		$id =$this->input->get('id');
		if ($this->hotel_module->deleteuser1($id)) {
			$data['posts'] = $this->hotel_module->getrooms();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/rooms',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete2(){
		$id =$this->input->get('id');
		if ($this->hotel_module->deleteextra($id)) {
			$data['posts'] = $this->hotel_module->getextra();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/extra',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete3(){
		$id =$this->input->get('id');
		if ($this->hotel_module->deletereview($id)) {
			$data['posts'] = $this->hotel_module->getreview();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/reviews',$data);
			$this->load->view('backend/template/footer');
		}
	}
}