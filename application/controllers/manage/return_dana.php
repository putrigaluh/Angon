<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Return_dana extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('returndana_model');
 }

 public function index(){
    $this->load->view('ecomerce/header');
    $this->load->view('manage/form_returndana');
    $this->load->view('ecomerce/footer');
 }

 public function insert(){
    $this->returndana_model->insert();
    $this->load->view('');
 }

 public function select(){
    $this->returndana_model->select();
 }
    
}