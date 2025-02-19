<?php
include __DIR__ . "\..\db_connect.php";

$id = $_POST['id'];

$sql = "delete from portofolio where id = $id";
$connect->query($sql);

header("location: /cms-php/admin.php?page=portofolio-table");
