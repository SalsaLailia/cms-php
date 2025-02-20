<?php
include "layouts/header.php";
include "layouts/navbar.php";

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

switch ($page) {
    case 'home':
        include "controller/home.php";
        include "views/guest/home.php";
        break;
    case 'about-us':
        include "views/guest/about-us.php";
        break;
    case 'portofolio-detail':
        include "views/guest/portofolio-detail.php";
        break;
    default:
        include "views/guest/home.php";
        break;
}
include "layouts/footer.php";
?>