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
        include "controller/portofolio/table.php";
        include "views/admin/portofolio/table.php";
        break;
    case "portofolio-create":
        include "views/admin/portofolio/create.php";
        break;
}

include "layouts/admin/footer.php";
?>