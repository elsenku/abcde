
<?php
include 'koneksi.php';
if (isset($_GET['kembalikan'])) {
    $id = $_GET['kembalikan'];
    $tgl_sekarang = date('Y-m-d');
    $jam_sekarang = date('H:i:s');
    
    $update = mysqli_query($koneksi, "UPDATE peminjaman SET 
        tgl_kembali = '$tgl_sekarang', 
        jam_kembali = '$jam_sekarang', 
        status = 'Kembali' 
        WHERE id = '$id'");
    
    if ($update) {
       header("Location: " . $_SERVER['PHP_SELF']);
    }
}
$data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
if (!$data) {
    print_r(mysqli_error($koneksi));
}
?>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Barang</th>
    <th>Qty</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Tgl Kembali</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php 
$no=1; 
while($d = mysqli_fetch_array($data)) { 
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama_peminjam'] ?></td>
    <td><?= $d['kelas'] ?></td>
    <td><?= $d['barang'] ?></td>
    <td><?= $d['qty'] ?></td>
    <td><?= $d['tgl_pinjam'] ?></td>
    <td><?= $d['jam_pinjam'] ?></td>
    <td>
        <?= ($d['tgl_kembali']) ? $d['tgl_kembali'] . " (" . $d['jam_kembali'] . ")" : "-" ?>
    </td>
    <td><b><?= $d['status'] ?></b></td>
    <td>
        <?php if ($d['status'] == 'Dipinjam') : ?>
            <a href="?kembalikan=<?= $d['id'] ?>
                " onclick="return confirm('Yakin barang sudah kembali, <?= $d['nama_peminjam'] ?> ?')">
                <button style="background-color: #4CAF50; color: white; cursor: pointer;">Kembalikan</button>
            </a>
        <?php else : ?>
            Selesai
        <?php endif; ?>
    </td>
</tr>
<?php } ?>
</table>

<a href='form_peminjaman.php'>Form Peminjaman</a>
