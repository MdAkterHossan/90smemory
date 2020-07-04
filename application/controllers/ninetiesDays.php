<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NinetiesDays extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));
	}


	public function index()
		{
		
		$data['message']= '';
		$data['stories']  = $this->mix_model->getdata();
		$data['footerInfo']  = $this->mix_model->getFooterData();
		$this->load->view('menu_view');
		$this->load->view('ninetiesDays_view',$data);
		//$this->load->view('header_view');
		$this->load->view('website_header_view',$data);
		//$this->load->view('headerSecond_view',$data);

		$this->load->view('footer_view',$data);
	}
}