<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->model('notifikasi_model');
	}

	function buat_notifikasi_admin($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_admin($notif);
	}

	function buat_notifikasi_penjual($notif){
		$this->load->model('notifikasi_model');
		$this->notifikasi_model->insert_notif_penjual($notif);
	}

}