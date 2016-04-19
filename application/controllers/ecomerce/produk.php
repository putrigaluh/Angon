<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends CI_Controller {

public function __construct() {
    parent::__construct();
     $this->load->model('produk_model');
     $this->load->model('m_produk');
 }

public function index(){
 	$data['daftar_produk']= $this->produk_model->show_produk();
 	$data2['kat'] = $this->m_produk->kategori();
	$this->load->view("ecomerce/header", $data2);
	$this->load->view('ecomerce/index', $data);	

	// $this->load->view('ecomerce/index', array(
	// 	'data' => $data,
	// 	'kat' => $kat));
	$this->load->view("ecomerce/footer");
 }
 function detail_produk($id){
 	$data['detail']= $this->produk_model->show_produk();
 	$this->load->view("ecomerce/header");
	$this->load->view('ecomerce/index', $data);	 
	$this->load->view("ecomerce/footer");
 }
 
}
?>