<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

if(MOD_APP=='' OR MOD_APP=='home' OR MOD_APP=='webcam' OR MOD_APP=='utama' OR MOD_APP=='calendar') {
    if(LEVEL_USER=='1') {
        if(MOD_APP=='' OR MOD_APP=='home') {
            $app_home = 'active';
        }
        else {
            $app_home = '';
        }
        echo "<li class='$app_home wow zoomIn' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=home'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Beranda
                </a>
              </li>";
        if(MOD_APP=='utama') {
            $app_utama = 'active';
        }
        else {
            $app_utama = '';
        }
        echo "<li class='$app_utama wow zoomIn' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=utama'>
                    <img src='assets/Icon/utama.png' id='img-menu'><br> Utama
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=info'>
                    <img src='assets/Icon/info.png' id='img-menu'><br> Info
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=engine-docs'>
                    <img src='assets/Icon/document.png' id='img-menu'><br> Eng Document
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=report'>
                    <img src='assets/Icon/report.png' id='img-menu'><br> Report
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.3s'>
                <a href='admin.php?mod_apps=ndt'>
                    <img src='assets/Icon/ndt.png' id='img-menu'><br> NDT
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.5s'>
                <a href='admin.php?mod_apps=e-book'>
                    <img src='assets/Icon/e-book.png' id='img-menu'><br> E-Book
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.7s'>
                <a href='admin.php?mod_apps=regulasi'>
                    <img src='assets/Icon/regulasi.png' id='img-menu'><br> Regulasi
                </a>
              </li>";
            echo "<li class='wow zoomIn' data-wow-delay='2.1s'>
                <a href='admin.php?mod_apps=user&media_app=app_list_user'>
                    <img src='assets/Icon/users.png' id='img-menu'><br> Pengguna
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.9s'>
                <a href='admin.php?mod_apps=sms_gateaway'>
                    <img src='assets/Icon/sms-themes.png' id='img-menu'><br> Gateaway
                </a>
              </li>";
            echo "<li class='wow zoomIn' data-wow-delay='1.9s'>
                <a href='admin.php?mod_apps=themes'>
                    <img src='assets/Icon/themes.png' id='img-menu'><br> Themes Editor
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.7s'>
        <a href='admin.php?mod_apps=webcam'>
                <img src='assets/Icon/webcam.png' id='img-menu'><br> Web Camera
        </a>
        </li>";
    } else {
        if(MOD_APP=='' OR MOD_APP=='home') {
            $app_home = 'active';
        }
        else {
            $app_home = '';
        }
        echo "<li class='$app_home wow zoomIn' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=home'>
                    <i class='icon-home icon-large'></i> Beranda
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=utama'>
                    <i class='icon-globe icon-large'></i> Utama
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=info'>
                    <i class='icon-info-sign icon-large'></i> Info
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=engine-docs'>
                    <i class='icon-file icon-large'></i> Eng Document
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=report'>
                    <i class='icon-list-alt icon-large'></i> Report
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.3s'>
                <a href='admin.php?mod_apps=ndt'>
                    <i class='icon-signal icon-large'></i> NDT
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.5s'>
                <a href='admin.php?mod_apps=e-book'>
                    <i class='icon-book icon-large'></i> E-Book
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.7s'>
                <a href='admin.php?mod_apps=regulasi'>
                    <i class='icon-sitemap icon-large'></i> Regulasi
                </a>
              </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.7s'>
                <a href='admin.php?mod_apps=webcam'>
                        <i class='icon-camera icon-large'></i> Web Camera
                </a>
                </li>";
        echo "<li class='wow zoomIn' data-wow-delay='1.9s'>
                <a href='admin.php?mod_apps=calendar'>
                    <i class='icon-calendar icon-large'></i> Calendar
                </a>
              </li>";
    }
}
//else if(MOD_APP=='utama') {
//    echo "<li>
//            <a href=''>
//                <i class='icon-home icon-large'></i> Home
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> Thermo Trend
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=app_1&media_app=app_pipe_list'>
//                <img src='assets/Icon/pipe.png' id='img-menu'><br> Pipe List
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> Thermo Trend
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=app_1&media_app=app_pipe_list'>
//                <img src='assets/Icon/pipe.png' id='img-menu'><br> Pipe List
//            </a>
//          </li>";
//
//
//
//}
else if(MOD_APP=='info') {
    if(MEDIA_APP=='home' || MEDIA_APP=='') {
	if(MEDIA_APP=='home' || MEDIA_APP=='') {
        $home = "active";
	}
	else {
			$home = "";
	}
    echo "<li class='$home wow zoomIn' data-wow-delay='0.3s'>
            <a href='admin.php?mod_apps=info'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
//	if(MEDIA_APP=='jadwal_oncall') {
//        $jadwal_oncall= "active";
//	}
//	else {
//		$jadwal_oncall = "";
//	}
//    echo "<li class='$jadwal_oncall wow zoomIn' data-wow-delay='0.5s'>
//            <a href='admin.php?mod_apps=info&media_app=jadwal_oncall'>
//                <img src='assets/Icon/jadwal.png' id='img-menu'><br> Jadwal OC
//            </a>
//          </li>";
	if(MEDIA_APP=='petugas_oncall') {
        $petugas_oncall= "active";
	}
	else {
		$petugas_oncall = "";
	}
    echo "<li class='$petugas_oncall wow zoomIn' data-wow-delay='0.7s'>
            <a href='admin.php?mod_apps=info&media_app=petugas_oncall'>
                <img src='assets/Icon/oncall.png' id='img-menu'><br> Petugas OC
            </a>
          </li>";
	if(MEDIA_APP=='pelat_pekerja') {
        $pelat_pekerja= "active";
	}
	else {
		$pelat_pekerja = "";
	}
    echo "<li class='$pelat_pekerja wow zoomIn' data-wow-delay='0.9s'>
            <a href='admin.php?mod_apps=info&media_app=pelat_pekerja'>
                <img src='assets/Icon/standard.png' id='img-menu'><br>Pelatihan Pekerja
            </a>
          </li>";
	if(MEDIA_APP=='agenda_rapat') {
        $agenda_rapat= "active";
	}
	else {
		$agenda_rapat = "";
	}
    echo "<li class='$agenda_rapat wow zoomIn' data-wow-delay='1.2s'>
            <a href='admin.php?mod_apps=info&media_app=agenda_rapat'>
               <img src='assets/Icon/agenda.png' id='img-menu'><br> Agenda Rapat
            </a>
          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> MPS
//            </a>
//          </li>";
	if(MEDIA_APP=='top_issue') {
        $top_issue= "active";
	}
	else {
		$top_issue = "";
	}
    echo "<li class='$top_issue wow zoomIn' data-wow-delay='1.5s'>
            <a href='admin.php?mod_apps=info&media_app=top_issue'>
                <img src='assets/Icon/newsletter.png' id='img-menu'><br> Top Issue
            </a>
          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> Perpustakaan
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> List Hotel
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> PEKA
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> Kurs
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> KOMET
//            </a>
//          </li>";
    } else {
        if(MEDIA_APP=='home' || MEDIA_APP=='') {
        $home = "active";
	}
	else {
			$home = "";
	}
    echo "<li class='$home'>
            <a href='admin.php?mod_apps=info'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
//	if(MEDIA_APP=='jadwal_oncall') {
//        $jadwal_oncall= "active";
//	}
//	else {
//		$jadwal_oncall = "";
//	}
//    echo "<li class='$jadwal_oncall'>
//            <a href='admin.php?mod_apps=info&media_app=jadwal_oncall'>
//                <img src='assets/Icon/jadwal.png' id='img-menu'><br> Jadwal OC
//            </a>
//          </li>";
	if(MEDIA_APP=='petugas_oncall') {
        $petugas_oncall= "active";
	}
	else {
		$petugas_oncall = "";
	}
    echo "<li class='$petugas_oncall'>
            <a href='admin.php?mod_apps=info&media_app=petugas_oncall'>
                <img src='assets/Icon/oncall.png' id='img-menu'><br> Petugas OC
            </a>
          </li>";
	if(MEDIA_APP=='pelat_pekerja') {
        $pelat_pekerja= "active";
	}
	else {
		$pelat_pekerja = "";
	}
    echo "<li class='$pelat_pekerja'>
            <a href='admin.php?mod_apps=info&media_app=pelat_pekerja'>
                <img src='assets/Icon/standard.png' id='img-menu'><br>Pelatihan Pekerja
            </a>
          </li>";
	if(MEDIA_APP=='agenda_rapat') {
        $agenda_rapat= "active";
	}
	else {
		$agenda_rapat = "";
	}
    echo "<li class='$agenda_rapat'>
            <a href='admin.php?mod_apps=info&media_app=agenda_rapat'>
               <img src='assets/Icon/agenda.png' id='img-menu'><br> Agenda Rapat
            </a>
          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> MPS
//            </a>
//          </li>";
	if(MEDIA_APP=='top_issue') {
        $top_issue= "active";
	}
	else {
		$top_issue = "";
	}
    echo "<li class='$top_issue'>
            <a href='admin.php?mod_apps=info&media_app=top_issue'>
                <img src='assets/Icon/newsletter.png' id='img-menu'><br> Top Issue
            </a>
          </li>";
    }
} else if(MOD_APP=='engine-docs') {
    if(MEDIA_APP=='') {
        if(MEDIA_APP=='home' OR MEDIA_APP=='') {
            $eng_docs_hme = 'active';
        }
        else {
            $eng_docs_hme = '';
        }
        echo "<li class='$eng_docs_hme wow zoomInLeft' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=engine-docs'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        if(MEDIA_APP=='welder') {
            $welder = 'active';
        }
        else {
            $welder = '';
        }
        echo "<li class='$welder wow zoomInLeft' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=welder'>
                    <img src='assets/Icon/welder.png' id='img-menu'><br> Welder
                </a>
              </li>";
        if(MEDIA_APP=='css') {
            $css = 'active';
        }
        else {
            $css = '';
        }
        echo "<li class='$css wow zoomInLeft' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=css'>
                    <img src='assets/Icon/css.png' id='img-menu'><br> CSS
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=ram'>
    //                <i class='icon-large icon-book'></i> RAM
    //            </a>
    //          </li>";
        if(MEDIA_APP=='cormon') {
            $cormon = 'active';
        }
        else {
            $cormon = '';
        }
        echo "<li class='$cormon wow zoomInLeft' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=cormon'>
                    <img src='assets/Icon/corrosion.png' id='img-menu'><br> Conmon
                </a>
              </li>";
        if(MEDIA_APP=='others_drawing') {
            $others_drawing = 'active';
        }
        else {
            $others_drawing = '';
        }
        echo "<li class='$others_drawing wow zoomInLeft' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=others_drawing'>
                    <img src='assets/Icon/other2.png' id='img-menu'><br> Others Drawing
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=ICD'>
    //                <i class='icon-large icon-book'></i> ICD
    //            </a>
    //          </li>";
        if(MEDIA_APP=='pipe_list') {
            $pipe_list = 'active';
        }
        else {
            $pipe_list = '';
        }
        echo "<li class='$pipe_list wow zoomInLeft' data-wow-delay='1.3s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=pipe_list'>
                    <img src='assets/Icon/pipa.png' id='img-menu'><br> Pipe List
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=equipment_list'>
    //                <i class='icon-large icon-book'></i> Equipment
    //            </a>
    //          </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=weld_elctrode'>
    //                <i class='icon-large icon-book'></i> Weld Electrode
    //            </a>
    //          </li>";
        if(MEDIA_APP=='wps') {
            $wps = 'active';
        }
        else {
            $wps = '';
        }
        echo "<li class='$wps wow zoomInLeft' data-wow-delay='1.5s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=wps'>
                    <img src='assets/Icon/wps1.png' id='img-menu'><br> WPS
                </a>
              </li>";
        if(MEDIA_APP=='seig') {
            $seig = 'active';
        }
        else {
            $seig = '';
        }
        echo "<li class='$seig wow zoomInLeft' data-wow-delay='1.7s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=seig'>
                    <img src='assets/Icon/seig.png' id='img-menu'><br> SEIG
                </a>
              </li>";
        if(MEDIA_APP=='equipment') {
            $equipment = 'active';
        }
        else {
            $equipment = '';
        }
        echo "<li class='$equipment wow zoomInLeft' data-wow-delay='1.9s'>
                <a href='admin.php?mod_apps=engine-docs&media_app=equipment'>
                    <img src='assets/Icon/equipment.png' id='img-menu'><br> Equipment
                </a>
              </li>";
    } else {
        if(MEDIA_APP=='home' OR MEDIA_APP=='') {
            $eng_docs_hme = 'active';
        }
        else {
            $eng_docs_hme = '';
        }
        echo "<li class='$eng_docs_hme'>
                <a href='admin.php?mod_apps=engine-docs'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        if(MEDIA_APP=='welder') {
            $welder = 'active';
        }
        else {
            $welder = '';
        }
        echo "<li class='$welder'>
                <a href='admin.php?mod_apps=engine-docs&media_app=welder'>
                    <img src='assets/Icon/welder.png' id='img-menu'><br> Welder
                </a>
              </li>";
        if(MEDIA_APP=='css') {
            $css = 'active';
        }
        else {
            $css = '';
        }
        echo "<li class='$css'>
                <a href='admin.php?mod_apps=engine-docs&media_app=css'>
                    <img src='assets/Icon/css.png' id='img-menu'><br> CSS
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=ram'>
    //                <i class='icon-large icon-book'></i> RAM
    //            </a>
    //          </li>";
        if(MEDIA_APP=='cormon') {
            $cormon = 'active';
        }
        else {
            $cormon = '';
        }
        echo "<li class='$cormon'>
                <a href='admin.php?mod_apps=engine-docs&media_app=cormon'>
                    <img src='assets/Icon/corrosion.png' id='img-menu'><br> Conmon
                </a>
              </li>";
        if(MEDIA_APP=='others_drawing') {
            $others_drawing = 'active';
        }
        else {
            $others_drawing = '';
        }
        echo "<li class='$others_drawing'>
                <a href='admin.php?mod_apps=engine-docs&media_app=others_drawing'>
                    <img src='assets/Icon/other2.png' id='img-menu'><br> Others Drawing
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=ICD'>
    //                <i class='icon-large icon-book'></i> ICD
    //            </a>
    //          </li>";
        if(MEDIA_APP=='pipe_list') {
            $pipe_list = 'active';
        }
        else {
            $pipe_list = '';
        }
        echo "<li class='$pipe_list'>
                <a href='admin.php?mod_apps=engine-docs&media_app=pipe_list'>
                    <img src='assets/Icon/pipa.png' id='img-menu'><br> Pipe List
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=equipment_list'>
    //                <i class='icon-large icon-book'></i> Equipment
    //            </a>
    //          </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=engine-docs&media_app=weld_elctrode'>
    //                <i class='icon-large icon-book'></i> Weld Electrode
    //            </a>
    //          </li>";
        if(MEDIA_APP=='wps') {
            $wps = 'active';
        }
        else {
            $wps = '';
        }
        echo "<li class='$wps'>
                <a href='admin.php?mod_apps=engine-docs&media_app=wps'>
                    <img src='assets/Icon/wps1.png' id='img-menu'><br> WPS
                </a>
              </li>";
        if(MEDIA_APP=='seig') {
            $seig = 'active';
        }
        else {
            $seig = '';
        }
        echo "<li class='$seig'>
                <a href='admin.php?mod_apps=engine-docs&media_app=seig'>
                    <img src='assets/Icon/seig.png' id='img-menu'><br> SEIG
                </a>
              </li>";
        if(MEDIA_APP=='equipment') {
            $equipment = 'active';
        }
        else {
            $equipment = '';
        }
        echo "<li class='$equipment'>
                <a href='admin.php?mod_apps=engine-docs&media_app=equipment'>
                    <img src='assets/Icon/equipment.png' id='img-menu'><br> Equipment
                </a>
              </li>";
    }

}
else if(MOD_APP=='report') {
    if(MEDIA_APP=='') {
        echo "<li class='wow bounceInDown' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=report'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=report&media_app=anggaran'>
                    <img src='assets/Icon/anggaran.png' id='img-menu'><br> Anggaran
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=report&media_app=log_book'>
                    <img src='assets/Icon/log.png' id='img-menu'><br> Log Book
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=report&media_app=atk'>
                    <img src='assets/Icon/atk.png' id='img-menu'><br> ATK
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=report&media_app=ti_ujp'>
    //                <i class='icon-signal icon-large'></i> TI UJP
    //            </a>
    //          </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=report&media_app=notifikasi'>
    //                <i class='icon-bell icon-large'></i> Notifikasi
    //            </a>
    //          </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=report&media_app=cleaning_tangki'>
                    <img src='assets/Icon/ctangki.png' id='img-menu'><br> Cleaning Tangki
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='1.3s'>
                <a href='admin.php?mod_apps=report&media_app=turn_around'>
                    <img src='assets/Icon/turn_around.png' id='img-menu'><br> Turn Around
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=report&media_app=coc'>
    //                <i class='icon-signal icon-large'></i> COC
    //            </a>
    //          </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='1.5s'>
                <a href='admin.php?mod_apps=report&media_app=lap_bulanan'>
                    <img src='assets/Icon/lapbulanan.png' id='img-menu'><br> Laporan Bulanan
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='1.7s'>
                <a href='admin.php?mod_apps=report&media_app=onstream'>
                    <img src='assets/Icon/termo.png' id='img-menu'><br>Onstream Inspection
                </a>
              </li>";
        echo "<li class='wow bounceInDown' data-wow-delay='1.9s'>
                <a href='admin.php?mod_apps=report&media_app=coc'>
                    <img src='assets/Icon/other1.png' id='img-menu'><br> COC
                </a>
              </li>";
    } else {
        echo "<li>
            <a href='admin.php?mod_apps=report'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=report&media_app=anggaran'>
                <img src='assets/Icon/anggaran.png' id='img-menu'><br> Anggaran
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=report&media_app=log_book'>
                <img src='assets/Icon/log.png' id='img-menu'><br> Log Book
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=report&media_app=laporan_bulanan'>
//                <i class='icon-signal icon-large'></i> Lap Bulanan
//            </a>
//          </li>";
//    echo "<li>
//            <a href=''>
//                <i class='icon-signal icon-large'></i> Anggaran
//            </a>
//          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=report&media_app=atk'>
                <img src='assets/Icon/atk.png' id='img-menu'><br> ATK
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=report&media_app=ti_ujp'>
//                <i class='icon-signal icon-large'></i> TI UJP
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=report&media_app=notifikasi'>
//                <i class='icon-bell icon-large'></i> Notifikasi
//            </a>
//          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=report&media_app=cleaning_tangki'>
                <img src='assets/Icon/ctangki.png' id='img-menu'><br> Cleaning Tangki
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=report&media_app=turn_around'>
                <img src='assets/Icon/turn_around.png' id='img-menu'><br> Turn Around
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=report&media_app=coc'>
//                <i class='icon-signal icon-large'></i> COC
//            </a>
//          </li>";
    echo "<li>
                <a href='admin.php?mod_apps=report&media_app=lap_bulanan'>
                    <img src='assets/Icon/lapbulanan.png' id='img-menu'><br> Laporan Bulanan
                </a>
              </li>";
    echo "<li>
                <a href='admin.php?mod_apps=report&media_app=onstream'>
                    <img src='assets/Icon/termo.png' id='img-menu'><br> Onstream Inspection
                </a>
              </li>";
    echo "<li>
                <a href='admin.php?mod_apps=report&media_app=coc'>
                    <img src='assets/Icon/other1.png' id='img-menu'><br> COC
                </a>
              </li>";
    }

}
else if(MOD_APP=='ndt') {
    if(MEDIA_APP=='') {
        echo "<li class='wow bounceInRight' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=ndt'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        echo "<li class='wow bounceInRight' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=ndt&media_app=laporan_ndt'>
                    <img src='assets/Icon/report.png' id='img-menu'><br> Laporan NDT
                </a>
              </li>";
        echo "<li class='wow bounceInRight' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=ndt&media_app=alat_ndt'>
                    <img src='assets/Icon/ndt.png' id='img-menu'><br> Alat NDT
                </a>
              </li>";
        echo "<li class='wow bounceInRight' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=ndt&media_app=form_ndt'>
                    <img src='assets/Icon/formulir.png' id='img-menu'><br> Form NDT
                </a>
              </li>";
        echo "<li class='wow bounceInRight' data-wow-delay='0.6s'>
                <a href='admin.php?mod_apps=ndt&media_app=personil_ndt'>
                    <img src='assets/Icon/personil.png' id='img-menu'><br> NDT Personil
                </a>
              </li>";
    } else {
        echo "<li>
                <a href='admin.php?mod_apps=ndt'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        echo "<li>
                <a href='admin.php?mod_apps=ndt&media_app=laporan_ndt'>
                    <img src='assets/Icon/report.png' id='img-menu'><br> Laporan NDT
                </a>
              </li>";
        echo "<li>
                <a href='admin.php?mod_apps=ndt&media_app=alat_ndt'>
                    <img src='assets/Icon/ndt.png' id='img-menu'><br> Alat NDT
                </a>
              </li>";
        echo "<li>
                <a href='admin.php?mod_apps=ndt&media_app=form_ndt'>
                    <img src='assets/Icon/formulir.png' id='img-menu'><br> Form NDT
                </a>
              </li>";
        echo "<li class='wow bounceInRight' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=ndt&media_app=personil_ndt'>
                    <img src='assets/Icon/personil.png' id='img-menu'><br> NDT Personil
                </a>
              </li>";
    }


} else if(MOD_APP=='e-book') {
    if(MEDIA_APP=='') {
        if(MEDIA_APP=='home' OR MEDIA_APP=='') {
                $home = "active";
        }
        else {
                $home = "";
        }
        echo "<li class='$home wow zoomInLeft' data-wow-delay='1.3s'>
                <a href='admin.php?mod_apps=e-book&media_app=home'>
                    <img src='assets/Icon/home.png' id='img-menu'><br> Home
                </a>
              </li>";
        if(MEDIA_APP=='uu_pp') {
                $uu_pp = "active";
        }
        else {
                $uu_pp = "";
        }
        echo "<li class='$uu_pp wow zoomInLeft' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=e-book&media_app=uu_pp'>
                    <img src='assets/Icon/uu-pp.png' id='img-menu'><br> UU dan PP
                </a>
              </li>";
        if(MEDIA_APP=='produk') {
                $produk = "active";
        }
        else {
                $produk = "";
        }
        echo "<li class='$produk wow zoomInLeft' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=e-book&media_app=produk'>
                    <img src='assets/Icon/produk.png' id='img-menu'><br> Produk
                </a>
              </li>";
        if(MEDIA_APP=='materi_kursus') {
                $materi_kursus = "active";
        }
        else {
                $materi_kursus = "";
        }
        echo "<li class='$materi_kursus wow zoomInRight' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=e-book&media_app=materi_kursus'>
                    <img src='assets/Icon/kursus.png' id='img-menu'><br> Materi Kursus
                </a>
              </li>";
        if(MEDIA_APP=='pink_book') {
                $pink_book = "active";
        }
        else {
                $pink_book = "";
        }
        echo "<li class='$pink_book wow zoomInRight' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=e-book&media_app=pink_book'>
                    <img src='assets/Icon/pink_book.png' id='img-menu'><br> Pink Book
                </a>
              </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=e-book&media_app=sap_mysap'>
    //                <i class='icon-file icon-large'></i> SAP MYSAP
    //            </a>
    //          </li>";
    //    echo "<li>
    //            <a href='admin.php?mod_apps=e-book&media_app=tki_tko'>
    //                <i class='icon-file icon-large'></i> TKI TKO
    //            </a>
    //          </li>";
        if(MEDIA_APP=='standard') {
                $standard = "active";
        }
        else {
                $standard = "";
        }
        echo "<li class='$standard wow zoomInRight' data-wow-delay='0.1s'>
                <a href='admin.php?mod_apps=e-book&media_app=standard'>
                    <img src='assets/Icon/standard.png' id='img-menu'><br> Standard
                </a>
              </li>";
        if(MEDIA_APP=='corner_book') {
                $corner_book = "active";
        }
        else {
                $corner_book = "";
        }
        echo "<li class='$corner_book wow zoomInRight' data-wow-delay='0.3s'>
                <a href='admin.php?mod_apps=e-book&media_app=corner_book'>
                    <img src='assets/Icon/corner.png' id='img-menu'><br> Corner Book
                </a>
              </li>";
        if(MEDIA_APP=='lembar_ilmiah') {
                $lembar_ilmiah = "active";
        }
        else {
                $lembar_ilmiah = "";
        }
        echo "<li class='$lembar_ilmiah wow zoomInRight' data-wow-delay='0.5s'>
                <a href='admin.php?mod_apps=e-book&media_app=lembar_ilmiah'>
                    <img src='assets/Icon/lembar.png' id='img-menu'><br> Lembar Ilmiah
                </a>
              </li>";
        if(MEDIA_APP=='sap_mysap') {
                $sap_mysap = "active";
        }
        else {
                $sap_mysap = "";
        }
/*        echo "<li class='$sap_mysap wow zoomInRight' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=e-book&media_app=sap_mysap'>
                    <img src='assets/Icon/sapmysap.png' id='img-menu'><br> SAP MYSAP
                </a>
              </li>";
			  */
        if(MEDIA_APP=='artikel_pekerja') {
                $artikel_pekerja = "active";
        }
        else {
                $artikel_pekerja = "";
        }
        echo "<li class='$artikel_pekerja wow zoomInRight' data-wow-delay='0.7s'>
                <a href='admin.php?mod_apps=e-book&media_app=artikel_pekerja'>
                    <img src='assets/Icon/artpekerja.png' id='img-menu'><br> Artikel Pekerja
                </a>
              </li>";
        if(MEDIA_APP=='corrosion_mapping') {
                $corrosion_mapp = "active";
        }
        else {
                $corrosion_mapp = "";
        }
        echo "<li class='$corrosion_mapp wow zoomInRight' data-wow-delay='0.9s'>
                <a href='admin.php?mod_apps=e-book&media_app=corrosion_mapping'>
                    <img src='assets/Icon/corrosion.jpg' id='img-menu'><br> Corrosion Mapping
                </a>
              </li>";
        if(MEDIA_APP=='quality_plan') {
                $quality_plan = "active";
        }
        else {
                $quality_plan = "";
        }
        echo "<li class='$quality_plan wow zoomInRight' data-wow-delay='1.1s'>
                <a href='admin.php?mod_apps=e-book&media_app=quality_plan'>
                    <img src='assets/Icon/quality.png' id='img-menu'><br> Quality Plan
                </a>
              </li>";

    }
    else {
        if(MEDIA_APP=='home' OR MEDIA_APP=='') {
            $home = "active";
    }
    else {
            $home = "";
    }
    echo "<li class='$home'>
            <a href='admin.php?mod_apps=e-book&media_app=home'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    if(MEDIA_APP=='uu_pp') {
            $uu_pp = "active";
    }
    else {
            $uu_pp = "";
    }
    echo "<li class='$uu_pp'>
            <a href='admin.php?mod_apps=e-book&media_app=uu_pp'>
                <img src='assets/Icon/uu-pp.png' id='img-menu'><br> UU dan PP
            </a>
          </li>";
    if(MEDIA_APP=='produk') {
            $produk = "active";
    }
    else {
            $produk = "";
    }
    echo "<li class='$produk'>
            <a href='admin.php?mod_apps=e-book&media_app=produk'>
                <img src='assets/Icon/produk.png' id='img-menu'><br> Produk
            </a>
          </li>";
    if(MEDIA_APP=='materi_kursus') {
            $materi_kursus = "active";
    }
    else {
            $materi_kursus = "";
    }
    echo "<li class='$materi_kursus'>
            <a href='admin.php?mod_apps=e-book&media_app=materi_kursus'>
                <img src='assets/Icon/kursus.png' id='img-menu'><br> Materi Kursus
            </a>
          </li>";
    if(MEDIA_APP=='pink_book') {
            $pink_book = "active";
    }
    else {
            $pink_book = "";
    }
    echo "<li class='$pink_book'>
            <a href='admin.php?mod_apps=e-book&media_app=pink_book'>
                <img src='assets/Icon/pink_book.png' id='img-menu'><br> Pink Book
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=e-book&media_app=sap_mysap'>
//                <i class='icon-file icon-large'></i> SAP MYSAP
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=e-book&media_app=tki_tko'>
//                <i class='icon-file icon-large'></i> TKI TKO
//            </a>
//          </li>";
    if(MEDIA_APP=='standard') {
            $standard = "active";
    }
    else {
            $standard = "";
    }
    echo "<li class='$standard'>
            <a href='admin.php?mod_apps=e-book&media_app=standard'>
                <img src='assets/Icon/standard.png' id='img-menu'><br> Standard
            </a>
          </li>";
    if(MEDIA_APP=='corner_book') {
            $corner_book = "active";
    }
    else {
            $corner_book = "";
    }
    echo "<li class='$corner_book'>
            <a href='admin.php?mod_apps=e-book&media_app=corner_book'>
                <img src='assets/Icon/corner.png' id='img-menu'><br> Corner Book
            </a>
          </li>";
    if(MEDIA_APP=='lembar_ilmiah') {
            $lembar_ilmiah = "active";
    }
    else {
            $lembar_ilmiah = "";
    }
    echo "<li class='$lembar_ilmiah'>
            <a href='admin.php?mod_apps=e-book&media_app=lembar_ilmiah'>
                <img src='assets/Icon/lembar.png' id='img-menu'><br> Lembar Ilmiah
            </a>
          </li>";
 /*   if(MEDIA_APP=='sap_mysap') {
                $sap_mysap = "active";
        }
        else {
                $sap_mysap = "";
        }
        echo "<li class='$sap_mysap'>
                <a href='admin.php?mod_apps=e-book&media_app=sap_mysap'>
                    <img src='assets/Icon/sapmysap.png' id='img-menu'><br> SAP MYSAP
                </a>
              </li>";
			  */
    if(MEDIA_APP=='artikel_pekerja') {
            $artikel_pekerja = "active";
    }
    else {
            $artikel_pekerja = "";
    }
    echo "<li class='$artikel_pekerja'>
            <a href='admin.php?mod_apps=e-book&media_app=artikel_pekerja'>
                <img src='assets/Icon/artpekerja.png' id='img-menu'><br> Artikel Pekerja
            </a>
          </li>";
    if(MEDIA_APP=='corrosion_mapping') {
                $corrosion_mapp = "active";
        }
        else {
                $corrosion_mapp = "";
        }
        echo "<li class='$corrosion_mapp'>
                <a href='admin.php?mod_apps=e-book&media_app=corrosion_mapping'>
                    <img src='assets/Icon/corrosion.jpg' id='img-menu'><br> Corrosion Mapping
                </a>
              </li>";
        if(MEDIA_APP=='quality_plan') {
                $quality_plan = "active";
        }
        else {
                $quality_plan = "";
        }
        echo "<li class='$quality_plan'>
                <a href='admin.php?mod_apps=e-book&media_app=quality_plan'>
                    <img src='assets/Icon/quality.png' id='img-menu'><br> Quality Plan
                </a>
              </li>";

    }

} else if(MOD_APP=='regulasi') {
    if(MEDIA_APP=='') {
    if(MEDIA_APP=='home' || MEDIA_APP=='') {
        $home_reg = "active";
    }
    else {
        $home_reg = "";
    }
    echo "<li class='$home_reg wow bounceInLeft' data-wow-delay='1.5s'>
            <a href='admin.php?mod_apps=regulasi'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Statutory
//            </a>
//          </li>";
    if(MEDIA_APP=='app_bejana') {
        $app_bejana = "active";
    }
    else {
        $app_bejana = "";
    }
    echo "<li class='$app_bejana wow bounceInLeft' data-wow-delay='1.3s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_bejana'>
                <img src='assets/Icon/bejana.png' id='img-menu'><br> Bejana
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpi'>
//                <i class='icon-paste icon-large'></i> Boiler
//            </a>
//          </li>";
    if(MEDIA_APP=='app_metering') {
        $app_metering = "active";
    }
    else {
        $app_metering = "";
    }
    echo "<li class='$app_metering wow bounceInLeft' data-wow-delay='1.1s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
                <img src='assets/Icon/metering.png' id='img-menu'><br> Metering
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Cranes
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_psv'>
//                <i class='icon-file icon-large'></i> PSV
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Radioaktif
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_psv'>
//                <i class='icon-file icon-large'></i> Vesel
//            </a>
//          </li>";
    if(MEDIA_APP=='app_skpi') {
        $app_skpi = "active";
    }
    else {
        $app_skpi = "";
    }
    echo "<li class='$app_skpi wow bounceInLeft' data-wow-delay='0.9s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_skpi'>
                <img src='assets/Icon/skpi.png' id='img-menu'><br> SKPI
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpp'>
//                <i class='icon-tasks icon-large'></i> Timbangan
//            </a>
//          </li>";

    if(MEDIA_APP=='app_termo') {
        $app_termo = "active";
    }
    else {
        $app_termo = "";
    }
    echo "<li class='$app_termo wow bounceInLeft' data-wow-delay='.7s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_termo'>
                <img src='assets/Icon/termo.png' id='img-menu'><br> Termo
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpp'>
//                <i class='icon-tasks icon-large'></i> ATG
//            </a>
//          </li>";
    if(MEDIA_APP=='app_tanki') {
        $app_tanki= "active";
    }
    else {
        $app_tanki = "";
    }
    echo "<li class='$app_tanki wow bounceInLeft' data-wow-delay='0.5s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_tanki'>
                <img src='assets/Icon/tangki.png' id='img-menu'><br>Tangki
            </a>
          </li>";
    if(MEDIA_APP=='app_furnace') {
        $app_furnace = "active";
    }
    else {
        $app_furnace = "";
    }
    echo "<li class='$app_furnace wow bounceInLeft' data-wow-delay='0.3s'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_furnace'>
                <img src='assets/Icon/furnace.png' id='img-menu'><br> Furnace
            </a>
          </li>";
    }
    else {
    if(MEDIA_APP=='home' || MEDIA_APP=='') {
        $home_reg = "active";
    }
    else {
        $home_reg = "";
    }
    echo "<li class='$home_reg'>
            <a href='admin.php?mod_apps=regulasi'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Statutory
//            </a>
//          </li>";
    if(MEDIA_APP=='app_bejana') {
        $app_bejana = "active";
    }
    else {
        $app_bejana = "";
    }
    echo "<li class='$app_bejana'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_bejana'>
               <img src='assets/Icon/bejana.png' id='img-menu'><br> Bejana
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpi'>
//                <i class='icon-paste icon-large'></i> Boiler
//            </a>
//          </li>";
    if(MEDIA_APP=='app_metering') {
        $app_metering = "active";
    }
    else {
        $app_metering = "";
    }
    echo "<li class='$app_metering'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
                <img src='assets/Icon/metering.png' id='img-menu'><br> Metering
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Cranes
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_psv'>
//                <i class='icon-file icon-large'></i> PSV
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_metering'>
//                <i class='icon-dashboard icon-large'></i> Radioaktif
//            </a>
//          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_psv'>
//                <i class='icon-file icon-large'></i> Vesel
//            </a>
//          </li>";
    if(MEDIA_APP=='app_skpi') {
        $app_skpi = "active";
    }
    else {
        $app_skpi = "";
    }
    echo "<li class='$app_skpi'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_skpi'>
                <img src='assets/Icon/skpi.png' id='img-menu'><br> SKPI
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpp'>
//                <i class='icon-tasks icon-large'></i> Timbangan
//            </a>
//          </li>";

    if(MEDIA_APP=='app_termo') {
        $app_termo = "active";
    }
    else {
        $app_termo = "";
    }
    echo "<li class='$app_termo'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_termo'>
                <img src='assets/Icon/termo.png' id='img-menu'><br> Termo
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=regulasi&media_app=app_skpp'>
//                <i class='icon-tasks icon-large'></i> ATG
//            </a>
//          </li>";
    if(MEDIA_APP=='app_tanki') {
        $app_tanki = "active";
    }
    else {
        $app_tanki = "";
    }
    echo "<li class='$app_tanki'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_tanki'>
                <img src='assets/Icon/tangki.png' id='img-menu'><br>Tangki
            </a>
          </li>";
    if(MEDIA_APP=='app_furnace') {
        $app_furnace = "active";
    }
    else {
        $app_furnace = "";
    }
    echo "<li class='$app_furnace'>
            <a href='admin.php?mod_apps=regulasi&media_app=app_furnace'>
                <img src='assets/Icon/furnace.png' id='img-menu'><br> Furnace
            </a>
          </li>";
    }


} else if(MOD_APP=='foto') {
    echo "<li>
            <a href='admin.php?mod_apps=foto'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    if(MEDIA_APP=='foto_ta') {
        $foto_ta  = "class='active'";
    } else {
        $foto_ta  = "";
    }
    echo "<li $foto_ta>
            <a href='admin.php?mod_apps=foto&media_app=foto_ta'>
                <img src='assets/Icon/TA.png' id='img-menu'><br> Foto TA
            </a>
          </li>";
    if(MEDIA_APP=='foto_rutin') {
        $foto_rutin  = "class='active'";
    } else {
        $foto_rutin  = "";
    }
    echo "<li $foto_rutin>
            <a href='admin.php?mod_apps=foto&media_app=foto_rutin'>
               <img src='assets/Icon/rutin.png' id='img-menu'><br>Foto Rutin
            </a>
          </li>";
} else if(MOD_APP=='sms_gateaway') {
    echo "<li>
            <a href='admin.php?mod_apps=sms_gateaway'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=sms_gateaway'>
                <img src='assets/Icon/member-sms.png' id='img-menu'><br> Daftar Member
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=sms_gateaway&media_app=app_inbox_sms'>
                <img src='assets/Icon/inbox.png' id='img-menu'><br>Kotak Masuk
            </a>
          </li>";
//    echo "<li>
//            <a href='admin.php?mod_apps=sms_gateaway&media_app=app_inbox_sms'>
//                <i class='icon-envelope icon-large'></i> SMS Role
//            </a>
//          </li>";
    echo "<li>
            <a href='javascript:;' onclick='form_checking_sms();'>
                <img src='assets/Icon/sms.png' id='img-menu'><br> Window SMS
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=sms_gateaway&media_app=gateaway_editor'>
                <img src='assets/Icon/auto-reply.png' id='img-menu'><br> Auto Reply
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=sms_gateaway&media_app=app_pengaturan_sms'>
                <img src='assets/Icon/pengaturan.png' id='img-menu'><br> Pengaturan
            </a>
          </li>";


} else if(MOD_APP=='user') {
    if(LEVEL_USER=='1') {
    echo "<li>
            <a href='admin.php?mod_apps=user'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=app_list_user'>
                <img src='assets/Icon/member.png' id='img-menu'><br> Daftar User
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=app_add_user'>
                <img src='assets/Icon/newuser.png' id='img-menu'><br> New User
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=app_user_log'>
                <img src='assets/Icon/log-act.png' id='img-menu'><br> Log Aktifitas
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=app_user_modul'>
                <img src='assets/Icon/module.png' id='img-menu'><br> Akses Modul
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=pengaturan'>
                <img src='assets/Icon/setting.png' id='img-menu'><br> Pengaturan
            </a>
          </li>";
    } else {
        echo "<li>
            <a href='admin.php?mod_apps=user'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=user&media_app=app_user_log'>
                <i class='icon-tasks icon-large'></i> Log Aktifitas
            </a>
          </li>";
    }
} else if(MOD_APP=='themes') {
    echo "<li>
            <a href='admin.php?mod_apps=themes'>
                <img src='assets/Icon/home.png' id='img-menu'><br> Home
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=PHP'>
                <img src='assets/Icon/code_php.png' id='img-menu'><br> File PHP
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=CSS'>
                <img src='assets/Icon/code_css.png' id='img-menu'><br> File CSS
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=JS'>
                <img src='assets/Icon/code_js.png' id='img-menu'><br> File JS
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=htaccess'>
                <img src='assets/Icon/code_htaccess.png' id='img-menu'><br> HTACCESS
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=gateaway'>
                <img src='assets/Icon/sms-themes.png' id='img-menu'><br> Gateaway
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=themes&media_app=pengaturan'>
                <img src='assets/Icon/set_themes.png' id='img-menu'><br> Pengaturan
            </a>
          </li>";
} else if(MOD_APP=='pengaturan') {
    if(LEVEL_USER=='1') {
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan'>
                <i class='icon-wrench icon-large'></i> General
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan&media_app=themes'>
                <i class='icon-eye-open icon-large'></i> Themes
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan&media_app=user'>
                <i class='icon-user icon-large'></i> Pengguna
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan&media_app=gateaway'>
                <i class='icon-envelope icon-large'></i> Gateaway
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan&media_app=module'>
                <i class='icon-bar-chart icon-large'></i> Mod access
            </a>
          </li>";
    echo "<li>
            <a href='admin.php?mod_apps=pengaturan&media_app=role'>
                <i class='icon-lock icon-large'></i> Role access
            </a>
          </li>";
    }
}
?>
