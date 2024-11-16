<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      <div class="row">
                                        <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Kategori</h6>
                                                        <h2 class="text-right"><i class="fa fa-fw fa-table f-left"></i><span><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori")) ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Buku</h6>
                                                        <h2 class="text-right"><i class="fa fa-fw fa-book f-left"></i><span><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")) ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Ulasan</h6>
                                                        <h2 class="text-right"><i class="fa fa-fw fa-comment f-left"></i><span><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan")) ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total User</h6>
                                                        <h2 class="text-right"><i class="ti-user f-left"></i><span><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")) ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                      
                                    </div>
                                </div>
                            </div>
</div>
</div>

