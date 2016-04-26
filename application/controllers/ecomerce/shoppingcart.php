<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShoppingCart extends CI_Controller {

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('produk_model');
 }



public function buy($id){
 	$product = $this->produk_model->find($id);
 	$data = array(
               'id'      => $product->id_produk,
               'qty'     => 1,
               'price'   => $product->harga_produk,
               'name'    => $product->nama_produk,
               'image'   => $product->gbr_produk
            );

	$this->cart->insert($data);
  $this->load->view('ecomerce/header');
	$this->load->view('ecomerce/cart');
  $this->load->view('ecomerce/footer');
 }

 public function delete($rowid){
 	$this->cart->update(array('rowid' => $rowid, 'qty' =>0));
  //if()
	$this->load->view('ecomerce/cart');	
 }

 function update(){
 	$i=1;
 	foreach($this->cart->contents() as $items){
 		$this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty'.$i]));
 		$i++;
 	}

  $this->load->view('ecomerce/header');
 	$this->load->view('ecomerce/cart');
  $this->load->view('ecomerce/footer');
 }
}
?>