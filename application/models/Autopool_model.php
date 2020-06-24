<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Autopool_model extends CI_Model
{

  function autopool_requestList()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('role !=', 'admin');
    $this->db->where('auto_pool', 1);
    $this->db->where('auto_pool_status', 'pending');
    $query = $this->db->get();
    return $query->result_array();
  }

  function maxAutoPoolCount()
  {
    $this->db->select('MAX(counts) AS max');
    $this->db->from('auto_pool');
    $query = $this->db->get();
    return $query->row();
  }
  function maxAutoPoolLevel()
  {
    $this->db->select('MAX(level) AS maxlevel');
    $this->db->from('auto_pool');
    $query = $this->db->get();
    return $query->row();
  }

  function listViewById($id){
    $this->db->select('*');
    $this->db->from('menu');
    $this->db->where('parent_id', $id);
    $query = $this->db->get();
    // print_r($this->db->last_query()); exit();
    return $query->result_array();

  }
  function counts($id){
    $this->db->select('COUNT(auto_id) AS childs');
    $this->db->from('auto_pool');
    $this->db->where('parent', $id);
    $query = $this->db->get();
    return $query->row();
  }
  function nextNodeInsert(){
    $this->db->select('auto_id');
    $this->db->from('auto_pool');
    $query = $this->db->get();
    $nodes = $query->result();
    foreach ($nodes as $value) {
      $temp = self::counts($value->auto_id);
      if ($temp->childs == 3) {
        continue;
      }else{
        $this->db->select('*');
        $this->db->from('auto_pool');
        $this->db->where('auto_id', $value->auto_id);
        $sql = $this->db->get();
        $result = $sql->row();
        return $result;
      }

    }
  }

}

?>
