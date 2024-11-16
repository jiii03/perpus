<link rel="stylesheet" href="assets/css/styleprofile.css">
<div class="rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <form method="POST">
                <?php
                // $id = $_GET['id_user'];
                if (isset($_POST['submit'])) {
                    $id = $_SESSION['user']['id_user'];
                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = MD5($_POST['password']);
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $no_telp = $_POST['no_telp'];
                    $query = mysqli_query($koneksi, "UPDATE user SET username='$username', nama='$nama', email='$email', password='$password', alamat='$alamat', no_telp='$no_telp' WHERE id_user=$id");

                    if ($query) {
                        echo '<script>alert("Edit data berhasil!"); location.href="?page=profile";</script>';
                    } else {
                        echo '<script>alert("Edit data gagal, Coba lagi"); location.href="?page=profile"</script>';
                    }
                }
                $query = mysqli_query($koneksi, "SELECT * FROM user where id_user=" . $_SESSION['user']['id_user']);
                $data = mysqli_fetch_array($query);
                ?>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle img-profile rounded-circle mt-5" width="150px" height="150px" src="assets/img/undraw_profile_2.svg">
                    <span class="font-weight-bold"><?php echo $data['nama']; ?></span>
                    <span class="font-weight-bold"> | <?php echo $data['level'] ?> | </span>
                    <span class="text-black-50"><?php echo $data['email']; ?></span>
                </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="first name" value="<?php echo $data['nama']; ?>" id="nama" name="nama">
                    </div>
                    <div class="col-md-6"><label class="labels">Username</label>
                        <input type="text" class="form-control" placeholder="username" value="<?php echo $data['username']; ?>" id="username" name="username">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nomor Telepon</label>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" value="<?php echo $data['no_telp']; ?>" id="no_telp" name="no_telp">
                    </div>
                    <div class="col-md-12"><label class="labels">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan alamat email" value="<?php echo $data['email']; ?>" id="email" name="email">
                    </div>
                    <div class="col-md-12"><label class="labels">Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan password" value="<?php echo $data['password']; ?>" id="password" name="password">
                    </div>
                    <div class="col-md-12"><label class="labels">Alamat</label>
                        <textarea type="text" class="form-control" style="height: 180px; resize:none;" placeholder="Alamat" value="" name="alamat" id="alamat"><?php echo $data['alamat']; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-4 text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-primary profile-button">Save Profile</button>
            </div>
            </form>
        </div>
    </div>

</div>
</div>
</div>
</div>