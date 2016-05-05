<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {	//notif

	private $last_id_trans ='';
	private $last_id_detail_trans = '';

public function __construct() {
    parent::__construct();
 	$this->load->library('cart');
    $this->load->model('transaksi_model');
    $this->load->model('user_model');
    
 }
 public function index(){
 	 $this->load->model('kota_model');
 	$data['daftar_kota'] = $this->kota_model->get_data_kota();
 	$data['data_pengirim'] = $this->user_model->data_pengirim();
 	$this->load->view('ecomerce/header');
 	$this->load->view('ecomerce/checkout', $data);
 	$this->load->view('ecomerce/footer');
 }
 
 public function check()	{
 	if($this->input->post('submit')){
 		
 		$this->last_id_trans = $this->transaksi_model->insert();
 		
 		$this->load->model('produk_model');
 		foreach($this->cart->contents() as $items){
			
			$this->last_id_detail_trans = $this->transaksi_model->simpan_pesanan($this->last_id_trans, $items);

			// echo $this

			$produk = $this->produk_model->find($items['id']); //ngefind produk sing idne iki
			
		}
		$this->cart->destroy();

 		if($this->last_id_trans){	

 			$notif_admin = array(								//notif
 				'isi_pesan'		=> 'ada 1 pembelian baru',		
 				'waktu'			=> date('Y-m-d'),						
 				'link'			=> 'manage/pesanan/detail_pesanan/'.$this->last_id_trans					
 				);												

 			$this->buat_notifikasi_admin($notif_admin);	

 			$this->summary();

 		} else {
 			echo "error123";
 		}
	}
	
 }

 public function summary(){

 	$sum['sum']= $this->transaksi_model->pesanan_terakhir($this->last_id_trans, $this->last_id_detail_trans);
 	
 	$this->load_page('ecomerce/summary',$sum);
 	
 }

 

public function get_city()
{
    $this->load->library('REST_Ongkir.php');
    
    
    $rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    ));
    
    $result = $rest->post('city/list', array(
        'query' 	=> 'sur', 
        'type' 	=> 'origin',
        'courier' 	=> 'jne',
        'API-Key' 	=> '53f9a309a0f9994922ef59be3b3ccd2b'
    ));
    
    try
    {
        $status = $result['status'];
        
        // Handling the data
        if ($status->code == 0)
        {
            $cities = $result['cities'];
            
            foreach ($cities->item as $item)
            {
                echo 'Kota: ' . $item . '<br />';
            }
        }
        else
        {
            echo 'Tidak ditemukan kota yang diawali "band"';	
        }
        
    }
    catch (Exception $e)
    {
        echo 'Processing error.';
    }
}

}
?>