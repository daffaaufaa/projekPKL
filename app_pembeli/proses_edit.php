<?php
include "koneksi.php";
$id_pembeli = $_GET['id_pembeli'];
$id_produk = $_GET['id_produk'];
$id_kategori = $_GET['id_kategori'];
$jumlah = $_GET['jumlah'];

$sql = "UPDATE pembeli set Id_produk = '$id_produk', Id_kategori = '$id_kategori', jumlah= '$jumlah' WHERE id_pembeli = '$id_pembeli'";
$query = mysqli_query ($koneksi,$sql);

if ($query){
    header ("location:index.php?edit=sukses");
} else {
    header ("location:index.php?edit=gagal");
}
?>
