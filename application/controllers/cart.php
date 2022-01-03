<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	function clear(){
		$where = $this->session->userdata('id');
		$this->db->query('delete from cart where crt_mru_id='.$where);
		redirect(base_url().'cart');
	}
}
