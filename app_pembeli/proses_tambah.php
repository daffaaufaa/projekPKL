<?php
include "koneksi.php";
$id_produk =$_GET['id_produk'];
$id_kategori =$_GET['id_kategori'];
$jumlah = $_GET['jumlah'];
$sql = "INSERT INTO pembeli (Id_produk,Id_kategori,Jumlah) VALUES ('$id_produk','$id_kategori','$jumlah')";
$query = mysqli_query($koneksi,$sql);

if ($query){
    header ("location:index.php?simpan=sukses");
} else {
    header ("location:index.php?simpan=gagal");
}
?>
