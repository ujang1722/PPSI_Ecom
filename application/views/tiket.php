    
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/frontend/styles/product_responsive.css'?>">

<!-- Home -->

	<div class="home" style="height: 100%">
		<div class="home_container">
			<h3 class="text-center mb-5" style="color: black;">Tiket</h3>
			<div class="row">
				<?php foreach ($barang as $brg) : ?>
            	<div class="card ml-3 mb-3" style="width: 16rem;">
                    <div class="container mt-3">
                        <img src="<?php echo base_url().'/assets/frontend/images/'.$brg->mrt_gambar ?>" class="card-img-top img" style="height: 260px; object-fit: cover;" 
                        alt="...">
                        <div class="card-body">
                            <h5 class="home_text mb-1 text-center" style="color: #000000"><?php echo $brg->mrt_nama ?></h5>
                            <h5  style="font-size: 12px; color: #1977cc" class="text-center">Kategori : <?php echo $brg->kategori ?></h5>
                            <div class="cart_buttons_right ml-lg-auto">
                                <div class="button clear_cart_button mx-auto"><a href="<?=base_url(). 'tickets/regular?ticket='.$brg->mrt_id?>">Detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
			</div>
		</div>
	</div>
