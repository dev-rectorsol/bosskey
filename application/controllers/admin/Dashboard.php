<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			        $data['page'] = 'Dashboard';
			    	// $data['count'] = $this->common_model->select_contact('tbl_contact');
			    	// $data['count_bec'] = $this->common_model->select_contact('tbl_becomeassociate');
					$data['main_content'] = $this->load->view('admin/home', $data, TRUE);
	        $this->load->view('admin/index', $data);
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
