<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE ulasan.id_ulasan=$id");
?>
<script>
    alert('Data Berhasil Dihapus!');
    location.href = "?page=ulasan"
</script>