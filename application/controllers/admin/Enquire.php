<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquire extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // check_login_user();
        $this->load->model('common_model');
        $this->load->model('enquire_model');
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
			        $data['page'] = 'Enquire';
			    	// $data['count'] = $this->common_model->select_contact('tbl_contact');
			    	// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
            $data['enquire'] = $this->enquire_model->get_enquire();
            //echo print_r($data['enquire']);exit;
					$data['main_content'] = $this->load->view('admin/enquire/enquire_list', $data, TRUE);
	        $this->load->view('admin/index', $data);
		 }
		 public function contact(){

					$data = array();
							$data['page'] = 'Contact';
						// $data['count'] = $this->common_model->select_contact('tbl_contact');
						// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
						$data['contact'] = $this->enquire_model->get_contact_data();
						//echo print_r($data['enquire']);exit;
					$data['main_content'] = $this->load->view('admin/enquire/contactlist', $data, TRUE);
					$this->load->view('admin/index', $data);
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
