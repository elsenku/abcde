
<?php
include 'koneksi.php';

$nama   = $_POST['nama'];   // test
$kelas  = $_POST['kelas'];
$barang = $_POST['barang'];
$qty    = $_POST['qty'];
$tgl    = $_POST['tgl'];
$jam    = $_POST['jam'];

$query = "INSERT INTO peminjaman 
          (nama_peminjam, kelas, barang, qty, tgl_pinjam, jam_pinjam)
          VALUES 
          ('$nama', '$kelas', '$barang', '$qty', '$tgl', '$jam')";
// echo $query;
// die();

if (mysqli_query($koneksi, $query)) {
    echo "Data peminjaman berhasil disimpan <br>";
    echo "<a href='form_peminjaman.php'>Kembali</a><br>";
    echo "<a href='data_peminjaman.php'>Data Peminjaman</a>";

} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>
