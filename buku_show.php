<div class="container py-5">
    <div class="row">
        <?php 
        $id = $_GET['id'];

        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
        $data = mysqli_fetch_array($query);
        ?>
        <div class="col-md-8 mx-auto text-center">
            <div class="h2"><?php echo $data['judul'] ?></div>
            <p class="text-muted">Ditulis Oleh <strong><?php echo $data['penulis'] ?></strong></p>
            <p class="text-muted">Diterbitkan Oleh <?php echo $data['penerbit'] ?> | Tahun <?php echo $data['tahun_terbit'] ?><a href=""></a></p>
        </div>
        <div class="col-md-8 mx-auto d-flex justify-content-center">
            <!-- <div class="w-100" style="background-color:grey;height:500px;border-radius:20px;"></div>  -->
            <img width="650px" height="975x" src="img/<?php echo $data['coverimg'] ?>" style="border-radius:20px; object-fit:cover" alt="">
        </div>
        <div class="col-md-8 mx-auto mt-4 text-center">
            <div><?php echo $data['deskripsi'] ?></div>
        </div>
    </div>
</div>