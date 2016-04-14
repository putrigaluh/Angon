<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('regis_model');
        $this->load->model('kota_model');
        
        $model = $this->regis_model;

  }

  public function index() {
    $this->cek_login();
  }

  public function cek_login() {
      $kat = $this->session->userdata('kategori_user');
      $username    = $this->input->post('username');
      $password   = $this->input->post('password');

      if($username && $password) {
        if($this->user_model->validate_user($username, $password)){
          if($kat == 'Peternak' && $kat == 'Industri Ternak'){
            redirect('manage/index');
          }else{
            redirect('ecomerce/produk');
          }
            
        } else {
            $this->show_login_page("
            <div class='alert alert-danger display-hide'>
            <button class='close' data-close='alert'></button>
              <span> username and password anda salah. </span>
            </div>
        ");
        }
      } else {
        $this->show_login_page("
        <div class='alert alert-danger display-hide'>
        <button class='close' data-close='alert'></button>
          <span> Masukkan username and password anda. </span>
        </div>
        ");
      }
    }

  function show_login_page($show_error) {
      //$data['daftar_kat_user'] = $this->regis_model->get_data_kategori();
      $data['daftar_kota'] = $this->kota_model->get_data_kota();
      $data['page'] = 'login';
      $data['error'] = $show_error;
      $this->load->view('flogin', $data);
  }
}

?>