<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			parent::__construct();
		 $this->load->model('Common_model');
		 $this->load->model('login_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data = array();
		$data['page'] = 'HOME';
	  $data['country'] = $this->Common_model->select('country');
		$data['phone'] = $this->Common_model->get_phonecode();
		$data['state'] = $this->Common_model->get_states_by_id();
		$data['main_content'] = $this->load->view('web/home', $data, TRUE);
		$this->load->view('web/index', $data);
  }
  public function about(){
	$data = array();
	$data['page'] = 'ABOUT';
	$data['main_content'] = $this->load->view('web/about', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function coursedetail(){
	$data = array();
	$data['page'] = 'COURSEDETAILS';
	$data['main_content'] = $this->load->view('web/coursedetail', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function onlineapply(){
	$data = array();
	$data['page'] = 'ONLINEAPPLY';
	$data['main_content'] = $this->load->view('web/onlineapply', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function term(){
	$data = array();
	$data['page'] = 'TERM';
	$data['main_content'] = $this->load->view('web/term', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  public function privacy(){
	$data = array();
	$data['page'] = 'PRIVACY';
	$data['main_content'] = $this->load->view('web/privacy', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function faq(){
	$data = array();
	$data['page'] = 'FAQ';
	$data['main_content'] = $this->load->view('web/faq', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  /*Our Courses*/
  public function businessadministration(){
	$data = array();
	$data['page'] = 'BusinessAdministration';
	$data['main_content'] = $this->load->view('web/masterprograminbusinessadministration11months', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function masterprogramhumanresourcemanagement(){
	$data = array();
	$data['page'] = 'masterprogramhumanresourcemanagement';
	$data['main_content'] = $this->load->view('web/masterprogramhumanresourcemanagement', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function masterprogramsupplychainmanagement(){
	$data = array();
	$data['page'] = 'masterprogramsupplychainmanagement';
	$data['main_content'] = $this->load->view('web/masterprogramsupplychainmanagement', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  public function masterprograminternationalbusiness(){
	$data = array();
	$data['page'] = 'masterprograminternationalbusiness';
	$data['main_content'] = $this->load->view('web/masterprograminternationalbusiness', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function  masterprogrambusinessadministrationcertifications(){
	$data = array();
	$data['page'] = 'masterprogrambusinessadministrationcertifications';
	$data['main_content'] = $this->load->view('web/masterprogrambusinessadministrationcertifications', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  public function  businessadministrationc11months(){
	$data = array();
	$data['page'] = 'businessadministrationc11months';
	$data['main_content'] = $this->load->view('web/businessadministrationc11months', $data, TRUE);
	$this->load->view('web/index', $data);
  }


public function contact(){
	$data = array();
	$data['page'] = 'CONTACT';
	$data['main_content'] = $this->load->view('web/contact', $data, TRUE);
	$this->load->view('web/index', $data);
  }
	public function submit_contact()
		{
					// echo '<pre>';
					// echo print_r($_POST);exit;
					$email=$this->input->post('business_email');
					if ($_POST) {
						$data = array(
									'first_name' => $_POST['first_name'],
									'last_name' => $_POST['last_name'],
									'business_email' => $_POST['business_email'],
									'phone_number'=> $_POST['phone_number'],
									'job_title' => $_POST['job_title'],
									'date'=>date('Y-m-d')
							);
             //echo print_r($data);exit;
							$data = $this->security->xss_clean($data);
							//-- check duplicate email
							 $this->Common_model->insert($data, 'contact');
							 $this->session->set_flashdata("msg","contact Successful");
							 // redirect(base_url('contact'));
							 $row=$this->Common_model->select_contact_data($email);
						  	echo print_r($row) ;exit;
						 	if ($row)
						 {
						 	//	echo "ok";exit;
						 	//	echo print_r($row);exit;
						 	//	echo $row->email;exit;
						 	//echo $row;exit;
						 		/*Mail; Code*/
						 		$to = $row->business_email;
						 		$subject = "Enquire";
						 		$txt = "check";
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

							//echo $user_id;exit;
						}

						$data['page_title'] = 'Bank Account Detail';
						redirect(base_url('contact'));
			}

	public function submit_onlineform()
		{
					// echo '<pre>';
					// echo print_r($_POST);exit;
					$code=$this->input->post('country_code');
					$phone=$this->input->post('phone_number');
					if ($_POST) {
						$data = array(
									'fname' => $_POST['fname'],
									'lname' => $_POST['lname'],
									'street' => $_POST['street'],
									'apartment'=> $_POST['apartment'],
									'zipcode' => $_POST['zipcode'],
									'country' =>$_POST['country'],
									'state' => $_POST['state'],
									'phone' => $code.$phone,
									'email' => $_POST['email'],
									'program' => $_POST['program'],
									'radio' => $_POST['selector'],
									'date'=>date('Y-m-d')
							);
             //echo print_r($data);exit;
							$data = $this->security->xss_clean($data);
							//-- check duplicate email
							 $this->Common_model->insert($data, 'onlineform');
							 $this->session->set_flashdata("msg","Form Apply Successfully");
							 redirect(base_url('onlineapply'));
							//echo $user_id;exit;


						}

						$data['page_title'] = 'Bank Account Detail';
						redirect(base_url('onlineapply'));
			}


	public function add_enquire()
		{
					// echo '<pre>';
					// echo print_r($_POST);exit;
				  	$code=$this->input->post('phonecode');
						$phone=$this->input->post('phone');
						$email1=$this->input->post('email');

					//	echo $email;exit;
	      	if ($_POST) {
						$data = array(
	                'name' => $_POST['name'],
	                'email' => $_POST['email'],
	                'phone' => $code.$phone,
									'country' =>$_POST['country'],
	                'state' => $_POST['state'],
	                'city' => $_POST['city'],
									'certificate' => $_POST['certificate'],
									'date'=>date('Y-m-d')
	            );
         //echo print_r($data);exit;
	          	$data = $this->security->xss_clean($data);
	          	//-- check duplicate email
	             $this->Common_model->insert($data, 'enquire');
							//echo $user_id;exit;
							$row=$this->Common_model->change_pass($email1);
						//	echo print_r($row) ;exit;
							if ($row)
            {
							//	echo "ok";exit;
							//	echo print_r($row);exit;
							//	echo $row->email;exit;
							//echo $row;exit;
                /*Mail; Code*/
                $to = $row->email;
                $subject = "Enquire";
                $txt = "check";
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

	        	$data['page_title'] = 'Bank Account Detail';
						redirect(base_url('home'));
	    }

			// public function add_enquire()
		  //      {
			// 			 $code=$this->input->post('phonecode');
			// 			 $phone=$this->input->post('phone');
			// 			 $email1=$this->input->post('email');
		  //          	if ($_POST){
			//
		 	// 				$data = array(
			// 					'name' => $_POST['name'],
 			// 				 'email' => $_POST['email'],
 			// 				 'phone' => $code.$phone,
 			// 				 'country' =>$_POST['country'],
 			// 				 'state' => $_POST['state'],
 			// 				 'city' => $_POST['city'],
 			// 				 'certificate' => $_POST['certificate'],
 			// 				 'date'=>date('Y-m-d')
		  //                                 );
			//
		  //                $data = $this->security->xss_clean($data);
		  //                $user_id = $this->Common_model->insert($data, 'enquire');
		  //               // echo  $user_id;
		  //                $data['value']= $this->Common_model->select_row('enquire', $user_id );
		  //                //echo print_r($data['value']);
		  //               // echo $data['value']->email;exit;
			//
		  //     $config = Array(
		  //              'protocol' => 'smtp',
		  //              'smtp_host' => 'ssl://smtp.googlemail.com',
		  //              'smtp_port' => 25,
		  //              'smtp_user' => 'info@rectorsol.com', // change it to yours
		  //              'smtp_pass' => 'shash#13', // change it to yours
		  //              'mailtype' => 'html',
		  //              'charset' => 'iso-8859-1',
		  //              'wordwrap' => TRUE
		  //        );
		  //          // $message = 'hello';
		  //          $this->load->library('email', $config);
		  //          $this->email->set_newline("\r\n");
		  //          $this->email->from($data['value']->email); // change it to yours
		  //          $this->email->to('artisinghh11@gmail.com');// change it to yours
		  //          $this->email->subject('enquire');
		  //          $this->email->message('hello');
		  //        if($this->email->send())
		  //     {
			//
		  //      	$this->session->set_flashdata('error_msg', 'Enquire submited ');
		 	//     	redirect(base_url('home'));
			//
		  //     }
		  //     else
		  //    {
		  //        show_error($this->email->print_debugger());
		  //        $this->session->set_flashdata('error_msg', 'your enquire not submited plese try agian');
		 	// 	redirect(base_url('home'));
			//
		  //    }
			//
		  //        }
			//
		  //      }


	public function getcountry()
	{
			if ($_POST) {
				$output = '';
				$data = $this->Common_model->get_all_country_by_phonecode($_POST['id']);
				foreach ($data as $value) {
				 $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
					 // $output .= '<input value="'.$value["name"].'" id="" style="color:black"/>';
				}
				echo json_encode($output);
			}else{

			}

	}
	public function getState()
	{
			if ($_POST) {
				$output = '';
				$data = $this->Common_model->get_all_states_by_id($_POST['country_id']);
				foreach ($data as $value) {
					$output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
				}
				echo json_encode($output);
			}else{

			}

	}

	public function getCite()
	{
			if ($_POST) {
				$output = '';
				$data = $this->Common_model->get_all_city_by_id($_POST['state_id']);
				foreach ($data as $value) {
					$output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
				}
				echo json_encode($output);
			}else{

			}

	}


}
