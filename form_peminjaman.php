<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Alat Olahraga</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Form Peminjaman Alat Olahraga</h2>

        <form action="simpan_peminjaman.php" method="post">
            <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" placeholder="Contoh: XI-RPL 1" required>
            </div>

            <div class="form-group">
                <label>Barang Dipinjam</label>
                <select name="barang" required>
                    <option value="">-- Pilih Barang --</option>
                    <option value="Bola Basket">Bola Basket</option>
                    <option value="Bola Futsal">Bola Futsal</option>
                    <option value="Bola Kasti">Bola Kasti</option>
                    <option value="Bola Pingpong">Bola Pingpong</option>
                    <option value="Bola Voli">Bola Voli</option>
                    <option value="Raket Badminton">Raket Badminton</option>
                    <option value="Sarung Tangan Kasti">Sarung Tangan Kasti</option>
                    <option value="Shuttlecock">Shuttlecock</option>
                    <option value="Tongkat Kasti">Tongkat Kasti</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah (Qty)</label>
                <input type="number" name="qty" min="1" required>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tgl" required>
                </div>

                <div class="form-group">
                    <label>Jam Pinjam</label>
                    <input type="time" name="jam" required>
                </div>
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
        
        <div class="footer-link">
            <a href='data_peminjaman.php'>Lihat Data Peminjaman &rarr;</a>
             <link rel="stylesheet" href="style.css">
        </div>
    </div>

</body>
</html>
