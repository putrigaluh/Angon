<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tarikdana extends My_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('dana');
 }

 public function lihat_dana(){
    $this->load->model('dana');
    $dana = $this->dana->menampilkan_saldo();
    $rekening = $this->dana->menampilkan_rekening();
    $this->load->vars('d', $dana);
    $this->load->vars('r', $rekening);
    $this->load->view('manage/form_tarikdana');
 }

 public function tarik_dana(){
        $jumlahpenarikan = $this->input->post('jumlah-penarikan');
        $selectbank = $this->input->post('select-bank');
        $namaakun = $this->input->post('nama-akun');
        $nomorrekening = $this->input->post('nomor-rekening');
        $namabank = $this->input->post('nama-bank');
        $katasandi = $this->input->post('kata-sandi');
        
        if ($this->dana->verifikasi_password($katasandi) > 0) {
            $saldo = $this->dana->menampilkan_saldo()->saldo;
            $sisa = $saldo - $jumlahpenarikan;
            if($sisa >= 0){
                $this->dana->update_saldo($sisa);
            } else {
                $this->session->set_flashdata('error', 'masukkan nilai yang sesuai');
            }
        } else {
            $this->session->set_flashdata('error', 'password salah');
        }


        redirect("manage/tarikdana/lihat_dana");
        // $this->buat_notifikasi_admin('tarik dana');
 }
    
}