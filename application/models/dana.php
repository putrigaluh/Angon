<?php
	class Dana extends CI_Model {
	var $table = 'user';
	var $details;

	public function select_dana(){
		$this->db->select('saldo');
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function insert_dana(){			
		$this->db->insert($this->table); 
	}


	//fungsi untuk menampilkan semua data 
    public function menampilkan_saldo() {
        $this->db->select('saldo');
		$this->db->from($this->table);
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get()->row();
    }

    public function menampilkan_rekening() {
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get('rekening')->result();
    }

    public function verifikasi_password($password){
    	$this->db->from($this->table);
    	$this->db->where('password', $password);
    	$this->db->where('id_user', $this->session->userdata('id_user'));
    	return $this->db->count_all_results();
    }

    public function update_saldo($sisa){
	    	$update_user = array('saldo' => $sisa);

	        $this->db->where('id_user', $this->session->userdata('id_user'));
	        $this->db->update('user', $update_user);
    }


}
?>