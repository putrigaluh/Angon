

<?php

class m_produk extends CI_Model {

    public $id_produk;
    public $id_kategori_jenis;
    public $nama_produk;
    public $harga_produk;
    public $stok;
    public $deskripsi;
    public $id_user;
    public $nama_gbr_produk;
    public $userfile;


    //fungsi untuk menampilkan semua data karyawan
    function index() {

        $query = $this->db->get('produk');
        return $query->result();
    }

    //fungsi untuk menambah data karyawan
    function insert() {
        $insert_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_jenis'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
            'gbr_produk' => $this->input->post('userfile'),
        );
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
    function prosesedit() {
        $update_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_jenis'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
            'gbr_produk' => $this->input->post('gbr_produk'),
        );
        $id = $this->input->post('id_produk');
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $update_produk);
    }

    //fungsi yang digunakan untuk query delete
    function delete($id) {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }


/*    function tampil_upload($k){
    $query = $this->db->query("SELECT * FROM angon where id_produk='$k'");
    foreach($query->result_array() as $ok){
    //header('Content-type: image');
    $gbr_produk = $ok['gbr_produk']; 
    }
    //header("Content-type: image/*");
    echo $image;
    }


    function simpan($nama_gbr_produk,$gbr_produk){
    $query = $this->db->query("INSERT INTO angon (nama_gbr_produk,gbr_produk) VALUES ('$nama_gbr_produk','$gbr_produk')");
    return $query;
 }
*/

}
?>
