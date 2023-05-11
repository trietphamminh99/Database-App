<?php
    class Slam extends CI_Controller{
        public function assets(){
            
        $data['title'] = 'Assets';

        $data['assets'] = $this->assets_model->get_assets();

       // $this->load->model('assets_model');
         
        $this->load->view('templates/header');
        $this->load->view('slam/assets', $data);
        $this->load->view('templates/footer');
        }


        public function create(){
            $data['title'] = 'Create Assets';

            $this->form_validation->set_rules('FacilityNo','FacilityNo','required|is_unique[assets.FacilityNo]');
            $this->form_validation->set_rules('Name','Name','required|is_unique[assets.Name]');
        
           // $this->form_validation->set_rules('FacilityNo','FacilityNo','is_unique');
            $this->form_validation->set_rules('Asset ID','Asset ID','require');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('slam/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->assets_model->create_assets();
                redirect('slam');
            }

            
        }


       

        public function assetsPage($id = NULL){
            
            // $this->form_validation->set_rules('Facility #','Facility #','require');
            // $this->form_validation->set_rules('Asset ID','Asset ID','require');
            
            $data['assets'] = $this->assets_model->get_assets($id);
           // $data['asset'] = $this->assets_model->get_assetDetails($FacilityNo);
             if(empty($data['assets'])){
                 show_404();
                }
            $sql = "INSERT INTO `asset` VALUES ('$id','','','','','','','0','')";
            //  if(empty($data['asset'])){
            //         $sql = "INSERT INTO `asset` VALUES ('$FacilityNo','','','','','','','0','')";
            //         $this->db->query($sql);
            //         $data['asset'] = $this->assets_model->get_assetDetails($FacilityNo);
            //     }
            $data['title'] = 'Assets';
                $this->load->view('templates/header');
                $this->load->view('slam/assetsPage', $data);
                $this->load->view('templates/footer'); 
        }

        Public function exportExcel(){
            $result = $this->db->get('assets')->result_array();

            $filename = 'export.xls';

            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=\"$filename\"");

            $isPrintHeader =false;
            foreach($result as $row){
                if (!$isPrintHeader){
                    echo implode("\t",array_keys($row))."\n";
                    $isPrintHeader = true;
                }
                echo implode("\t",array_values($row))."\n";

            }
            exit();
        }

        public function edit($id){
          
            $data['assets'] = $this->assets_model->get_assets($id);

            if(empty($data['assets'])){
                show_404();
               }
               
               $data['title'] = 'Edit Asset #'.$id;
            $this->load->view('templates/header');
            $this->load->view('slam/edit', $data);
            $this->load->view('templates/footer');
        }

        public function updateAsset(){
            
            $this->assets_model->update_asset();
            
            redirect('slam');
        }


        public function deleteAsset($id){
            $sql = "DELETE FROM elements WHERE Asset_id= $id;";
            $this->db->query($sql);
            $this->assets_model->delete_asset($id);
            redirect('slam');
        }
    }