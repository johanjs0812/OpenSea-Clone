<?php
    session_start();
    if (isset($_SESSION['Role']) && $_SESSION['Role']=='admin') {
        header('location: Admin/Controller/admin.php');
    }
    else{
        header('location: Controller/index.php');
    }
?>