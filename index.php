<?php 
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    if (!isset($_GET['page'])) {
        include_once "./pages/home.php";
    }else{
        switch ($_GET['page']) {
            default:
                include_once "./pages/home.php";
                break;
        }
    }
?>