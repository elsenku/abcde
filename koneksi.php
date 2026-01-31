<?php
$host = "localhost";
$user = "jimmy";
$pass = "ethaner";
$db   = "db_peminjaman";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi) {
} else {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
