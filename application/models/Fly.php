<?php
class Fly extends CI_Model {
        public function __construct()
        {
                $this->load->database();
        }


        public function get_flights($id = FALSE){

	    	if ($id === FALSE){
	    		/* $this->db->get('travo_hotel')  =  Select * from travo_hotel */
	            $query = $this->db->get('travo_flight_search_list');
	            return $query->result_array();
	        }

    		/* $this->db->get_where('travo_hotel',array('id',$id))  =  Select * from travo_hotel where id = '$id' */
	    	$query = $this->db->get_where('travo_flight_search_list', array('id' => $id));
	        return $query->result_array();
        }
}