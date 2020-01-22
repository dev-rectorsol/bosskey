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

  public function MasterProgramInSupplyChainManagement11Months()
  {
  	$data = array();
	$data['page'] = 'businessadministrationc11months';
	$data['main_content'] = $this->load->view('web/MasterProgramInSupplyChainManagement11Months', $data, TRUE);
	$this->load->view('web/index', $data);
  }

  public function MasterProgramInBusinessAdministration2Year ()
  {
  	$data = array();
	$data['page'] = 'businessadministrationc11months';
	$data['main_content'] = $this->load->view('web/MasterProgramInBusinessAdministration2Year', $data, TRUE);
	$this->load->view('web/index', $data);
  }
  public function MasterProgramInBusinessAdministration2Years3Certifications ()
  {
  	$data = array();
	$data['page'] = 'businessadministrationc11months';
	$data['main_content'] = $this->load->view('web/MasterProgramInBusinessAdministration2Years3Certifications', $data, TRUE);
	$this->load->view('web/index', $data);
  }
	//************** Course Content  ******************** //

  	//******** Executive Master Certification *********** //

	public function ExecutiveMasterProgramInBusinessAdministration11Months ()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ExeMstrCerti/ExecutiveMasterProgramInBusinessAdministration11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	  public function ExecutiveMasterProgramInBusinessAdministration4Certifications11Months ()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ExeMstrCerti/ExecutiveMasterProgramInBusinessAdministration4Certifications11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function ExecutiveProgramInBusinessManagement11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ExeMstrCerti/ExecutiveProgramInBusinessManagement11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function ExecutiveProgramInBusinessManagement11Months3Certification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ExeMstrCerti/ExecutiveProgramInBusinessManagement11Months3Certification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//************** Course Content  ******************** //

  		//******** Integrated Courses *********** //

	  public function DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration2Year()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration2Year', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function DiplomaInBusinessAdministrationDbaMasterProgramInBusinessAdministration11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationDbaMasterProgramInBusinessAdministration11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function DiplomaInBusinessAdministrationExecutiveMasterProgramInBusinessAdministration4Certifications()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationExecutiveMasterProgramInBusinessAdministration4Certifications', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function DiplomaInBusinessAdministrationDbaExecutiveMasterProgramInBusinessAdministration11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationDbaExecutiveMasterProgramInBusinessAdministration11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration3Certifications11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration3Certifications11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration2Year3Certifications()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/IntegratedCourses/DiplomaInBusinessAdministrationMasterProgramInBusinessAdministration2Year3Certifications', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//******** CFA Training *********** //
	 public function CertificateInfinancialAnalysis6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/CFATraining/CertificateInfinancialAnalysis6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function ExecutiveProgramInFinancialAnalysis11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/CFATraining/ExecutiveProgramInFinancialAnalysis11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	  public function PostGraduateProgramInFinancialAnalysis11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/CFATraining/PostGraduateProgramInFinancialAnalysis11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//******** Business Analytics *********** //

	public function BusinessAnalyticsCertification6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/BusinessAnalytics/BusinessAnalyticsCertification6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function ExecutiveProgramInBusinessAnalytics11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/BusinessAnalytics/ExecutiveProgramInBusinessAnalytics11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function PostGraduatePrograminBusinessAnalytics11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/BusinessAnalytics/PostGraduatePrograminBusinessAnalytics11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//******** Human Resources Management *********** //

	public function CertificationinHumanResourceManagement6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/HumanResourcesManagement/CertificationinHumanResourceManagement6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function PostGraduatePrograminHumanResourceManagement11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/HumanResourcesManagement/PostGraduatePrograminHumanResourceManagement11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function ExecutiveProgramInstrategicHumanresourceManagement11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/HumanResourcesManagement/ExecutiveProgramInstrategicHumanresourceManagement11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//******** Digital Marketing *********** //

	public function DigitalMarketingCertification6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DigitalMarketing/DigitalMarketingCertification6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function ExecutiveProgramInDigitalMarketing11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DigitalMarketing/ExecutiveProgramInDigitalMarketing11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function PostGraduateProgramInDigitalMarketing11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DigitalMarketing/PostGraduateProgramInDigitalMarketing11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

//******** Certified Industrial Accountant +2 Certification - 6 Months *********** //

	public function CertifiedIndustrialAccountant2Certification6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/CertifiedIndustrialAccountant2Certification6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

//******** Data Science *********** //
	public function DataScienceCertification6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DataScience/DataScienceCertification6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function ExecutiveProgramInDatascience11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DataScience/ExecutiveProgramInDatascience11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function PostGraduateProgramInDataScience11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/DataScience/PostGraduateProgramInDataScience11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

//******** Post Graduate Programs *********** //

	public function PostGraduateProgramInManagement11Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/PostGraduatePrograms/PostGraduateProgramInManagement11Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function PostGraduateProgramInManagement11Months3Certification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/PostGraduatePrograms/PostGraduateProgramInManagement11Months3Certification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	//Post Graduate Program in Management -11-Months -3-Certification Best Manager Award //
	  // 404 Contain Not Available  //

	public function PostGraduateProgramInManagementMasterProgramInBusinessAdministration2Years()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/PostGraduatePrograms/PostGraduateProgramInManagementMasterProgramInBusinessAdministration2Years', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

//******** Six Month Program *********** //

	public function DiplomaInBusinessAdministration6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/SixMonthProgram/DiplomaInBusinessAdministration6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function AdvancedDiplomaInBusinessAdministration6Months()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/SixMonthProgram/AdvancedDiplomaInBusinessAdministration6Months', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

//******** TUV SUD South Asia *********** //

	public function TuvSudPostGraduateCertificateInBusinessManagement2Certification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/TuvSudSouthAsia/TuvSudPostGraduateCertificateInBusinessManagement2Certification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function TuvSudPostGraduateCertificateInBusinessManagement()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/TuvSudSouthAsia/TuvSudPostGraduateCertificateInBusinessManagement', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
//******** Post Graduate Diploma in Management in IPMA UK *********** //

	  public function PostGraduateDiplomaInManagementInIPMAUK()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/PostGraduateDiplomaInManagementInIPMAUK', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
//******** Short Term Courses *********** //

	public function SixSigmaGreenBeltProfessional()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SixSigmaGreenBeltProfessional', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function SixSigmaBlackBeltProfessional()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SixSigmaBlackBeltProfessional', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function ProjectManagementCertification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/ProjectManagementCertification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function SixSigmaGreenBeltSixSigmaBlackBeltProfessional()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SixSigmaGreenBeltSixSigmaBlackBeltProfessional', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function SixSigmaMasterBlackBeltProfessional()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SixSigmaMasterBlackBeltProfessional', $data, TRUE);
		$this->load->view('web/index', $data);
	  }

	public function SixSigmaBlackBeltProfessionalTotalQualityManagementProfessional()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SixSigmaBlackBeltProfessionalTotalQualityManagementProfessional', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function SSGB_SSBB_TQM_PMCertification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/SSGB_SSBB_TQM_PMCertification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }
	public function WebAnalyticsProfessionalCertification()
	  {
	  	$data = array();
		$data['page'] = 'businessadministrationc11months';
		$data['courselist']= $this->load->view('web/layout/courselist', $data, TRUE);
		$data['main_content'] = $this->load->view('web/ShortTermCourses/WebAnalyticsProfessionalCertification', $data, TRUE);
		$this->load->view('web/index', $data);
	  }


public function contact(){
	$data = array();
	$data['page'] = 'CONTACT';
	$data['main_content'] = $this->load->view('web/contact', $data, TRUE);
	$this->load->view('web/index', $data);
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
