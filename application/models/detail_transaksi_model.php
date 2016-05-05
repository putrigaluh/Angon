<?php

class Detail_Transaksi_Model extends CI_Model {
    var $table = 'detail_transaksi';
    var $field = 'status';
   
    
       public function details($id){
          
          $id_user =  $this->session->userdata('id_user');
       
        $sql = "select * 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        and t.id_transaksi='".$id."'";

        return $this->db->query($sql)->result();
    }
    public function pesanan(){
          
          $id_user =  $this->session->userdata('id_user');
       
        $sql = "select t.id_transaksi, t.tgl_transaksi, t.alamat_pengiriman, t.status, t.id_user, dt.id_produk, p.nama_produk, u.nama_user, t.no_telp 
        from detail_transaksi dt , transaksi t, produk p , user u 
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' 
        ";

        return $this->db->query($sql);
    }

      public function get_jumlahbeli($id_det_trans){
        $this->db->select('jumlah');
        $this->db->from('detail_transaksi');
        $this->db->where('id_det_transaksi',$id_det_trans);
        return $this->db->get()->row();


    }

    function update_status_pemesanan($id, $status) {
        $data = array (
            'status_kirim' => $status,
        );
        $this->db->where('id_det_transaksi', $id);
        $this->db->update('detail_transaksi', $data);
    }
    

    function update_status_penerimaan($id_det_transaksi) {
        $data = array (
            'status_kirim' => "Diterima",
        );
        $this->db->where('id_det_transaksi', $id_det_transaksi);
        $this->db->update('detail_transaksi', $data);
        //if()
    }

    public function tambah_saldo($id_transaksi){
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->where('detail_transaksi.id_transaksi', $id_transaksi);
        $result = $this->db->get()->result();

        foreach ($result as $r) {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('id_user', $r->id_user);
            $result_user = $this->db->get()->row();
            $saldo = $result_user->saldo+($r->harga_produk*$r->jumlah);
            $this->db->where('id_user', $r->id_user);
            $this->db->update('user', array('saldo' => $saldo));
        }
       
    }

       
    function simpan_pesanan($id_trans, $items)
    {
        $query = "insert into detail_transaksi (id_transaksi, id_produk,jumlah,sub_total,status_kirim) values('".$id_trans."','".$items['id']."','".$items['qty']."','".$items['subtotal']."', 'Pending')";
        $this->db->query($query);

        return $this->db->insert_id();
    }

    function pesanan_pembeli(){

        $id_user =  $this->session->userdata('id_user');

        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user', $id_user);
        $this->db->order_by('transaksi.id_transaksi DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function pesanan_terakhir($id_trans, $id_detail_trans){
        $id_user =  $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('transaksi.id_user = '. $id_user. ' AND transaksi.id_transaksi = '. $id_trans, null, FALSE);
        
        $query = $this->db->get();
        // die($this->db->last_query());
        return $query->row();
    }
    function get_id_detail_trans(){
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
        $this->db->join('user','produk.id_user = user.id_user');
        $this->db->where('transaksi.id_user',$id_user);
        return $this->db->get()->result();

    }
    
}

?>