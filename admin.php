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
    case "portofolio-store":
        include "controller/portofolio/store.php";
        break;
    case "portofolio-destroy":
        include "controller/portofolio/destroy.php";
        break;
    case "portofolio-edit":
        include "controller/portofolio/edit.php";
        include "views/admin/portofolio/edit.php";
        break;
    case "portofolio-update":
        include "controller/portofolio/update.php";
        break;
}

include "layouts/admin/footer.php";
?>