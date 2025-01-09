<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbtoko_daffa_10";

$koneksi = mysqli_connect ($server,$username,$password,$database) ;

if ($koneksi) {
    echo "terkoneksi" ;
} else {
    echo "gagal terkoneksi";
}
?>