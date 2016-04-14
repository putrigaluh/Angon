<?php
class Produk_Model extends CI_Model {
  
public function show_produk(){
	 	$user=$this->session->userdata('kategori_user');
        if ($user == 'Peternak'){
        	$sql="select id_produk, nama_produk,harga_produk,stok,deskripsi from produk, user u where produk.id_user = u.id_user and u.kategori_user='Industri Ternak' ORDER BY id_produk";
    	}else if($user == 'Pengguna Hasil Ternak'){
    		$sql="select id_produk, nama_produk,harga_produk,stok,deskripsi from produk, user u where produk.id_user = u.id_user and u.kategori_user='Peternak' ORDER BY id_produk";
    	}else{
    		$sql="select id_produk, nama_produk,harga_produk,stok,deskripsi from produk";
    	}
        return $this->db->query($sql)->result();
    }

public function find($id){					//dipake notif juga
 	$this->db->where ('id_produk', $id);
 	return $this->db->get('produk')->row();
}
 public function kategori(){
 	
}

}
?>