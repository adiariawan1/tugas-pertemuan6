<?php

require_once __DIR__ . '/config/connection.php';
require_once __DIR__ . '/controllers/mahasiswaControllers.php';


$mhs = new mahasiswa($conn);

$dataMahasiswa = $mhs->ReadData();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Data Mahasiswa ITB STIKOM</title>
</head>
<body>
<h2>Daftar Mahasiswa Semester 4</h2>

<a href="tambah.php"><button>+ Tambah Mahasiswa</button></a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($dataMahasiswa)): ?>
        <?php foreach ($dataMahasiswa as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['nim']) ?></td>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['jurusan']) ?></td>
                <td>
                    <a href="edit.php?nim=<?= $row['nim'] ?>"><button>Edit</button></a>

                    <a href="hapus.php?nim=<?= $row['nim'] ?>" onclick="return confirm('Yakin hapus?')">
                        <button style="background:red; color:white;">Hapus</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" style="text-align:center;">Data Kosong</td>
        </tr>
    <?php endif; ?>
</table>
</body>
</html>