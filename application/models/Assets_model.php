<?php  
    class Assets_model extends CI_Model{
        public function __construct(){
            $this->load->database();
            
        }
       


        public function get_assets($id = FALSE)
        {
            if($id === FALSE){
                $query = $this->db->get('assets');
                return $query->result_array();
            }

            $query = $this->db->get_where('assets',array('id' => $id));
            return $query->row_array();
        }

        // public function get_assetDetails($FacilityNo = FALSE)
        // {
        //     if($FacilityNo === FALSE){
        //         $query = $this->db->get('asset_detail');
        //         return $query->result_array();
        //     }

        //     $query = $this->db->get_where('asset_detail',array('FacilityNo' => $FacilityNo));
        //     return $query->row_array();
        // }

        public function create_assets(){
            //$slug = url_title($this->input->post('Facility #'));
            
            $data = array(
                //'slug' => $slug,
                'FacilityNo'=> $this->input->post('FacilityNo'),
                'Name' => $this->input->post('Name'),
                'Address' => $this->input->post('Address'),
                'City' => $this->input->post('City'),
                'Province' => $this->input->post('Province'),
                'FullConditionAssessmentDate' => $this->input->post('FCAD'),
                'YearConstructed' => $this->input->post('YearConstructed'),
                'ElementCount' => $this->input->post('ElementCount'),
                'RecommendationCount' => $this->input->post('RecommendationCount'),
                'VFA' => $this->input->post('VFA'),
                'ReplacementValue' => $this->input->post('ReplacementValue'),
                '3YearRec' => $this->input->post('3YearRec'),
                '3YearFCI' => $this->input->post('3YearFCI'),
                '5YearRec' => $this->input->post('5YearRec'),
                '5YearFCI' => $this->input->post('5YearFCI'),
                '10YearRec' => $this->input->post('10YearRec'),
                '10YearFCI' => $this->input->post('10YearFCI')
            );
            return $this->db->insert('assets',$data);
        }
      
       public function update_asset(){
        
        $data = array(
            //'slug' => $slug,
            'FacilityNo'=> $this->input->post('FacilityNo'),
            'Name' => $this->input->post('Name'),
            'Address' => $this->input->post('Address'),
            'City' => $this->input->post('City'),
            'Province' => $this->input->post('Province'),
            'FullConditionAssessmentDate' => $this->input->post('FCAD'),
            'YearConstructed' => $this->input->post('YearConstructed'),
            'ElementCount' => $this->input->post('ElementCount'),
            'RecommendationCount' => $this->input->post('RecommendationCount'),
            'VFA' => $this->input->post('VFA'),
            'ReplacementValue' => $this->input->post('ReplacementValue'),
            '3YearRec' => $this->input->post('3YearRec'),
            '3YearFCI' => $this->input->post('3YearFCI'),
            '5YearRec' => $this->input->post('5YearRec'),
            '5YearFCI' => $this->input->post('5YearFCI'),
            '10YearRec' => $this->input->post('10YearRec'),
            '10YearFCI' => $this->input->post('10YearFCI')
            );
        
            $this->db->where('FacilityNo',$this->input->post('FacilityNo'));
            return $this->db->update('assets',$data);
      
       }
       
       public function delete_asset($id){
  
            $this->db->where('id',$id);
            $this->db->delete('assets');

            return true;
       }

    }
