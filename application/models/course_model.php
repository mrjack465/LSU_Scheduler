<?php

class Course_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_courses($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('courses');
			return $query->result_array();
		}

		$query = $this->db->get_where('courses', array('course_name' => $slug));
		return $query->row_array();
	}

	public function get_course_by_name($slug)
	{
		$query = $this->db->get_where('courses', array('course_name' => $slug));
		return $query->row_array();
	}

	public function get_course_by_code($slug)
	{
		$query = $this->db->get_where('courses', array('course_code' => $slug));
		return $query->row_array();
	}

	public function get_search() {
		$match = $this->input->post('search');
	}
}