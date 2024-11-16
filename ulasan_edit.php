<div class="card">
    <div class="card-header">
        <h4 class="mt4">Ulasan Buku</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "UPDATE ulasan SET id_buku='$id_buku', ulasan='$ulasan', rating='$rating' WHERE id_ulasan=$id");

                        if ($query) {
                            echo '<script>alert("Edit data berhasil!"); location.href="?page=ulasan";</script>';
                        } else {
                            echo '<script>alert("Edit data gagal, Coba lagi"); location.href="?page=ulasan_tambah"</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasan where id_ulasan=$id");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" id="id_kategori" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                    <option <?php if ($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku'] ?>"><?php echo $buku['judul'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8"><textarea name="ulasan" id="ulasan" style="resize: none;" class="form-control" cols="30" rows="7"><?php echo $data['ulasan'] ?></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                            <select name="rating" id="rating" class="form-control">
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                ?>
                                    <option <?php if ($data['rating'] == $i) echo 'selected'; ?>><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-danger" name="reset" value="reset">Reset</button>
                            <a href="?page=kategori" class="btn btn-warning" name="back" value="back">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>