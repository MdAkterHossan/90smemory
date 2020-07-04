<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));
	}

	public function index()
	{	
		$data['message']= '';
		$this->load->view('website_header_view',$data);
		$data['topHeadingData']  = $this->mix_model->getTopContentdata();
		$data['MidHeadingData']  = $this->mix_model->getMidContentdata();
		$data['contactInfo']  = $this->mix_model->getContactdata();
		$data['footerInfo']  = $this->mix_model->getFooterData();
		$this->load->view('menu_view',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('footer_view',$data);
		
		
	}
}
