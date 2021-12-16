<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacation extends CI_Controller {
	public function __construct(){
		parent::__construct(); 
	    $this->load->model('vacation_module');// load model
	    $this->load->model('login_module');// load model
	} 
	public function vacations(){
		if ($this->session->userdata('email_address') != '') {
		    $data['posts'] = $this->vacation_module->get_vacation();	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacation',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacations_add(){
	    if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacations_add');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacations_extra(){
		if ($this->session->userdata('email_address') != '') {	
			$data['posts'] = $this->vacation_module->get_vacation_extras();
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacations_extra',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacations_extra_add(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacation_extra_add');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacation_settings(){
		if ($this->session->userdata('email_address') != '') {	
			$data1['posts'] = $this->login_module->get_profile_data(); 
        	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacation_settings');
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacation_search(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);	
			$data['posts'] = $this->vacation_module->get_vacation();
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/vacation/vacation-search',$data);
			$this->load->view('templates/footer');
		}else
		{
			$data['posts'] = $this->vacation_module->get_vacation();
			$this->load->view('templates/header');
			$this->load->view('content/vacation/vacation-search',$data);
			$this->load->view('templates/footer');
		}
	}
	public function vacation_single(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);	
		    $id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_single_vacation($id);	
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/vacation/vacation-single',$data);
			$this->load->view('templates/footer');
		}else
		{
			$id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_single_vacation($id);	
			$this->load->view('templates/header');
			$this->load->view('content/vacation/vacation-single',$data);
			$this->load->view('templates/footer');
		}
	}
	public function book_vacation_order(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "string";
				// $this->load->view('backend/content/hotels/hotel-one');
			}else{
				$book_order =array(
				 	'vacation_id'                 => $this->input->post('vacation_id'),
				 	'vacation_name'               => $this->input->post('vacation_name'),
			     	'vacation_location'           => $this->input->post('vacation_location'),
			     	'vacation_type'               => $this->input->post('vacation_type'),
			     	'vacation_date'               => $this->input->post('vacation_date'),
			     	'vacation_adult_quantity'     => $this->input->post('vacation_adult_quantity'),
				 	'vacation_child_quantity'     => $this->input->post('vacation_child_quantity'),
				 	'vacation_infant_quantity'    => $this->input->post('vacation_infant_quantity'),
				 	'vacation_price'              => $this->input->post('vacation_price'),
				 	'vacation_tax'                => $this->input->post('vacation_tax'),
				 	'vacation_days'               => $this->input->post('vacation_days'),
				 	'vacation_nights'             => $this->input->post('vacation_nights'),
				 	'vacation_total_price'        => $this->input->post('vacation_total_price'),
				 	'vacation_deposit'            => $this->input->post('vacation_deposit'),
			     	'user_name'               	  => $this->input->post('fullname'),
			     	'phone_number'                => $this->input->post('fnumber'),
				 	'email'                       => $this->input->post('email'),
				 	'address'                     => $this->input->post('address'),
				);
			    $query =$this->vacation_module->book_user_order_vacation($book_order);
			    if ($query) {
			    	$id=$this->input->get('id');
					$fullname = $this->input->post('fullname');
			    	$data['post']  = $this->vacation_module->get_single_vacation($id);
			    	$ordr = array_merge($data, $book_order);
			    	$val['posts']  = $this->vacation_module->get_single_user_vacation_order($fullname,$email);
			    	$this->load->view('content/vacation/user_invoice.php',array_merge($ordr, $val));
			    }
			}
		}else
		{
			$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
			if($this->form_validation->run() == FALSE) {
				echo "string";
				// $this->load->view('backend/content/hotels/hotel-one');
			}else{
				$book_order =array(
				 	'vacation_id'                 => $this->input->post('vacation_id'),
				 	'vacation_name'               => $this->input->post('vacation_name'),
			     	'vacation_location'           => $this->input->post('vacation_location'),
			     	'vacation_type'               => $this->input->post('vacation_type'),
			     	'vacation_date'               => $this->input->post('vacation_date'),
			     	'vacation_adult_quantity'     => $this->input->post('vacation_adult_quantity'),
				 	'vacation_child_quantity'     => $this->input->post('vacation_child_quantity'),
				 	'vacation_infant_quantity'    => $this->input->post('vacation_infant_quantity'),
				 	'vacation_price'              => $this->input->post('vacation_price'),
				 	'vacation_tax'                => $this->input->post('vacation_tax'),
				 	'vacation_days'               => $this->input->post('vacation_days'),
				 	'vacation_nights'             => $this->input->post('vacation_nights'),
				 	'vacation_total_price'        => $this->input->post('vacation_total_price'),
				 	'vacation_deposit'            => $this->input->post('vacation_deposit'),
			     	'customer_name'               => $this->input->post('fullname'),
			     	'phone_number'                => $this->input->post('fnumber'),
				 	'email'                       => $this->input->post('email'),
				 	'address'                     => $this->input->post('address'),
				 	'coupon'                      => $this->input->post('coupon_id'),
				);
			    $query =$this->vacation_module->book_order_vacation($book_order);
			    if ($query) {
			    	$id=$this->input->get('id');
					$fullname = $this->input->post('fullname');
			    	$data['post']  = $this->vacation_module->get_single_vacation($id);
			    	$ordr = array_merge($data, $book_order);
			    	$val['posts']  = $this->vacation_module->get_singlevacation_order($fullname);
			    	$this->load->view('content/vacation/invoice.php',array_merge($ordr, $val));
			    }
			}
		}
	}  
	public function search_by_form(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$nam = $this->input->post('vacation_place');
			$vacation_checkin = $this->input->post('vacation_checkin');
			$vacation_type    = $this->input->post('vacation_type');
			if($data['posts'] = $this->vacation_module->filter($nam,$vacation_checkin,$vacation_type)){
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/vacation/vacation-search-page',$data);
			}else{
				$this->load->view('templates/user/header',$data1);
				$this->load->view('content/vacation/vacation-search-page-result');
			}
		}else
		{
			$nam = $this->input->post('vacation_place');
			$vacation_checkin = $this->input->post('vacation_checkin');
			$vacation_type    = $this->input->post('vacation_type');
			if($data['posts'] = $this->vacation_module->filter($nam,$vacation_checkin,$vacation_type)){
				$this->load->view('templates/header');
				$this->load->view('content/vacation/vacation-search-page',$data);
			}else{
				$this->load->view('templates/header');
				$this->load->view('content/vacation/vacation-search-page-result');
			}
		}
	}
	public function vacation_orders(){
		if ($this->session->userdata('email_address') != '') {
			$data['posts'] = $this->vacation_module->get_vacation_orders();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function user_vacation_orders(){
		if ($this->session->userdata('email_address') != '') {
			$data['posts'] = $this->vacation_module->get_user_vacation_orders();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/user_orders',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function vacation_booking(){
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
	        $ad_price  = $this->input->post('adult-quantity');
		    $ch_price  = $this->input->post('child-quantity');
		    $in_price  = $this->input->post('infant-quantity');
		    $total_price  = $ad_price+$ch_price+$in_price;
		    $tax          = ($ad_price+$ch_price+$in_price)/10;
			//Setting values for tabel columns
			$booking_vacation =array(
			 	'vacation_id'          => $this->input->get('id'),
			 	'date'                 => $this->input->post('pickupdate'),
			 	'adult_quantity'       => $this->input->post('adult-quantity'),
		     	'child_quantity'       => $this->input->post('child-quantity'),
		     	'infant_quantity'      => $this->input->post('infant-quantity'),
		     	'total_price'          => $total_price,
		     	'tax'                  => $tax,
			);
			//Transfering data to Model
			$id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_singlevacation($id);
			//Loading View
	        $this->load->view('templates/user/header',$data1);
			$this->load->view('content/vacation/user-vacation-order-page',array_merge($data, $booking_vacation));
			$this->load->view('templates/footer');
		}else
		{
			$ad_price  = $this->input->post('adult-quantity');
		    $ch_price  = $this->input->post('child-quantity');
		    $in_price  = $this->input->post('infant-quantity');
		    $total_price  = $ad_price+$ch_price+$in_price;
		    $tax          = ($ad_price+$ch_price+$in_price)/10;
			//Setting values for tabel columns
			$booking_vacation =array(
			 	'vacation_id'          => $this->input->get('id'),
			 	'date'                 => $this->input->post('pickupdate'),
			 	'adult_quantity'       => $this->input->post('adult-quantity'),
		     	'child_quantity'       => $this->input->post('child-quantity'),
		     	'infant_quantity'      => $this->input->post('infant-quantity'),
		     	'total_price'          => $total_price,
		     	'tax'                  => $tax,
			);
			//Transfering data to Model
			$id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_singlevacation($id);
			//Loading View
	        $this->load->view('templates/header');
			$this->load->view('content/vacation/vacation-order-page',array_merge($data, $booking_vacation));
			$this->load->view('templates/footer');
		}
	}
	public function insert_vacation(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['vacation_image']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacations_add',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and empty($_FILES['vacation_image']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacations_add',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['vacation_image']['name'][0])){
				!$this->upload->data();
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacations_add',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['vacation_image']['name'][0])){
				if(!$this->upload->do_upload('vacation_image')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
					$data1['posts'] = $this->login_module->get_profile_data(); 
		        	$this->load->view('backend/template/header',$data1);
					$this->load->view('backend/template/nav');
					$this->load->view('backend/content/vacation/vacations_add',$error);
					$this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$vacation =array(
					 	'status'                     => $this->input->post('status'),
				     	'vacation_name'              => $this->input->post('vacation_name'),
				     	'vacation_description'       => $this->input->post('editor1'),
				     	'adult_quantity'             => $this->input->post('quantity_adult'),
				     	'child_quantity'             => $this->input->post('quantity_child'),
				     	'infant_quantity'            => $this->input->post('quantity_infant'),
				     	'adult_price'                => $this->input->post('price_adult'),
				     	'child_price'                => $this->input->post('price_child'),
				     	'infant_price'               => $this->input->post('price_infant'),
				     	'stars'                      => $this->input->post('stars'),
				     	'total_days'                 => $this->input->post('total_days'),
				     	'total_nights'               => $this->input->post('total_nights'), 
					 	'vacation_type'              => $this->input->post('vacation_type'),
					 	'vacational_place_image'     => $data['file_name'],
					 	'featured'                   => $this->input->post('featured'),
					 	'featured_from'              => $this->input->post('featured_from'),
					 	'featured_to'                => $this->input->post('featured_to'),
					 	'location1'                  => $this->input->post('location1'),
					 	'location2'                  => $this->input->post('location2'),
					 	'location3'                  => $this->input->post('location3'),
					 	'location4'                  => $this->input->post('location4'),
					 	'location5'                  => $this->input->post('location5'),
					 	'location6'                  => $this->input->post('location6'),
					 	'location7'                  => $this->input->post('location7'),
					 	'location8'                  => $this->input->post('location8'),
					 	'location9'                  => $this->input->post('location9'),
					 	'location10'                 => $this->input->post('location10'),
					 	'deposit'                    => $this->input->post('deposit'),
					 	'deposit_percent'            => $this->input->post('deposit_detail'),
				     	'vat_tax'       	          => $this->input->post('vat_tax'),
				     	'vat_tax_detail'             => $this->input->post('vat_tax_detail'),
				     	'related_vacation'  	      => $this->input->post('related_vacations'),
				     	'map_address_location'       => $this->input->post('google'),
				     	'map_address_latitude'  	  => $this->input->post('latitude'),
				     	'map_address_longitude'  	  => $this->input->post('longitude'),
				     	// 'inclusions'  		      => $this->input->post('meta_title'),
				     	'meta_title'  		          => $this->input->post('meta_title'),
				     	'meta_keywords'  	          => $this->input->post('meta_keyword'),
				     	'meta_descriptions'          => $this->input->post('meta_description'),
				     	'vacational_operator_email'  => $this->input->post('vacation_operators_email'),
				     	'operators_website' 	      => $this->input->post('operator_website'),
				     	'operators_phone_number'     => $this->input->post('operator_phone'),
				     	'operators_address' 	      => $this->input->post('operator_address'),
				     	'payment_option' 	          => $this->input->post('payment_options'),
				     	'policy_and_terms'    		  => $this->input->post('policy_and_terms'),
					);
					//Transfering data to Model
					$query =$this->vacation_module->create_vacation($vacation);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
			        	$this->load->view('backend/template/header',$data1);
						$this->load->view('backend/template/nav');
						$this->load->view('backend/content/vacation/vacations_add');
						$this->load->view('backend/template/footer');
					}
				}
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_vacation(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_single_vacation($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/update_vacation',$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
    }
	public function insert_update_vacation(){
		if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('status', 'status', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
	    		echo "Not Working";
			}else{
				//Setting values for tabel columns
				$vacation_edit =array(
				 	'status'                     => $this->input->post('status'),
			     	'vacation_name'              => $this->input->post('vacation_name'),
			     	'vacation_description'       => $this->input->post('editor1'),
			     	'adult_quantity'             => $this->input->post('quantity_adult'),
			     	'child_quantity'             => $this->input->post('quantity_child'),
			     	'infant_quantity'            => $this->input->post('quantity_infant'),
			     	'adult_price'                => $this->input->post('price_adult'),
			     	'child_price'                => $this->input->post('price_child'),
			     	'infant_price'               => $this->input->post('price_infant'),
			     	'stars'                      => $this->input->post('stars'),
			     	'total_days'                 => $this->input->post('total_days'),
			     	'total_nights'               => $this->input->post('total_nights'), 
				 	'vacation_type'              => $this->input->post('vacation_type'),
				 	'featured'                   => $this->input->post('featured'),
				 	'featured_from'              => $this->input->post('featured_from'),
				 	'featured_to'                => $this->input->post('featured_to'),
				 	'location1'                  => $this->input->post('location1'),
				 	'location2'                  => $this->input->post('location2'),
				 	'location3'                  => $this->input->post('location3'),
				 	'location4'                  => $this->input->post('location4'),
				 	'location5'                  => $this->input->post('location5'),
				 	'location6'                  => $this->input->post('location6'),
				 	'location7'                  => $this->input->post('location7'),
				 	'location8'                  => $this->input->post('location8'),
				 	'location9'                  => $this->input->post('location9'),
				 	'location10'                 => $this->input->post('location10'),
				 	'deposit'                    => $this->input->post('deposit'),
				 	'deposit_percent'            => $this->input->post('deposit_detail'),
			     	'vat_tax'       	          => $this->input->post('vat_tax'),
			     	'vat_tax_detail'             => $this->input->post('vat_tax_detail'),
			     	'related_vacation'  	      => $this->input->post('related_vacations'),
			     	'map_address_location'       => $this->input->post('google'),
			     	'map_address_latitude'  	  => $this->input->post('latitude'),
			     	'map_address_longitude'  	  => $this->input->post('longitude'),
			     	// 'inclusions'  		      => $this->input->post('meta_title'),
			     	'meta_title'  		          => $this->input->post('meta_title'),
			     	'meta_keywords'  	          => $this->input->post('meta_keyword'),
			     	'meta_descriptions'          => $this->input->post('meta_description'),
			     	'vacational_operator_email'  => $this->input->post('vacation_operators_email'),
			     	'operators_website' 	      => $this->input->post('operator_website'),
			     	'operators_phone_number'     => $this->input->post('operator_phone'),
			     	'operators_address' 	      => $this->input->post('operator_address'),
			     	'payment_option' 	          => $this->input->post('payment_options'),
			     	'policy_and_terms'    		  => $this->input->post('policy_and_terms'),
				);
				$this->db->set($vacation_edit); 
				//Transfering data to Model
				$this->vacation_module->update_vacation($vacation_edit,$id);
				echo "<script>alert('Data Updated Successfully');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacations_add');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function update_vacation_extras(){
		if ($this->session->userdata('email_address') != '') {	
			$id =$this->input->get('id');
			$data['post'] = $this->vacation_module->get_vacation_extra_update($id);
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/update_vacation_extra' ,$data);
			$this->load->view('backend/template/footer');
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function insert_vacation_extra(){
		if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('vacation-name', 'vacation-name', 'required|min_length[3]|max_length[35]');
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload',$config);
			if($this->form_validation->run() == FALSE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => 'Give title' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/vacation/vacation_extra_add',$error);
				$this->load->view('backend/template/footer');

			}elseif($this->form_validation->run() == TRUE and empty($_FILES['thumb']['name'][0])){
				$error = array('error_title' => '' , 'error_file' => 'Please choose Image');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/vacation/vacation_extra_add',$error);
				$this->load->view('backend/template/footer');

			}elseif($this->form_validation->run() == FALSE and !empty($_FILES['thumb']['name'][0])){
				!$this->upload->data();	
				$error = array('error_title' => 'Give Title' , 'error_file' => '');
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
			    $this->load->view('backend/template/nav');
			    $this->load->view('backend/content/vacation/vacation_extra_add',$error);
				$this->load->view('backend/template/footer');
			}elseif($this->form_validation->run() == TRUE and !empty($_FILES['thumb']['name'][0])){	
				if(!$this->upload->do_upload('thumb')){
					$error = array('error_title' => '' ,'error_file' => $this->upload->display_errors());
					$data1['posts'] = $this->login_module->get_profile_data(); 
		        	$this->load->view('backend/template/header',$data1);
				    $this->load->view('backend/template/nav');
				    $this->load->view('backend/content/vacation/vacation_extra_add',$error);
					$this->load->view('backend/template/footer');
				}else{
					$data = $this->upload->data();
					$vacation_extra =array(
				 		'name'               => $this->input->post('vacation-name'),
				 		'thumb'              => $data['file_name'],
			     		'status'             => $this->input->post('status'),
			     		'price'              => $this->input->post('vacation-price'),
					);
					//Transfering data to Model
					$query = $this->vacation_module->create_vacation_extra($vacation_extra);
					if ($query) {
						$data1['posts'] = $this->login_module->get_profile_data(); 
		        		$this->load->view('backend/template/header',$data1);
					    $this->load->view('backend/template/nav');
					    $this->load->view('backend/content/vacation/vacation_extra_add');
						$this->load->view('backend/template/footer');
					}
				}
		   	}
		   }else
		   {
		   	    $this->load->view('backend/content/login/login');
		   }
    }
    public function insert_update_vacation_extra(){
    	if ($this->session->userdata('email_address') != '') {
			$id =$this->input->post('id');
	    	$this->form_validation->set_rules('vacation-name', 'vacation-name', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/vacation/extras-one');
			}else{
				//Setting values for tabel columns
				$update_vacation_extra =array(
				 	'name'               => $this->input->post('vacation-name'),
			     	'status'             => $this->input->post('status'),
			     	'price'              => $this->input->post('vacation-price'),
				);
				$this->db->set($update_vacation_extra);
				//Transfering data to Model
				$this->vacation_module->update_vacation_extra_one($update_vacation_extra,$id);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
	        	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacation_extra_add');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
    public function insert_vacation_settings(){
    	if ($this->session->userdata('email_address') != '') {
	    	$this->form_validation->set_rules('target', 'target', 'required|min_length[3]|max_length[35]');
	    	if($this->form_validation->run() == FALSE) {
				$this->load->view('backend/content/vacation/vacation_settings');
			}else{
				//Setting values for tabel columns
				$vacation_setting =array(
				 	'target'                 => $this->input->post('target'),
				 	'header_title'           => $this->input->post('header_title'),
			     	'home_features_vacation' => $this->input->post('home_features'),
			     	'display_order'          => $this->input->post('display_order'),
			     	'listing_vacation'       => $this->input->post('listing_vacation'),
				 	'display_order1'         => $this->input->post('display_order1'),
			     	'search_vacation_result' => $this->input->post('search_vacation'),
			     	'display_order2'         => $this->input->post('display_order2'),
			     	'related_vacation'       => $this->input->post('related_vacation'),
				 	'minimum_price'          => $this->input->post('minimum_price'),
			     	'maximum_price'          => $this->input->post('maximum_price'),
				 	'meta_keywords'          => $this->input->post('meta_keywords'),
			     	'meta_description'       => $this->input->post('meta_descriptions'),
				);
				//Transfering data to Model
				$this->vacation_module->create_vacation_settings($vacation_setting);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$data1['posts'] = $this->login_module->get_profile_data(); 
		    	$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/vacation/vacation_settings');
				$this->load->view('backend/template/footer');
			}
		}else
		{
			$this->load->view('backend/content/login/login');
		}
	}
	public function delete_selected_vacation(){
		$id =$this->input->post('ids');
		if ($this->vacation_module->deleteuser($id)) {
			$data['posts'] = $this->vacation_module->get_vacation();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacation');
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_extra_vacation(){
		$id =$this->input->post('ids');
		if ($this->vacation_module->delete_extra_vacation($id)) {
			$data['posts'] = $this->vacation_module->get_vacation_extras();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacations_extra',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete(){
		$id =$this->input->get('id');
		if ($this->vacation_module->deleteuser($id)) {
			$data['posts'] = $this->vacation_module->get_vacation();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacation',$data);
			$this->load->view('backend/template/footer');
		}
	}
	public function delete_extra(){
		$id =$this->input->get('id');
		if ($this->vacation_module->delete_extra_vacation($id)) {
			$data['posts'] = $this->vacation_module->get_vacation_extras();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/vacation/vacations_extra',$data);
			$this->load->view('backend/template/footer');
		}
	}
}
