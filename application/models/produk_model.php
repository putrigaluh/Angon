<?php
class Produk_Model extends CI_Model {
public $id_transaksi;
public $tgl_transaksi;
public $id_user;
public $alamat;
public $id_kota;
public $no_telp;
public $status;
 
 
public function show_produk(){
         
        $sql="select * from produk ORDER BY id_produk ";
        return $this->db->query($sql)->result();
    }

public function find($id){
 	$this->db->where ('id_produk', $id);
 	return $this->db->get('produk')->row();
 }

}
?>