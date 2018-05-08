<?php

class Contact_model extends CI_Model{

	public function __constuct(){
		$this->load->database();
	}

	public function get_contacts($name = FALSE){
		if(slug === FALSE){
			$query = $this->db->get('contact');
			return $query ->result_array();
		}

		$query = $this->db->get_where('contact',array('name' => $name));
			return $query ->row_array();
	}

	    public function create_contact($name,$email,$comments)
    {
        
                $ins_data = array('name'=>$name,
                    'email'=>$email,
                    'comments'=>$comments
                );
                $query = $this->db->insert('contact',$ins_data);
            }
}


?>