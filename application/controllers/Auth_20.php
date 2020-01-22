<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// *************************************************************************
// *                                                                       *
// * Optimum LinkupComputers                              *
// * Copyright (c) Optimum LinkupComputers. All Rights Reserved                     *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: info@optimumlinkupsoftware.com                                 *
// * Website: https://optimumlinkup.com.ng								   *
// * 		  https://optimumlinkupsoftware.com							   *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// *                                                                       *
// *************************************************************************

//LOCATION : application - controller - Auth.php

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        // $this->load->model('common_model');
    }


    public function index(){

          $data = array();
          $data['page'] = 'Auth';
          $this->load->view('admin/login', $data);
        }
    



 /****************Function login**********************************
     * @type            : Function
     * @function name   : log
     * @description     : Authenticatte when uset try lo login.
     *                    if autheticated redirected to logged in user dashboard.
     *                    Also set some session date for logged in user.
     * @param           : null
     * @return          : null
     * ********************************************************** */
    public function log(){

        $data = array();
        if($_POST){
            $query = $this->login_model->validate_user();

            //-- if valid
            if($query){
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->first_name,
                        'unit' => $row->unit,
                        'packegeId' => $row->packegeId,
                        'city' => $row->city,
                        'created_by' => $row->created_by,
                        'payment_verification' => $row->payment_verification,
                        'status' => $row->status,
                        'phone' =>$row->mobile,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $url = base_url('admin/dashboard');
                }
                if ($this->session->userdata('role') == 'admin'){
                  redirect(base_url() . 'admin/dashboard', 'refresh');

            }else{
               redirect(base_url() . 'auth', 'refresh');
            }

        }else{
            redirect(base_url() . 'auth', 'refresh');
        }
    }
  }

 /*     * ***************Function logout**********************************
     * @type            : Function
     * @function name   : logout
     * @description     : Log Out the logged in user and redirected to Login page
     * @param           : null
     * @return          : null
     * ********************************************************** */

    // function logout(){
    //     $this->session->sess_destroy();
    //     $data = array();
    //     $data['page'] = 'logout';
    //     $data['main_content'] = $this->load->view('web/home', $data, TRUE);
    //     $this->load->view('web/index', $data);
    // }

    function logout(){
        $this->session->sess_destroy();
       redirect(base_url() . 'home', 'refresh');
    }

       function forget_pass()
    {
      if($this->session->userdata('id')){
          redirect(base_url() . 'admin/dashboard', 'refresh');
        }
        $data=array();

        if (isset($_POST['change'])) {
            $user_email=$this->input->post('email');
            $row=$this->common_model->change_pass($user_email);
            if ($row)
            {
                // print_r($row->email);
                // exit();
                $str="abcdefghhi12345";
                $pass=substr(str_shuffle($str),5,5);
                $data=array(
                    'password'=>md5($pass)
                );
                $this->common_model->update_pass($row->email,$data);


                /*Mail Code*/
                $to = $user_email;
                $subject = "Password";
                $txt = "Your password is $pass .";
                $header = "Content-Type: Text/HTML";
                // $headers = "From: password@example.com" . "\r\n" .
                // "CC: ifany@example.com";

                mail($to,$subject,$txt,$header);
                $this->session->set_tempdata("success","Please Check your Email ",2);
                redirect(current_url());
            }
            else
            {
                $this->session->set_tempdata("error","Enter Correct Email ID",2);
                redirect(current_url());
            }


        }

        else{
          $data = array();
          $data['page'] = 'Auth';
          $this->load->view('admin/forget_pass', $data);
        }
    }

}
