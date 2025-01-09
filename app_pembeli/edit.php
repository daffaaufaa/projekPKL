<?php
include "koneksi.php";
$id_pembeli = $_GET['id_pembeli'];
$sql = "SELECT * FROM pembeli WHERE id_pembeli = '$id_pembeli'";
$query =mysqli_query($koneksi,$sql);

while ($pembeli = mysqli_fetch_assoc($query)) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses Edit</title>
</head>
<body>
    <h1>EDIT</h1>
    <form action="proses_edit.php" method="get">
        <input type="hidden" name="id_pembeli" value="<?= $pembeli['id_pembeli']?>"><br><br>

        <label for="">id_produk</label>
        <input type="number" name="id_produk" id="" value="<?= $pembeli['id_produk']?>"><br>

        <label for="">id_kategori</label>
        <input type="number" name="id_kategori" id="" value="<?= $pembeli['id_kategori']?>"><br><br>

        <label for="">jumlah</label>
        <input type="number" name="jumlah" id="" value="<?= $pembeli['jumlah']?>"><br><br>

        <input type="submit" value="Update">
    </form>

    </form>
</body>
</html>
<?php } ?>