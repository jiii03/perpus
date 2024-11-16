<div class="card">
    <div class="card-header">
        <h2 class="mt4 text-center">Peminjaman Buku</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                        $status_peminjaman = $_POST['status_peminjaman'];

                        $query = mysqli_query($koneksi, "INSERT INTO peminjaman (id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman) VALUES('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");

                        if($query){
                            echo '<script>alert("Tambah data berhasil!"); location.href="?page=peminjaman";</script>';
                        }else{
                            echo '<script>alert("Tambah data gagal, Coba lagi"); location.href="?page=peminjaman_tambah"</script>';
                        }
                    }
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                        <select name="id_buku" id="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                    <option value="<?php echo $buku['id_buku'] ?>"><?php echo $buku['judul'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                    </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div class="col-md-8"><input type="date" required name="tanggal_peminjaman" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Tanggal Pengembalian</div>
                        <div class="col-md-8"><input type="date" required name="tanggal_pengembalian" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="status_peminjaman" id="status_peminjaman" class="form-control">
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-danger" name="reset" value="reset">Reset</button>
                            <a href="?page=buku" class="btn btn-warning" name="back" value="back">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>