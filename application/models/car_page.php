<?php
class car_page extends CI_Model {
        public function __construct()
        {
                $this->load->database();
        }


        public function get_car_page($id = FALSE){

	    	if ($id === FALSE){
	    		/* $this->db->get('travo_hotel')  =  Select * from travo_hotel */
	            $query = $this->db->get('travo_car');
	            return $query->result_array();
	        }

    		/* $this->db->get_where('travo_hotel',array('id',$id))  =  Select * from travo_hotel where id = '$id' */
	    	$query = $this->db->get_where('travo_car', array('id' => $id));
	        return $query->result_array();
        }
}