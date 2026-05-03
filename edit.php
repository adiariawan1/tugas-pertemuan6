<?php
require_once __DIR__ . '/config/connection.php';
require_once __DIR__ . '/controllers/mahasiswaControllers.php';


$nim = $_GET['nim'];
$mhs = new mahasiswa($conn);
$data = $mhs->GetDataByNim($nim);

if (!$data) {
    die("Data tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h2>Edit Mahasiswa</h2>

<!-- Data dilempar ke proses_edit.php -->
<form action="proses_edit.php" method="POST">

    <label>NIM:</label><br>
    <!-- Gunakan readonly karena NIM adalah Primary Key, tidak boleh diubah -->
    <input type="text" name="nim" value="<?= htmlspecialchars($data['nim']) ?>" readonly><br><br>

    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>"><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" rows="4"><?= htmlspecialchars($data['alamat']) ?></textarea><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>"><br><br>

    <label>No HP:</label><br>
    <input type="text" name="no_hp" value="<?= htmlspecialchars($data['no_hp']) ?>"><br><br>

    <button type="submit">Update Data</button>
    <a href="index.php"><button type="button">Batal</button></a>
</form>

</body>
</html>