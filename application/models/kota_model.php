<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model extends CI_Model {
	public $id_kota;
	public $id_provinsi;
	public $nama_kota;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	
	public function get_data_kota(){
		$query="select * from kota";
		$q=$this->db->query($query);
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[]=$row;
			}
			return $data;
		}
	}

	public function get_data_provinsi($id_provinsi){
		$this->db->where('kota.id_provinsi', $id_provinsi);
		return $this->db->get('kota')->result();
	}
}
?>