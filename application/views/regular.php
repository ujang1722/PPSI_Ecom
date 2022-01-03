
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product_responsive.css'?>">

<!-- Home -->

	<div class="home">
		<div class="home_container">
			<?php if ($tiket['kategori'] == "Camping"): ?>
			<div class="home_background" style="background-image:url(<?=base_url().'assets/frontend/images/camp.jpg'?>)"></div>
			<?php elseif ($tiket['kategori'] == "Waterfall"): ?>
			<div class="home_background" style="background-image:url(<?=base_url().'assets/frontend/images/Waterfall.jpg'?>)"></div>
			<?php elseif ($tiket['kategori'] == "Glamping"): ?>
			<div class="home_background" style="background-image:url(<?=base_url().'assets/frontend/images/camp.jpg'?>)"></div>
			<?php elseif ($tiket['kategori'] == "Tubing"): ?>
			<div class="home_background" style="background-image:url(<?=base_url().'assets/frontend/images/Tubing.jpg'?>)"></div>

			<?php endif ?>
			<div class="home_background" style="background:rgba(0,0,0,0.7);"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title"><?php echo $tiket["mrt_nama"] ?><span>.</span></div>
								<div class="home_text"><p><?php echo $tiket["kategori"] ?></p></div>
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
						<div class="details_image_large"><img src="<?=base_url().'assets/frontend/images/'.$tiket["mrt_gambar"] ?>" alt=""></div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><?php echo $tiket["mrt_nama"] ?></div>
						<!-- <div class="details_discount">Rp 950.000</div> -->
						<div class="details_price">Rp. <?php echo number_format($tiket['mrt_harga'],0,',','.')  ?></div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<?php if ($tiket['mrt_stok'] < 0): ?>
							<span class="text-danger">Out Stock</span>
							<?php else: ?>
							<span>In Stock</span>	
							<?php endif ?>
						</div>
						<div class="details_text">
							<p><?php echo $tiket["mrt_desc"] ?></p>
						</div>
						<!-- Product Quantity -->
						<form action="<?=base_url(). 'tickets/addtocart/'?>" method="post">
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input type="hidden" value="<?php echo $tiket['mrt_id'] ?>" name="id_tiket">
								<input id="quantity_input" name="qty_cart" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
								</div>
							</div>
							<button type="submit" style="margin: 0;padding: 0;background: rgba(0,0,0,0);border:0;"><div class="button cart_button"><span>Add to cart</span></div></button>
						</div>

						 <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Pesan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name=" " value=" " class="form-control">
                                                    <small class="form-text text-muted"></small>
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
			
		</div>
	</div>