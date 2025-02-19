<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Koneksi gagal: ". $connect->connect_error);
}else{
    
}
?>