<?php
    class KPI extends CI_Controller{
        public function KPI(){
            
            $data['title'] = 'Key Performance Indicators';
            $data['assets'] = $this->assets_model->get_assets();

           
    
            $this->load->view('templates/header');
            $this->load->view('KPI/KPI', $data);
            $this->load->view('templates/footer');
            }
    };
?>