<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('notifikasi_model');
	}

	function buat_notifikasi_admin($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_admin($notif);
	}

	function buat_notifikasi_penjual($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_penjual($notif);
	}

	public function load_page($page = '', $data = ''){

		$this->load->model('produk_model');

		if($this->session->userdata('kategori_user') != 'Pengguna Hasil Ternak'){
	 		$data1['kat'] = $this->produk_model->kategori();
	 	}else if($this->session->userdata('kategori_user') != 'Pengguna Hasil Ternak'){
	 		$data1['dr'] = $this->produk_model->drop();
	 	}
		
		$this->load->view("ecomerce/header", $data1);
		$this->load->view($page, $data);	
		$this->load->view("ecomerce/footer");
    }

}