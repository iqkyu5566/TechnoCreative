<?php 
/**
* 
*/
class M_admin extends CI_Model
{
	
	function user(){
		return $this->db->query("select*from operator");
	}

	function selectdata($where='') {
		return $this->db->query("select*from $where");
	}

	function getParentMenu(){
		$query = "select * from menu where parent_id = '0' AND status ='1' order by menu_id asc";
		return $this->db->query($query);
	}
}
 ?>