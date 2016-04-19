<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class index extends CI_Controller {

public function __construct() {
    parent::__construct();
 }

public function index()
 {
 	//$this->load->view('manage/header');
 	//$this->load->view('manage/sidebar');
  	$this->load->view('manage/index');
 }
 
}