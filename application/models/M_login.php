<?php 
/**
* 
*/
class M_login extends CI_model
{
	
	 public function cek_login($username,$password,$table){
        return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N'");
}

 ?>