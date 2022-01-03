<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoice extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}
	public function pembayaran($id)

	{
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '99'){
			redirect(base_url());
		}
		$where = array('trx_id' => $id);
		$data['invoice'] = $this->db->query("SELECT * FROM transaksi where trx_id='$id'")->result();

		$this->load->view('header');
		$this->load->view('pembayaran', $data);
		$this->load->view('footer');

		if(isset($_POST['submit'])){
					if ($trx_bukti		=''){}else{
					$config ['upload_path'] = './assets/frontend/images';
					$config ['allowed_types'] = 'jpg|jpeg|png|gif|';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('trx_bukti')){
						echo "Gambar gagal diUpload!";
					}else {
						$trx_bukti=$this->upload->data('file_name');

					}
					}
					$this->db->query("update transaksi set trx_bukti='$trx_bukti'  where trx_id=". $id);


					redirect(base_url().'orders');
				}
	}
}
