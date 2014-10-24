<?php

class Professor_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_professors($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('professors');
			return $query->result_array();
		}

		$query = $this->db->get_where('professors', array('professor_name' => $slug));
		return $query->row_array();
	}

	public function get_professor_by_name($slug)
	{
		$query = $this->db->get_where('professors', array('professor_name' => $slug));
		return $query->row_array();
	}

	public function get_professor_by_class($slug)
	{
		$query = $this->db->get_where('professors', array('professor_class' => $slug));
		return $query->result();
	}


	public function get_search() {
		$match = $this->input->post('search');
		
	}
}