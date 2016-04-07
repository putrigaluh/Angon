<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi extends CI_Controller {
	
	function __construct() {
		parent::__construct();
        $this->load->model('notifikasi_model');
	}

    public function get() {
        $notifikasi = $this->notifikasi_model->select_notif_admin();
        foreach ($notifikasi as $n) {
        	echo '<li>
            <a href="javascript:;">
                <span class="time">'.$n->waktu.'</span>
                <span class="details">
                    <span class="label label-sm label-icon label-success">
                        <i class="fa fa-plus"></i>
                    </span>
                    '.$n->isi_pesan.' 
                </span>
            </a>
            </li>';
        }
    }

    public function hitung() {
        echo $this->notifikasi_model->hitung_notif_admin();
    }

    // public function beli(){
    //     $this->load->model('notifikasi_model');
    //     //aksjdhfkasjdhfkjsaf
    //     //asdfsadfasdfsdf

    //     //manggil codingan insert ke notif
    // }


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */