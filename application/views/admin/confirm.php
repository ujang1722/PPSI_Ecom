            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                        <h3 class="title-5 m-b-35">Konfirmasi Pembelian</h3>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                        </div>
                                        <button class="au-btn-filter">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>trx code</th>
                                                <th>qty</th>
                                                <th>total bayar</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $user_id = $this->session->userdata('id');
                                            $list_cart = $this->db->query('select *,format(trx_total_bayar,0) bayar from transaksi inner join mr_user on mru_id = trx_mru_id and trx_status=1')->result();
                                            foreach($list_cart as $c){
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?=$c->mru_full_name?></td>
                                                <td>
                                                    <span class="block-email"><?=$c->trx_kode?></span>
                                                </td>
                                                <td class="desc"><?=$c->trx_jml_tiket?></td>
                                                <td><?=$c->bayar?></td>
                                                <td><img src="<?php echo base_url().'assets/frontend/images/'.$c->trx_bukti ?>" width="50px"></td>
                                                <td>
                                                    <span class="status--process">Waiting for Approval</span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" style="background: green;"  data-toggle="tooltip" onclick="window.location.href='<?=base_url(). "admin/confirmdata?id=".$c->trx_id?>'" data-placement="top" title="Approve">
                                                            <i class="zmdi zmdi-check" style="color:white"></i>
                                                        </button>
                                                        <button class="item"  data-toggle="tooltip" onclick="window.location.href='<?=base_url(). "admin/detail_transaksi?id=".$c->trx_id?>'" data-placement="top" title="Detail">
                                                            <i class="zmdi zmdi-eye" ></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php
                                            };
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>