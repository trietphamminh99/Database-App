<?php
    class Element extends CI_Controller{
        public function element(){
            
        $data['title'] = 'Elements';

        $data['elements'] = $this->element_model->get_elements();

        $this->load->view('templates/header');
        $this->load->view('element/elements', $data);
        $this->load->view('templates/footer');
        }


        public function elementPage($id = NULL){
            
            // $this->form_validation->set_rules('Facility #','Facility #','require');
            // $this->form_validation->set_rules('Asset ID','Asset ID','require');
            
            $data['title'] = 'Element #'.$id;
            $data['elements'] = $this->element_model->get_elements($id);
            // $data['element'] = $this->element_model->get_elementDetails($id);
            // $sql = "INSERT INTO `element` VALUES ('$id','','','','','','')";
            // $this->db->query($sql);
             if(empty($data['elements'])){
                 show_404();
                }
            //  if(empty($data['element'])){
            //         $sql = "INSERT INTO `element` VALUES ('$id','','','','','','')";
            //         $this->db->query($sql);
            //         $data['element'] = $this->element_model->get_elementDetails($id);
            //     }
                $this->load->view('templates/header');
                $this->load->view('element/elementPage', $data);
                $this->load->view('templates/footer'); 
        }

        public function updateElement(){

        }


        public function createElement(){
           

            $assets = $this->element_model->getAssetId();

           

            $data['title'] = 'Create Element';
            $data['assets'] = $assets;
       
            $this->form_validation->set_rules('Asset_id','Asset_id','callback_validate_dropdown');
           
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('element/createElement', $data);
                $this->load->view('templates/footer');
            } else {
                $this->element_model->create_element();
                redirect('element');
            }

            
        }
        
        Public function exportElement(){
            $result = $this->db->get('elements')->result_array();

            $filename = 'export_elements.xls';

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


        function validate_dropdown($str)
    {
        if ($str == '-CHOOSE-')
        {
            $this->form_validation->set_message('validate_dropdown', 'Please choose a valid %s');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    }