<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regis extends CI_Controller {
	public function index(){
		$this->load->model('user_model');
		$this->load->model('kota_model');
		
		$kota['daftar_kota'] = $this->kota_model->get_data_kota();
   		

		if (isset($_POST['btnSubmit'])) {
			$this->user_model->registrasi();
    		redirect('login');
			
		} else {
			$this->load->view('ecomerce/header');
			$this->load->view('register', $kota);
			$this->load->view('ecomerce/footer');
		}
	}

}
?>