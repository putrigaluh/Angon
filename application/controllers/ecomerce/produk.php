<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends MY_Controller {

public function __construct() {
    parent::__construct();
     $this->load->model('produk_model');
     $this->load->model('kategori_model');
    
 }
 	
public function index(){
 	$data['daftar_produk']= $this->produk_model->show_produk();
 	
 	$this->load_page('ecomerce/index', $data);

 }
 function detail($id){
 	$data['det']= $this->produk_model->detail($id);
 	
	$this->load_page('ecomerce/produk_detail', $data);	 
	
 }
  function lihat_toko($id){
 	$data['cari_produk']= $this->produk_model->lihat_toko($id);
 	
	$this->load_page_produk('ecomerce/kategori_grid', $data);	 
	
 }

 function cari_by_kategori($kat){

 	$data['cari_produk']= $this->kategori_model->cari_kategori($kat);
 	
	$this->load_page_produk('ecomerce/kategori_grid', $data);
 }

 function pencarian(){

 	$data['cari_produk']= $this->produk_model->pencarian();
 	if($data['cari_produk'] == null){
 		echo 'error';
 	}else{
 		$this->load_page_produk('ecomerce/kategori_grid', $data);	
 	}
	
 }


function input_keluhan(){
	$this->load->view("ecomerce/header");
	$this->load->view("ecomerce/input_keluhan");
	$this->load->view("ecomerce/footer");
}
 
}
?>