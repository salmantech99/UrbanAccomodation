<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_module');
	}
	public function index(){
		$this->load->view('backend/content/login/login');
	}

	public function manage(){
		if ($this->session->userdata('email_address','password','id') != '') {
			// $work['posts'] = $this->hotel_module->getuser(); // calling Post model method getPosts()
			$data['admins'] = $this->login_module->getAdmins(); 
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/admins/all',$data);
			$this->load->view('backend/template/footer');
		}else{
			$this->load->view('backend/content/login/login');
		}
	}

	public function add_admin(){
		if ($this->session->userdata('email_address','password','id') != '') {
			$data1['posts'] = $this->login_module->get_profile_data(); 
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/admins/add');
			$this->load->view('backend/template/footer');
		}else{
			$this->load->view('backend/content/login/login');
		}
	}

	public function storeAdmin()
	{
		if ($this->session->userdata('email_address','password','id') != '') {
			if($this->input->post('password') != $this->input->post('confirm_password')){
				$data1['posts'] = $this->login_module->get_profile_data();
				echo "<script>alert('Password and Confirm Does not match');</script>"; 
				$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/admins/add');
				$this->load->view('backend/template/footer');	
			}else{
				$data = $this->input->post();
				unset($data['confirm_password']);
				$result = $this->login_module->insertAdmin($data);
				echo "<script>alert('Admin Save Successfully');</script>";
				$data1['posts'] = $this->login_module->get_profile_data(); 
				$this->load->view('backend/template/header',$data1);
				$this->load->view('backend/template/nav');
				$this->load->view('backend/content/admins/add');
				$this->load->view('backend/template/footer');
			}
		}else{
			$this->load->view('backend/content/login/login');
		}
	}

	public function update_admin()
	{
		if ($this->session->userdata('email_address','password','id') != '') {
			$id = $this->input->get('id');
			$data1['posts'] = $this->login_module->get_profile_data(); 
			$data['admin'] = $this->login_module->getAdmin($id)[0];
    		$this->load->view('backend/template/header',$data1);
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/admins/edit',$data);
			$this->load->view('backend/template/footer');
		}else{
			$this->load->view('backend/content/login/login');
		}
	}

	public function update()
	{
		if ($this->session->userdata('email_address','password','id') != '') {
			$id = $this->input->get('id');
			$data = $this->input->post();
			$password = $this->input->post('password');
			$cPassword = $this->input->post('confirm_password'); 
			if(!empty($password) || !empty($cPassword)){
				if($password != $cPassword){
					$data1['posts'] = $this->login_module->get_profile_data(); 
					$data['admin'] = $this->login_module->getAdmin($id)[0];
					echo "<script>alert('Password and Confirm Does not match');</script>"; 
					$this->load->view('backend/template/header',$data1);
					$this->load->view('backend/template/nav');
					$this->load->view('backend/content/admins/edit',$data);
					$this->load->view('backend/template/footer');
				}else{
					unset($data['confirm_password']);
					$this->login_module->updateAdmin($id,$data);
					$data1['posts'] = $this->login_module->get_profile_data(); 
						$data['admin'] = $this->login_module->getAdmin($id)[0];
						$this->load->view('backend/template/header',$data1);
						$this->load->view('backend/template/nav');
						$this->load->view('backend/content/admins/edit',$data);
						$this->load->view('backend/template/footer');
				}
			}else{
				if(empty($password)){
					unset($data['password']);
					unset($data['confirm_password']);
				}
				$this->login_module->updateAdmin($id,$data);
				$data1['posts'] = $this->login_module->get_profile_data(); 
					$data['admin'] = $this->login_module->getAdmin($id)[0];
					$this->load->view('backend/template/header',$data1);
					$this->load->view('backend/template/nav');
					$this->load->view('backend/content/admins/edit',$data);
					$this->load->view('backend/template/footer');
			}
		}else{
			$this->load->view('backend/content/login/login');
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$this->login_module->deleteAdmin($id);
		return redirect('/Admin/manage');
	}

	public function delete_selected_admins()
	{
		$ids = explode(',',$this->input->post('ids'));
		foreach($ids as $id){
			$this->login_module->deleteAdmin($id);
		}
		return redirect('/Admin/manage');
	}
}
