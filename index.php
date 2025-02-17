<?php
include "layouts/header.php";
include "layouts/navbar.php";

if (isset($_GET['page'])){
    $page = $_GET;
}else{
    $page = 'home';
}

switch ($page) {
    case 'home':
        include "views/guest/home.php";
        break;
    default:
        include "views/guest/home.php";
        break;
}
include "layouts/footer.php";
?>