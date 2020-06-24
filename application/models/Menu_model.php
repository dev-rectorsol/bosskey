<?php
class Menu_model extends CI_Model {

  public function addMenu($data){
    $this->db->insert('menu', $data);
    if ($this->db->affected_rows()>0) {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function allMenuData()
  {
    $this->db->select('id,name');
    $this->db->from('menu');
    $this->db->where('parent_id','0');
    $data=$this->db->get();
    return $data->result_array();
  }

  public function get_all_menuData()
  {
      $this->db->select('*');
      $data=$this->db->get('menu');
      return $data->result_array();
  }

  public function insert($data,$table){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
  }

    public function all()
	{
		return $this->db->get("menu")
					->result_array();
	}

    // check valid user by id
    public function get_data(){
        $this->db->select('*');
        $this->db->from('onlineform');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }
    public function get_category_data(){
        $this->db->select('id,name');
        $this->db->from('menu');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    // function get_category_menu(){
    //      $this->db->select('*');
    //      $this->db->from('category');
    //      $this->db->join('subcategory', 'category.cat_id = subcategory.cat_id');
    //      // $this->db->where('category_id', $id);
    //      $query = $this->db->get();
    //     // echo $this->db->last_query();exit;
    //      $query = $query->result_array();
    //      return $query;
    //    }

    //    function get_menus(){
    //         $this->db->select('cat_name.*,  GROUP_CONCAT(subcategory.subcategory,"/", subcategory.link) AS sub_category');
    //         $this->db->from('category');
    //         $this->db->join('subcategory', 'category.cat_id = subcategory.cat_id', 'INNER');
    //         $this->db->group_by('category.cat_id');
    //         $query = $this->db->get();
    //       // echo $this->db->last_query();exit;
    //         $query = $query->result_array();
    //         return $query;
    //       }

       function get_category(){
            $this->db->select('*');
            $this->db->from('category');
            $query = $this->db->get();
           // echo $this->db->last_query();exit;
            $query = $query->result_array();
            return $query;
          }
          function get_sub_category(){
               $this->db->select('*');
               $this->db->from('subcategory');
               $query = $this->db->get();
              // echo $this->db->last_query();exit;
               $query = $query->result_array();
               return $query;
             }

             function get_coures($id){
                  $this->db->select('*');
                  $this->db->from('course_details');
                  $this->db->where('sub_cat_id',$id);
                  $query = $this->db->get();
                //  echo $this->db->last_query();exit;
                  $query = $query->row();
                  return $query;
                }

             function get_sub_category_by_id($id){
               //echo $id;exit;
                $this->db->select('*');
                $this->db->from('subcategory');
                $this->db->where('cat_id',$id);

                $query=  $this->db->get();
                  //echo $this->db->last_query($query);exit;
                  $query = $query->result_array();
                  return $query;
                }

//     public function menus() {
//     $this->db->select("*");
//     $this->db->from("category");
//     $q = $this->db->get();
//     $final = array();
//     if ($q->num_rows() > 0) {
//         foreach ($q->result() as $row) {
//
//             $this->db->select("*");
//             $this->db->from("subcategory");
//             $this->db->where("category_id", $row->id);
//             $q = $this->db->get();
//             if ($q->num_rows() > 0) {
//                 $row->children = $q->result();
//                  //echo "<pre>";
//                  ///echo print_r($row);exit;
//             }
//             array_push($final, $row);
//         }
//     }
//     return $final;
// }
// function menus() {
//         $this->db->select("*");
//         $this->db->from("menu");
//         $this->db->join("category", "menu.id = category.menu_id", "LEFT");
//         $this->db->join("subcategory", "category.id = subcategory.category_id", "LEFT");
//         $q = $this->db->get();
//         $result = $q->result_array();
//         echo $this->db->last_query();exit;
//                 echo "<pre>";
//         echo print_r($result);exit;
//     }
  // function menus() {
  //   $this->db->select("*");
  //   $this->db->from("menu");
  //   $q = $this->db->get();
  //   $final = array();

  //  //echo "<pre>"; print_r($final); exit();
  //   if ($q->num_rows() > 0) {
  //     $menu = $q->result();
  //     //echo "<pre>"; print_r($menu); exit();
  //     foreach ($menu as $row) {
  //       $this->db->select("*");
  //       $this->db->from("category");
  //       $this->db->where("m_id", $row->m_id);
  //       $q = $this->db->get();
  //       if ($q->num_rows() > 0) {
  //         $row->category = $q->result();
  //         $sub_menu = $row->category;

  //         foreach ($sub_menu as $value) {
  //           $this->db->select("*");
  //           $this->db->from("subcategory");
  //           $this->db->where("cat_id", $value->cat_id);
  //           $q = $this->db->get();
  //           if ($q->num_rows() > 0) {
  //             $row->subcategory = $q->result();
  //           }
  //         }
  //       }
  //       array_push($final, $row);
  //     }

  //   }
  //   return $final;
  // }

// public function menus() {
//     $this->db->select("*");
//     $this->db->from("menu");
//     $q = $this->db->get();
//     $final = array();
//     if ($q->num_rows() > 0) {
//         foreach ($q->result() as $row) {
//
//             $this->db->select("*");
//             $this->db->from("category");
//             $this->db->where("menu_id", $row->id);
//             $q = $this->db->get();
//             if ($q->num_rows() > 0) {
//             $row->children = $q->result();
//             foreach ($row->children as $row1) {
//
//               $this->db->select("*");
//                     $this->db->from("subcategory");
//                     $this->db->where("category_id", $row1->id);
//                     $q = $this->db->get();
//                     if($q->num_rows()>0){
//                         $row->sub_children = $q->result();
//                     }
//     }
//   }
//   $value=array_push($final, $row);
//   echo ($value);exit;
// }
//
//   }
//     return $final;
// }




    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }
    function getCategoryData($menu_id){
      //print_r($menu_id); exit();
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('parent_id', $menu_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }
    function getSubCategoryData($category_id){
      //print_r($menu_id); exit();
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('parent_id', $category_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    function menus(){
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent_id','0');
      $query = $this->db->get();
      return $query->result_array();
    }


}
