<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends CI_Controller {

public function __construct() {
    parent::__construct();
     $this->load->model('produk_model');
 }

public function index()
 {
 $data['daftar_produk']= $this->produk_model->show_produk();
  $this->load->view('ecomerce/lihat_produk', $data);
 }
 
}
?>