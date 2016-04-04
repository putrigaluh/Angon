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

 public function prosesadd(){
    
    $url = $this->do_upload();
    if($url){
    $this->load->model('m_produk');
    $this->m_produk->insert($url);
    redirect('manage/produk/lihat_produk');
    }
    else{
        echo"Ada yang salah!";
    }
 }

 public function prosesedit() {
        $link = $this->do_upload();
    $this->load->model('m_produk');
        $this->m_produk->prosesedit($link);
        redirect('manage/produk/lihat_produk');
    }

 
private function do_upload(){
   $type = explode('.', $_FILES["pic"]["name"]);
   $type = $type[count($type)-1];
   $url = "./uploads/".uniqid(rand()).'.'.$type;
   if(in_array($type, array("jpg","jpeg","gif","png")))
    if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
        if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
            return $url;
        return "";
}


public function edit($id) {
    $this->load->model('m_produk');
    $produk = $this->m_produk->edit($id);
    $this->load->vars('p', $produk);
    $this->load->view('manage/edit_produk');
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