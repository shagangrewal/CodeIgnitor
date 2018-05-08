<?php

class Askvet_model extends CI_Model{

	public function __constuct(){
		$this->load->database();
	}

	public function get_questions(){
			$query = $this->db->get('questions');
			return $query ->result_array();
	}
}


?>