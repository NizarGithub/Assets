<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(MOD_APP=='user') {
    $user = "class='active'";
	if(MEDIA_APP=='' OR MEDIA_APP=='app_list_user') {
        $users_home = "class='active'";
    } else {
        $users_home = "";
    }
    if(MEDIA_APP=='app_add_user') {
        $users_add = "class='active'";
    } else {
        $users_add = "";
    }
	if(MEDIA_APP=='user_role') {
        $users_role = "class='active'";
    } else {
        $users_role = "";
    }
	if(MEDIA_APP=='user_level') {
        $users_level = "class='active'";
    } else {
        $users_level = "";
    }
	if(MEDIA_APP=='app_user_modul' AND APP_ACT=='') {
        $users_module_home = "class='active'";
    } else {
        $users_module_home = "";
    }
	if(MEDIA_APP=='app_user_modul' AND APP_ACT=='add_module') {
		$users_module_add = "class='active'";
	} else {
		$users_module_add = "";
	}
	
	
}
else {
    $user = "";
}
if(MOD_APP=='info') {
    $info = "class='active'";
	if(MEDIA_APP=='jadwal_oncall' AND APP_ACT=='') {
        $jadwal_oncall_home = "class='active'";
    } else {
        $jadwal_oncall_home = "";
    }
    if(MEDIA_APP=='jadwal_oncall' AND APP_ACT=='add_jadwal') {
        $jadwal_oncall_add = "class='active'";
    } else {
        $jadwal_oncall_add = "";
    }
	
	if(MEDIA_APP=='petugas_oncall' AND APP_ACT=='') {
        $petugas_oncall_home = "class='active'";
    } else {
        $petugas_oncall_home = "";
    }
    if(MEDIA_APP=='petugas_oncall' AND APP_ACT=='add_petugas') {
        $petugas_oncall_add = "class='active'";
    } else {
        $petugas_oncall_add = "";
    }
	
	if(MEDIA_APP=='pelat_pekerja' AND APP_ACT=='') {
        $pelat_pekerja_home = "class='active'";
    } else {
        $pelat_pekerja_home = "";
    }
    if(MEDIA_APP=='pelat_pekerja' AND APP_ACT=='upload_pelat_pekerja') {
        $pelat_pekerja_add = "class='active'";
    } else {
        $pelat_pekerja_add = "";
    }
	
	if(MEDIA_APP=='agenda_rapat' AND APP_ACT=='') {
        $agenda_home = "class='active'";
    } else {
        $agenda_home = "";
    }
    if(MEDIA_APP=='agenda_rapat' AND APP_ACT=='add_agenda') {
        $agenda_add = "class='active'";
    } else {
        $agenda_add = "";
    }
	
	if(MEDIA_APP=='top_issue' AND APP_ACT=='') {
        $top_issue_home = "class='active'";
    } else {
        $top_issue_home = "";
    }
    if(MEDIA_APP=='top_issue' AND APP_ACT=='add_issue') {
        $top_issue_add = "class='active'";
    } else {
        $top_issue_add = "";
    }
}
else {
    $info = "";
}
if(MOD_APP=='engine-docs') {
    $enginedocs = "class='active'";
	if(MEDIA_APP=='welder' AND APP_ACT=='') {
        $welder_home = "class='active'";
    } else {
        $welder_home = "";
    }
    if(MEDIA_APP=='welder' AND APP_ACT=='add_welder') {
        $welder_add = "class='active'";
    } else {
        $welder_add = "";
    }
	
	if(MEDIA_APP=='css' AND APP_ACT=='') {
        $css_home = "class='active'";
    } else {
        $css_home = "";
    }
    if(MEDIA_APP=='css' AND APP_ACT=='add_css') {
        $css_add = "class='active'";
    } else {
        $css_add = "";
    }
	
	if(MEDIA_APP=='cormon' AND APP_ACT=='') {
        $cormon_home = "class='active'";
    } else {
        $cormon_home = "";
    }
    if(MEDIA_APP=='cormon' AND APP_ACT=='add_cormon') {
        $cormon_add = "class='active'";
    } else {
        $cormon_add = "";
    }
	
	if(MEDIA_APP=='others_drawing' AND APP_ACT=='') {
        $others_home = "class='active'";
    } else {
        $others_home = "";
    }
    if(MEDIA_APP=='others_drawing' AND APP_ACT=='add_draw') {
        $others_add = "class='active'";
    } else {
        $others_add = "";
    }
	
	if(MEDIA_APP=='pipe_list' AND APP_ACT=='') {
        $pipe_home = "class='active'";
    } else {
        $pipe_home = "";
    }
    if(MEDIA_APP=='pipe_list' AND APP_ACT=='add_pipe') {
        $pipe_add = "class='active'";
    } else {
        $pipe_add = "";
    }
	
	if(MEDIA_APP=='wps' AND APP_ACT=='') {
        $wps_home = "class='active'";
    } else {
        $wps_home = "";
    }
    if(MEDIA_APP=='wps' AND APP_ACT=='add_wps') {
        $wps_add = "class='active'";
    } else {
        $wps_add = "";
    }
	
	
	if(MEDIA_APP=='seig' AND APP_ACT=='') {
        $seig_home = "class='active'";
    } else {
        $seig_home = "";
    }
    if(MEDIA_APP=='seig' AND APP_ACT=='upload_seig') {
        $seig_add = "class='active'";
    } else {
        $seig_add = "";
    }
    
    
    if(MEDIA_APP=='equipment' AND APP_ACT=='') {
        $equipment_home = "class='active'";
    } else {
        $equipment_home = "";
    }
    if(MEDIA_APP=='equipment' AND APP_ACT=='add_equipment') {
        $equipment_add = "class='active'";
    } else {
        $equipment_add = "";
    }
}
else {
    $enginedocs = "";
}
if(MOD_APP=='report') {
    $report = "class='active'";
	if(MEDIA_APP=='coc' AND APP_ACT=='') {
        $coc_home = "class='active'";
    } else {
        $coc_home = "";
    }
    if(MEDIA_APP=='coc' AND APP_ACT=='add_coc') {
        $coc_add = "class='active'";
    } else {
        $coc_add = "";
    }
	
	
	if(MEDIA_APP=='onstream' AND APP_ACT=='') {
        $onstream_home = "class='active'";
    } else {
        $onstream_home = "";
    }
    if(MEDIA_APP=='onstream' AND APP_ACT=='add_onstream') {
        $onstream_add = "class='active'";
    } else {
        $onstream_add = "";
    }
	
	
	if(MEDIA_APP=='lap_bulanan' AND APP_ACT=='') {
        $lap_bulanan_home = "class='active'";
    } else {
        $lap_bulanan_home = "";
    }
    if(MEDIA_APP=='lap_bulanan' AND APP_ACT=='add_lap_bulanan') {
        $lap_bulanan_add = "class='active'";
    } else {
        $lap_bulanan_add = "";
    }
	
	if(MEDIA_APP=='turn_around' AND APP_ACT=='') {
        $turn_around_home = "class='active'";
    } else {
        $turn_around_home = "";
    }
    if(MEDIA_APP=='turn_around' AND APP_ACT=='add_around') {
        $turn_around_add = "class='active'";
    } else {
        $turn_around_add = "";
    }
	
	if(MEDIA_APP=='cleaning_tangki' AND APP_ACT=='') {
        $cleaning_tangki_home = "class='active'";
    } else {
        $cleaning_tangki_home = "";
    }
    if(MEDIA_APP=='cleaning_tangki' AND APP_ACT=='add_tanki') {
        $cleaning_tangki_add = "class='active'";
    } else {
        $cleaning_tangki_add = "";
    }
	
	if(MEDIA_APP=='atk' AND APP_ACT=='') {
        $atk_home = "class='active'";
    } else {
        $atk_home = "";
    }
    if(MEDIA_APP=='atk' AND APP_ACT=='add_atk') {
        $atk_add = "class='active'";
    } else {
        $atk_mapp_add = "";
    }
	
	if(MEDIA_APP=='log_book' AND APP_ACT=='') {
        $log_book_home = "class='active'";
    } else {
        $log_book_home = "";
    }
    if(MEDIA_APP=='log_book' AND APP_ACT=='upload_log_book') {
        $log_book_add = "class='active'";
    } else {
        $log_book_add = "";
    }
	
	if(MEDIA_APP=='anggaran' AND APP_ACT=='') {
        $anggaran_home = "class='active'";
    } else {
        $anggaran_home = "";
    }
    if(MEDIA_APP=='anggaran' AND APP_ACT=='add_anggaran') {
        $anggaran_add = "class='active'";
    } else {
        $anggaran_add = "";
    }
}
else {
    $report = "";
}
if(MOD_APP=='ndt') {
    $ndt = "class='active'";
	if(MEDIA_APP=='form_ndt' AND APP_ACT=='') {
        $form_ndt_home = "class='active'";
    } else {
        $form_ndt_home = "";
    }
    if(MEDIA_APP=='form_ndt' AND APP_ACT=='add_form') {
        $form_ndt_add = "class='active'";
    } else {
        $form_ndt_add = "";
    }
	
	if(MEDIA_APP=='alat_ndt' AND APP_ACT=='') {
        $alat_ndt_home = "class='active'";
    } else {
        $alat_ndt_home = "";
    }
    if(MEDIA_APP=='alat_ndt' AND APP_ACT=='add_ndt') {
        $alat_ndt_add = "class='active'";
    } else {
        $alat_ndt_add = "";
    }
        if(MEDIA_APP=='personil_ndt' AND APP_ACT=='') {
        $personil_ndt_home = "class='active'";
    } else {
        $personil_ndt_home = "";
    }
    if(MEDIA_APP=='personil_ndt' AND APP_ACT=='add_personil') {
        $personil_ndt_add = "class='active'";
    } else {
        $personil_ndt_add = "";
    }
    
     if(MEDIA_APP=='laporan_ndt' AND APP_ACT=='') {
        $laporan_ndt_home = "class='active'";
    } else {
        $laporan_ndt_home = "";
    }
    if(MEDIA_APP=='laporan_ndt' AND APP_ACT=='add_laporan') {
        $laporan_ndt_add = "class='active'";
    } else {
        $laporan_ndt_add = "";
    }
    
 if(MEDIA_APP=='jenis_ndt' AND APP_ACT=='') {
        $jenis_ndt_home = "class='active'";
    } else {
        $jenis_ndt_home = "";
    }
    
}
else {
    $ndt = "";
}
if(MOD_APP=='e-book') {
    $ebook = "class='active'";
    if(MEDIA_APP=='uu_pp' AND APP_ACT=='') {
        $uu_pp_home = "class='active'";
    } else {
        $uu_pp_home = "";
    }
    if(MEDIA_APP=='uu_pp' AND APP_ACT=='upload_uu_pp') {
        $uu_pp_add = "class='active'";
    } else {
        $uu_pp_add = "";
    }
	
	
    if(MEDIA_APP=='produk' AND APP_ACT=='') {
        $produk_home = "class='active'";
    } else {
        $produk_home = "";
    }
    if(MEDIA_APP=='produk' AND APP_ACT=='upload_produk') {
        $produk_add = "class='active'";
    } else {
        $produk_add = "";
    }
	
	if(MEDIA_APP=='materi_kursus' AND APP_ACT=='') {
        $kursus_home = "class='active'";
    } else {
        $kursus_home = "";
    }
    if(MEDIA_APP=='materi_kursus' AND APP_ACT=='upload_materi') {
        $kursus_add = "class='active'";
    } else {
        $kursus_add = "";
    }
	
	if(MEDIA_APP=='standard' AND APP_ACT=='') {
        $standard_home = "class='active'";
    } else {
        $standard_home = "";
    }
    if(MEDIA_APP=='standard' AND APP_ACT=='upload_standard') {
        $standard_add = "class='active'";
    } else {
        $standard_add = "";
    }
	
	if(MEDIA_APP=='corner_book' AND APP_ACT=='') {
        $corner_book_home = "class='active'";
    } else {
        $corner_book_home = "";
    }
    if(MEDIA_APP=='corner_book' AND APP_ACT=='upload_cbook') {
        $corner_book_add = "class='active'";
    } else {
        $corner_book_add = "";
    }
	
	if(MEDIA_APP=='lembar_ilmiah' AND APP_ACT=='') {
        $lembar_ilmiah_home = "class='active'";
    } else {
        $lembar_ilmiah_home = "";
    }
    if(MEDIA_APP=='lembar_ilmiah' AND APP_ACT=='upload_ilmiah') {
        $lembar_ilmiah_add = "class='active'";
    } else {
        $lembar_ilmiah_add = "";
    }
	
	if(MEDIA_APP=='artikel_pekerja' AND APP_ACT=='') {
        $artikel_pekerja_home = "class='active'";
    } else {
        $artikel_pekerja_home = "";
    }
    if(MEDIA_APP=='artikel_pekerja' AND APP_ACT=='add_artikel_pekerja') {
        $artikel_pekerja_add = "class='active'";
    } else {
        $artikel_pekerja_add = "";
    }
	
	if(MEDIA_APP=='corrosion_mapping' AND APP_ACT=='') {
        $corrosion_mapp_home = "class='active'";
    } else {
        $corrosion_mapp_home = "";
    }
    if(MEDIA_APP=='corrosion_mapping' AND APP_ACT=='add_cm') {
        $corrosion_mapp_add = "class='active'";
    } else {
        $corrosion_mapp_add = "";
    }
	
	if(MEDIA_APP=='quality_plan' AND APP_ACT=='') {
        $quality_plan_home = "class='active'";
    } else {
        $quality_plan_home = "";
    }
    if(MEDIA_APP=='quality_plan' AND APP_ACT=='add_quality_plan') {
        $quality_plan_add = "class='active'";
    } else {
        $quality_plan_add = "";
    }
	
	
    if(MEDIA_APP=='pink_book' AND APP_ACT=='') {
        $pink_book_home = "class='active'";
    } else {
        $pink_book_home = "";
    }
    if(MEDIA_APP=='pink_book' AND APP_ACT=='upload_pbook') {
        $pink_book_add = "class='active'";
    } else {
        $pink_book_add = "";
    }
    if(MEDIA_APP=='pink_book' AND APP_ACT=='category_pbook') {
        $pink_book_cat = "class='active'";
    } else {
        $pink_book_cat = "";
    }
}
else {
    $ebook = "";
}
if(MOD_APP=='regulasi') {
    $regulasi = "class='active'";
	if(MEDIA_APP=='app_bejana' AND APP_ACT=='') {
        $bejana_home = "class='active'";
    } else {
        $bejana_home = "";
    }
    if(MEDIA_APP=='app_bejana' AND APP_ACT=='add_bejana') {
        $bejana_add = "class='active'";
    } else {
        $bejana_add = "";
    }
	
	if(MEDIA_APP=='app_metering' AND APP_ACT=='') {
        $metering_home = "class='active'";
    } else {
        $metering_home = "";
    }
    if(MEDIA_APP=='app_metering' AND APP_ACT=='add_metering') {
        $metering_add = "class='active'";
    } else {
        $metering_add = "";
    }
	
	if(MEDIA_APP=='app_skpi' AND APP_ACT=='') {
        $skpi_home = "class='active'";
    } else {
        $skpi_home = "";
    }
    if(MEDIA_APP=='app_skpi' AND APP_ACT=='add_skpi') {
        $skpi_add = "class='active'";
    } else {
        $skpi_add = "";
    }
	
	if(MEDIA_APP=='app_termo' AND APP_ACT=='') {
        $termo_home = "class='active'";
    } else {
        $termo_home = "";
    }
    if(MEDIA_APP=='app_termo' AND APP_ACT=='add_termo') {
        $termo_add = "class='active'";
    } else {
        $termo_add = "";
    }
	
	if(MEDIA_APP=='app_tanki' AND APP_ACT=='') {
        $tanki_home = "class='active'";
    } else {
        $tanki_home = "";
    }
    if(MEDIA_APP=='app_tanki' AND APP_ACT=='add_tanki') {
        $tanki_add = "class='active'";
    } else {
        $tanki_add = "";
    }
	
	if(MEDIA_APP=='app_furnace' AND APP_ACT=='') {
        $furnace_home = "class='active'";
    } else {
        $furnace_home = "";
    }
    if(MEDIA_APP=='app_furnace' AND APP_ACT=='add_furnace') {
        $furnace_add = "class='active'";
    } else {
        $furnace_add = "";
    }
}
else {
    $regulasi = "";
}
if(MOD_APP=='foto') {
    $foto = "class='active'";
	if(MEDIA_APP=='foto_ta' AND APP_ACT=='') {
        $foto_ta_home = "class='active'";
    } else {
        $foto_ta_home = "";
    }
    if(MEDIA_APP=='foto_ta' AND APP_ACT=='add_foto_ta') {
        $foto_ta_add = "class='active'";
    } else {
        $foto_ta_add = "";
    }
	
	if(MEDIA_APP=='foto_rutin' AND APP_ACT=='') {
        $foto_rutin_home = "class='active'";
    } else {
        $foto_rutin_home = "";
    }
    if(MEDIA_APP=='foto_rutin' AND APP_ACT=='add_foto_rutin') {
        $foto_rutin_add = "class='active'";
    } else {
        $foto_rutin_add = "";
    }
}
else {
    $foto = "";
}
if(MOD_APP=='sms_gateaway') {
    $sms_gateaway = "class='active'";
	if(MEDIA_APP=='') {
        $member_sms_home = "class='active'";
    } else {
        $member_sms_home = "";
    }
    if(MEDIA_APP=='app_add_member_sms') {
        $member_sms_add = "class='active'";
    } else {
        $member_sms_add = "";
    }
}
else {
    $sms_gateaway = "";
}

