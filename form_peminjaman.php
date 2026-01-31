<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman Alat Olahraga</title>
</head>
<body>

<?php
// include 'koneksi.php';
?>

<h2>Form Peminjaman Alat Olahraga</h2>

<form action="simpan_peminjaman.php" method="post">
    <label>Nama Peminjam</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" required><br><br>

    <label>Barang Dipinjam</label><br>
    <input type="text" name="barang" required><br><br>

    <label>Jumlah (Qty)</label><br>
    <input type="number" name="qty" min="1" required><br><br>

    <label>Tanggal Pinjam</label><br>
    <input type="date" name="tgl" required><br><br>

    <label>Jam Pinjam</label><br>
    <input type="time" name="jam" required><br><br>

    <button type="submit">Simpan</button>
</form>
<a href='data_peminjaman.php'>Data Peminjaman</a>
</body>
</html>
