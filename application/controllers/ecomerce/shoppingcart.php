<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShoppingCart extends MY_Controller {

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('produk_model');
 }


 function index(){
  $this->load_page('ecomerce/cart');
 }

public function buy($id){
 	$product = $this->produk_model->find($id);
 	$data = array(
               'id'      => $product->id_produk,
               'qty'     => 1,
               'price'   => $product->harga_produk,
               'name'    => $product->nama_produk,
               'deskripsi'    => $product->deskripsi,
               'stok'    => $product->stok
               
            );

	$this->cart->insert($data);
  
	redirect('ecomerce/shoppingcart');
  
 }

 public function delete($rowid){
 	$this->cart->update(array('rowid' => $rowid, 'qty' =>0));
  //if()
	$this->load_page('ecomerce/cart');	
 }

 function update(){
 	$i=1;
 	foreach($this->cart->contents() as $items){
 		$this->cart->update(array(
      'rowid' => $items['rowid'], 
      'qty' => $_POST['qty'.$i]));
 		$i++;
 	}

  
 	$this->load_page('ecomerce/cart');
  
 }
}
?>