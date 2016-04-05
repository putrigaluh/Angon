<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class index extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	}

	public function index() {
	  	$this->load->view('manage/index');
	}

	public function cek() {
	 	$userid = $this->session->userdata('id_user');
		
		$this->load->model('notifikasi_model');
		$notif = $this->notifikasi_model->select_notif();
		
		$j = $notif->num_rows();

		if($j > 0){
	    	echo $j;
		}
	}
 
}