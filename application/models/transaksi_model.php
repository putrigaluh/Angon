<?php

class Transaksi_Model extends CI_Model {
    var $table = 'transaksi';
    var $field = 'status';
    
    
    
    public function showTransaksi(){
         
        //$sql="select id_transaksi, tgl_transaksi, nama_user, alamat_pengiriman, status 
         //from transaksi t, user u where t.id_user = u.id_user ORDER BY id_transaksi DESC ";
    
      $id_user =  $this->session->userdata('id_user');   
        
        $sql = "select distinct t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk , u.nama_user 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' ";

        return $this->db->query($sql)->result();
    }

    public function details($id){
         $id_user =  $this->session->userdata('id_user'); 
        
        $sql = "select t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk ,dt.total_harga, u.nama_user, t.no_telp 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        and t.id_transaksi='".$id."'";

        return $this->db->query($sql);
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
        
        'id_user' => $this->input->post('id_user'),
        'alamat_pengiriman' => $this->input->post('alamat_pengiriman'),
        // 'id_kota' => $this->input->post('kota'),
        // 'no_telp' => $this->input->post('no_telp'),
         'status' => 'Pending'
        );
         $this->db->set('tgl_transaksi', 'NOW()', FALSE);
       
    $insert = $this->db->insert('transaksi', $data); 
    return $insert;

    
    }
    
    function simpan_pesanan($datainput)
    {
        $q = $this->db->query($datainput);
    }
}

?>