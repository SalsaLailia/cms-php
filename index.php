<?php
include "layouts/header.php";
include "layouts/navbar.php";
include "layouts/footer.php";

// if (isset($_GET['page'])){
//     $page = $_GET
// }

switch ($page) {
    case 'home':
        include "view/home.php";
        break;
    default:
        include "view/home.php";
        break;
}
include "layout/footer.php";
?>