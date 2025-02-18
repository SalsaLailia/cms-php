<?php
include "layouts/admin/head.php";
include "layouts/admin/sidebar.php";

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'dashboard';
}

switch($page){
    case "dashboard":
        include "views/admin/dashboard.php";
        break;
    case "portofolio-table":
        include "views/admin/portofolio/table.php";
        break;
}

include "layouts/admin/footer.php";
?>