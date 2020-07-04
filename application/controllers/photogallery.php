<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photogallery extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	public function index()
	{
		$data['message']= '';
		$data['photo']  = $this->mix_model->getPhoto();
		$data['footerInfo']  = $this->mix_model->getFooterData();
		
		//$this->load->view('header_view');
		$this->load->view('website_header_view');
		$this->load->view('menu_view',$data);
		$this->load->view('photogallery_view',$data);
		$this->load->view('footer_view',$data);

	}
}
