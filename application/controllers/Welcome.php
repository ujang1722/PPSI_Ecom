<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{
		$data['tiket'] = $this->m_ticz->db->query("SELECT * FROM mr_tickets ORDER BY RAND() LIMIT 5")->result();
		$data['boy'] = $this->m_ticz->db->query("SELECT * FROM mr_tickets  JOIN transaksi_detail WHERE mr_tickets.mrt_id = transaksi_detail.trxd_mrt_id  GROUP BY trxd_mrt_id LIMIT 3")->result();
		$data['beller'] = $this->m_ticz->db->query("select SUM(a.trxd_qty) as jum, b.* from transaksi_detail as a, mr_tickets as b, transaksi as c where a.trxd_mrt_id = b.mrt_id and a.trxd_trx_id = c.trx_id AND c.trx_status = 2 GROUP BY b.mrt_nama ORDER BY jum DESC
			")->result();

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

}
