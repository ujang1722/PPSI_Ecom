<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tickets extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('regular');
		$this->load->view('footer');
	}
	public function viewtiket()
	{
		if (isset($_GET['kategori'])) {
			$data['barang'] = $this->m_ticz->get_data_where('mr_tickets', ['kategori' => $_GET['kategori']])->result();
		}else {
        	$data['barang'] = $this->m_ticz->tampil_data()->result();
		}
		$this->load->view('header');
		$this->load->view('tiket',$data);
		$this->load->view('footer');
	}

	function regular()
	{
		$data['tiket']  = $this->m_ticz->get_data_where('mr_tickets', ['mrt_id' => $_GET['ticket']])->row_array();
		$this->load->view('header');
		$this->load->view('regular', $data);
		$this->load->view('footer');

	}

	function vip()
	{
		$this->load->view('header');
		$this->load->view('vip');
		$this->load->view('footer');

	}

	function vvip()
	{
		$this->load->view('header');
		$this->load->view('vvip');
		$this->load->view('footer');

	}

	function addtocart(){
		$qty = $this->input->post('qty_cart');
		$id_tiket = $this->input->post('id_tiket');
		$id_user = $this->session->userdata('id');

		if($id_user != false){
		// $data = array(
		// 	'crt_qty' => $qty,
		// 	'crt_mrt_id' => $id_tiket,
		// 	'crt_mru_id' => $id_user
		// );
		// $this->m_ticz->insert_data($data,'cart');
			$dt = $this->db->query("select * from cart where crt_mrt_id = '$id_tiket'");
			$cek = $dt->num_rows();
			if($cek>0){
			$update = $this->db->query("update cart set crt_qty=crt_qty+$qty,crt_mrt_id=$id_tiket,crt_mru_id=$id_user where crt_mrt_id=$id_tiket");
			}else{
			$insert = $this->db->query("insert into cart (crt_qty,crt_mrt_id,crt_mru_id) values ('$qty','$id_tiket','$id_user')");
			}
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}else{
			redirect(base_url(). 'admin/login?pesan=belumlogin');
		}
	}
}
