<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	public function __Construct(){
	  parent::__Construct ();
	   $this->load->model('PostModel'); 
	   $this->load->model('Insert');// load model 
	 }
 
		public function overview(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/overview');
		$this->load->view('backend/template/footer');
	}
		public function add_hotels(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/add-hotels');
		$this->load->view('backend/template/footer');
	}
		public function add_facilities(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotel-add');
		$this->load->view('backend/template/footer');
	}
	public function add_meta(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-meta');
		$this->load->view('backend/template/footer');
	}
	public function add_contact(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-contact');
		$this->load->view('backend/template/footer');
	}
	public function add_general(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-general');
		$this->load->view('backend/template/footer');
	}
	public function hotel_one(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-one');
		$this->load->view('backend/template/footer');
	}
	public function room_one(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/room-one');
		$this->load->view('backend/template/footer');
	}
	public function rooms(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/rooms');
		$this->load->view('backend/template/footer');
	}
	public function room_extra(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/extra');
		$this->load->view('backend/template/footer');
	}
	public function extras_one(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/extras-one');
		$this->load->view('backend/template/footer');
	}
	public function hotel_reviews(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/reviews');
		$this->load->view('backend/template/footer');
	}
	public function hotel_settings(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/hotels/hotel-settings');
		$this->load->view('backend/template/footer');
	}
		public function cars(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/addcar');
		$this->load->view('backend/template/footer');
	}

	public function policy(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/policy');
		$this->load->view('backend/template/footer');
	}
	public function cars_add(){	
    
        $this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/cars_add');
		$this->load->view('backend/template/footer');
}
	public function insert_car(){
		$this->load->library('form_validation');

    	$this->form_validation->set_rules('car_name', 'car_name', 'required|min_length[5]|max_length[15]');
    	if($this->form_validation->run() == FALSE) {
			$this->load->view('cars_add');
		}else{
			//Setting values for tabel columns
			$options =array(
		     'car_name'         => $this->input->post('car_name'),
		     'car_description'  => $this->input->post('editor1'),
		     'pickup_location1' => $this->input->post('pickup_location1'),
			);
			//Transfering data to Model
			$this->Insert->create($options);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/cars/cars_add');
			$this->load->view('backend/template/footer');
		}
	}
	public function car_page(){	

        $data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/cars',$data);
		$this->load->view('backend/template/footer');
	}
	public function extra_car(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/extra_car');
		$this->load->view('backend/template/footer');
	}
	public function extra_car_one(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/extra_car_one');
		$this->load->view('backend/template/footer');
	}

}