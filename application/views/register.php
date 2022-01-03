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

	<div class="home">
		<div class="home_container">
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_content">
								<div class="home_slider_title" style="color: #000;">Register<span>.</span></div>
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
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Registrasi</div>
						<div class="section_subtitle">Masukan data diri anda dengan tepat</div>
						<div class="checkout_form_container">
							<form id="checkout_form" method="post" class="checkout_form">
								<div>
									<!-- Company -->
									<label for="checkout_company">Username</label>
									<input type="text" id="checkout_company" name="username" class="checkout_input">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Password</label>
									<input type="password" id="checkout_company" name="password" class="checkout_input">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Nama Lengkap</label>
									<input type="text" id="checkout_company" name="nama" class="checkout_input">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Alamat</label>
									<textarea id="checkout_company" class="checkout_input" style="height: 150px; padding: 20px" name="alamat"></textarea>
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Kode Pos</label>
									<input type="text" id="checkout_company" name="kode_pos" class="checkout_input">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Email</label>
									<input type="email" id="checkout_company" name="email" class="checkout_input">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">No. Telepon</label>
									<input type="number" id="checkout_company" name="notelp" class="checkout_input">
								</div>
						</div>
					</div>
							<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>
							<button type="submit" name="submit" style="background: rgba(0,0,0,0); border:0; width: 100%"><div class="button order_button"><span>Register</span></div></button>

					</form>
				</div>
			</div>
		</div>
	</div>