<?php
require 'db_conek.php';

$id = $_GET ['id'];
mysqli_query($conn ,"DELETE From tbl_mhs where id=$id");

header("location:index.php");
exit;


?>