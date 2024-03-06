<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class warga extends CI_Model 
{

   
    
    public function getdata()
    {
       return $this->db->get('tb_warga') -> result_array();
       
    }    
    
    public function showdatatoform($id){
        return $this->db->get_where('tb_warga', array('id' => $id)) -> result_array();
    }

    public function updatedata($id, $arrayhasil, $tb){
    $this->db->where('id', $id);
    $this->db->update($tb, $arrayhasil);
    }
                        
}


/* End of file Contoh_model_model.php and path \application\models\Contoh_model\Contoh_model_model.php */
