<div class="card">
    <div class="card-header">
        <h4 class="mt4 text-center">Buku</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deskripsi = $_POST['deskripsi'];

                        $queryShow = "SELECT * FROM buku where id_buku=$id;";
                        $sqlShow = mysqli_query($koneksi, $queryShow);
                        $result = mysqli_fetch_assoc($sqlShow);

                        if($_FILES['coverbuku']['name'] == ""){
                            $coverimg = $result['coverimg'];
                        }else{
                            $coverimg = $_FILES['coverbuku']['name'];
                            unlink("img/". $result['coverimg']);
                            move_uploaded_file($_FILES['coverbuku']['tmp_name'],'img/'. $_FILES['coverbuku']['name']);
                        }

                        $query = mysqli_query($koneksi, "UPDATE buku SET id_kategori='$id_kategori', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', coverimg='$coverimg' WHERE id_buku=$id");

                        if ($query) {
                            echo '<script>alert("Edit data berhasil!"); location.href="?page=buku";</script>';
                        } else {
                            echo '<script>alert("Edit data gagal, Coba lagi"); location.href="?page=buku_edit"</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" id="id_kategori" class="form-control">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                while ($kategori = mysqli_fetch_array($kat)) {
                                ?>
                                    <option <?php if ($kategori['id_kategori'] == $data['id_kategori']) echo 'selected'; ?> value="<?php echo $kategori['id_kategori'] ?>"><?php echo $kategori['kategori'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['judul'] ?>" required name="judul" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['penulis'] ?>" required name="penulis" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit'] ?>" required name="penerbit" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['tahun_terbit'] ?>" required name="tahun_terbit" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Cover Buku</div>
                        <div class="col-md-8"><input type="file" value="<?php echo $data['coverimg'] ?>" name="coverbuku" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8"><textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"><?php echo $data['deskripsi'] ?></textarea></div>
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