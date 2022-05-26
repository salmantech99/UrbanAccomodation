<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		  parent::__construct();
          $this->load->model('login_module');// load model
          $this->load->model('hotel_module');// load model
	}
	public function register(){	
		$this->load->view('templates/header');
		$this->load->view('content/content/register');
		
	} 
	public function user_profile(){	 
		if ($this->session->userdata('email','password','name') != '') {
			$email = $_SESSION['email'];
			$data1['posts'] = $this->login_module->get_single_user($email);
			$data['post'] = $this->login_module->get_single_hotel_user_booking($email);
			$data2['post2'] = $this->login_module->get_single_car_user_booking($email);
			$data3 = array_merge($data, $data2);
			$data4['post4'] = $this->login_module->get_single_flight_user_booking($email);
			$data5['post5'] = $this->login_module->get_single_vacation_user_booking($email);
			$data6 = array_merge($data3, $data4);
			$data7 = array_merge($data6, $data5);			
			$this->load->view('templates/user/header',$data1);
			$this->load->view('content/content/user-profile',array_merge($data7, $data1));
			$this->load->view('templates/footer');
		}
	} 
	public function profile(){
		if ($this->session->userdata('email_address') != '') {
			// $data['posts'] = $this->login_module->get_admin_data();
			$data1['posts'] = $this->login_module->get_profile_data(); 
	    	$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/login/profile-user',$data1);
			$this->load->view('backend/template/footer');
		}else
		{
            $this->load->view('backend/content/login/login');
		}
	}
	public function login(){	
		$this->load->view('templates/header');
		$this->load->view('content/content/login');
	}
	public function login_validation(){
		$this->form_validation->set_rules('email', 'email', 'required|min_length[3]|max_length[35]');
		if($this->form_validation->run() == TRUE) {
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$result   = $this->login_module->login($email,$password);
			if ($result) { 
				$session_data = array(
                    'email'         => $email,
                    'password'      => $password,
                    'name' => $result[0]->register_name,
 				);

				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Hotels/urban');
			}else
			{
				$this->session->set_flashdata('error','Invalid email and password');
				$this->load->view('templates/header');
				$this->load->view('content/content/login');
// 				$this->load->view('templates/footer');
			}
		}else
		{
            $this->load->view('templates/header');
			$this->load->view('content/content/login');
			$this->load->view('templates/footer');
		}
	}
	public function update_user_profile(){
		if ($this->session->userdata('email','password','name') != '') {
        	$this->form_validation->set_rules('fullname', 'fullname', 'required|min_length[3]|max_length[35]');
        	if($this->form_validation->run() == FALSE) {
    			echo "not updated beacuse form validation wrong";
    		}else{
    			$user_email   = $this->input->post('user_email');
    			$pass         = $this->input->post('password');
    			$confirm_pass = $this->input->post('confirmpassword');
    			//Setting values for tabel columns
    			if ($pass==$confirm_pass) {
    				//Setting values for tabel columns
    				$user_edit =array(
    				 	'register_name'                   => $this->input->post('fullname'),
    			     	'register_email'         		  => $this->input->post('user_email'),
    			     	'register_password'   			  => $this->input->post('password'),
    			     	'confirm_password'                => $this->input->post('confirmpassword'),
    				 	'phone_number'                    => $this->input->post('phone'),
    				 	'address1'                        => $this->input->post('address1'),
    				 	'address2'                        => $this->input->post('address2'),
    				 	'city'                            => $this->input->post('city'),
    				 	'region'                          => $this->input->post('state'),
    				 	'postal_code'                     => $this->input->post('zip'),
    				 	'country'                         => $this->input->post('country'),
    				);
    				$this->db->set($user_edit);
    				//Transfering data to Model
    				 $query = $this->login_module->edit_user_profile($user_edit,$user_email);
    				echo "<script>alert('Data Updated Successfully');</script>";
			    	$email = $_SESSION['email'];
        			$data1['posts'] = $this->login_module->get_single_user($email);
        			$data['post'] = $this->login_module->get_single_hotel_user_booking($email);
        			$data2['post2'] = $this->login_module->get_single_car_user_booking($email);
        			$data3 = array_merge($data, $data2);
        			$data4['post4'] = $this->login_module->get_single_flight_user_booking($email);
        			$data5['post5'] = $this->login_module->get_single_vacation_user_booking($email);
        			$data6 = array_merge($data3, $data4);
        			$data7 = array_merge($data6, $data5);
        			$this->load->view('templates/user/header',$data1);
        			$this->load->view('content/content/user-profile',array_merge($data7, $data1));
        			$this->load->view('templates/footer');
    			}else
    			{
    				echo "<script>alert('Password Not Matched With Confirm Password Try Again');</script>";
    				die();
    			}
    		}
	    }
	    else
	    {
	       $this->load->view('backend/content/login/login'); 
	    }
	}
    public function update_admin_user(){
    	$this->form_validation->set_rules('fname', 'fname', 'required|min_length[3]|max_length[35]');
    	if($this->form_validation->run() == FALSE) {
			redirect(base_url() . 'Login/profile');
		}else{
			//Setting values for tabel columns
			$admin_edit =array(
			 	'username'            => $this->input->post('fname'),
		     	'dob'         		  => $this->input->post('dob'),
		     	'email_address'   			  => $this->input->post('email'),
		     	'password'            => $this->input->post('password'),
			 	'mobile_number'       => $this->input->post('mobile'),
			 	'country'			  => $this->input->post('country'),
			);
			$this->db->set($admin_edit);
			//Transfering data to Model
			 $this->login_module->edit_admin_user($admin_edit);
			echo "<script>alert('Data Updated Successfully');</script>";
			redirect(base_url() . 'Login/profile');
		}
	}
	public function login_user(){
    	$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[35]');
    	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[travo_register.register_email]');
    	if($this->form_validation->run() == FALSE) {
			$error1 = array('error_title' => 'Give title' , 'error_file1' => 'Email Already Exists');
			$this->load->view('templates/header');
			$this->load->view('content/content/register',$error1);
// 			$this->load->view('templates/footer');
		}else{
			$pass         = $this->input->post('password');
			$confirm_pass = $this->input->post('confirm_password');
			//Setting values for tabel columns
			if ($pass==$confirm_pass) {
				$register_user =array(
				 	'register_name'               => $this->input->post('name'),	
				 	'register_email'              => $this->input->post('email'),
			     	'register_password'           => $this->input->post('password'),
			     	'confirm_password'            => $this->input->post('confirm_password'),
			    );
				//Transfering data to Model
				$this->login_module->create_user($register_user);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
			    $this->load->view('templates/header');
			    $this->load->view('content/content/login');
// 			    $this->load->view('templates/footer');
			}else
			{
				$error = array('error_title' => 'Give title' , 'error_file' => 'Your Password Not Matched');
				$this->load->view('templates/header');
				$this->load->view('content/content/register',$error);
// 				$this->load->view('templates/footser');
			}
		}
	}
	public function logout1(){
  		$this->session->unset_userdata('email','password','name');
  		redirect(base_url() . 'Hotels/urban');
	}
}
