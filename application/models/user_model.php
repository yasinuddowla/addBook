<?php 


	/**
	 * User Model
	 */
	class User_model extends CI_Model
	{
		
		public function get_users()
		{
			$users = $this->db->get('users');
			return $users;
		}
		public function insert($data){
			$this->db->insert('users',$data);
			return;
		}
	}


 ?>