	
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart_responsive.css'?>">
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_content">
								<div class="home_slider_title" style="color: #000;">List Order<span>.</span></div>
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
						<div class="cart_info_col cart_info_col_total" style="width: 20%; text-align: center;">Tgl Transaksi</div>
						<div class="cart_info_col cart_info_col_status" style="width: 20%; text-align: right;">Status</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">
					<?php
					$user_id = $this->session->userdata('id');
					$list_cart = $this->db->query('select *,format(trx_total_bayar,0) total_bayar from transaksi where trx_mru_id='. $user_id)->result();
					if($list_cart == false){
						echo "<p align='center' style='margin:20px 0'>Your Order List is empty</p>";
					}else{
					foreach($list_cart as $c){
					?>
					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start"  style="width: 20%; text-align: left;">
								<div class="cart_item_name"><a href="<?=base_url().'detail_orders?id_transaksi='.$c->trx_id?>"><?=$c->trx_kode?></a></div>
						</div>
						<div class="cart_item_total" style="width: 20%; text-align: center;"><?=$c->trx_jml_tiket?></div>
						<div class="cart_item_price" style="width: 20%; text-align: center;">Rp <?=$c->total_bayar?></div>
						<div class="cart_item_total" style="width: 20%; text-align: center;"><?=$c->trx_date?></div>
						<div class="cart_item_total"style="width: 20%; text-align: right;">
							<?php 
							if($c->trx_status==1){?>
								<?php if ($c->trx_bukti==NULL): ?>
									<a href="<?php echo base_url ('invoice/pembayaran/'.$c->trx_id) ?>"><span class="btn btn-primary">Bukti</span></a>
									<?php else: ?>
										<span class="btn btn-primary">Waiting</span>
								<?php endif ?>
								
							<?php  }else if($c->trx_status==2){ ?>
								<span class="btn btn-success">Confirmed</span>
							<?php  }else{ ?>
								<span class="btn btn-danger">Error</span>
							<?php }
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