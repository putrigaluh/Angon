<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends CI_Controller {

public function __construct() {
    parent::__construct();
 }
public function index()
 {
  $this->load->view('manage/input_produk');
 }

public function prosesadd() {
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']    = '1000000';
$config['max_width']  = '10240000';
$config['max_height']  = '76800000';
$this->load->library('upload', $config);
$this->upload->initialize($config);
if ( ! $this->upload->do_upload())
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('manage/input_produk', $error);
}
else
{
$data = array('upload_data' => $this->upload->data());
   $this->load->model('m_produk');
    $this->m_produk->insert();
    redirect('manage/produk/lihat_produk');
}

 
    }
    

public function edit($id) {
    $this->load->model('m_produk');
    $produk = $this->m_produk->edit($id);
    $this->load->vars('p', $produk);
    $this->load->view('manage/edit_produk');
    }

public function prosesedit() {
    $this->load->model('m_produk');
        $this->m_produk->prosesedit();
        redirect('manage/produk/lihat_produk');
    }

 public function lihat_produk()
 {
 	$this->load->model('m_produk');
    $produk = $this->m_produk->index();
    $this->load->vars('p', $produk);
  	$this->load->view('manage/lihat_produk');
 }
 
  public function delete($id) {
        $this->load->model('m_produk');
        $this->m_produk->delete($id);
        redirect('/manage/produk/lihat_produk');
    }
}