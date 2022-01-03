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
                                        <h3 class="title-5 m-b-35">Tickets</h3>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                        </div>
                                        <button class="au-btn-filter">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"onclick="window.location.href='<?=base_url(). "admin/add_tiket"?>'">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>harga</th>
                                                <th>Kategori</th>
                                                <th>stok</th>
                                                <th>date</th>
                                                <!-- <th>no telp</th> -->
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $user_id = $this->session->userdata('id');
                                            $list_cart = $this->db->query('select *,format(mrt_harga,0) harga from mr_tickets')->result();
                                            foreach($list_cart as $c){
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?=$c->mrt_nama?></td>
                                                <td>
                                                    <span class="block-email"><?=$c->harga?></span>
                                                </td>
                                                <td><?=$c->kategori?></td>
                                                <td class="desc"><?=$c->mrt_stok?></td>
                                                <td><?=$c->mrt_created_date?></td>
                                                <!-- <td>
                                                    <span class="status--process"></span>
                                                </td> -->
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <button class="item" data-toggle="tooltip" 
                                                            onclick="window.location.href='<?=base_url(). "admin/edit_tiket?id_user=".$c->mrt_id?>'"
                                                            data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" onclick="window.location.href='<?=base_url(). "admin/delete_tiket?id_user=".$c->mrt_id?>'" data-placement="top" title="Delete">
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