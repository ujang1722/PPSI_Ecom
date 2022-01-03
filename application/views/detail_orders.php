	
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart_responsive.css'?>">
	<!-- Home -->
<?php
$user_id = $this->session->userdata('id');
$id_transaksi = $_GET['id_transaksi'];
$list_det_order = $this->db->query('select tdt_kode_tiket,trxd_qty,trxd_total_bayar,trx_status from tickets_detail inner join transaksi_detail on trxd_id = tdt_trxd_id inner join transaksi on trx_id = trxd_trx_id where trx_id='. $id_transaksi)->result();
$trx = $this->db->query('select * from transaksi where trx_id='. $id_transaksi)->result();
foreach($trx as $t){}
?>
	<div class="home">
		<div class="home_container">
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_content">
								<div class="home_slider_title" style="color: #000;"><?=$t->trx_kode?><span>.</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product" style="width: 20%; text-align: left;">Kode Transaksi</div>
						<div class="cart_info_col cart_info_col_price" style="width: 20%; text-align: center;">Quantity</div>
						<div class="cart_info_col cart_info_col_quantity" style="width: 20%; text-align: center;">Total</div>
						<div class="cart_info_col cart_info_col_status" style="width: 20%; text-align: right;">Status</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">
					<?php
					if($list_det_order == false){
						echo "<p align='center' style='margin:20px 0'>Your Order List is empty</p>";
					}else{
					foreach($list_det_order as $c){
					?>
					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start"  style="width: 20%; text-align: left;">
								<div class="cart_item_name"><a href="#"><?=$c->tdt_kode_tiket?></a></div>
						</div>
						<div class="cart_item_total" style="width: 20%; text-align: center;"><?=$c->trxd_qty?></div>
						<div class="cart_item_price" style="width: 20%; text-align: center;">Rp <?=$c->trxd_total_bayar?></div>
						<div class="cart_item_total"style="width: 20%; text-align: right;">
							<?php 
							if($c->trx_status==1){
								echo '<span class="btn btn-primary">Waiting</span>';
							}else if($c->trx_status==2){
								echo '<span class="btn btn-success">Confirmed</span>';
							}else{
								echo '<span class="btn btn-danger">Error</span>';
							}
							?>	
						</div>
					</div>
					<?php
					}
					};
					?>
				</div>
			</div>
		</div>
	</div>