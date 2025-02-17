<?php
include "layouts/header.php";
include "layouts/navbar.php";

// if (isset($_GET['page'])){
//     $page = $_GET
// }

switch ($page) {
    case 'home':
        include "views/guest/home.php";
        break;
    default:
        include "views/guest/home.php";
        break;
}
include "layout/footer.php";
?>