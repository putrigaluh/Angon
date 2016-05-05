<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShoppingCart extends MY_Controller {

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('produk_model');
    $this->load->model('kota_model');
 }


 function index(){
  $data['daftar_kota']=$this->kota_model->get_data_kota();
  $this->load_page('ecomerce/cart',$data);
 }

public function buy($id){
 	$product = $this->produk_model->find($id);
 	$data = array(
               'id'           => $product->id_produk,
               'qty'          => 1,
               'price'        => $product->harga_produk,
               'name'         => $product->nama_produk,
               'image'        => $product->gbr_produk,
               'deskripsi'    => $product->deskripsi,
               'stok'         => $product->stok,
               'id_user'      => $product->id_user,
               'nama_user'    => $product->nama_toko
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
 public function get_cost() {
    $data['produk_user']=$this->produk_model->find();
    $this->load->library('REST_Ongkir.php');
    
    $rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    ));
    
    $result = $rest->post('cost/find', array(
        'from'  => $this->input->post(''), 
        'to'    => $this->input->post('kota'),
        'weight'  => 1000, 
        'courier' => 'jne',
        'API-Key'   => '53f9a309a0f9994922ef59be3b3ccd2b'
    ));
    
    try
    {
        $status = $result['status'];
        
        // Handling the data
        if ($status->code == 0)
        {
            $prices = $result['price'];
            $city = $result['city'];
            
            echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';
            
            foreach ($prices->item as $item)
            {
                echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';
            } 
        }
        else
        {
            echo 'Tidak ditemukan jalur pengiriman dari surabaya ke jakarta';
        }
        
    }
    catch (Exception $e)
    {
        echo 'Processing error.';
    }
}
}
?>