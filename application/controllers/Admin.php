<?php

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		// $data['pemesanan'] = $this->db->query("select * from pemesanan limit 10")->result();
		// $data['pembayaran'] = $this->db->query("select * from pembayaran limit 10")->result();
		// $data['tiket'] = $this->db->query("select * from tiket limit 10")->result();

		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	function login(){
		$username = $this->input->post('user_name');
		$password = $this->input->post('user_pwd');
		$this->form_validation->set_rules('user_name','Username','trim|required');
		$this->form_validation->set_rules('user_pwd','Password','trim|required');

		if($this->form_validation->run() != false){
			$where = array('mru_username' => $username, 'mru_password' => md5($password));

			$data = $this->m_ticz->edit_data($where,'mr_user');
			$d = $this->m_ticz->edit_data($where,'mr_user')->row();
			$cek = $data->num_rows();

			if($cek > 0){
				$session = array('id'=> $d->mru_id, 'nama' => $d->mru_username, 'status' => 'login','email' => $d->mru_email_address,'level' => $d->mru_level, 'full_name' => $d->mru_full_name);
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				redirect(base_url().'admin/login?pesan=gagal');
			}
		}else{
			$this->load->view('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'admin/login?pesan=logout');
	}

	function customer_list(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/customer');
		$this->load->view('admin/footer');
	}

	function tickets(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/tickets');
		$this->load->view('admin/footer');
	}

	function confirm(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/confirm');
		$this->load->view('admin/footer');
	}

	function list_buy(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/list_buy');
		$this->load->view('admin/footer');
	}

	function confirmdata(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$id_trx = $_GET['id'];
		$this->db->query('update transaksi set trx_status = 2 where trx_id='. $id_trx);
		redirect(base_url(). 'admin/confirm');
	}

	function backtoconfirm(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$id_trx = $_GET['id'];
		$this->db->query('update transaksi set trx_status = 1 where trx_id='. $id_trx);
		redirect(base_url(). 'admin/list_buy');
	}

	function edit_customer(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/edit_customer');
		$this->load->view('admin/footer');

		if(isset($_POST['submit'])){
			$username = $this->input->post('username');
			if(empty($this->input->post('password'))){
				$password = $this->input->post('old-password');
			}else{
				$password = md5($this->input->post('password'));
			}
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$kode_pos = $this->input->post('kode_pos');
			$email = $this->input->post('email');
			$notelp = $this->input->post('notelp');

			$update = $this->db->query("update mr_user set mru_username='$username',mru_password='$password',mru_full_name='$nama',mru_address='$alamat',mru_kode_pos='$kode_pos',mru_email_address='$email',mru_mobile_number='$notelp' where mru_id =". $_GET['id']);

			redirect(base_url().'admin/customer_list');
		}
	}
	function edit_tiket(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		

		$this->load->view('admin/header');
		$this->load->view('admin/edit_tiket');
		$this->load->view('admin/footer');

		if(isset($_POST['submit'])){
			$mrt_nama		 = $this->input->post('mrt_nama');
			$kategori  = $this->input->post('kategori');
			$mrt_harga 			 = $this->input->post('mrt_harga');
			$mrt_gambar               =$_FILES['mrt_gambar']['name'];
					if ($mrt_gambar){
						$config ['upload_path']  = './assets/mrt_gambar';
						$config ['allowed_types'] ='jpg|jpeg|png|tiff|svg';
						$this->load->library('upload',$config);
						if($this->upload->do_upload('mrt_gambar')){
							$mrt_gambar=$this->upload->data('file_name');
							$this->db->set('mrt_gambar',$mrt_gambar);
						}else{
							echo "Gambar gagal diUpload!";
						}
					}

			$mrt_desc		 = $this->input->post('mrt_desc');
			$mrt_stok		     = $this->input->post('mrt_stok');

			$update = $this->db->query("update mr_tickets set mrt_nama='$mrt_nama',kategori='$kategori',mrt_harga='$mrt_harga',mrt_gambar='$mrt_gambar',mrt_desc='$mrt_desc',mrt_stok='$mrt_stok' where mrt_id =". $_GET['id_user']);

			redirect(base_url().'admin/tickets');
		}
	}


	function add_customer(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_customer');
		$this->load->view('admin/footer');

		if(isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$kode_pos = $this->input->post('kode_pos');
			$email = $this->input->post('email');
			$notelp = $this->input->post('notelp');

			$update = $this->db->query("insert into mr_user values('','$nama','$username','$password','$alamat','$kode_pos','$email','$notelp','99',NOW())");

			redirect(base_url().'admin/customer_list');
		}
	}

	function delete_customer(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$id_user = $_GET['id_user'];

		$this->db->query('delete from mr_user where mru_id='.$id_user);
		redirect(base_url().'admin/customer_list');
	}
	function add_tiket(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_tiket');
		$this->load->view('admin/footer');

		if(isset($_POST['submit'])){
			$mrt_nama = $this->input->post('mrt_nama');
			$mrt_harga = $this->input->post('mrt_harga');
			$mrt_gambar			= $_FILES['mrt_gambar']['name'];
			if ($mrt_gambar		=''){}else{
			$config ['upload_path'] = './assets/frontend/images';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif|';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('mrt_gambar')){
				echo "Gambar gagal diUpload!";
			}else {
				$mrt_gambar=$this->upload->data('file_name');

			}
			}
			$mrt_desc = $this->input->post('mrt_desc');
			$mrt_stok = $this->input->post('mrt_stok');
			$kategori = $this->input->post('kategori');
			$update = $this->db->query("insert into mr_tickets values('','$mrt_nama','$mrt_harga','$mrt_gambar','$mrt_desc','$mrt_stok',NOW(),'$kategori')");

			redirect(base_url().'admin/tickets');
		}
	}
	// function edit_tiket(){


	// }
	function delete_tiket(){
		
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		$id_user = $_GET['id_user'];

		$this->db->query('delete from mr_tickets where mrt_id='.$id_user);
		redirect(base_url().'admin/tickets');
	}

	function detail_transaksi(){
		if($this->session->userdata('status') !='login'){
			redirect(base_url().'admin/login?pesan=belumlogin');
		}else if($this->session->userdata('level') != '1'){
			redirect(base_url());
		}
		// $data['tran']  = $this->m_ticz->get_data_where('transaksi', ['trx_id' => $_GET['id']])->row_array();
		$data['boy']  = $this->db->query("SELECT * FROM transaksi join mr_user on transaksi.trx_mru_id=mr_user.mru_id where trx_id=".$_GET['id'])->row_array();


		$this->load->view('admin/header');
		$this->load->view('admin/detail_transaksi',$data);
		$this->load->view('admin/footer');
	}
}


?>