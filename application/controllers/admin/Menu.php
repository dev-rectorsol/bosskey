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
			    	// $data['count'] = $this->common_model->select_contact('tbl_contact');
			    	// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
            //$data['enquire'] = $this->form_model->get_data();
            //echo print_r($data['enquire']);exit;

					$data['main_content'] = $this->load->view('admin/menu/category', $data, TRUE);
	        $this->load->view('admin/index', $data);
		 }

     public function category(){
          $data = array();
          $data['page'] = 'Category';
            // $data['count'] = $this->common_model->select_contact('tbl_contact');
            // $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
            //$data['enquire'] = $this->form_model->get_data();
            //echo print_r($data['enquire']);exit;
          $data['main_content'] = $this->load->view('admin/menu/category', $data, TRUE);
          $this->load->view('admin/index', $data);
     }
     public function sub_category(){
          $data = array();
          $data['page'] = 'Sub Category';
            // $data['count'] = $this->common_model->select_contact('tbl_contact');
            // $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
            $data['category'] = $this->menu_model->get_category_data();
          $data['main_content'] = $this->load->view('admin/menu/subcategory', $data, TRUE);
          $this->load->view('admin/index', $data);
     }
		 public function getSubCategory(){
	 		if ($_POST){
	 				$output = '';
	 				$data = $this->menu_model->get_sub_category_by_id($_POST['category_id']);
	 				foreach ($data as $value) {
	 						$output .= '<option value="'.$value["id"].'">'.$value['subcategory'].'</option>';
	 				}
	 				echo json_encode($output);
	 		}
	 	}


		 public function add_course(){
					$data = array();
					$data['page'] = 'Add Course';
						// $data['count'] = $this->common_model->select_contact('tbl_contact');
						// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
						$data['category'] = $this->menu_model->get_category_data();

						//echo print_r($data['subcategory']);exit;
					$data['main_content'] = $this->load->view('admin/menu/course', $data, TRUE);
					$this->load->view('admin/index', $data);
		 }

     public function submit_category()
       {
             // echo '<pre>';
             // echo print_r($_POST);exit;
             if ($_POST) {
               $data = array(
                     'category' => $_POST['category_name'],
                     'date'=>date('Y-m-d')
                 );
                 //echo print_r($data);exit;
                 $data = $this->security->xss_clean($data);
                 //-- check duplicate email
                  $this->menu_model->insert($data, 'category');
                  $this->session->set_flashdata("msg"," Add Category  Successfully");
                  redirect(base_url('admin/menu/category'));
                 //echo $user_id;exit;


               }
             }
             public function submit_subcategory()
               {
                     // echo '<pre>';
                     // echo print_r($_POST);exit;
                     if ($_POST) {

                       $data = array(
                             'category_id' => $_POST['category_id'],
                             'subcategory' => $_POST['category_name'],
                             // 'link' => $_POST['link'],
														 'date'=>date('Y-m-d')

                         );
                         //echo print_r($data);exit;
                         $data = $this->security->xss_clean($data);
                         //-- check duplicate email
                          $this->menu_model->insert($data, 'subcategory');
                          $this->session->set_flashdata("msg"," Add sub Category  Successfully");
                          redirect(base_url('admin/menu/sub_category'));
                         //echo $user_id;exit;


                       }
                     }
                     // public function get_menus() {
										 //
                     // $menus = $this->your_model->menus();
                     // $data = array('menus' => $menus);
                     // $this->load->view('page1', $data);
                     // }

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

					public function submit_course()
				 	 {
				 				 // echo '<pre>';
				 				 //  echo print_r($_POST);exit;
				 				 if ($_POST) {

				 					 $data = array(
										     'category_id' => $_POST['category_id'],
				 								  'subcategory_id' => $_POST['subcategory_id'],
				 								  'courseoverview' => $_POST['courseoverview'],
				 								  // 'shortdetails' => $_POST['shortdetails'],
												  // 'curriculam' => $_POST['curriculam'],
													// 'feesdetails' => $_POST['feesdetails'],
													// 'keytakeaway' => $_POST['keytakeaway'],
													// 'whoshouldattend' => $_POST['whoshouldattend'],
													// 'Potentialcarrergroth' => $_POST['Potentialcarrergroth'],
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

/****************Function login**********************************
     * @type            : Function
     * @function name   : backup
     * @description     : Force database to be downloaded.
     *                    if user or admin click on download button.
     *
     * @param           : null
     * @return          : null
     * ********************************************************** */

    // public function backup($fileName='db_backup.zip'){
    //     $this->load->dbutil();
    //     $backup =& $this->dbutil->backup();
    //     $this->load->helper('file');
    //     write_file(FCPATH.'/downloads/'.$fileName, $backup);
    //     $this->load->helper('download');
    //     force_download($fileName, $backup);
    // }

}
