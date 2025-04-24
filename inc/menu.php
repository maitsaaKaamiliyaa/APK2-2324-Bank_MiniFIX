<?php
@$pages = $_GET['pages'];
switch ($pages) {
    case 'tampil':
        include '../pages/master/tampil.php';
        break;

    case 'form':
        include '../pages/master/form.php';
        break;
        
    default:
        include '../pages/master/dashboard.php';
        break;
    }
?>