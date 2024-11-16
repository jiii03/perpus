<?php
$id = $_GET['id'];

$queryShow = "SELECT * FROM buku where id_buku=$id";
$sqlShow = mysqli_query($koneksi, $queryShow);
$result = mysqli_fetch_assoc($sqlShow);

// var_dump($result);

unlink("img/". $result['coverimg']);

$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
<script>
    alert('Data Berhasil Dihapus!');
    location.href = "?page=buku"
</script>