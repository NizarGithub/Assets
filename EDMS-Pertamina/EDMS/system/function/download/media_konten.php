<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
require_once ('../../../config.php');
require_once ('../../../system/class/Active_record_class.php');
require_once ('../../../system/function/Tanggal_function.php');
// New Object From Classes
$DBCon  = New ConnectDB();
$ARSql  = New Active_record();

$mod_apps = @$_GET['mod_app'];
$type_app = @$_GET['type'];
switch ($mod_apps) {
    case 'app_tanki':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_tanki_word.php';
                break;
            case 'excel':
                require_once 'apps/app_tanki_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_skpi':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_tanki_word.php';
                break;
            case 'excel':
                require_once 'apps/app_tanki_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_psv':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_tanki_word.php';
                break;
            case 'excel':
                require_once 'apps/app_tanki_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_furnace':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_furnace_word.php';
                break;
            case 'excel':
                require_once 'apps/app_furnace_excel.php';
                break;
            default:
                break;
        }
        break;
   
    case 'app_pipe':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_pipe_word.php';
                break;
            case 'excel':
                require_once 'apps/app_pipe_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_welder':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_welder_word.php';
                break;
            case 'excel':
                require_once 'apps/app_welder_excel.php';
                break;
            default:
                break;
        }
        break;
        case 'app_issue':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_issue_word.php';
                break;
            case 'excel':
                require_once 'apps/app_issue_excel.php';
                break;
            default:
                break;
        }
        break;
        case 'app_bejana':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_bejana_word.php';
                break;
            case 'excel':
                require_once 'apps/app_bejana_excel.php';
                break;
            default:
                break;
        }
        break;
     case 'app_metering':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_metering_word.php';
                break;
            case 'excel':
                require_once 'apps/app_metering_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_skpi':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_skpi_word.php';
                break;
            case 'excel':
                require_once 'apps/app_skpi_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_termo':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_termo_word.php';
                break;
            case 'excel':
                require_once 'apps/app_termo_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_tangki':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_tanki_word.php';
                break;
            case 'excel':
                require_once 'apps/app_tanki_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_cormon':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_cormon_word.php';
                break;
            case 'excel':
                require_once 'apps/app_cormon_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_atk':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_atk_word.php';
                break;
            case 'excel':
                require_once 'apps/app_atk_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_around':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_around_word.php';
                break;
            case 'excel':
                require_once 'apps/app_around_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_onstream':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_onstream_word.php';
                break;
            case 'excel':
                require_once 'apps/app_onstream_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_produk':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_produk_word.php';
                break;
            case 'excel':
                require_once 'apps/app_produk_excel.php';
                break;
            default:
                break;
        }
        break;
    case 'app_oncall':
        switch ($type_app) {
            case 'word':
                require_once 'apps/app_oncall_word.php';
                break;
            case 'excel':
                require_once 'apps/app_oncall_excel.php';
                break;
            default:
                break;
        }
        break;

    default:
        break;
}

