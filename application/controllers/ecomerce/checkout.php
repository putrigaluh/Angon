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
 		foreach($this->cart->contents() as $items){
		$this->transaksi_model->insertdetail();
		$this->transaksi_model->update_dibeli($items['id'],$items['qty'])
		}
		$this->cart->destroy();
 		if($coba){	
 		redirect('ecomerce/produk');
 		}
 		else{
 			echo "error123";
 		}


 }
 // $this->load->view('ecomerce/deliveryinformation');
 echo "error";

}
}

?>