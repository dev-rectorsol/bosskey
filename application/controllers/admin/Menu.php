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

			 		// $data = array();
			    // $data['page'] = 'category list';
					// $data['main_content'] = $this->load->view('admin/menu/category/category_page', $data, TRUE);
	        // $this->load->view('admin/index', $data);
		 }

     public function category(){
          $data = array();
          $data['page'] = 'Category';
          $data['main_content'] = $this->load->view('admin/menu/category/category_page', $data, TRUE);
          $this->load->view('admin/index', $data);
     }
		 public function cotegory_list(){
					$data = array();
					$data['page'] = 'Category List';
					$data['category'] = $this->menu_model->get_category_data();
					$data['main_content'] = $this->load->view('admin/menu/category/category_list', $data, TRUE);
					$this->load->view('admin/index', $data);
		 }
     public function course(){
          $data = array();
          $data['page'] = 'Course';
          $data['category'] = $this->menu_model->get_category_data();
          $data['main_content'] = $this->load->view('admin/menu/course/subcategory', $data, TRUE);
          $this->load->view('admin/index', $data);
     }

		 public function CouresList(){
					$data = array();
					$data['page'] = 'Course List';
					$data['course'] = $this->menu_model->get('subcategory');
					$data['main_content'] = $this->load->view('admin/menu/course/courseList', $data, TRUE);
					$this->load->view('admin/index', $data);
		 }

		 public function getSubCategory(){
	 		if ($_POST){
	 				$output = '';
	 				$data = $this->menu_model->get_sub_category_by_id($_POST['category_id']);
	 				foreach ($data as $value) {
	 						$output .= '<option value="'.$value["id"].'" myTag="'.$value["id"].'">'.$value['subcategory'].'</option>';
	 				}
	 				echo json_encode($output);
	 		}
	 	}
		public function courcese(){
		 if ($_POST){
      // echo $_POST['id'];exit;
				 $data = $this->menu_model->get_cource_by_id($_POST['id']);
				 // echo print_r($data);exit;
				 if($data){
					 echo 'true';
				 }
				 else{
					 echo 'false';
				 }


		 }
	 }

		  public function course_details(){
					$data = array();
					$data['page'] = 'Add Course';

					$data['category'] = $this->menu_model->get_category_data();
					$data['main_content'] = $this->load->view('admin/menu/course_details/course', $data, TRUE);
					$this->load->view('admin/index', $data);
		 }

		  public function coursedetailsList(){
				 $data = array();
				 $data['page'] = 'Course Details List';
				 $data['course'] = $this->menu_model->course_details('course_details');
				 	 //print_r($data['course']);exit;
				 $data['category'] = $this->menu_model->get_category_data();
				 $data['main_content'] = $this->load->view('admin/menu/course_details/courseDetailsList', $data, TRUE);
				 $this->load->view('admin/index', $data);
		}
		public function editcoursedetailsList($id){
			 $data = array();
			 $data['page'] = 'Course Details List';
			 $data['course'] = $this->menu_model->get_courseData($id,'course_details');
			 //print_r($data['course']);exit;
			 $data['category'] = $this->menu_model->get_category_data();
			 $data['main_content'] = $this->load->view('admin/menu/course_details/editcoursedetails', $data, TRUE);
			 $this->load->view('admin/index', $data);
	}

     public function submit_category()
       {
             if ($_POST) {
               $data = array(
                     'category' => $_POST['category_name'],
										  'status' => 'deactive',
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
                          $this->session->set_flashdata("msg"," Add  Courses  Successfully");
                          redirect(base_url('admin/menu/course'));
                         //echo $user_id;exit;


                       }
                     }
										 public function editcourse($id)
											 {
														 if ($_POST) {
															 $data = array(
																 'subcategory' => $_POST['category_name'],
															   'date'=>date('Y-m-d')
																 );
																 //echo print_r($data);exit;
																 $data = $this->security->xss_clean($data);
																 //-- check duplicate email
																	$this->common_model->update($data,$id, 'subcategory');
																	redirect(base_url('admin/menu/CouresList'));
																 //echo $user_id;exit;
															 }
														 }
														 public function editcoursedetailsdata($id)
															 {
																		 if ($_POST) {
																			 $data = array(
																				 'courseoverview' => $_POST['courseoverview'],
																			   'date'=>date('Y-m-d')
																				 );
																				 //echo print_r($data);exit;
																				 $data = $this->security->xss_clean($data);
																				 //-- check duplicate email
																					$this->common_model->update($data,$id, 'course_details');
																					redirect(base_url('admin/menu/coursedetailsList'));
																				 //echo $user_id;exit;
																			 }
																		 }
														 public function editcategory($id)
															{
																	// echo '<pre>';
																		// echo print_r($_POST);exit;
																		if ($_POST) {
																			$data = array(
																				'category' => $_POST['category'],
																				'date'=>date('Y-m-d')
																				);
																				//echo print_r($data);exit;
																				$data = $this->security->xss_clean($data);
																				//-- check duplicate email
																				 $this->common_model->update($data,$id, 'category');
																				 redirect(base_url('admin/menu/cotegory_list'));
																				//echo $user_id;exit;
																			}
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
				 								  'date'=>date('Y-m-d')

				 						 );
				 						 //echo print_r($data);exit;
				 						 $data = $this->security->xss_clean($data);
				 						 //-- check duplicate email
				 							$this->menu_model->insert($data, 'course_details');
				 							$this->session->set_flashdata("msg"," Add course details  Successfully");
				 							redirect(base_url('admin/menu/course_details'));
				 						 //echo $user_id;exit;


				 					 }

				 				 }
								 public function Deletecourse($id)
								 {
								 $data1=['id'=> $id];
								 $this->common_model->delete($data1,'subcategory');
								 redirect(base_url() . 'admin/menu/CouresList', 'refresh');
								 }

								 public function DeleteCategory($id)
								 {
								 $data1=['id'=> $id];
								 $this->common_model->delete($data1,'category');
								 redirect(base_url() . 'admin/menu/cotegory_list', 'refresh');
								 }
								 public function Deletecoursedeails($id)
								 {
								 $data1=['id'=> $id];
								 $this->common_model->delete($data1,'course_details');
								 redirect(base_url() . 'admin/menu/coursedetailsList', 'refresh');
								 }

								 public function active($id)
										{
												$data = array(
														'status' => 'active',
														// 'unit' => (int)$unit->unit + 1
												);
												$data = $this->security->xss_clean($data);
												$this->common_model->update($data, $id,'category');
												$this->session->set_flashdata('msg', 'Cource active Successfully');
												redirect(base_url('admin/menu/cotegory_list'));
										}
										public function active2($id)
											 {
													 $data = array(
															 'status' => 'deactive',
															 // 'unit' => (int)$unit->unit + 1
													 );
													 $data = $this->security->xss_clean($data);
													 $this->common_model->update($data, $id,'category');
													 $this->session->set_flashdata('msg', 'Cource Deactive Successfully');
													 redirect(base_url('admin/menu/cotegory_list'));
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
