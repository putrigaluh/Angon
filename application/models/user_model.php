<?php
class User_Model extends CI_Model {
    var $table = 'user';
  
    public $id_user;
    public $nama_user;
    public $kategori_user;
    public $alamat_user;    
    public $id_kota;
    public $username;
    public $password;
  
    function validate_user($username, $password) {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get()->result(); 
        if (is_array($result) && count($result) == 1) {
            $this->details = $result[0];
            //$this->set_session();
            return TRUE;
        }
        return FALSE;
    }
   // public function showUser(){
         
      //  $sql="SELECT id_user, nama_user, kategori, alamat_user, nama_kota, username, password FROM user u, kategori_user ku, kota k
       // WHERE u.id_kategori_user=ku.id_kategori_user AND u.id_kota=k.id_kota ORDER BY id_user ASC ";
       // return $this->db->query($sql)->result();
    //}

    //fungsi untuk menampilkan semua data user
    function index() {
        $sql="SELECT id_user, nama_user, kategori_user, alamat_user, nama_kota, username, password FROM user u, kota k
            WHERE  u.id_kota=k.id_kota ORDER BY id_user ASC ";
        $query = $this->db->get('user');
        return $this->db->query($sql)->result();
    }

    //fungsi untuk menampilkan data yang akan diedit
    function edit($id) {
        $sql = "SELECT id_user, nama_user, kategori_user, alamat_user, u.id_kota, nama_kota, username, password FROM user u, kota k
            WHERE u.id_kota=k.id_kota AND id_user = '$id' ORDER BY id_user ASC";
        $query = $this->db->get('user');
        return $this->db->query($sql)->result();
    }

    //fungsi yang digunakan untuk query update
    function prosesedit() {
        $update_user = array(
            'id_user' => $this->input->post('id_user'),
            'nama_user' => $this->input->post('nama_user'),
            'kategori_user' => $this->input->post('kategori_user'),
            'alamat_user' => $this->input->post('alamat_user'),
            'id_kota' => $this->input->post('id_kota'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $id = $this->input->post('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('user', $update_user);
    }

    //fungsi yang digunakan untuk query delete
    function delete($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

}
?>