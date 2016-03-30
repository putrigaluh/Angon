<?php

class Transaksi_Model extends CI_Model {
    var $table = 'transaksi';
    var $field = 'status';
    public $id_trans;
    public $nama_user;
    public $id_user;
    public $alamat_pengiriman;    
    public $id_kota;
    public $no_telp;
    
    
    public function showTransaksi(){
         
        $sql="select id_transaksi, tgl_transaksi, nama_user, alamat_pengiriman, status 
         from transaksi t, user u where t.id_user = u.id_user ORDER BY id_transaksi DESC ";
        return $this->db->query($sql)->result();
    }

    function update($id, $status) {
        $data = array (
            'status' => $status,
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $data);
    }
    public function insert(){
    
    $tgl=date('Y-m-d');
    //$status ='Pending';
    $data = array(

        'id_transaksi' => $this->input->post('id_transaksi'),
        'tgl_transaksi' => $this->input->post('tgl'),
        'id_user' => $this->input->post('id_user'),
        'alamat_pengiriman' => $this->input->post('alamat_pengiriman'),
        'id_kota' => $this->input->post('kota'),
        'no_telp' => $this->input->post('no_telp'),
        'status' => $this->input->post('status'),
        );
    $insert = $this->db->insert('transaksi', $data); 
    return $insert;

    
    }
   
}

?>