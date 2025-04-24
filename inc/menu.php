<?php
@$pages = $_GET['pages'];
switch ($pages) {
    case 'tampil':
        include '../pages/master/tampil.php';
        break;

    default:
        include '../pages/master/dashboard.php';
        break;
    }
?>