<?php

/*
 * *****************************************************************************
 * Filename  : content.php
 * Creator   : Agis Rahma Herdiana
 * © Copyright 2016
 * *****************************************************************************
 */
$page = $_GET['page'];
switch ($page) {
    case "dashboard":
        include "pages/dashboard.php";
        break;
    /*     * ******************************************************************** */
    case "tambah_artikel":
        include "pages/mod_artikel/add.php";
        break;
    /*     * ******************************************************************** */
    case "artikel":
        include "pages/mod_artikel/view.php";
        break;
    /*     * ******************************************************************** */
    case "edit_artikel":
        include "pages/mod_artikel/edit.php";
        break;
    /*     * ******************************************************************** */
    case "kategori":
        include "pages/mod_kategori/view.php";
        break;
    /*     * ******************************************************************** */
    case "aksi_kategori":
        include "pages/mod_kategori/aksi.php";
        break;
    /*     * ******************************************************************** */
    case "tags":
        include "pages/mod_tags/view.php";
        break;
    /*     * ******************************************************************** */
    case "aksi_tags":
        include "pages/mod_tags/aksi.php";
        break;
    /*     * ******************************************************************** */
    case "module":
        include "pages/mod_module/view.php";
        break;
    /*     * ******************************************************************** */
    case "tambah_module":
        include "pages/mod_module/add.php";
        break;
    /*     * ******************************************************************** */
    case "edit_module":
        include "pages/mod_module/edit.php";
        break;
    /*     * ******************************************************************** */
    case "parent":
        include "pages/mod_module/mod_parent/add.php";
        break;
    /*     * ******************************************************************** */
    case "edit_parent":
        include "pages/mod_module/mod_parent/edit.php";
        break;
    /*     * ******************************************************************** */
    case "role":
        include "pages/mod_role/view.php";
        break;
    /*     * ******************************************************************** */
    case "edit_role":
        include "pages/mod_role/edit.php";
        break;
    /*     * ******************************************************************** */
     case "sensor":
        include "pages/mod_sensor/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_sensor":
        include "pages/mod_sensor/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_sensor":
        include "pages/mod_sensor/edit.php";
        break;
    /*     * ******************************************************************** */
     case "halamanstatis":
        include "pages/mod_halamanstatis/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_halamanstatis":
        include "pages/mod_halamanstatis/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_halamanstatis":
        include "pages/mod_halamanstatis/edit.php";
        break;
    /*     * ******************************************************************** */
     case "templates":
        include "pages/mod_templates/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_templates":
        include "pages/mod_templates/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_templates":
        include "pages/mod_templates/edit.php";
        break;
    /*     * ******************************************************************** */
     case "mainmenu":
        include "pages/mod_menu/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_mainmenu":
        include "pages/mod_menu/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_mainmenu":
        include "pages/mod_menu/edit.php";
        break;
    /*     * ******************************************************************** */
    case "submenu":
        include "pages/mod_menu/mod_submenu/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_submenu":
        include "pages/mod_menu/mod_submenu/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_submenu":
        include "pages/mod_menu/mod_submenu/edit.php";
        break;
    /*     * ******************************************************************** */
     case "advertisement":
        include "pages/mod_advertisement/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_advertisement":
        include "pages/mod_advertisement/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_advertisement":
        include "pages/mod_advertisement/edit.php";
        break;
    /*     * ******************************************************************** */
     case "partners":
        include "pages/mod_partners/view.php";
        break;
    /*     * ******************************************************************** */
     case "tambah_partners":
        include "pages/mod_partners/add.php";
        break;
    /*     * ******************************************************************** */
     case "edit_partners":
        include "pages/mod_partners/edit.php";
        break;
    /*     * ******************************************************************** */
    case "event":
        include "pages/mod_event/event.php";
        break;
    /*     * ******************************************************************** */
     case "setting":
        include "pages/mod_setting/setting.php";
        break;
    /*     * ******************************************************************** */
     case "profile":
        include "pages/mod_user/mod_profile/profile.php";
        break;
    /*     * ******************************************************************** */
     case "edit_profile":
        include "pages/mod_user/mod_profile/edit.php";
        break;
     /*     * ******************************************************************** */
     case "list_user":
        include "pages/mod_user/mod_users/view.php";
        break;
     /*     * ******************************************************************** */
     case "tambah_user":
        include "pages/mod_user/mod_users/add.php";
        break;
    /*     * ******************************************************************** */
     case "detail_user":
        include "pages/mod_user/mod_users/detail.php";
        break;
    /*   * ******************************************************************** */
    case "logout":
        include "logout.php";
        break;
    /*     * ******************************************************************** */
    default:
        include "pages/dashboard.php";
        break;
}
