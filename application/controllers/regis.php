<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regis extends CI_Controller {
	public function index(){
		$this->load->model('regis_model');
		$model = $this->regis_model;
		//$model->get_data_kategori();

		if (isset($_POST['btnSubmit'])) {
			$model->id_user = $_POST['id'];
			$model->nama_user = $_POST['nama'];
			$model->kategori_user = $_POST['kategori'];
			$model->alamat_user = $_POST['alamat'];
			$model->id_kota = $_POST['kota'];				
			$model->username = $_POST['username'];
			$model->password = $_POST['password'];
			$model->insert();

			/*redirect('login'); */

		} else {
			$this->load->view('login', ['model'=>$model]);
		}
	}

}
?>