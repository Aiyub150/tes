<?php
$servername = "smkn6jember.net";
$username = "siswa";
$password = "siswa";
$database = "RPL1_5";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
