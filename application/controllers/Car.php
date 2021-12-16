<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Car extends CI_Controller {
	public function __construct(){
		parent::__construct(); 
     	$this->load->model('car_module');// load model
     	$this->load->model('login_module');// load model
	} 
	public function cars_add(){
		if ($this->session->userdata('email_address') != '') {
		    $data['posts'] = $this->login_module->get_profile_data(); 
	        $this->load->view('backend/template/header',$data);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/cars_add');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
    }
    public function cars_order(){
    	if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
	        $p_place = $this->input->post('pick_location');	
		    $wor     = $this->input->post('starting');
		    $work    = $this->input->post('ending_point');
		    $tot     = $wor*$work;
		    $tax     = ($wor*$work)/10;
		    if ($work==$this->input->post('price1_equality')) {
		     	$place = $this->input->post('location1');
		    }elseif ($work==$this->input->post('price2_equality')) {
		     	$place = $this->input->post('location2');
		    }elseif ($work==$this->input->post('price3_equality')) {
		     	$place = $this->input->post('location3');
		    }elseif ($work==$this->input->post('price4_equality')) {
		     	$place = $this->input->post('location4');
		    }elseif ($work==$this->input->post('price5_equality')) {
		     	$place = $this->input->post('location5');
		    }elseif ($work==$this->input->post('price6_equality')) {
		     	$place = $this->input->post('location6');
		    }elseif ($work==$this->input->post('price7_equality')) {
		     	$place = $this->input->post('location7');
		    }elseif ($work==$this->input->post('price8_equality')) {
		     	$place = $this->input->post('location8');
		    }elseif ($work==$this->input->post('price9_equality')) {
		     	$place = $this->input->post('location9');
		    }else{
		     	$place = $this->input->post('location10');
		    }
			//Setting values for tabel columns
			$booking_car =array(
			 	'book_pickup'          => $p_place,
			 	'book_dropoff'         => $this->input->post('ending_point'),
			 	'book_dropoff_place'   => $place,
		     	'book_pickupdate'      => $this->input->post('pickupdate'),
		     	'book_pickuptime'      => $this->input->post('pickuptime'),
		     	'book_dropoffdate'     => $this->input->post('dropoffdate'),
			 	'book_dropofftime'     => $this->input->post('dropofftime'),
			 	'price'                => $tot,
			 	'tax'                  => $tax,
			); 
	        $id =$this->input->get('id');
		    $data['post']  = $this->car_module->get_single_car($id);
		    $order_cr = array_merge($data, $booking_car);
		    //Loading View
	        $this->load->view('templates/user/header',$data1);
		    $this->load->view('content/car/user-car-order-page',array_merge($data1, $order_cr));
		    $this->load->view('templates/footer');
		}else
		{
			$p_place = $this->input->post('pick_location');	
		    $wor     = $this->input->post('starting');
		    $work    = $this->input->post('ending_point');
		    $tot     = $wor*$work;
		    $tax     = ($wor*$work)/10;
		    if ($work==$this->input->post('price1_equality')) {
		     	$place = $this->input->post('location1');
		    }elseif ($work==$this->input->post('price2_equality')) {
		     	$place = $this->input->post('location2');
		    }elseif ($work==$this->input->post('price3_equality')) {
		     	$place = $this->input->post('location3');
		    }elseif ($work==$this->input->post('price4_equality')) {
		     	$place = $this->input->post('location4');
		    }elseif ($work==$this->input->post('price5_equality')) {
		     	$place = $this->input->post('location5');
		    }elseif ($work==$this->input->post('price6_equality')) {
		     	$place = $this->input->post('location6');
		    }elseif ($work==$this->input->post('price7_equality')) {
		     	$place = $this->input->post('location7');
		    }elseif ($work==$this->input->post('price8_equality')) {
		     	$place = $this->input->post('location8');
		    }elseif ($work==$this->input->post('price9_equality')) {
		     	$place = $this->input->post('location9');
		    }else{
		     	$place = $this->input->post('location10');
		    }
			//Setting values for tabel columns
			$booking_car =array(
			 	'book_pickup'          => $p_place,
			 	'book_dropoff'         => $this->input->post('ending_point'),
			 	'book_dropoff_place'   => $place,
		     	'book_pickupdate'      => $this->input->post('pickupdate'),
		     	'book_pickuptime'      => $this->input->post('pickuptime'),
		     	'book_dropoffdate'     => $this->input->post('dropoffdate'),
			 	'book_dropofftime'     => $this->input->post('dropofftime'),
			 	'price'                => $tot,
			 	'tax'                  => $tax,
			);
	        $id =$this->input->get('id');
		    $data['post']  = $this->car_module->get_single_car($id);
		    //Loading View
	        $this->load->view('templates/header');
		    $this->load->view('content/car/car-order-page',array_merge($data, $booking_car));
		    $this->load->view('templates/footer');
		}
    } 
    public function book_car_order(){
    	if ($this->session->userdata('email','password','name') != '') {
			$name  = $_SESSION['name'];
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "DATA NOT FOUND";
			}else{
				$book_order =array(
					'car_id'                 => $this->input->post('car_id'),
					'car_name'               => $this->input->post('car_name'),
				    'car_booking_pickup'     => $this->input->post('car_booking_pickup'),
				    'car_booking_dropoff'    => $this->input->post('car_booking_dropoff'),
				    'car_book_pickupdate'    => $this->input->post('car_book_pickupdate'),
					'car_book_pickuptime'    => $this->input->post('car_book_pickuptime'),
					'car_book_dropoffdate'   => $this->input->post('car_book_dropoffdate'),
					'car_book_dropofftime'   => $this->input->post('car_book_dropofftime'),
					'car_booking_price'      => $this->input->post('car_booking_price'),
					'car_booking_tax'        => $this->input->post('car_booking_tax'),
					'total_price'            => $this->input->post('car_booking_total_price'),
					'car_booking_deposit'    => $this->input->post('car_booking_deposit'),
					'car_type'               => $this->input->post('car_type'),
				    'user_name'        		 => $this->input->post('fullname'),
				    'phone_number'           => $this->input->post('fnumber'),
					'email'                  => $this->input->post('email'),
					'address'                => $this->input->post('address'),
				);
			    $query =$this->car_module->book_user_order_car($book_order);
			    if ($query) { 
			    	$id=$this->input->get('id');
			    	$fullname = $this->input->post('fullname');
			    	$data['post']  = $this->car_module->get_single_car($id);
			    	$ordr = array_merge($data, $book_order);
			    	$val['posts']  = $this->car_module->get_single_user_car_order($fullname,$email);
			    	$this->load->view('content/car/user_invoice.php',array_merge($ordr, $val));
			    }else{
			        echo "string1";
			        die();
			    }
			}
		}else
		{
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "DATA NOT FOUND";
			}else{
				$book_order =array(
					'car_id'                 => $this->input->post('car_id'),
					'car_name'               => $this->input->post('car_name'),
				    'car_booking_pickup'     => $this->input->post('car_booking_pickup'),
				    'car_booking_dropoff'    => $this->input->post('car_booking_dropoff'),
				    'car_book_pickupdate'    => $this->input->post('car_book_pickupdate'),
					'car_book_pickuptime'    => $this->input->post('car_book_pickuptime'),
					'car_book_dropoffdate'   => $this->input->post('car_book_dropoffdate'),
					'car_book_dropofftime'   => $this->input->post('car_book_dropofftime'),
					'car_booking_price'      => $this->input->post('car_booking_price'),
					'car_booking_tax'        => $this->input->post('car_booking_tax'),
					'total_price'            => $this->input->post('car_booking_total_price'),
					'car_booking_deposit'    => $this->input->post('car_booking_deposit'),
					'car_type'               => $this->input->post('car_type'),
				    'customer_name'          => $this->input->post('fullname'),
				    'phone_number'           => $this->input->post('fnumber'),
					'email'                  => $this->input->post('email'),
					'address'                => $this->input->post('address'),
					'coupon'                 => $this->input->post('coupon_id'),
				);
			    $query =$this->car_module->book_order_car($book_order);
			    if ($query) { 
			    	$id=$this->input->get('id');
			    	$fullname = $this->input->post('fullname');
			    	$data['post']  = $this->car_module->get_single_car($id);
			    	$ordr = array_merge($data, $book_order);
			    	$val['posts']  = $this->car_module->get_singlecar_order($fullname);
			    	$this->load->view('content/car/invoice.php',array_merge($ordr, $val));
			    }
			}
		}
	}  
    public function cars_search(){
    	if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
	    	$data['posts'] = $this->car_module->getcars();
	        $this->load->view('templates/user/header',$data1);
			$this->load->view('content/car/car-search-list',$data);
			$this->load->view('templates/footer');
		}else
		{
			$data['posts'] = $this->car_module->getcars();
	        $this->load->view('templates/header');
			$this->load->view('content/car/car-search-list',$data);
			$this->load->view('templates/footer');
		}
    }
    public function cars_single(){
    	if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
	    	$id =$this->input->get('id');
			$data['post'] = $this->car_module->get_singlecar($id);
	        $this->load->view('templates/user/header',$data1);
			$this->load->view('content/car/car-single-page' ,$data);
			$this->load->view('templates/footer');
		}else
		{
            $id =$this->input->get('id');
			$data['post'] = $this->car_module->get_singlecar($id);
	        $this->load->view('templates/header');
			$this->load->view('content/car/car-single-page' ,$data);
			$this->load->view('templates/footer');
		}
    }
    public function index(){	
        $this->load->view('templates/header');
		$this->load->view('content/content/02-index');
		$this->load->view('templates/footer');
    }
    public function  car_update(){
    	$id =$this->input->get('id');
		$data['post'] = $this->car_module->get_singlecar($id);
        $data1['posts'] = $this->login_module->get_profile_data(); 
        $this->load->view('backend/template/header',$data1);
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/cars_edit' ,$data);
		$this->load->view('backend/template/footer');
    }
    public function search_by_form(){
    	if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$nam = $this->input->post('cars');
			$car_pickup = $this->input->post('car_pickup');
			$car_checkin = $this->input->post('car_checkin');
			$car_checkout = $this->input->post('car_checkout');
			if($data['posts'] = $this->car_module->filter($nam,$car_pickup,$car_checkin,$car_checkout)){
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/car/car-search-list-page' ,$data);
				$this->load->view('templates/footer');
		    }else{
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/car/car-search-list-page-result');
				$this->load->view('templates/footer');
			}
		}else
		{
			$nam = $this->input->post('cars');
			$car_pickup = $this->input->post('car_pickup');
			$car_checkin = $this->input->post('car_checkin');
			$car_checkout = $this->input->post('car_checkout');
			if($data['posts'] = $this->car_module->filter($nam,$car_pickup,$car_checkin,$car_checkout)){
				$this->load->view('templates/header');
				$this->load->view('content/car/car-search-list-page' ,$data);
				$this->load->view('templates/footer');
		    }else{
				$this->load->view('templates/header');
				$this->load->view('content/car/car-search-list-page-result');
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
			$data['posts'] = $this->car_module->modify_filter($modify_check_in,$modify_check_out);
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/hotels/hotel-search-page',$data);
			$this->load->view('templates/footer');
		}else
		{
			$modify_check_in  = $this->input->post('modify_checkin');
			$modify_check_out = $this->input->post('modify_checkout');
			$data['posts'] = $this->car_module->modify_filter($modify_check_in,$modify_check_out);
			$this->load->view('templates/header');
			$this->load->view('content/hotels/hotel-search-page',$data);
			$this->load->view('templates/footer');
		}
	}
	public function insert_car(){
		if ($this->session->userdata('email_address') != '') {
			$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['car_image']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
		        $this->load->view('backend/template/nav');
		        $this->load->view('backend/content/cars/cars_add',$error);
		        $this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and empty($_FILES['car_image']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
		        $this->load->view('backend/template/nav');
		        $this->load->view('backend/content/cars/cars_add',$error);
		        $this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['car_image']['name'][0])){
				!$this->upload->data();
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
		        $this->load->view('backend/template/nav');
		        $this->load->view('backend/content/cars/cars_add',$error);
		        $this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['car_image']['name'][0])){	
				if(!$this->upload->do_upload('car_image')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
			        $data1['posts'] = $this->login_module->get_profile_data(); 
	    			$this->load->view('backend/template/header',$data1);
			        $this->load->view('backend/template/nav');
			        $this->load->view('backend/content/cars/cars_add',$error);
			        $this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$options = array(
					    'status'            => $this->input->post('status'),
				        'car_name'          => $this->input->post('car_name'),
				     	'car_description'   => $this->input->post('editor1'),
				     	'stars'             => $this->input->post('stars'),
					 	'passenger'         => $this->input->post('passenger'),
					 	'car_doors'         => $this->input->post('car_doors'),
					 	'car_image'         => $data['file_name'],
					 	'transmission'      => $this->input->post('transmission'),
					 	'baggage'           => $this->input->post('baggage'),
					 	'airport_pickup'    => $this->input->post('airport_pickup'),
					 	'milage'            => $this->input->post('milage'),
					 	'pick_up'           => $this->input->post('pickup'),
					 	'car_type'          => $this->input->post('car_type'),
				     	'pickup_location1'  => $this->input->post('pickup_location1'),
				     	'dropoff_location1' => $this->input->post('dropoff_location1'),
				     	'dropoff_location2' => $this->input->post('dropoff_location2'),
				     	'dropoff_location3' => $this->input->post('dropoff_location3'),
				     	'dropoff_location4' => $this->input->post('dropoff_location4'),
				     	'dropoff_location5' => $this->input->post('dropoff_location5'),
				     	'dropoff_location6' => $this->input->post('dropoff_location6'),
				     	'dropoff_location7' => $this->input->post('dropoff_location7'),
				     	'dropoff_location8' => $this->input->post('dropoff_location8'),
				     	'dropoff_location9' => $this->input->post('dropoff_location9'),
				     	'dropoff_location10'=> $this->input->post('dropoff_location10'),
				     	'price1            '=> $this->input->post('price1'),
				     	'price2'            => $this->input->post('price2'),
				     	'price3'            => $this->input->post('price3'),
				     	'price4'            => $this->input->post('price4'),
				     	'price5'            => $this->input->post('price5'),
				     	'price6'            => $this->input->post('price6'),
				     	'price7'            => $this->input->post('price7'),
				     	'price8'            => $this->input->post('price8'),
				     	'price9'            => $this->input->post('price9'),
				     	'price10'           => $this->input->post('price10'),
				     	'featured'          => $this->input->post('featured'),
				     	'featured_from'     => $this->input->post('date-from'),
				     	'featured_to'       => $this->input->post('date-to'),
				     	'deposit'           => $this->input->post('deposit'),
				     	'deposit_price'     => $this->input->post('deposit_price'),
				     	'vat_tax'           => $this->input->post('vat_tax'),
				     	'vat_tax_detail'    => $this->input->post('vat_tax_detail'),
				     	'related'           => $this->input->post('related'),
				     	'meta_title'        => $this->input->post('title'),
				     	'meta_keywords'     => $this->input->post('meta_keywords'),
				     	'meta_description'  => $this->input->post('meta_description'),
				     	'policy_options'    => $this->input->post('payment'),
				     	'policy_and_terms'  => $this->input->post('policy'),
	            	);	
					$query =$this->car_module->create($options);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
	        			$this->load->view('backend/template/header',$data1);
				        $this->load->view('backend/template/nav');
				        $this->load->view('backend/content/cars/cars_add');
				        $this->load->view('backend/template/footer');
				    }
				}
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function edit_car(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('cars_add');
			}else{
				//Setting values for tabel columns
				$edit =array(
				 	'status'            => $this->input->post('status'),
			     	'car_name'          => $this->input->post('car_name'),
			     	'car_description'   => $this->input->post('editor1'),
			     	'stars'             => $this->input->post('stars'),
				 	'passenger'         => $this->input->post('passenger'),
				 	'car_doors'         => $this->input->post('car_doors'),
				 	'transmission'      => $this->input->post('transmission'),
				 	'baggage'           => $this->input->post('baggage'),
				 	'airport_pickup'    => $this->input->post('airport_pickup'),
				 	'milage'            => $this->input->post('milage'),
				 	'pick_up'           => $this->input->post('pickup'),
				 	'car_type'          => $this->input->post('car-type'),
			     	'pickup_location1'  => $this->input->post('pickup_location1'),
			     	'dropoff_location1' => $this->input->post('dropoff_location1'),
			     	'dropoff_location2' => $this->input->post('dropoff_location2'),
			     	'dropoff_location3' => $this->input->post('dropoff_location3'),
			     	'dropoff_location4' => $this->input->post('dropoff_location4'),
			     	'dropoff_location5' => $this->input->post('dropoff_location5'),
			     	'dropoff_location6' => $this->input->post('dropoff_location6'),
			     	'dropoff_location7' => $this->input->post('dropoff_location7'),
			     	'dropoff_location8' => $this->input->post('dropoff_location8'),
			     	'dropoff_location9' => $this->input->post('dropoff_location9'),
			     	'dropoff_location10'=> $this->input->post('dropoff_location10'),
			     	'price1            '=> $this->input->post('price1'),
			    	'price2'            => $this->input->post('price2'),
			     	'price3'            => $this->input->post('price3'),
			     	'price4'            => $this->input->post('price4'),
			     	'price5'            => $this->input->post('price5'),
			     	'price6'            => $this->input->post('price6'),
			     	'price7'            => $this->input->post('price7'),
			     	'price8'            => $this->input->post('price8'),
			     	'price9'            => $this->input->post('price9'),
			     	'price10'           => $this->input->post('price10'),
			     	'featured'          => $this->input->post('featured'),
			     	'featured_from'     => $this->input->post('date-from'),
			     	'featured_to'       => $this->input->post('date-to'),
			     	'deposit'           => $this->input->post('deposit'),
			     	'deposit_price'     => $this->input->post('deposit_price'),
			     	'vat_tax'           => $this->input->post('vat_tax'),
			     	'vat_tax_detail'    => $this->input->post('vat_tax_detail'),
			     	'related'           => $this->input->post('related'),
			     	'meta_title'        => $this->input->post('title'),
			     	'meta_keywords'     => $this->input->post('meta_keywords'),
			     	'meta_description'  => $this->input->post('meta_description'),
			     	'policy_options'    => $this->input->post('payment'),
			     	'policy_and_terms'  => $this->input->post('policy'),
				);
				$this->db->set($edit);
				//Transfering data to Model
				$this->car_module->edit_cars($edit,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/cars/cars_add');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function car_page(){	
        if ($this->session->userdata('email_address') != '') {
	        $data['posts'] = $this->car_module->getcars(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/cars',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function car_orders(){
		if ($this->session->userdata('email_address') != '') {
	        $data['posts'] = $this->car_module->get_car_orders(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
	        $this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function user_car_orders(){
		if ($this->session->userdata('email_address') != '') {
	        $data['posts'] = $this->car_module->get_user_car_orders(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
	        $this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/user_orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function extra_car(){
	    if ($this->session->userdata('email_address') != '') {	
			$one['posts'] = $this->car_module->getextra(); // calling Post model method getPosts()
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/extra_car' ,$one);
			$this->load->view('backend/template/footer');
	    }else
	    {
	    	$this->load->view('backend/content/login/login');
	    }
	}
	public function car_settings(){
	    if ($this->session->userdata('email_address') != '') {		
			$data['posts'] = $this->car_module->getcars();
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/car_settings',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_carsettings(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('target', 'target', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/cars/car_settings');
			}else{
				//Setting values for tabel columns
				$set =array(
				 	'target'               => $this->input->post('target'),
				 	'header_title'         => $this->input->post('header_title'),
			     	'feature_cars'         => $this->input->post('feature_cars'),
			     	'display_order'        => $this->input->post('homeorder'),
			     	'listing_cars'         => $this->input->post('listing'),
				 	'display_order1'       => $this->input->post('homeorder1'),
			     	'car_result'           => $this->input->post('search'),
			     	'display_order2'       => $this->input->post('homeorder2'),
			     	'related_cars'         => $this->input->post('related'),
				 	'minimum_price'        => $this->input->post('settings'),
			     	'maximum_price'        => $this->input->post('maximum'),
			     	'check_in'             => $this->input->post('check_in'),
			     	'check_out'            => $this->input->post('check_out'),
				 	'meta_keywords'        => $this->input->post('meta'),
			     	'meta_description'     => $this->input->post('description'),
				);
				//Transfering data to Model
				$this->car_module->create_set($set);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		        $this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/cars/car_settings');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function extra_car_one(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
	        $this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/extra_car_one');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_extra_car(){	
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->car_module->get_single_extracar($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
	        $this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/update_extra_car',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_carone(){
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
		        $this->load->view('backend/content/cars/extra_car_one',$error);
				$this->load->view('backend/template/footer');

			}elseif($this->form_validation->run() == TRUE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
		        $this->load->view('backend/template/nav');
		        $this->load->view('backend/content/cars/extra_car_one',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['thumb']['name'][0])){
				!$this->upload->data();	
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
		        $this->load->view('backend/template/nav');
		        $this->load->view('backend/content/cars/extra_car_one',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['thumb']['name'][0])){
				if(!$this->upload->do_upload('thumb')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
			        $data1['posts'] = $this->login_module->get_profile_data(); 
	    			$this->load->view('backend/template/header',$data1);
			        $this->load->view('backend/template/nav');
			        $this->load->view('backend/content/cars/extra_car_one',$error);
					$this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$one =array(
						'name'               => $this->input->post('name'),
					 	'thumb'              => $data['file_name'],
				     	'status'             => $this->input->post('status'),
				     	'price'              => $this->input->post('price'),
					);
					//Transfering data to Model
					$query =$this->car_module->create_one($one);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
	        			$this->load->view('backend/template/header',$data1);
				        $this->load->view('backend/template/nav');
				        $this->load->view('backend/content/cars/extra_car_one');
						$this->load->view('backend/template/footer');
					}
			    }
		    }
		}
		else
		{
			$this->load->view('backend/content/login/login');
		}
    }
	public function insert_extra_carone(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('extra_car_id');
	    	$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('cars_add');
			}else{
				//Setting values for tabel columns
				$extra_car_update =array(
				 	'name'               => $this->input->post('name'),
			     	'status'             => $this->input->post('status'),
			     	'price'              => $this->input->post('price'),
				);
				$this->db->set($extra_car_update);
				//Transfering data to Model
				$this->car_module->edit_cars_extra($extra_car_update,$id);
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/cars/extra_car_one');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function delete9(){
		$id =$this->input->get('id');
		if ($this->car_module->deletecar($id)) {
			$data['posts'] = $this->car_module->getcars();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/cars',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_all(){
		$id =$this->input->post('ids');
		if ($this->car_module->deletecar($id)) {
			$data['posts'] = $this->car_module->getcars();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/cars');
			$this->load->view('backend/template/footer');
		}
	}
	public function delete10(){
		$id =$this->input->get('id');
		if ($this->car_module->deletecarextra($id)) {
			$data['posts'] = $this->car_module->getextra();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/extra_car',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_extra_cars(){
		$id =$this->input->post('ids');
		if ($this->car_module->deletecarextra($id)) {
			$data['posts'] = $this->car_module->getextra();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/extra_car');
			$this->load->view('backend/template/footer');
		}
	}
}