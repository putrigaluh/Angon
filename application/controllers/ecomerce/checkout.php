<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {	//notif

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('transaksi_model');
    
 }
 public function index(){
 	 $this->load->model('kota_model');
 	$data['daftar_kota'] = $this->kota_model->get_data_kota();
 	$this->load->view('ecomerce/header');
 	$this->load->view('ecomerce/checkout', $data);
 	$this->load->view('ecomerce/footer');
 }
 
 public function check()	{
 	if($this->input->post('submit')){
 		$coba= $this->transaksi_model->insert();
 		
 		$id_trans = $this->db->insert_id();
 		$this->load->model('produk_model');
 		foreach($this->cart->contents() as $items){
			$this->transaksi_model->simpan_pesanan("insert into detail_transaksi (id_transaksi, id_produk,jumlah) values('".$id_trans."','".$items['id']."','".$items['qty']."')");

			$id_detail_trans = $this->db->insert_id();
			$produk = $this->produk_model->find($items['id']); //ngefind produk sing idne iki

			$notif_penjual = array(								//notif
 				'isi_pesan'			=> 'ada 1 pembelian baru',	//notif
 				'waktu'			=> 'skrg',						//notif
 				'kepada'		=> $produk->id_user,			//notif
 				'id_detail_transaksi'	=> $id_detail_trans		//notif
 				);												//notif
 			$this->buat_notifikasi_penjual($notif_penjual);

		}
		$this->cart->destroy();


 		if($coba){	
 			$notif_admin = array(								//notif
 				'isi_pesan'			=> 'ada 1 pembelian baru',	//notif
 				'waktu'			=> 'skrg',						//notif
 				'id_transaksi'	=> $id_trans					//notif
 				);												//notif
 			$this->buat_notifikasi_admin($notif_admin);						//notif

 			redirect('ecomerce/produk');
 		} else {
 			echo "error123";
 		}
	}

	echo "error";
 }
 // $this->load->view('ecomerce/deliveryinformation');

}
?>