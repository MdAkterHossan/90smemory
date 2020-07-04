<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpanel extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	public function index()
	{	
		$data['message']= '';
		$this->load->view('adminMenu_view',$data);
		$this->load->view('cpanel_view',$data);
		$this->load->view('header_view',$data);


	}
	function logout(){

		$this->session->unset_userdata($sn.'logged_in');
		$this->session->unset_userdata('logger_role');		
		$msg="<div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <strong>Yes!</strong> You have successfully logged-out.</div>";
		$data['message']=$msg;
		$this->load->view('login_view',$data);

	}
	

}
