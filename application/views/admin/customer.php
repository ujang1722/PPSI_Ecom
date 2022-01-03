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
                                        <h3 class="title-5 m-b-35">Customer List</h3>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                        </div>
                                        <button class="au-btn-filter">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location.href='<?=base_url(). "admin/add_customer"?>'">
                                            <i class="zmdi zmdi-plus"></i>add user</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>alamat</th>
                                                <th>date</th>
                                                <th>no telp</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $user_id = $this->session->userdata('id');
                                            $list_cart = $this->db->query('select * from mr_user where mru_level=99')->result();
                                            foreach($list_cart as $c){
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?=$c->mru_full_name?></td>
                                                <td>
                                                    <span class="block-email"><?=$c->mru_email_address?></span>
                                                </td>
                                                <td class="desc"><?=$c->mru_address?></td>
                                                <td><?=$c->mru_created_date?></td>
                                                <td>
                                                    <span class="status--process"><?=$c->mru_mobile_number?></span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <button class="item" data-toggle="tooltip" onclick="window.location.href='<?=base_url(). "admin/edit_customer?id=".$c->mru_id?>'" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" onclick="window.location.href='<?=base_url(). "admin/delete_customer?id_user=".$c->mru_id?>'" data-placement="top" title="Delete">
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