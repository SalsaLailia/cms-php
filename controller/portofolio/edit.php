<?php
include __DIR__ . "\..\db_connect.php";

$id = $_GET['id'];
$sql = "select * from portofolio where id = $id";
$result = $connect->query($sql);
$portofolio = mysqli_fetch_assoc($result);