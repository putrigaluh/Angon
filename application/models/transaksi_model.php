<?php
class Transaksi_Model extends CI_Model {
    var $table = 'transaksi';
    var $details;
  
   
    public function showTransaksi(){
        $sql="select id_transaksi, tgl_transaksi, nama_user, alamat_pengiriman, status 
         from transaksi t, user u where t.id_user = u.id_user ORDER BY id_transaksi DESC ";
        return $this->db->query($sql)->result();
    }
}
?>