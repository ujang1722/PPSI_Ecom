
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product_responsive.css'?>">

<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?=base_url().'assets/frontend/images/fourtwnty_banner2.jpg'?>)"></div>
			<div class="home_background" style="background:rgba(0,0,0,0.7);"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Fourtwnty Concert<span>.</span></div>
								<div class="home_text"><p>Penampilan perdana Fourtwnty di Bintaro Jaya Exchange.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="<?=base_url().'assets/frontend/images/ftkotak.jpg'?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">Fourtwnty Tickets</div>
						<div class="details_price">Rp 50.000</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
						</div>

						<!-- Product Quantity -->
						<form action="<?=base_url(). 'tickets/addtocart'?>" method="post">
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input type="hidden" value="2" name="id_tiket">
								<input id="quantity_input" name="qty_cart" type="number" pattern="[0-9]*" value="1"> 	
								<div class="quantity_buttons">
								</div>
							</div>
							<button type="submit" style="margin: 0;padding: 0;background: rgba(0,0,0,0);border:0;"><div class="button cart_button"><span>Add to cart</span></div></button>
						</div>

						<!-- Share -->
						<div class="details_share">
							<span>Share:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
					</div>
					<div class="description_text">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>