<?php
include "koneksi.php";
$sql = "SELECT * FROM pembeli";
$query = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1><center>Data Pembeli</center></h1><br>
        <center><a href="tambah.php"><button type="submit" class="btn btn-primary">Tambah</button></a><br><br></center>
        <center><table   class="table">
            <tr>
                <th>id_pembeli</th>
                <th>id_produk</th>
                <th>id_kategori</th>
                <th>jumlah</th>
                <th>Aksi</th>
            </tr>
        <?php while ($pembeli = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $pembeli['id_pembeli'];?></td>
                <td><?= $pembeli['id_produk'];?></td>
                <td><?= $pembeli['id_kategori'];?></td>
                <td><?= $pembeli['jumlah'];?></td>
                <td>
                <a href="edit.php?id_pembeli=<?= $pembeli['id_pembeli']?>"><button type="submit" class="btn btn-success">Edit</button></a>
                <a href="hapus.php?id_pembeli=<?= $pembeli['id_pembeli']?>"><button type="submit" class="btn btn-danger">Hapus</button></a>

                </td>
            </tr>
        <?php } ?>
    </table></center>
</body>
</html>