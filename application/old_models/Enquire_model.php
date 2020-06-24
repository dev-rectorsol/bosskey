<?php
class Enquire_model extends CI_Model {



    // check valid user by id
    public function get_enquire(){
        $this->db->select('*');
        $this->db->from('enquire');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;

    }
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }
    public function get_contact_data(){
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;

    }



}
