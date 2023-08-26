<?php
include "koneksi.php"; // Menginclude file koneksi.php

// Fungsi untuk menambahkan data
if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO tabel_data (nama, email) VALUES ('$nama', '$email')";
    $result = $conn->query($sql);
}

// Fungsi untuk mengambil data
$sql = "SELECT * FROM tabel_data";
$result = $conn->query($sql);

// Fungsi untuk menghapus data
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $sql = "DELETE FROM tabel_data WHERE id=$id";
    $result = $conn->query($sql);
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Data</h2>
    <form method="post">
        Nama: <input type="text" name="nama">
        Email: <input type="email" name="email">
        <button type="submit" name="add">Tambah</button>
    </form>
    
    <h2>Daftar Data</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="index.php?delete=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
            