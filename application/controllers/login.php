<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
        parent::__construct();
        if($this->session->userdata('is_logged_in')) {
          redirect('manage/index');
        }
        $this->load->model('user_model');
  }

  public function index() {
    $this->cek_login();
  }

  public function cek_login() {
      $username    = $this->input->post('username');
      $password   = $this->input->post('password');

      if($username && $password) {
        if($this->user_model->validate_user($username, $password)){
           // $this->user_model->set_session();
            redirect('manage/index');
        } else {
            $this->show_login_page("
            <div id=\"alert\" class=\"alert alert-error\">Username atau password tidak cocok</div>");
        }
      } else {
        $this->show_login_page("
        <div class='alert alert-danger display-hide'>
        <button class='close' data-close='alert'></button>
            
           <span> Enter any username and password. </span>
        </div>
        ");
      }
    }

  function show_login_page($show_error) {
      $data['page'] = 'login';
      $data['error'] = $show_error;
      $this->load->view('flogin', $data);
  }
}

?>