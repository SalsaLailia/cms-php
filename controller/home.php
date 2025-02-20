<?php
include "db_connect.php";

$sql = "select * from portofolio order by id desc limit 3 ";
$result = $connect->query($sql);
?>