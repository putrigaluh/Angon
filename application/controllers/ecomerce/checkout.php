<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('transaksi_model');
    
 }
 public function index(){
 	$this->load->view('ecomerce/deliveryinformation');
 }
 
 public function check(){
 	if($this->input->post('submit')){
 		$coba=$this->transaksi_model->insert();
 		//$id_trans = "select id_transaksi from transaksi order by tgl_transaksi DESC";
 		$id_trans = $this->db->insert_id();
 		foreach($this->cart->contents() as $items){
		$this->transaksi_model->simpan_pesanan("insert into detail_transaksi (id_transaksi,id_produk,jumlah,total_harga) values('".$id_trans."','".$items['id']."','".$items['qty']."','".$items['subtotal']."')");
		
		}
		$this->cart->destroy();

 		if($coba){	
 		redirect('ecomerce/produk');
 		}
 		else{
 			echo "error123";
 		}
	}

	echo "error";
 }
 // $this->load->view('ecomerce/deliveryinformation');

}

?>