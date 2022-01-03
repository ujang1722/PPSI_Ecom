<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{
		if($this->session->userdata('level') == '1'){
			redirect(base_url());
		}
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');

		if(isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$kode_pos = $this->input->post('kode_pos');
			$email = $this->input->post('email');
			$notelp = $this->input->post('notelp');

			$update = $this->db->query("insert into mr_user values('','$nama','$username','$password','$alamat','$kode_pos','$email','$notelp','99',NOW())");

			redirect(base_url());
		}
	}
}
