<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // check_login_user();
        $this->load->model('common_model');
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
			        $data['page'] = 'Logo';
			    	// $data['count'] = $this->common_model->select_contact('tbl_contact');
			    	// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
					$data['main_content'] = $this->load->view('admin/Setting/logo', $data, TRUE);
	        $this->load->view('admin/index', $data);
		 }
     public function email(){
          $data = array();
              $data['page'] = 'Email';
            // $data['count'] = $this->common_model->select_contact('tbl_contact');
            // $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
          $data['main_content'] = $this->load->view('admin/Setting/email', $data, TRUE);
          $this->load->view('admin/index', $data);
     }


     // public function toll(){
     //      $data = array();
     //          $data['page'] = 'Toll Free';
     //        // $data['count'] = $this->common_model->select_contact('tbl_contact');
     //        // $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
     //      $data['main_content'] = $this->load->view('admin/Setting/tollfree', $data, TRUE);
     //      $this->load->view('admin/index', $data);
     // }


     public function submit_logo()
        {
    			///echo print_r($_POST);exit;

            if ($_POST) {
                 $target_dir = "uploads/logo/";
                                    $target_file = $target_dir .basename($_FILES["logo"]["name"]);
                                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                    $logopic = basename($_FILES["logo"]["name"]);
                                    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

                $data = array(

                  "logo" => $logopic,
                  'added_date'=>date('Y-m-d')
                );
                $data = $this->security->xss_clean($data);
                if (empty($email)) {
                    $user_id = $this->common_model->insert($data, 'logo');
                    //echo print_r($user_id);exit
                    $this->session->set_flashdata('msg', 'User added Successfully');
                    redirect(base_url('admin/setting'));
                } else {
                    $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                    redirect(base_url('admin/setting'));
                }





            }
        }

				public function submit()
			 		{
			 			///echo print_r($_POST);exit;

			 				if ($_POST) {
			 						$data = array(
			 				      'email' => $_POST['email'],
										'tollfree' => $_POST['tollfree'],
			 							'date'=>date('Y-m-d')
			 						);
			 						$data = $this->security->xss_clean($data);
			 						if (empty($email)) {
			 								$user_id = $this->common_model->insert($data, 'setting');
			 								//echo print_r($user_id);exit
			 								$this->session->set_flashdata('msg', 'User added Successfully');
			 								redirect(base_url('admin/setting/email'));
			 						} else {
			 								$this->session->set_flashdata('error_msg', 'Email already exist, try another email');
			 								redirect(base_url('admin/setting/email'));
			 						}





			 				}
			 		}





}
