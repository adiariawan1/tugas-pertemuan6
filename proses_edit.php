<?php
require_once __DIR__ . '/config/connection.php';
require_once __DIR__ . '/controllers/mahasiswaControllers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];
    $email   = $_POST['email'];
    $no_hp   = $_POST['no_hp'];

    $mhs = new mahasiswa($conn);
    if ($mhs->UpdateData($nim, $nama, $jurusan, $alamat, $email, $no_hp)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengupdate data ke database.";
    }
} else {
    echo "Akses ditolak!";
}
?>