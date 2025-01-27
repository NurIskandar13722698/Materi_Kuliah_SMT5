<?php 
$host = "localhost";
$dbname = "db_crud";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username ,$password ,$dbname );
// try { 
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo 'Koneksi Sukses';
// }
// catch(PDOException $error) {   
//     echo 'Koneksi Gagal: ' . $error->getMessage();
// }
// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
