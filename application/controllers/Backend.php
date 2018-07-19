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
		public function insert_hotel(){
		$this->load->library('form_validation');

    	$this->form_validation->set_rules('hotel_name', 'hotel_name', 'required|min_length[5]|max_length[15]');
    	if($this->form_validation->run() == FALSE) {
			$this->load->view('hotel_one');
		}else{
			//Setting values for tabel columns
			$values =array(
			 'status'              => $this->input->post('status'),
		     'hotel_name'          => $this->input->post('hotel_name'),
		     'car_description'     => $this->input->post('editor1'),
		     'stars'               => $this->input->post('stars'),
			 'hotel_type'          => $this->input->post('hotel_type'),
			 'location'            => $this->input->post('location'),
			 'airport_pickup'      => $this->input->post('airport_pickup'),
			 'featured'            => $this->input->post('featured'),
			 'featured_to'         => $this->input->post('featured_to'),
			 'featured_from'       => $this->input->post('featured_from'),
		     'var_tax'       	   => $this->input->post('var_tax'),
		     'related_hotels'  	   => $this->input->post('related_hotels'),
		     'hotel_area'  		   => $this->input->post('google'),
		     'latitude'  		   => $this->input->post('latitude'),
		     'longitude'  		   => $this->input->post('longitude'),
		     'hotel_extras'  	   => $this->input->post('check1'),
		     'meta_title'  		   => $this->input->post('meta_title'),
		     'meta_keyword'  	   => $this->input->post('meta_keyword'),
		     'hotel_email'  	   => $this->input->post('hotel_email'),
		     'hotel_website' 	   => $this->input->post('hotel_website'),
		     'hotel_contact' 	   => $this->input->post('hotel_phone'),
		     'check_in' 		   => $this->input->post('check_in'),
		     'check_out' 		   => $this->input->post('check_out'),
			);
			//Transfering data to Model
			$this->Insert->create_hotels($values);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/nav');
			$this->load->view('backend/content/hotels/hotel_one');
			$this->load->view('backend/template/footer');
		}
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
			 'status'            => $this->input->post('status'),
		     'car_name'          => $this->input->post('car_name'),
		     'car_description'   => $this->input->post('editor1'),
		     'stars'             => $this->input->post('stars'),
			 'passenger'         => $this->input->post('passenger'),
			 'car_doors'         => $this->input->post('car_doors'),
			 'transmission'      => $this->input->post('transmission'),
			 'baggage'           => $this->input->post('baggage'),
			 'airport_pickup'    => $this->input->post('airport_pickup'),
			 'car_type'          => $this->input->post('car_type'),
		     'pickup_location1'  => $this->input->post('pickup_location1'),
		     'pickup_location2'  => $this->input->post('pickup_location2'),
		     'pickup_location3'  => $this->input->post('pickup_location3'),
		     'pickup_location4'  => $this->input->post('pickup_location4'),
		     'pickup_location5'  => $this->input->post('pickup_location5'),
		     'pickup_location6'  => $this->input->post('pickup_location6'),
		     'pickup_location7'  => $this->input->post('pickup_location7'),
		     'pickup_location8'  => $this->input->post('pickup_location8'),
		     'pickup_location9'  => $this->input->post('pickup_location9'),
		     'pickup_location10' => $this->input->post('pickup_location10'),
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
		     'var_tax'           => $this->input->post('var_tax'),
		     'related'           => $this->input->post('related'),
		     'meta_title'        => $this->input->post('title'),
		     'meta_keywords'     => $this->input->post('meta_keywords'),
		     'meta_description'  => $this->input->post('meta_description'),
		     'policy_options'    => $this->input->post('payment'),
		     'policy_and_terms'  => $this->input->post('policy'),

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
	public function car_settings(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/car_settings');
		$this->load->view('backend/template/footer');
	}
	public function extra_car_one(){	
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/nav');
		$this->load->view('backend/content/cars/extra_car_one');
		$this->load->view('backend/template/footer');
	}

}