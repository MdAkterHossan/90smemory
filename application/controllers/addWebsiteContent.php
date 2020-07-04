<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddWebsiteContent extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	

	public function index(){

		$log_sess=$this->session->userdata('logged_in');
	   		if($log_sess){	
			
			$data['message']= '';
			$data['topHeading']  = $this->mix_model->getTopContentdata();
			$data['midSection']  = $this->mix_model->getMidContentdata();
			$data['contactInfo']  = $this->mix_model->getContactdata();
			$data['footerInfo']  = $this->mix_model->getFooterdata();
			$this->load->view('header_view',$data);
			$this->load->view('adminMenu_view',$data);
			$this->load->view('addWebsiteContent_view',$data);
			
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}

	}
	public function addTopHeading() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){	
			
			$data['message']= '';

			$data['topHeading']  = $this->mix_model->getTopContentdata();
			$data['midSection']  = $this->mix_model->getMidContentdata();
			$data['contactInfo']  = $this->mix_model->getContactdata();
			$data['footerInfo']  = $this->mix_model->getFooterdata();
			$res = $this->mix_model->insertTopHeading($_REQUEST);
			
			$this->load->view('header_view',$data);
			$this->load->view('adminMenu_view',$data);
			$this->load->view('addWebsiteContent_view',$data);

		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	             <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}

	}
	
	public function deleteTopHeading() {

	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		//$msg='';
		$res=$this->mix_model-> deleteTopHeadingById($_REQUEST['hidEx1']);
		$data['message']= '';
		$data['topHeading']  = $this->mix_model->getTopContentdata();
		$data['midSection']  = $this->mix_model->getMidContentdata();
		$data['contactInfo']  = $this->mix_model->getContactdata();
		$data['footerInfo']  = $this->mix_model->getFooterdata();
			
		$this->load->view('header_view',$data);
		$this->load->view('adminMenu_view',$data);
		$this->load->view('addWebsiteContent_view',$data);
	
	}
	else
		{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		$this->load->view('header_view',$data);
		}
	}
	
	public function addMidHeading() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){	
			
			$data['message']= '';
			$data['topHeading']  = $this->mix_model->getTopContentdata();
			$data['midSection']  = $this->mix_model->getMidContentdata();
			$data['contactInfo']  = $this->mix_model->getContactdata();
			$data['footerInfo']  = $this->mix_model->getFooterdata();
			$res = $this->mix_model->insertMidHeading($_REQUEST);
			
			$this->load->view('header_view',$data);
			$this->load->view('adminMenu_view',$data);
			$this->load->view('addWebsiteContent_view',$data);

		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	             <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}

	}
	public function deleteMidHeading() {

	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		//$msg='';
		$res=$this->mix_model-> deleteMidHeadingById($_REQUEST['hidEx1']);
		$data['message']= '';
		$data['topHeading']  = $this->mix_model->getTopContentdata();
		$data['midSection']  = $this->mix_model->getMidContentdata();
		$data['contactInfo']  = $this->mix_model->getContactdata();
		$data['footerInfo']  = $this->mix_model->getFooterdata();
			
		$this->load->view('header_view',$data);
		$this->load->view('adminMenu_view',$data);
		$this->load->view('addWebsiteContent_view',$data);
	
	}
	else
		{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		$this->load->view('header_view',$data);
		}
	}		
	public function addContact() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){	
			
			$data['message']= '';
			$data['topHeading']  = $this->mix_model->getTopContentdata();
			$data['midSection']  = $this->mix_model->getMidContentdata();
			$data['contactInfo']  = $this->mix_model->getContactdata();
			$data['footerInfo']  = $this->mix_model->getFooterdata();
			$res = $this->mix_model->insertContact($_REQUEST);
			
			$this->load->view('header_view',$data);
			$this->load->view('adminMenu_view',$data);
			$this->load->view('addWebsiteContent_view',$data);

		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	             <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}

	}
	public function deleteContact() {

	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		//$msg='';
		$res=$this->mix_model-> deleteContactById($_REQUEST['hidEx1']);
		$data['message']= '';
		$data['topHeading']  = $this->mix_model->getTopContentdata();
		$data['midSection']  = $this->mix_model->getMidContentdata();
		$data['contactInfo']  = $this->mix_model->getContactdata();
		$data['footerInfo']  = $this->mix_model->getFooterdata();
			
		$this->load->view('header_view',$data);
		$this->load->view('adminMenu_view',$data);
		$this->load->view('addWebsiteContent_view',$data);
	
	}
	else
		{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		$this->load->view('header_view',$data);
		}
	}

	public function addFooter() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){	
			
			$data['message']= '';
			$data['topHeading']  = $this->mix_model->getTopContentdata();
			$data['midSection']  = $this->mix_model->getMidContentdata();
			$data['contactInfo']  = $this->mix_model->getContactdata();
			$data['footerInfo']  = $this->mix_model->getFooterdata();
			$res = $this->mix_model->insertFooterInfo($_REQUEST);
			
			$this->load->view('header_view',$data);
			$this->load->view('adminMenu_view',$data);
			$this->load->view('addWebsiteContent_view',$data);

		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	             <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}

	}	
	public function deleteFooter() {

	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		//$msg='';
		$res=$this->mix_model-> deleteFooterById($_REQUEST['hidEx1']);
		$data['message']= '';
		$data['topHeading']  = $this->mix_model->getTopContentdata();
		$data['midSection']  = $this->mix_model->getMidContentdata();
		$data['contactInfo']  = $this->mix_model->getContactdata();
		$data['footerInfo']  = $this->mix_model->getFooterdata();
			
		$this->load->view('header_view',$data);
		$this->load->view('adminMenu_view',$data);
		$this->load->view('addWebsiteContent_view',$data);
	
	}
	else
		{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		$this->load->view('header_view',$data);
		}
	}
}
