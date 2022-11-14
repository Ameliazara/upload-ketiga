<?php 
    class kelasmodel extends CI_Model{
            private $table = 'tabel_2101060001';

            public function getAll(){
                return $this->db->get($this->table)->result();
            }
    }
?>