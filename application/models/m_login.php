<?php
    class m_login extends CI_Model {
        public function auth($username, $password){
            $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password')");
            return $query;
        }
    }