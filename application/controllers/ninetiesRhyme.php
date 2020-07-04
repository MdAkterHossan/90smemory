<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NinetiesRhyme extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));
	}


	public function index()
		{
		//$this->load->view('headerSecond_view',$data);
		$data['message']= '';
		$data['rhymes']  = $this->mix_model->getRhyme();
		$data['footerInfo']  = $this->mix_model->getFooterData();
		$this->load->view('menu_view',$data);
		$this->load->view('ninetiesRhyme_view',$data);
		$this->load->view('website_header_view');
		$this->load->view('footer_view',$data);
	}
}