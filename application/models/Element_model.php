<?php 
 class Element_model extends CI_Model{
    public function __construct(){
        $this->load->database();
        
    }
    public function get_elements($id = FALSE)
    {
        if($id === FALSE){
            $query = $this->db->get('elements');
            return $query->result_array();
        }

        $query = $this->db->get_where('elements',array('id' => $id));
        return $query->row_array();
    }
  

    public function get_elementDetails($id = FALSE)
    {
        if($id === FALSE){
            $query = $this->db->get('element');
            return $query->result_array();
        }

        $query = $this->db->get_where('element',array('id' => $id));
        return $query->row_array();
    }



    public function delete_element($id){
  
        $this->db->where('FacilityNo',$id);
        $this->db->delete('assets');

        return true;
   }

   
   public function create_element(){
    //$slug = url_title($this->input->post('Facility #'));
    
    $data = array(
        //'slug' => $slug,
        
        'Asset_id' => $this->input->post('Asset_id'),
        'Asset' => $this->input->post('Asset'),
        'UniformatCode' => $this->input->post('UniformatCode'),
        'UniformatName' => $this->input->post('UniformatName'),
        'Descriptor' => $this->input->post('Descriptor'),
        'LastAssessmentDate' => $this->input->post('LastAssessmentDate'),
        'ActiveAssessment' => $this->input->post('ActiveAssessment'),
        'InstallationYear' => $this->input->post('InstallationYear'),
        'ExpectedUsefulLife' => $this->input->post('ExpectedUsefulLife'),
        'RemainingUsefulLife' => $this->input->post('RemainingUsefulLife'),
        'RenewalYear' => $this->input->post('RenewalYear'),
        'Condition' => $this->input->post('Condition'),
        'ActiveRecommendations' => $this->input->post('ActiveRecommendations'),
        'Quantity' => $this->input->post('Quantity'),
        'DifficultyFactor' => $this->input->post('DifficultyFactor'),
        'ElementCost' => $this->input->post('ElementCost'),
        'VFA' => $this->input->post('VFA')
    );
    return $this->db->insert('elements',$data);
}

    function getAssetId()
        {
            $query = $this->db->get('assets');
            $result = $query->result();

            $Assets_id = array('-CHOOSE-');
            $Asset = array('-CHOOSE-');
            
            for ($i = 0; $i < count($result); $i++)
            {
                array_push($Assets_id, $result[$i]->id);
                array_push($Asset, $result[$i]->Name);
            }
            return array_combine($Assets_id, $Asset);
        }





  }

?>