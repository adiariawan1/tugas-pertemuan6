<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h2>Tambah Mahasiswa Baru</h2>

<form action="proses_tambah.php" method="POST">
    <label>NIM (Wajib):</label><br>
    <input type="text" name="nim" required><br><br>

    <label>Nama Lengkap (Wajib):</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan"><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" rows="4"></textarea><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>No HP:</label><br>
    <input type="text" name="no_hp"><br><br>

    <button type="submit">Simpan Data</button>
    <a href="index.php"><button type="button">Batal</button></a>
</form>

</body>
</html>