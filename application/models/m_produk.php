

<?php

class m_produk extends CI_Model {

    public $id_produk;
    public $id_kategori_jenis;
    public $nama_produk;
    public $harga_produk;
    public $stok;
    public $deskripsi;
    public $id_user;
    public $gbr_produk;
    public $userfile;


    //fungsi untuk menampilkan semua data karyawan
    function index() {
        
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

    //fungsi untuk menambah data karyawan
    function insert($url) {
        $insert_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_jenis'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
        );
        $this->db->set('gbr_produk',$url);
        $insert = $this->db->insert('produk', $insert_produk);
        return $insert;
    }

    //fungsi untuk menampilkan data yang akan diedit
    function edit($id) {
        $this->db->where('id_produk', $id);
        $query = $this->db->get('produk');
        return $query;
    }

    //fungsi yang digunakan untuk query update
    function prosesedit($url) {
        $update_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_jenis'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
        );
        $this->db->set('gbr_produk',$url);
        $id = $this->input->post('id_produk');
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $update_produk);    }

    //fungsi yang digunakan untuk query delete
    function delete($id) {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

}
?>
