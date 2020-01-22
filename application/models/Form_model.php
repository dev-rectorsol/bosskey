<?php
class Form_model extends CI_Model {



    // check valid user by id
    public function get_data(){
        $this->db->select('*');
        $this->db->from('onlineform');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;

    }

    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }




}
