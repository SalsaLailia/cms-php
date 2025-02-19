<?php
include __DIR__ . "\..\db_connect.php";
// SELECT ALL DATA PORTOFOLIO
// var_dump($connect);
$sql = "SELECT * FROM portofolio";
$result = $connect->query($sql);
// print_r(mysqli_fetch_assoc($result));
?>