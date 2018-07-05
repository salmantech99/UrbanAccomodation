<?php
class Hotels extends CI_Model {
        public function __construct()
        {
                $this->load->database();
        }


        public function get_hotels($id = FALSE){

	    	if ($id === FALSE){
	    		/* $this->db->get('travo_hotel')  =  Select * from travo_hotel */
	            $query = $this->db->get('travo_hotel');
	            return $query->result_array();
	        }

    		/* $this->db->get_where('travo_hotel',array('id',$id))  =  Select * from travo_hotel where id = '$id' */
	    	$query = $this->db->get_where('travo_hotel', array('id' => $id));
	        return $query->result_array();
        }
}