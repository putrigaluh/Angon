<?php
	class Notifikasi_model extends CI_Model {
	var $table = 'notifikasi';
	var $details;

	public function select_notif(){
		$this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		return $this->db->get($this->table);
		//$sql = "SELECT * FROM $table INNER JOIN produk USING(id_produk) WHERE produk.id_user='$this->session->userdata('id_user')' and sudahbaca='N'";
		//return $this->db->query($sql)->result();
	}

}
?>