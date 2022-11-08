<?php

class M_data extends CI_model{

    function ambil_data(){
        return $this->db->get('biodata');
    }

    function get_one($id){
        return $this->db->get_where('biodata', ['id' => $id]);
    }
    
    function insert($insert){
        return $this->db->insert('biodata', $insert);
    }

    function update($update){
        return $this->db->update('biodata', $update, ['id' => $update['id']]);
    }
    
    function delete($id){
        return $this->db->delete('biodata', ['id' => $id]);
    
    }


}