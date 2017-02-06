<?php
$app = $_GET['app'];
switch ($app) {
    case '':
        require "home.php";
        break;
    case 'profil':
        require "profil.php";
        break;
    case 'ujian':
        require "ujian.php";
        break;
    case 'mapel':
        require "mapel.php";
        break;
    case 'kelas':
        require "kelas.php";
        break;
    case 'logout':
        require "logout.php";
        break;
    default:
        require "home.php";
        break;
}
?>
