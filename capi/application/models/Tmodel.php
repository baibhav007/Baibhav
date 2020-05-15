<?php
class Tmodel extends CI_Model
{
	

	function create($formArray)
	{
		$this->db->insert("users" ,$formArray);
	}
	
	function all()
	{
		return $users = $this->db->get('users')->result_array();
	}
	function record()
	{
		return $users = $this->db->get('users')->result_array();
	}
   function edit($formArray)
	{
		$this->db->insert("users" ,$formArray);
	}
	function ap($a)
	{
		$query= $this->db->query("select * FROM users WHERE id = '$a' ");
		return $query->result_array();
	}
	function beta($formArray , $ids)
	{
		$this->db->WHERE('id',$ids); 
		$query = $this->db->update("users" ,$formArray);
		//return $query->result_array();
	}
	function admin($formArray)
	{
		$this->db->insert("see" ,$formArray);
	}
	
	
 }
?>