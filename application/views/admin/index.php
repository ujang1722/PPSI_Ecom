            <?php
            $dbase = $this->db->query("select count(*) customer, ifnull(sum(in_transaksi),0) transaksi,ifnull(sum(approve_ticket),0) approve,format(ifnull(sum(total),0),0) total_byr from (SELECT mru_full_name,(SELECT count(trx_id) FROM transaksi WHERE trx_mru_id=mru_id AND trx_status=1) in_transaksi,sum(CASE WHEN trx_status=2 THEN trx_jml_tiket END) approve_ticket,sum(CASE WHEN trx_status=2 THEN trx_total_bayar END) total FROM mr_user LEFT JOIN transaksi ON trx_mru_id=mru_id WHERE mru_level=99 GROUP BY mru_id)semua")->result();
                foreach($dbase as $db){}
            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$db->customer?></h2>
                                                <span>total customer</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$db->transaksi?></h2>
                                                <span>in cart</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$db->approve?></h2>
                                                <span>tickets sold</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>IDR <?=$db->total_byr?></h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>trx Code</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $dbdet = $this->db->query('select * from transaksi_detail inner join mr_tickets on mrt_id = trxd_mrt_id inner join transaksi on trx_id = trxd_trx_id where trx_status=2 order by trx_date desc limit 10')->result();
                                        foreach($dbdet as $det){
                                        ?>
                                            <tr>
                                                <td><?=$det->trx_date?></td>
                                                <td><?=$det->trx_kode?></td>
                                                <td><?=$det->mrt_nama?></td>
                                                <td class="text-right"><?=$det->mrt_harga?></td>
                                                <td class="text-right"><?=$det->trxd_qty?></td>
                                                <td class="text-right"><?=$det->trxd_total_bayar?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top Customer</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <?php
                                                    $dbuser = $this->db->query('select mru_full_name,format(sum(trx_total_bayar),0) total_bayar from transaksi inner join mr_user on mru_id = trx_mru_id where trx_status=2 and mru_level=99 group by trx_mru_id')->result();
                                                    foreach($dbuser as $du){
                                                    ?>
                                                    <tr>
                                                        <td><?=$du->mru_full_name?></td>
                                                        <td class="text-right">IDR <?=$du->total_bayar?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Kategori</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                                <th>Kategori</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $kat = $this->db->query("select SUM(a.trxd_qty) as jum, SUM(a.trxd_total_bayar) as tot, b.kategori from transaksi_detail as a, mr_tickets as b, transaksi as c where a.trxd_mrt_id = b.mrt_id and a.trxd_trx_id = c.trx_id AND c.trx_status = 2 GROUP BY kategori")->result();

                                        foreach($kat as $k){
                                        ?>
                                            <tr>
                                                <td><?=$k->kategori?></td>
                                                <td class="text-right"><?=$k->jum?></td>
                                                <td class="text-right"><?=$k->tot?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
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
            <!-- END MAIN CONTENT-->