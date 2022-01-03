<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == '1'){
			redirect(base_url().'admin?pesan=admin');
		}
	}

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');
	}

	function checkout_act(){
		$user = $this->session->userdata('id');
		// insert to transaksi
		$this->db->query("
			insert into transaksi (
			trx_mru_id,
			trx_kode,
			trx_jml_tiket,
			trx_total_bayar,
			trx_status,
			trx_date
			)
			select ". $user ." trx_mru_id,concat('TCZ-',date_format(curdate(),'%Y%m%d'),'-',". $user .",'-',(select ifnull(count(*),0) from transaksi where trx_mru_id =  ". $user ." )+1) trx_kode,sum(crt_qty) trx_jml_tiket,sum(mrt_harga*crt_qty) trx_total_bayar, 1 trx_status, CURRENT_TIMESTAMP trx_date  from cart inner join mr_tickets on mrt_id = crt_mrt_id where crt_mru_id= ". $user ."  GROUP BY crt_mru_id");

		$db = $this->db->query("select LAST_INSERT_ID() last_id")->result();

		foreach($db as $d){};

		$this->db->query("
			insert into transaksi_detail (
			trxd_trx_id,
			trxd_mru_id,
			trxd_mrt_id,
			trxd_qty,
			trxd_total_bayar
			)
			select ".$d->last_id." trxd_trx_id, ". $user ."  trxd_mru_id, crt_mrt_id trxd_mrt_id,crt_qty trxd_qty,mrt_harga*crt_qty trxd_total_bayar from cart inner join mr_tickets on mrt_id = crt_mrt_id");

		$this->db->query("
			insert into tickets_detail (
			tdt_trxd_id,
			tdt_mrt_id,
			tdt_kode_tiket,
			tdt_created_date)
			select 
			trxd_id tdt_trxd_id,
			trxd_mrt_id tdt_mrt_id, 
			concat(if(trxd_mrt_id=1,'DWP','FT'),'-',if(trxd_mrt_id=1,(select count(*)+1 from tickets_detail where tdt_mrt_id =1),(select count(*)+1 from tickets_detail where tdt_mrt_id =2))) tdt_kode_tiket,NOW() tdt_created_date
			from transaksi_detail where trxd_mru_id=".$user." and trxd_trx_id=". $d->last_id);

		$this->db->query("
			update mr_tickets inner join cart on crt_mrt_id = mrt_id set mrt_stok = mrt_stok-crt_qty where crt_mru_id=". $user);
		$this->db->query('delete from cart where crt_mru_id='.$user);
		redirect(base_url().'thanks?id_transaksi='. $d->last_id);
	}

}


