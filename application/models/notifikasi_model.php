<?php
	class Notifikasi_model extends CI_Model {
	var $table1 = 'notifikasi_admin';
	var $table2 = 'notifikasi_penjual';
	var $details;

	public function select_notif_admin(){
		// $this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		return $this->db->get($this->table1)->result();
		//$sql = "SELECT * FROM $table INNER JOIN produk USING(id_produk) WHERE produk.id_user='$this->session->userdata('id_user')' and sudahbaca='N'";
		//return $this->db->query($sql)->result();
	}

	public function select_notif_penjual(){
		$this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		return $this->db->get($this->table2);
	}

	public function hitung_notif_admin(){
		// $this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->FROM($this->table1);
		return $this->db->count_all_results();
	}

	public function hitung_notif_penjual(){
		$this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->FROM($this->table2);
		return $this->db->count_all_results();
	}

	// public function insert_notif(){
	// 	//kodingan insert notif 
	// }

}
?>