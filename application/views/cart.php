	
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/cart_responsive.css'?>">
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
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">
					<?php
					$user_id = $this->session->userdata('id');
					$list_cart = $this->db->query('select *,format(mrt_harga,0) harga_tiket, format(mrt_harga*crt_qty,0) total_harga from cart inner join mr_tickets on mrt_id = crt_mrt_id where crt_mru_id='. $user_id)->result();
					if($list_cart == false){
						echo "<p align='center' style='margin:20px 0'>Your Cart is empty</p>";
					}else{
					foreach($list_cart as $c){
					?>
					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="<?=base_url(). 'assets/frontend/images/'. $c->mrt_gambar?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#"><?=$c->mrt_nama?></a></div>
								<div class="cart_item_edit"><a href="#">Edit Product</a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price">Rp <?=$c->harga_tiket?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Qty</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="<?=$c->crt_qty?>">
									<div class="quantity_buttons">
									</div>
								</div>
							</div>
						</div>

						<!-- Total -->
						<div class="cart_item_total">Rp <?=$c->total_harga?></div>
					</div>
					<?php
					}
					};
					?>
				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="<?=base_url()?>">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div class="button clear_cart_button"><a href="<?=base_url(). 'cart/clear'?>">Clear cart</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
				</div>
				<?php
				if($list_cart == false){
						echo "";
				}else{
				?>
				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
									<?php
									$user_id = $this->session->userdata('id');
									$list_cart2 = $this->db->query('select count(*) jml,format(sum(subtotal_harga),0) total_harga_sub,format(sum(subtotal_harga)+10000,0) total_harga from (select *,mrt_harga*crt_qty subtotal_harga from cart inner join mr_tickets on mrt_id = crt_mrt_id where crt_mru_id='. $user_id.')semua')->result();	
									?>
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<?php
									foreach($list_cart2 as $count){
									?>
									<div class="cart_total_value ml-auto">Rp <?=$count->total_harga_sub?></div>
									<?php
									}
									?>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Biaya Admin</div>
									<div class="cart_total_value ml-auto">10,000</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>							
									<?php
									foreach($list_cart2 as $count){
									?>
									<div class="cart_total_value ml-auto">Rp <?=$count->total_harga?></div>
									<?php
									}
									?>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="<?=base_url(). 'checkout'?>">Proceed to checkout</a></div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>		
	</div>