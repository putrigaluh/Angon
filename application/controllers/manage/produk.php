<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends CI_Controller {

public function __construct() {
    parent::__construct();
 }

public function input_produk()
 {
  $this->load->view('manage/input_produk');
 }
 
 public function lihat_produk()
 {
  $this->load->view('manage/lihat_produk');
 }
 
 public function lihat_pesanan()
 {
  
  $this->load->model('transaksi_model');
   $data['daftar_transaksi'] = $this->transaksi_model->showTransaksi();
   $this->load->view('manage/lihat_pesanan', $data);
 }
  public function detail_pesanan()
 {
  $this->load->view('manage/detail_pesanan');
 }
}