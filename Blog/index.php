<?php
/* 
 * *****************************************************************************
 * Filename  : index.php                                                      
 * Creator   : Agis Rahma Herdiana                                   
 * © Copyright 2016                        
 * *****************************************************************************
 */
    ob_start(); 
    session_start();
    // menyisipkan dbcontroller ---------------------------------------------------
    require_once ("system/dbcontroller.php");
    // menyisipkan functions ---------------------------------------------------
    require_once ("system/functions.php");

    // membuat fungsi baru
    $query = new Functions();
    //membuat koneksi
    $db = new Connection();

   

    // Template web ------------------------------------------------------------

    $template   = $query->templates();
    $setting    = $query->get_setting();
    $folder     = $template['folder'];
    require_once ("$folder/template.php");

/*
 * ****************************************************************************
 */