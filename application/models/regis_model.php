<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regis_model extends CI_Model {
	public $id_user;
	public $nama_user;
	public $kategori_user;
	public $alamat_user;	
	public $id_kota;
	public $username;
	public $password;

	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
	} 

	public function get_table_name() {
		return 'user';
	}

	public function insert() {
		$this->db->insert($this->get_table_name(), $this);
		redirect('login');
	}

	public function attribute_labels() {
		return [
			'id_user'=>'Id:',
			'nama_user'=>'Nama:',
			'kategori_user'=>'Kategori:',
			'alamat_user'=>'Alamat:',
			'id_kota'=>'Kota:',
			'username'=>'Username:',
			'password'=>'Password:'
		];
	}

	/*public function get_data_kategori(){
		$query="select * from kategori_user";
		$q=$this->db->query($query);
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[]=$row;
			}
			return $data;
		}
	}*/
}
?>