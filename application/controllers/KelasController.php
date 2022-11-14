<?php 
    class kelascontroller extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("KelasModel");
        }
        
        public function tampilkan(){
            $data['isi'] = $this->KelasModel->getAll();
            $this->load->view("index/v_tampil", $data);
        }
    }
?>