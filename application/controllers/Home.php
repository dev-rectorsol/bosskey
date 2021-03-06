<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			parent::__construct();
		 $this->load->model('Common_model');
		 $this->load->model('login_model');
		 $this->load->model('menu_model');
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
	 	$data['menus'] = $this->menu_model->menus();
	 	$data['topCource'] = $this->menu_model->getTopCource();
	 	$data['main_content'] = $this->load->view('web/home', $data, TRUE);
	 	$this->load->view('web/index', $data);
	 }
	  public function about(){
		$data = array();
		$data['page'] = 'ABOUT';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/about', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	  public function onlineapply(){
		$data = array();
		$data['page'] = 'ONLINEAPPLY';
		$data['country'] = $this->Common_model->select('country');
		$data['menus'] = $this->menu_model->menus();
	  $data['state'] = $this->Common_model->get_states_by_id();
		$data['main_content'] = $this->load->view('web/onlineapply', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

  public function term(){
	$data = array();
	$data['page'] = 'TERM';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/term', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  public function privacy(){
	$data = array();
	$data['page'] = 'PRIVACY';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/privacy', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function faq(){
	$data = array();
	$data['page'] = 'FAQ';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/faq', $data, TRUE);
	$this->load->view('web/index', $data);
  }


	  // Start function for specialization

	public function specialization(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function aviationManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/aviationManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function agricultureManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/agricultureManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function bankingAndFinancialServicesManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/bankingAndFinancialServicesManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function businessAnalytics(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/businessAnalytics', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function constructionManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/constructionManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function customerRelationshipManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/customerRelationshipManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function digitalMarketing(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/digitalMarketing', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function energyManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/energyManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function entrepreneurshipManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/entrepreneurshipManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function eventManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/eventManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function exportAndImportManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/exportAndImportManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function financeMnagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/financeMnagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function foreignTradeManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/foreignTradeManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function healthAndHospitalManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/healthAndHospitalManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}
	public function hospitalityManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/hospitalityManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function hotelManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/hotelManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function humanResourceManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/humanResourceManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function informationSystemManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/informationSystemManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function informationTechnology(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/informationTechnology', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function insuranceManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/insuranceManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function internationalBusinessManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/internationalBusinessManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function logisticManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/logisticManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function marketingManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/marketingManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function materialsManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/materialsManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function mediaJournalismManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/mediaJournalismManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function oilAndGasManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/oilAndGasManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function operationsManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/operationsManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function pharmaceuticalsManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/pharmaceuticalsManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function personnelManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/personnelManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function powerManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/powerManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function productionManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/productionManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function projectManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/projectManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function qualityManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/qualityManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function retailManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/retailManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function riskManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/riskManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function ruralManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/ruralManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function safetyManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/safetyManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function sixSigmaManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/sixSigmaManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function supplyChainManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/supplyChainManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function salesManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/salesManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function travelAndTourismManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/travelAndTourismManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function telecomManagement(){
		$data = array();
		$data['page'] = 'Specialization';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/specialization/telecomManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function alumniSpeak(){
		$data = array();
		$data['page'] = 'Alumni Speak';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/alumniSpeak', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	// Start Student Corner section

	public function onlineAdmissionForm(){
		$data = array();
		$data['page'] = 'Online Admission Form';
		$data['menus'] = $this->menu_model->menus();

		$data['main_content'] = $this->load->view('web/studentCorner/onlineAdmissionForm', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function applyPayOnlineFees(){
		$data = array();
		$data['page'] = 'Apply & Pay Online';
		$data['menus'] = $this->menu_model->menus();
		$data['course'] = $this->menu_model->get('subcategory');
		$data['main_content'] = $this->load->view('web/studentCorner/applyPayOnlineFees', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function studentLogin(){
		$data = array();
		$data['page'] = 'Student Login';
			$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/studentLogin', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function facultyDetails(){
		$data = array();
		$data['page'] = 'Apply & Pay Online';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/facultyDetails', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function studentFacility(){
		$data = array();
		$data['page'] = 'Apply & Pay Online';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/studentFacility', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function aboutExam(){
		$data = array();
		$data['page'] = 'About Exam';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/aboutExam', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function liveLectureCalendar(){
		$data = array();
		$data['page'] = 'Live Lecture Calendar';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/liveLectureCalendar', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function studentGuidelines(){
		$data = array();
		$data['page'] = 'Student Guidelines';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/studentGuidelines', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function studentFAQ(){
		$data = array();
		$data['page'] = 'Student FAQ’s';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/studentFAQ', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function specimenCertificate(){
		$data = array();
		$data['page'] = 'Specimen Certificate';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/specimenCertificate', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function sampleExamPaper(){
		$data = array();
		$data['page'] = 'Sample Exam Paper';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentCorner/sampleExamPaper', $data, TRUE);
		$this->load->view('web/index', $data);
	}



	// End Student Corner section

	public function studentPlacement(){
		$data = array();
		$data['page'] = 'Student Placement';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/studentPlacement', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function eLearning(){
		$data = array();
		$data['page'] = 'BIMT Apps';
		$data['menus'] = $this->menu_model->menus();
		$data['main_content'] = $this->load->view('web/eLearning', $data, TRUE);
		$this->load->view('web/index', $data);
	}


	public function payExamFee(){
		$data = array();
		$data['page'] = 'Pay Examination Fees';
		$data['menus'] = $this->menu_model->menus();
		$data['country'] = $this->Common_model->get_all_country();
		$data['main_content'] = $this->load->view('web/payExamFee', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	public function blog(){
		$data = array();
		$data['page'] = 'Blog';
		$data['menus'] = $this->menu_model->menus();
		$data['country'] = $this->Common_model->get_all_country();
		$data['main_content'] = $this->load->view('web/blog', $data, TRUE);
		$this->load->view('web/index', $data);
	}

	// End function of specialization

public function contact(){
	$data = array();
	$data['page'] = 'CONTACT';
	$data['menus'] = $this->menu_model->menus();
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
						  	// echo print_r($row) ;exit;
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

	public function add_enquire()
		{
					// echo '<pre>';
					// echo print_r($_POST);exit;
					$code=$this->input->post('phonecode');
						$phone=$this->input->post('phone');
						$email=$this->input->post('email');
					//	echo $code.$phone;exit;
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
	            $user_id = $this->Common_model->insert($data, 'enquire');
							if ($user_id)
            {
                /*Mail Code*/
                $to = $email;
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





	public function getcountry()
	{
			if ($_POST) {
				$output = '';
				$data = $this->Common_model->get_phonecode($_POST['id']);
				foreach ($data as $value) {
				 $output .= '<option value="'.$value["id"].'">'.$value['phonecode'].'</option>';
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
// write by arti
public function vision(){
	$data = array();
	$data['page'] = 'Vision, Mission & Values';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/vision', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function whytrustbimt(){
	$data = array();
	$data['page'] = 'Why Trust BIMT';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/bimt', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function theteam(){
	$data = array();
	$data['page'] = 'The Team';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/team', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function members(){
	$data = array();
	$data['page'] = 'Membership & Approvals';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/Membership', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function collaboration(){
	$data = array();
	$data['page'] = 'Collaboration with IBMT insititue';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/collaboration', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function ibmtinstitue(){
	$data = array();
	$data['page'] = ' IBMT Institute';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/IBMTinstitue', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function ibmtinstituecredentials(){
	$data = array();
	$data['page'] = 'IBMT Institue Credentials';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/IBMTinstituecredentials', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function ourAlumni(){
	$data = array();
	$data['page'] = 'Our Alumni';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/about/ouralumni', $data, TRUE);
	$this->load->view('web/index', $data);
}
public function courselist(){
	$data = array();
	$data['page'] = 'Course List';
	$data['menus'] = $this->menu_model->menus();
	$data['main_content'] = $this->load->view('web/courselist', $data, TRUE);
	$this->load->view('web/index', $data);
}
/*Our Courses*/
public function businessadministration($id){
$data = array();
$data['page'] = 'BusinessAdministration';
$menus = $this->menu_model->menus();
$data = array('menus' => $menus);

$data['subcategory_value'] = $this->menu_model->get_sub_category();
$data['course'] = $this->menu_model->get_coures($id,'subcategory_id');
if($data['course']){
	$data['main_content'] = $this->load->view('web/course_page', $data, TRUE);
}else{
	$data['main_content'] = $this->load->view('web/error', $data, TRUE);
}
//echo print_r($data['course']);exit;
$this->load->view('web/index', $data);
}

public function categoryDetails($id){
$data = array();
$data['page'] = 'Category Details';
$menus = $this->menu_model->menus();
$data = array('menus' => $menus);

$data['category_value'] = $this->menu_model->get_category();
$data['course'] = $this->menu_model->get_coures($id,'category_id');
if($data['course']){
	$data['main_content'] = $this->load->view('web/course_page', $data, TRUE);
}else{
	$data['main_content'] = $this->load->view('web/error', $data, TRUE);
}
//echo print_r($data['course']);exit;
$this->load->view('web/index', $data);
}

public function courseDetail($id){
	$data = array();
	$data['page'] = 'COURSEDETAILS';
	$data['menus'] = $this->menu_model->menus();
  $data['category_value'] = $this->menu_model->getCategoryName($id,'category');
	//print_r($data['category_value']);exit;
	$data['Allcource'] = $this->menu_model->subcategory($id,'subcategory');
	// echo "<pre>";
	// print_r($data['Allcource']);exit;
	if($data['Allcource'])
	{
			$data['main_content'] = $this->load->view('web/coursedetail', $data, TRUE);
	}
	else{
  $data['category_value'] = $this->menu_model->get_category();
	$data['course'] = $this->menu_model->get_coures($id,'category_id');
	$data['main_content'] = $this->load->view('web/course_page', $data, TRUE);
	}
	// echo "<pre>";
	// print_r(	$data['cource'] );exit;

	$this->load->view('web/index', $data);
  }

public function submit_query()
{
	 // echo '<pre>';
	 // echo print_r($_POST);exit;
	 if ($_POST) {
		 $data = array(
					 'email' => $_POST['email'],
					 'phone	' => $_POST['phone'],
					 'query	' => $_POST['query']
			 );
			//echo print_r($data);exit;
			  $data = $this->security->xss_clean($data);
			 //-- check duplicate email
				$this->Common_model->insert($data, 'query');
				$this->session->set_flashdata("msg","Form Apply Successfully");
				redirect(base_url('home'));
			 //echo $user_id;exit;
		 }
		 $data['page_title'] = 'Home';
		 redirect(base_url('home'));
}


}
