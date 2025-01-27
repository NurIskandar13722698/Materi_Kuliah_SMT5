<?php
require 'db_conek.php'; // Pastikan ini adalah file koneksi yang menggunakan mysqli

// Membuat koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "db_crud");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_mhs";
$result = mysqli_query($conn, $sql); 

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['name'];
    $email = $_POST['email'];

    // Query untuk memasukkan data
    $query = "INSERT INTO tbl_mhs ( nim, nama, email) VALUES ('$nim', '$nama', '$email')";
    mysqli_query($conn, $query); // Eksekusi query insert
    header("Location: index.php"); // Redirect setelah sukses
    
}

?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
     <table border="1">
        <tr>
            <td><label for="nim">nim</label></td>
            <td><input type="text" name="nim" require></td>
        </tr>
        <tr>
            <td><label for="name">name</label></td>
            <td><input type="text" name="name" require></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            <td><input type="email" name="email" require></td>
        </tr>
        <tr>
            <td><button type="reset">reset</button></td>
            <td><button type="submit" name="submit">tambah data</button></td>
        </tr>
      
     </table>
</form>

    <table border="1" cellpanding="10">
        <tr>
            <th>id</th>
            <th>nim</th>
            <th>nama</th>
            <th>email</th>
            <th>aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row ['id']; ?></td>
            <td><?= $row ['nim']; ?></td>
            <td><?= $row ['nama']; ?></td>
            <td><?= $row ['email']; ?></td>
            <td>
                <a href="delete.php?id=<?= $row ['id'];?>"
                onclick="return confirm('iya ta')">delete</a>            
                <a href="update.php?id=<?= $row ['id'];?>">update</a>

            </td>
        </tr>
    <?php endwhile; ?>

    </table>
    
</body>
</html>