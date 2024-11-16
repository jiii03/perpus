<div class="card">
    <div class="card-header">
        <h3 class="mt-3 text-center text-center">Peminjaman Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=peminjaman_tambah" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="col-md-6 mx-auto">
                <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="tcari" class="form-control" placeholder="Masukan Kata Kunci...">
                    <button type="submit" class="btn-success" name="bcari">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="27px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    </button>
                    <button type="reset" class="btn-danger" name="rcari">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="27px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                    </button>
                </div>
                </form>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;

                    if(isset($_POST['bcari'])) {
                        $keyword = $_POST['tcari'];

                        $q = "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=". $_SESSION['user']['id_user']; "nama LIKE '%$keyword%' OR judul LIKE '%$keyword%' OR tanggal_peminjaman LIKE '%$keyword%' OR tanggal_pengembalian LIKE '%$keyword%' OR status_peminjaman LIKE '%$keyword%' ORDER BY id_peminjaman desc";
                    }else{
                        $q = "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user'];
                    }

                    $query = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['status_peminjaman']; ?></td>
                            <td>
                            <?php if($data['status_peminjaman'] != 'Dikembalikan'){ ?>
                                <a href="?page=peminjaman_edit&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-primary">Edit</a>
                                <a onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini?')" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>