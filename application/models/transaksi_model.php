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
        where dt.id_transaksi = t.id_transaksi and dt.id_produk = p.id_produk and t.id_user = u.id_user and p.id_user ='".$id_user."' order by t.tgl_transaksi DESC";

        return $this->db->query($sql)->result();
    }

    public function showTransaksi_by_id($id_transaksi){
         
        
      $id_user =  $this->session->userdata('id_user');   
        
        $sql = "select distinct *  
        from detail_transaksi dt , transaksi t, produk p , user u, kota 
        where dt.id_transaksi = t.id_transaksi 
        and dt.id_produk = p.id_produk 
        and t.id_user = u.id_user 
        and u.id_kota = kota.id_kota 
        and p.id_user ='".$id_user."' 
        and t.id_transaksi = '".$id_transaksi."'";

        return $this->db->query($sql)->row();
    }

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

    function update_status_pembayaran($id) {
        $data = array (
            'status' => "Terbayar",

        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $data);
    }

    public function insert(){
    

        $tgl=date('Y-m-d');
        //$status ='Pending';
        $data = array(

            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_user' => $this->session->userdata('id_user'),
            'nama_pengiriman' => $this->input->post('nama'),
            'toko_pengiriman' => $this->input->post('toko'),
            'alamat_pengiriman' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('notelp'),
            'id_kota' => $this->input->post('kota'),
            'total_bayar' => $this->cart->total(),
            'kodepos' => $this->input->post('kodepos'),
             'status' => 'Pending'
            );
        
            $this->db->set('tgl_transaksi', 'NOW()', FALSE);
           
        $this->db->insert('transaksi', $data); 
        
        return $this->db->insert_id();

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
    function get_id_transaksi(){
        $id_user =  $this->session->userdata('id_user');
        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        return $this->db->get()->result();

    }
    function get_status_transaksi($id_trans){
        $id_user =  $this->session->userdata('id_user');

        $this->db->from('transaksi');
        $this->db->where('id_user',$id_user);
        $this->db->where('id_transaksi',$id_trans);
        return $this->db->get()->row()->status;

    }
}

?>