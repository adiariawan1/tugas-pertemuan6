<?php
require_once __DIR__ . '/config/connection.php';
require_once __DIR__ . '/controllers/mahasiswaControllers.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $mhs = new mahasiswa($conn);

    if ($mhs->DeleteData($nim)) {
        header("Location: index.php");
        exit();

    } else {
        echo "Gagal menghapus data dari disk.";
    }

} else {
    echo "Akses ditolak! Identifier data tidak ditemukan.";
}
?>