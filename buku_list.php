<div class="card">
    <div class="card-header">
        <h3 class="mt-3 text-center">List Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
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
                <table class="table table-bordered" id="dataTable" cellspacing="0" cellpadding="5" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Judul Buku</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;

                    if(isset($_POST['bcari'])) {
                        $keyword = $_POST['tcari'];

                        $q = "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori WHERE kategori LIKE '%$keyword%' OR judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR penerbit LIKE '%$keyword%' OR tahun_terbit LIKE '%$keyword%' ORDER BY id_buku desc";
                    }else{
                        $q = "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori ORDER BY id_buku desc";
                    }

                    $query = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><a href="?page=buku_show&&id=<?php echo $data['id_buku']; ?>" class="btn btn-primary">Show More</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>