<?php
include __DIR__ . "\..\db_connect.php";

$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

$sql = "insert into portofolio (judul, gambar, deskripsi) values ('$judul','$gambar','$deskripsi')";
$connect->query($sql);

header("location: /cms-php/admin.php?page=portofolio-table");


?>