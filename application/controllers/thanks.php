<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class thanks extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('thanks_page');
		$this->load->view('footer');
	}
}
