<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Menu extends CI_Controller {
        public function __construct(){
            parent::__construct();
            // check_login_user();
            $this->load->model('common_model');
            $this->load->model('menu_model');
            $this->load->library("multi_menu");
        }
/****************Function login**********************************
* @type            : Function
* @function name   : index
* @description     : This redirect to dashboard automatically
*
*
* @param           : null
* @return          : null
* ********************************************************** */
        public function index(){
            $data = array();
            $data['page'] = 'category list';
            $data['main_content'] = $this->load->view('admin/menu/category', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function createMenu(){
            $data = array();
            $data['page'] = 'Memu';
            if ($_POST) {
            $data = array(
                         'name' => $_POST['menu_name']
                         //'m_date'=>date('Y-m-d')
                     );
                     //echo print_r($data);exit;
                    $data = $this->security->xss_clean($data);
                    $status=$this->menu_model->addMenu($data);
                    if ($status=="true") {
                    $this->session->set_flashdata("msg"," Add Menu  Successfully");
                    redirect(base_url('admin/menu/createMenu'));
                      }
            }
            $data['main_content'] = $this->load->view('admin/menu/menu', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function category(){
            $data = array();
            $data['page'] = 'Category';
            $data['menu_data']=$this->menu_model->allMenuData();
            // echo "<pre>";
            // print_r($data['menu_data']); exit();
            $data['main_content'] = $this->load->view('admin/menu/category', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function sub_category(){
            $data = array();
            $data['page'] = 'Sub Category';
            $data['menu_data']=$this->menu_model->allMenuData();
            $data['category'] = $this->menu_model->get_category_data();
            //echo print_r($data['enquire']);exit;
            $data['main_content'] = $this->load->view('admin/menu/subcategory', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function add_course(){
            $data = array();
            $data['page'] = 'Add Course';
            // $data['count'] = $this->common_model->select_contact('tbl_contact');
            // $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
            $data['menu_data']=$this->menu_model->allMenuData();
            $data['category'] = $this->menu_model->get_category_data();
            //$data['category'] = $this->menu_model->get_category_data();
            //$data['subcategory'] = $this->menu_model->get_sub_category();
            //echo print_r($data['subcategory']);exit;
            $data['main_content'] = $this->load->view('admin/menu/course', $data, TRUE);
            $this->load->view('admin/index', $data);
        }
        public function submit_category(){
            // echo '<pre>';
            // echo print_r($_POST);exit;
                 if ($_POST) {
                   $data = array(
                        'parent_id' => $_POST['menu_id'],
                        'name' => $_POST['category_name']
                     );
                     //echo print_r($data);exit;
                      $this->menu_model->insert($data, 'menu');
                      $this->session->set_flashdata("msg"," Add Category  Successfully");
                      redirect(base_url('admin/menu/category'));
                     //echo $user_id;exit;
                   }
                 }
                public function submit_subcategory(){
                   // echo '<pre>';
                   //    echo print_r($_POST);exit;
                    if ($_POST) {
                        $data = array(
                            'parent_id' => $_POST['category_id'],
                            'name' => $_POST['subcategory'],
                            'link' => $_POST['link']
                        );
                        //echo print_r($data);exit;
                        $data = $this->security->xss_clean($data);
                        //-- check duplicate email
                        $this->menu_model->insert($data, 'menu');
                        $this->session->set_flashdata("msg"," Add sub Category  Successfully");
                        redirect(base_url('admin/menu/sub_category'));
                        //echo $user_id;exit;
                    }
                }
             public function active2($id)
                {
                    $data = array(
                        'status' => 'Done',
                        // 'unit' => (int)$unit->unit + 1
                    );
                    $data = $this->security->xss_clean($data);
                    $this->common_model->update($data, $id,'enquire');
                    $this->session->set_flashdata('msg', 'User active Successfully');
                    redirect(base_url('admin/enquire'));
                }
        public function add_subcategory()
            {
        if ($_POST) {
        $output = '';
        $data = $this->common_model->get_all_states_by_id($_POST['country_id']);
        foreach ($data as $value) {
        $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
        }
        echo json_encode($output);
        }else{
        }
            }
        public function get_menus() {
            $menus = $this->menu_model->menus();
            $data = array('menus' => $menus);
            $this->load->view('page1', $data);
        $data['main_content'] = $this->load->view('admin/menu/subcategory', $data, TRUE);
                  $this->load->view('admin/index', $data);
        }
        public function submit_course(){
          // echo '<pre>';
              // echo print_r($_POST);exit;
              if ($_POST) {
              $data = array(
               'sub_category_id' => $_POST['sub_category_id'],
               'course_overview' => $_POST['course_overview'],
               'course_details' => $_POST['course_details'],
               'date'=>date('Y-m-d')
              );
              //echo print_r($data);exit;
              $data = $this->security->xss_clean($data);
              //-- check duplicate email
             $this->menu_model->insert($data, 'course_details');
             $this->session->set_flashdata("msg"," Add course details  Successfully");
             redirect(base_url('admin/menu/add_course'));
              //echo $user_id;exit;
              }
        }


            public function getCategory(){
              if ($_POST) {
                $output = '';
                $data = $this->menu_model->getCategoryData($_POST['menu_id']);
                foreach ($data as $value) {
                    $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
                }
                echo json_encode($output);
              }
            }

            public function getSubCategory(){
              if ($_POST){
                  $output = '';
                  $data = $this->menu_model->getSubCategoryData($_POST['category_id']);
                  foreach ($data as $value) {
                      $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
                  }
                  echo json_encode($output);
              }
            }

    }
