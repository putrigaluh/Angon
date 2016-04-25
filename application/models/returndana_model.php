<?php
	class Returndana_model extends CI_Model {
	var $table = 'return_dana';
	var $details;

	public function insert() {
        $insert_return = array(
            'id_return' => $this->input->post('id_return'),
            'no_order' => $this->input->post('no_order'),
            'bank' => $this->input->post('bank'),
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'no_rekening' => $this->input->post('no_rekening')
        );
        $insert = $this->db->insert('return_dana', $insert_return);
        return $insert;
	}

	public function select(){
		$this->db->select('*');
		$this->db->from($this->table);
		return $this->db->get()->result();
	}
	
}
?>