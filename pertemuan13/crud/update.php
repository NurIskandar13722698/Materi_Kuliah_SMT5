<?php
require 'db_conek.php';
$id = $_GET ['id'];
$sql = "SELECT * FROM tbl_mhs where id=$id";
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result);

//fungsi update 
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['name'];
    $email = $_POST['email'];

    // Query untuk memasukkan data
    $query = "UPDATE tbl_mhs set  nim='$nim', nama='$nama', email='$email'
     where id=$id"; 
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
    <h1>update</h1>
<form action="" method="post">
     <table border="1">
        <tr>
            <td><label for="nim">nim</label></td>
            <td><input type="text" name="nim" VALUES="<?= $row['nim'];?>" require></td>
        </tr>
        <tr>
            <td><label for="name">name</label></td>
            <td><input type="text" name="name" VALUES="<?= $row['name'];?>" require></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            <td><input type="email" name="email" VALUES="<?= $row['email'];?>" id="email" require></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">update</button></td>
        </tr>
      
     </table>
</form>
</body>
</html>