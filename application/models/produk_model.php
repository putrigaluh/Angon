<?php
class Produk_Model extends CI_Model {
  
public function show_produk(){
	 	$user=$this->session->userdata('kategori_user');
        if ($user == 'Peternak'){
        	$sql="select id_produk, nama_produk,gbr_produk,harga_produk,stok,deskripsi from produk, user u where produk.id_user = u.id_user and u.kategori_user='Industri Ternak' ORDER BY id_produk";
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
function kategori(){
        $user=$this->session->userdata('kategori_user');
        if ($user == 'Peternak'){
            $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        }else if($user == 'Pengguna Hasil Ternak'){
            $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'P%'");
        }else{
            $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        }
            return $query->result();
 }
 function drop(){
        $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'P%'");
        return $query->result();
}


 public function cari_kategori($kat){
 	$this->db->where('id_kategori_jenis',$kat);
    return $this->db->get('produk')->result();
}

}
?>