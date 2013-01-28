<?php

class User_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getAll(){
		$query = $this->db->get('users');
		return $query;
	}

	function getMember(){
		$this->db->select(array('first_name','last_name','created_on','name','active'));
		$this->db->from('users');
		$this->db->join('users_groups','users.id = users_groups.user_id');
		$this->db->join('groups','users_groups.group_id = groups.id');
		$this->db->where('groups.id = 2'); 
		$query = $this->db->get();
		return $query;
	}

}