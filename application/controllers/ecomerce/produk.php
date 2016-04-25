<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends MY_Controller {

public function __construct() {
    parent::__construct();
     $this->load->model('produk_model');
    
 }
 	
public function index(){
 	$data['daftar_produk']= $this->produk_model->show_produk();
 	
 	$this->load_page('ecomerce/index', $data);

 }
 function detail_produk($id){
 	$data['detail']= $this->produk_model->show_produk();
 	
	$this->load_page('ecomerce/index', $data);	 
	
 }

 function pencarian($kat){

 	$data['kategori']= $this->produk_model->cari_kategori($kat);
 	
	$this->load_page('ecomerce/kategori_grid', $data);
 }
 
}
?>