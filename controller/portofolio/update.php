<?php
include __DIR__ . "\..\db_connect.php";

$id = $_POST['id'];
$judul  = $_POST['judul'];
// $gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($gambar_tmp,"public/images/$gambar");

$sql = "update portofolio set judul = '$judul', gambar = '$gambar', deskripsi = '$deskripsi' where id = $id";
$connect->query($sql);

header("location: /cms-php/admin.php?page=portofolio-table");