<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konfirmasi extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('detail_transaksi_model');
    $this->load->model('transaksi_model');
 }

 public function index(){
 $this->lihat_status();
 }

 public function lihat_status(){
    if($this->input->post('id_trans') != null){
      $id_trans = $this->input->post('id_trans');
      $data['transaksi']=$this->transaksi_model->get_status_transaksi($id_trans);
      echo($data['transaksi']);
    } else {
      $data['id_transaksi']=$this->transaksi_model->get_id_transaksi();
      $this->load_page('ecomerce/pesanan_saya',$data);
    }
 }

 public function histori_pemesanan(){
 	$data['pesanan_pembeli'] = $this->detail_transaksi_model->pesanan_pembeli();
	
	$this->load_page('ecomerce/histori_pesanan', $data);
  
 }

 public function konfirmasi_penerimaan(){
	   
     if($this->input->post('submit')){
      $id_det_transaksi=$this->input->post("id_detail_trans");
      $this->detail_transaksi_model->update_status_penerimaan($id_det_transaksi);
      $this->detail_transaksi_model->tambah_saldo($id);
      $this->session->set_flashdata('message', 'Terimakasih telah membeli di Angon');
      redirect('ecomerce/konfirmasi_penerimaan');
    }else{
      $data['id_detail_transaksi'] = $this->detail_transaksi_model->get_id_detail_trans();
      
      $this->load_page('ecomerce/konfirmasi_penerimaan',$data);
      
    }
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