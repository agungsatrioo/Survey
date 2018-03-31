<?php
    class Model extends CI_Model {
        public function select()
        {
            $query = $this->db->get('survey');
            return $query->result_array();
        }

        public function select_where($id)
        {
            $query = $this->db->get_where('survey', array('id' => $id));
            return $query->result_array();
        }

        public function delete_where($id)
        {
            $this->db->query("DELETE FROM survey WHERE id=$id");
        }

    }