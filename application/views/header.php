<!DOCTYPE html>
<html lang="en">
<head>
<title>Ticz | Centre of Tickets</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/bootstrap4/bootstrap.min.css'?>">
<link href="<?=base_url(). 'assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/main_styles.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/responsive.css'?>">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="<?=base_url()?>">Ticz.</a></div>
							<nav class="main_nav">
								<ul>
									<li class="active"><a href="<?=base_url()?>">Home</a></li>
									<li class="hassubs">
										<a href="<?=base_url().'tickets/viewtiket'?>">Buy Tickets</a>
										<ul>
											<li><a href="<?=base_url().'tickets/viewtiket?kategori=Camping'?>">Camping</a></li>
											<li><a href="<?=base_url().'tickets/viewtiket?kategori=Tubing'?>">Tubing</a></li>
											<li><a href="<?=base_url().'tickets/viewtiket?kategori=Glamping'?>">Glamping</a></li>
											<li><a href="<?=base_url().'tickets/viewtiket?kategori=Waterfall'?>">Waterfall</a></li>
										</ul>
									</li>
									<?php
									if($this->session->userdata('id') != false){
									?>
									<li ><a href="<?=base_url(). 'orders'?>">Orders</a></li>
									<?php
									}
									?>
									<li><a href="<?=base_url().'contact'?>">Contact</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<?php
								if($user_id = $this->session->userdata('id') == true){
								?>
								<div class="shopping_cart" style="border-right: 2px solid rgba(0,0,0,0.2); padding-right: 10px ">
									<a href="<?=base_url().'cart'?>">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>										
										<?php
										$user_id = $this->session->userdata('id');
										$list_cart = $this->db->query('select count(*) jml from cart where crt_mru_id='.$user_id)->result();									
										foreach($list_cart as $count){
										?>
										<div>Cart <span>(<?=$count->jml?>)</span></div>
										<?php
										};
										?>
									</a>
								</div>
								<?php
								}
								?>
								<div class="shopping_cart">
											<?php
											if(empty($this->session->userdata('full_name'))){
											?>
									<a href="<?=base_url().'admin/login'?>"  style="border-right: 2px solid rgba(0,0,0,0.2); padding-right: 10px ">
										<svg class="svg-icon" viewBox="0 0 20 20">
											<g>
												<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
											</g>
										</svg>
										<div><strong>Login</strong></div>
									</a>
									<a href="<?=base_url() .'register'?>">
										<div><strong>Register</strong></div>
									</a>
											<?php
											}else{
											?>
									<a href="<?=base_url() .'admin/logout'?>">
										<div><strong><?=$this->session->userdata('full_name');?></strong></div>
									</a>
											
											<?php
											}
											?>
											
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	