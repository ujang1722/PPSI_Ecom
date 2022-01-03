 <!-- Hidden Arrow Number Input -->
            <style type="text/css">
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                    /* display: none; <- Crashes Chrome on hover */
                    -webkit-appearance: none;
                    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
                }
            </style>
<link rel="stylesheet" type="text/css" href="<?=base_url() .'assets/frontend/styles/checkout.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url() .'assets/frontend/styles/checkout_responsive.css'?>">
	<!-- Home -->
	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-12">
					<div class="billing checkout_section" style="text-align: center">
						<div class="section_title" style="font-size: 50px">Terima Kasih</div>
						<div class="section_subtitle" style="font-size: 20px">Segera melakukan pembayaran</div>
						<div class="checkout_form_container">
						<div class="section_subtitle" style="font-size: 20px">Bank Central Asia</div>
						<div class="section_title" style="font-size: 50px">7283-2134-2134-5433</div>
						<div class="section_subtitle" style="font-size: 20px">a/n Ticz Indonesia</div>
						</div>
						<div class="checkout_form_container">
						<?php
						$id_trx=$_GET['id_transaksi'];
						$db = $this->db->query('select trx_kode,format(trx_total_bayar,0) total_bayar from transaksi where trx_id='.$id_trx)->result();

						foreach($db as $d){};
						?>
						<div class="section_subtitle" style="font-size: 20px">Kode Transaksi</div>
						<div class="section_title" style="font-size: 30px"><?=$d->trx_kode?></div>
						</div>

						<div class="checkout_form_container">
						<div class="section_subtitle" style="font-size: 20px">Total Bayar</div>
						<div class="section_title" style="font-size: 50px">Rp <?=$d->total_bayar?></div>
						<div class="section_subtitle" style="font-size: 20px">a/n Ticz Indonesia</div>
						</div>
					</div>
							<div class="order_text" style="text-align: center; font-size: 20px">Setelah membayar, menunggu team kami melakukan Konfirmasi Pembayaran.</div>
							<h1 align="center"><button type="submit" name="submit" style="background: rgba(0,0,0,0); border:0; width: 300px"><div class="button order_button"><a href="<?=base_url(). 'orders'?>">Lihat Order List</a></div></button></h1>

					</form>
				</div>
			</div>
		</div>
	</div>