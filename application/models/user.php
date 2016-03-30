<?php
class User extends CI_Model {
    var $table = 'user';
    var $details;

    

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
    }
?>