<?php
$Username = "root";
$Password = "root";
$dbname = "kampus_db";
$charset = "utf8mb4";

$conn = new mysqli("localhost", $Username, $Password, $dbname);
function connectDb(){
    if ($conn->connect_error) {
    die("gagal connect ke data base: " . $conn->connect_error);
    }
}

?>