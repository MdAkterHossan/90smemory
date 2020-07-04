<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddStory extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	
	public function index(){
	
	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){	
		
		$data['message']= '';
		$data['story']  = $this->mix_model->getdata();
		
		$this->load->view('header_view',$data);
		$this->load->view('addStory_view',$data);
		$this->load->view('adminMenu_view',$data);
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

	public function addNintyStory() {
	
	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		
		$data['message']= '';
		$data['story']  = $this->mix_model->getdata();
		$res = $this->mix_model->inserttext($_REQUEST);
		$this->load->view('header_view',$data);
		$this->load->view('addStory_view',$data);
		$this->load->view('adminMenu_view',$data);
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
	

	public function deleteStory() {

	$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
		//$msg='';
		$res=$this->mix_model-> deleteStoryById($_REQUEST['hidEx1']);
		// 	$msg="<div class='alert alert-danger alert-dismissable'>
		// <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		//  Successfully Package Deleted</div>";
		
		$data['message']= '';
		$data['story']  = $this->mix_model->getdata();
		$this->load->view('header_view',$data);
		$this->load->view('addStory_view',$data);
	    $this->load->view('adminMenu_view',$data);
	
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
