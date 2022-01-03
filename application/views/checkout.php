
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/checkout.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/checkout_responsive.css'?>">
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?=base_url(). 'assets/frontend/images/cart.jpg'?>)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<?php
				$id_user = $this->session->userdata('id');
				$db = $this->db->query('select * from mr_user where mru_id='.$id_user)->result();
				foreach($db as $d){};
				?>
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Data Diri</div>
						<div class="section_subtitle">Data Diri Pemesan</div>
						<div class="checkout_form_container">
							<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Nama</div>
								<div class="order_list_value ml-auto"><?=$d->mru_full_name?></div>
							</div>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Alamat</div>
									<div class="order_list_value ml-auto" style="width: 50%; text-align: right;"><?=$d->mru_address?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Email</div>
									<div class="order_list_value ml-auto"><?=$d->mru_email_address?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">No. Telp</div>
									<div class="order_list_value ml-auto"><?=$d->mru_mobile_number?></div>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
									<?php
									$user_id = $this->session->userdata('id');
									$list_cart2 = $this->db->query('select count(*) jml,format(sum(subtotal_harga),0) total_harga_sub,format(sum(subtotal_harga)+10000,0) total_harga from (select *,mrt_harga*crt_qty subtotal_harga from cart inner join mr_tickets on mrt_id = crt_mrt_id where crt_mru_id='. $user_id.')semua')->result();	
									?>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<?php
									foreach($list_cart2 as $count){
									?>
									<div class="order_list_value ml-auto">Rp <?=$count->total_harga_sub?></div>
									<?php
									}
									?>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Biaya Admin</div>
									<div class="order_list_value ml-auto">Rp 10,000</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<?php
									foreach($list_cart2 as $count){
									?>
									<div class="order_list_value ml-auto">Rp <?=$count->total_harga?></div>
									<?php
									}
									?>
								</li>
							</ul>
						</div>

						<!-- Order Text -->
						<div class="order_text">Tiket yang sudah dipesan atau dibook tidak bisa di batalkan.</div>
						<div class="button order_button"><a href="<?=base_url(). 'checkout/checkout_act'?>">Pesan</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>