<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['ABOUT'] = 'web/home';
$route['about'] = 'home/about';
$route['coursedetail'] = 'home/coursedetail';
$route['onlineapply'] = 'home/onlineapply';
$route['term'] = 'home/term';
$route['privacy'] = 'home/privacy';
$route['faq'] = 'home/faq';
$route['businessadministration'] = 'home/businessadministration';



$route['specialization'] = 'home/specialization';
$route['aviationManagement'] = 'home/aviationManagement';
$route['agricultureManagement'] = 'home/agricultureManagement';
$route['bankingAndFinancialServicesManagement'] = 'home/bankingAndFinancialServicesManagement';
$route['businessAnalytics'] = 'home/businessAnalytics';
$route['constructionManagement'] = 'home/constructionManagement';
$route['customerRelationshipManagement'] = 'home/customerRelationshipManagement';
$route['digitalMarketing'] = 'home/digitalMarketing';
$route['energyManagement'] = 'home/energyManagement';
$route['entrepreneurshipManagement'] = 'home/entrepreneurshipManagement';
$route['eventManagement'] = 'home/eventManagement';
$route['exportAndImportManagement'] = 'home/exportAndImportManagement';
$route['financeMnagement'] = 'home/financeMnagement';
$route['foreignTradeManagement'] = 'home/foreignTradeManagement';
$route['healthAndHospitalManagement'] = 'home/healthAndHospitalManagement';
$route['hospitalityManagement'] = 'home/hospitalityManagement';
$route['hotelManagement'] = 'home/hotelManagement';
$route['humanResourceManagement'] = 'home/humanResourceManagement';
$route['informationSystemManagement'] = 'home/informationSystemManagement';
$route['informationTechnology'] = 'home/informationTechnology';
$route['insuranceManagement'] = 'home/insuranceManagement';
$route['internationalBusinessManagement'] = 'home/internationalBusinessManagement';
$route['logisticManagement'] = 'home/logisticManagement';
$route['marketingManagement'] = 'home/marketingManagement';
$route['materialsManagement'] = 'home/materialsManagement';
$route['mediaJournalismManagement'] = 'home/mediaJournalismManagement';
$route['oilAndGasManagement'] = 'home/oilAndGasManagement';
$route['operationsManagement'] = 'home/operationsManagement';
$route['pharmaceuticalsManagement'] = 'home/pharmaceuticalsManagement';
$route['personnelManagement'] = 'home/personnelManagement';
$route['powerManagement'] = 'home/powerManagement';
$route['productionManagement'] = 'home/productionManagement';
$route['projectManagement'] = 'home/projectManagement';
$route['qualityManagement'] = 'home/qualityManagement';
$route['retailManagement'] = 'home/retailManagement';
$route['riskManagement'] = 'home/riskManagement';
$route['ruralManagement'] = 'home/ruralManagement';
$route['safetyManagement'] = 'home/safetyManagement';
$route['sixSigmaManagement'] = 'home/sixSigmaManagement';
$route['supplyChainManagement'] = 'home/supplyChainManagement';
$route['salesManagement'] = 'home/salesManagement';
$route['travelAndTourismManagement'] = 'home/travelAndTourismManagement';
$route['telecomManagement'] = 'home/telecomManagement';


$route['alumniSpeak'] = 'home/alumniSpeak';


$route['onlineAdmissionForm'] = 'home/onlineAdmissionForm';
$route['applyPayOnlineFees'] = 'home/applyPayOnlineFees';
$route['facultyDetails'] = 'home/facultyDetails';
$route['studentLogin'] = 'home/studentLogin';
$route['studentFacility'] = 'home/studentFacility';
$route['aboutExam'] = 'home/aboutExam';
$route['liveLectureCalendar'] = 'home/liveLectureCalendar';
$route['studentGuidelines'] = 'home/studentGuidelines';
$route['studentFAQ'] = 'home/studentFAQ';
$route['specimenCertificate'] = 'home/specimenCertificate';
$route['sampleExamPaper'] = 'home/sampleExamPaper';

$route['payExamFee'] = 'home/payExamFee';
$route['eLearning'] = 'home/eLearning';
$route['blog'] = 'home/blog';


$route['studentPlacement'] = 'home/studentPlacement';

$route['contact'] = 'home/contact';
$route['categoryDetails'] = 'home/categoryDetails';
// write by arti
  $route['vision'] = 'home/vision';
  $route['whytrustbimt'] = 'home/whytrustbimt';
  $route['theteam'] = 'home/theteam';
  $route['members'] = 'home/members';
  $route['collaboration'] = 'home/collaboration';
  $route['ibmtinstitue'] = 'home/ibmtinstitue';
  $route['ibmtinstituecredentials'] = 'home/ibmtinstituecredentials';
  $route['ourAlumni'] = 'home/ourAlumni';
  $route['courselist'] = 'home/courselist';
