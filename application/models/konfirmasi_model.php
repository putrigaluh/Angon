<?php
	class Konfirmasi_model extends CI_Model {
	var $table = 'konfirmasi_pembayaran';
	var $details;
	 
	
	public function insert_pembayaran($datainput){
		$insert = $this->db->insert($this->table, $datainput); 
   		 return $insert;
	}


	public function select_pembayaran(){
		 return $this->db->get($this->table)->result();

	}



}
?>