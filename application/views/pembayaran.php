
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/contact.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/frontend/styles/contact_responsive.css'?>">
<!-- Home -->

    <div class="home">
       
    </div>


<div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <?php foreach ($invoice as $i): ?>
                    
                
                <div class="col-lg-8 contact_col">
                    <div class="get_in_touch">
                        <div class="section_title">Total Pembayaran</div>
                        <div class="section_subtitle"><?php echo $i->trx_total_bayar  ?></div>
                        <div class="contact_form_container">
                            <form method="post" action="" enctype="multipart/form-data" class="contact_form">
                                <div>
                                    <!-- Subject -->
                                    <label for="contact_company">Bukti Pembayaran</label>
                                    <input type="file"  name="trx_bukti" class="contact_input">
                                </div>` 
                                <button type="submit" name="submit" class="button contact_button"><span>Kirim</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
            </div>
        </div>
    </div>
    <?php endforeach ?>