<?php
include 'header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'profile':
            include 'profile.php';
            break;
        case 'album':
            include 'album.php';
            break;
        case 'database':
            include 'database.php';
            break;
            // case 'gesbuk':
            //     include 'gesbuk.php';
            //     break;
            // default:
            //     include 'home.php';
            //     break;
    }
} else {
    include 'home.php';
}

include 'footer.php';
