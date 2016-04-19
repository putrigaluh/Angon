<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konfirmasi extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
  
  $this->load->model('transaksi_model');
 }

 public function index(){
 	$this->konfirmasi_penerimaan();
 }

 private function konfirmasi_penerimaan(){
 	$data['pb'] = $this->transaksi_model->pesanan_pembeli();
	$this->load->view('ecomerce/header');
	$this->load->view('ecomerce/konfirmasi2', $data);
  $this->load->view('ecomerce/footer');
 }

 // function update_data($id) {
 //        	$status = $this->input->post('order_status');
 //            $this->transaksi_model->update($id, $status);
 //            redirect('manage/pesanan');
 // }

 //  public function detail_pesanan($id){
 //  //$this->load->view('header');
 //  //$this->load->view('sidebar');  
 //  $details = $this->transaksi_model->details($id);
  
 //  $this->load->vars('p', $details);
 //  $this->load->view('manage/detail_pesanan');
 // }

}
 ?>