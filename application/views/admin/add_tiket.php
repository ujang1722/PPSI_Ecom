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
                                        <strong>Add</strong> Tiket
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Tiket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="mrt_nama" placeholder="Nama Tiket" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kategori Tiket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <!-- <input type="text" id="text-input" name="kategori" placeholder="Kategori Tiket" class="form-control">
                                                    <small class="form-text text-muted"></small> -->
                                                    <select name="kategori" class="form-control">
                                                    <option value="Camping">Camping</option>
                                                    <option value="Glamping">Glamping</option>
                                                    <option value="Waterfall">Waterfall</option>
                                                    <option value="Tubing">Tubing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="mrt_harga" placeholder="Harga" class="form-control">
                                                    <small class="help-block form-text">Masukan Harga yang mahal</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Gambar Utama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="mrt_gambar"  class="form-control">
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Deskripsi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="mrt_desc" id="textarea-input" rows="9" placeholder="Deskripsi..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"> Stok</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="mrt_stok" placeholder="Stok" class="form-control">
                                                    <small class="form-text text-muted">Masukan Stok Barang</small>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                    </form>
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