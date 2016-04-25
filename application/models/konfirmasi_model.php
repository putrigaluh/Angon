<?php
	class Konfirmasi_model extends CI_Model {
	var $table = 'konfirmasi_pembayaran';
	var $details;

	public function insert_rekening(){	
	$data = array(
		'id_rekening' => $this->input->post('id_rekening'),
		'id_user' => $this->session->userdata('id_user'),
        'nama_akun' => $this->input->post('nama_akun'),
        'nama_bank' => $this->input->post('nama_bank'),
        'no_rekening' => $this->input->post('no_rekening')
		);

		$insert = $this->db->insert('rekening', $data); 
   		 return $insert;

   		
   		 
	}
	public function insert_pembayaran($datainput){
		$q = $this->db->query($datainput);
	}



    public function menampilkan_rekening() {
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get('rekening')->result();
    }



}
?>