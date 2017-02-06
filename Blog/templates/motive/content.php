<?php
/* 
 * *****************************************************************************
 * Filename  : content.php
 * Creator   : Agis Rahma Herdiana                                  
 * © Copyright 2016                         
 * *****************************************************************************
 */

$page   = $_GET['page'];
switch($page) {
    case "home":
        include "$folder/pages/home.php";
        break;
    case "artikel":
        include "$folder/pages/read.php";
        break;
    case "terbaru":
        include "$folder/pages/new.php";
        break;
    case "kategori":
        include "$folder/pages/category.php";
        break;
    case "populer":
        include "$folder/pages/hits.php";
        break;

    default :
        include "$folder/pages/home.php";
        break;
}

