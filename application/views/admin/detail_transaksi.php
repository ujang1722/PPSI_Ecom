            <!-- Hidden Arrow Number Input -->
            <style type="text/css">
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                    /* display: none; <- Crashes Chrome on hover */
                    -webkit-appearance: none;
                    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
                }
            </style>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Detail</strong> Transaksi
                                    </div>
                                    <div class="card-body card-block">
                                       <small class="help-block form-text">Kode Transaksi</small>
                                       <?php echo  $boy["mru_full_name"] ?> 
                                
                                       <small class="help-block form-text">Kode Transaksi</small>
                                       <?php echo  $boy["trx_kode"] ?> 
                                       <small class="help-block form-text">Harga</small>
                                       <?php echo  $boy["trx_total_bayar"] ?>
                                       <small class="help-block form-text">Bukti Pembayaran</small>
                                       <div class="details_image">
                                            <div class="details_image_large"><img src="<?=base_url().'assets/frontend/images/'.$boy["trx_bukti"] ?>" alt=""></div>
                                        </div> 
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>