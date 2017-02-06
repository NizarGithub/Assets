<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(MOD_APP=='' OR MOD_APP=='home') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="admin.php"><i class="icon-home"></i> Beranda</a>
            </li>
            <li>
                <a href="admin.php?mod_apps=sms_gateaway"><i class="icon-user"></i> Member SMS</a>
            </li>
            <li>
                <a href="admin.php?mod_apps=calendar"><i class="icon-calendar"></i> Calendar</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='calendar') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li>
                <a href="admin.php"><i class="icon-home"></i> Beranda</a>
            </li>
            <li>
                <a href="admin.php?mod_apps=sms_gateaway"><i class="icon-user"></i> Member SMS</a>
            </li>
            <li class="active">
                <a href="admin.php?mod_apps=calendar"><i class="icon-calendar"></i> Calendar</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='utama') { ?>

<?php require_once ('search-form.php'); ?>

<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Regulasi.php'); ?>

<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Ebook.php'); ?>

<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__NDT.php'); ?>

<?php } else if(MOD_APP=='report' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Report.php'); ?>

<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Engdocs.php'); ?>

<?php } else if(MOD_APP=='info' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Info.php'); ?>

<?php } else if(MOD_APP=='foto' && MEDIA_APP=='') { ?>

<?php require_once ('Forms/Search__Foto.php'); ?>

<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_furnace') { ?>
<div class="page-nav-options">
    
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $furnace_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_furnace"><i class="icon-list"></i> List Furnace</a>
            </li>
            <li <?php echo $furnace_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_furnace&action=add_furnace"><i class="icon-plus"></i> New Furnace</a>
            </li>
			<?php edit('edit_furnace'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_termo') { ?>
<div class="page-nav-options">
    
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $termo_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_termo"><i class="icon-list"></i> Daftar Termo</a>
            </li>
            <li <?php echo $termo_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_termo&action=add_termo"><i class="icon-plus"></i> Tambah Termo</a>
            </li>
			<?php edit('edit_termo'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_tanki') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $tanki_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_tanki"><i class="icon-list"></i> Daftar Tangki</a>
            </li>
            <li <?php echo $tanki_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_tanki&action=add_tanki"><i class="icon-plus"></i> New Tangki Data</a>
            </li>
			<?php edit('edit_tanki'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_skpi') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $skpi_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_skpi"><i class="icon-list"></i> Daftar SKPI</a>
            </li>
            <li <?php echo $skpi_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_skpi&action=add_skpi"><i class="icon-plus"></i> New SKPI Data</a>
            </li>
			<?php edit('edit_skpi'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_metering') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $metering_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_metering"><i class="icon-list"></i> Daftar Metering</a>
            </li>
            <li <?php echo $metering_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_metering&action=add_metering"><i class="icon-plus"></i> New Metering Data</a>
            </li>
			<?php edit('edit_metering'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='regulasi' && MEDIA_APP=='app_bejana') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $bejana_home;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_bejana"><i class="icon-list"></i> Daftar Bejana</a>
            </li>
            <li <?php echo $bejana_add;?>>
                <a href="admin.php?mod_apps=regulasi&media_app=app_bejana&action=add_bejana"><i class="icon-plus"></i> New Bejana Data</a>
            </li>
			<?php edit('edit_bejana'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='user') { 
if(MEDIA_APP=='' OR MEDIA_APP=='app_list_user' OR MEDIA_APP=='user_role' OR MEDIA_APP=='user_level' OR MEDIA_APP=='app_add_user') {
?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $users_home;?>>
                <a href="admin.php?mod_apps=user"><i class="icon-user"></i> Daftar User</a>
            </li>
			<li <?php echo $users_role;?>>
                <a href="admin.php?mod_apps=user&media_app=user_role"><i class="icon-user"></i> Role</a>
            </li>
            <li <?php echo $users_level;?>>
                <a href="admin.php?mod_apps=user&media_app=user_level"><i class="icon-list"></i> Level</a>
            </li>
            <li <?php echo $users_add;?>>
                <a href="admin.php?mod_apps=user&media_app=app_add_user"><i class="icon-plus"></i> User</a>
            </li>
			
        </ul>
    </div>
</div>
<?php 
} else if(MEDIA_APP=='app_user_modul') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $users_module_home;?>>
                <a href="admin.php?mod_apps=user&media_app=app_user_modul"><i class="icon-list"></i> Daftar Module</a>
            </li>
            <li <?php echo $users_module_add;?>>
                <a href="admin.php?mod_apps=user&media_app=app_user_modul&action=add_module"><i class="icon-plus"></i> Module Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } ?>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='lembar_ilmiah') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $lembar_ilmiah_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=lembar_ilmiah"><i class="icon-list"></i> Daftar Artikel</a>
            </li>
            <li <?php echo $lembar_ilmiah_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=lembar_ilmiah&action=upload_ilmiah"><i class="icon-plus"></i> Lembar Ilmiah Baru</a>
            </li>
            <?php edit('edit_ilmiah'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='corner_book') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $corner_book_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=corner_book"><i class="icon-list"></i> Daftar Corner</a>
            </li>
            <li <?php echo $corner_book_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=corner_book&action=upload_cbook"><i class="icon-upload-alt"></i> Upload Corner</a>
            </li>
            <?php edit('edit_cbook'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='pink_book') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $pink_book_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=pink_book"><i class="icon-list"></i> Book List</a>
            </li>
            <li <?php echo $pink_book_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=pink_book&action=upload_pbook"><i class="icon-upload-alt"></i> Upload Book</a>
            </li>
            <li <?php echo $pink_book_cat;?>>
                <a href="admin.php?mod_apps=e-book&media_app=pink_book&action=category_pbook"><i class="icon-beaker"></i> Book Category</a>
            </li>
            <?php edit('edit_pbook'); ?>
        </ul>
    </div>
</div>

<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='standard') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $standard_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=standard"><i class="icon-list"></i> Daftar Standard</a>
            </li>
            <li <?php echo $standard_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=standard&action=upload_standard"><i class="icon-plus"></i> Standard Baru</a>
            </li>
            <?php edit('edit_standard'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='materi_kursus') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $kursus_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=materi_kursus"><i class="icon-list"></i> Daftar Materi Kursus</a>
            </li>
            <li <?php echo $kursus_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=materi_kursus&action=upload_materi"><i class="icon-plus"></i> Materi Kursus Baru</a>
            </li>
            <?php edit('edit_materi'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='uu_pp') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $uu_pp_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=uu_pp"><i class="icon-list"></i> Daftar UU dan PP</a>
            </li>
            <li <?php echo $uu_pp_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=uu_pp&action=upload_uu_pp"><i class="icon-plus"></i> UU dan PP Baru</a>
            </li>
            <?php edit('edit_uu_pp'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='produk') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $produk_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=produk"><i class="icon-list"></i> Daftar Produk</a>
            </li>
            <li <?php echo $produk_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=produk&action=upload_produk"><i class="icon-plus"></i> Produk Baru</a>
            </li>
            <?php edit('edit_produk'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='artikel_pekerja') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $artikel_pekerja_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=artikel_pekerja"><i class="icon-list"></i> Daftar Artikel Pekerja</a>
            </li>
            <li <?php echo $artikel_pekerja_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=artikel_pekerja&action=add_artikel_pekerja"><i class="icon-plus"></i> Artikel Pekerja Baru</a>
            </li>
            <?php edit('edit_artikel_pekerja'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='corrosion_mapping') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $corrosion_mapp_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=corrosion_mapping"><i class="icon-list"></i> Daftar Corrosion Mapping</a>
            </li>
            <li <?php echo $corrosion_mapp_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=corrosion_mapping&action=add_cm"><i class="icon-plus"></i> Corrosion Mapping Baru</a>
            </li>
            <?php edit('edit_cm'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='e-book' && MEDIA_APP=='quality_plan') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $quality_plan_home;?>>
                <a href="admin.php?mod_apps=e-book&media_app=quality_plan"><i class="icon-list"></i> Daftar Quality Plan</a>
            </li>
            <li <?php echo $quality_plan_add;?>>
                <a href="admin.php?mod_apps=e-book&media_app=quality_plan&action=add_quality_plan"><i class="icon-plus"></i> quality plan Baru</a>
            </li>
            <?php edit('edit_quality_plan'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='css') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $css_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=css"><i class="icon-list"></i> Daftar CSS</a>
            </li>
            <li <?php echo $css_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=css&action=add_css"><i class="icon-plus"></i> CSS Baru</a>
            </li>

        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='welder') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $welder_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=welder"><i class="icon-list"></i> Daftar Welder</a>
            </li>
            <li <?php echo $welder_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=welder&action=add_welder"><i class="icon-plus"></i> Tambah Welder Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='wps') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $wps_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=wps"><i class="icon-list"></i> Daftar WPS</a>
            </li>
            <li <?php echo $wps_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=wps&action=add_wps"><i class="icon-plus"></i> WPS Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='seig') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $seig_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=seig"><i class="icon-list"></i> Daftar SEIG</a>
            </li>
            <li <?php echo $seig_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=seig&action=upload_seig"><i class="icon-plus"></i> SEIG Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='equipment') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $equipment_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=equipment"><i class="icon-list"></i> Daftar Equipment</a>
            </li>
            <li <?php echo $equipment_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=equipment&action=add_equipment"><i class="icon-plus"></i> Equipment Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='pipe_list') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $pipe_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=pipe_list"><i class="icon-list"></i> Daftar Pipa</a>
            </li>
            <li <?php echo $pipe_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=pipe_list&action=add_pipe"><i class="icon-plus"></i> Tambah Pipa Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='others_drawing') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $others_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=others_drawing"><i class="icon-list"></i> Daftar Drawing</a>
            </li>
            <li <?php echo $others_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=others_drawing&action=add_draw"><i class="icon-plus"></i> Tambah Drawing Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='engine-docs' && MEDIA_APP=='cormon') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $cormon_home;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=cormon"><i class="icon-list"></i> Daftar Cormon</a>
            </li>
            <li <?php echo $cormon_add;?>>
                <a href="admin.php?mod_apps=engine-docs&media_app=cormon&action=add_cormon"><i class="icon-plus"></i> Tambah Cormon Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='form_ndt') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $form_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=form_ndt"><i class="icon-list"></i> Daftar Form NDT</a>
            </li>
            <li <?php echo $form_ndt_add;?>>
                <a href="admin.php?mod_apps=ndt&media_app=form_ndt&action=add_form"><i class="icon-plus"></i> Form NDT Baru</a>
            </li>
			<?php edit('edit_form'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='alat_ndt') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $alat_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=alat_ndt"><i class="icon-list"></i> Daftar Alat NDT</a>
            </li>
            <li <?php echo $alat_ndt_add;?>>
                <a href="admin.php?mod_apps=ndt&media_app=alat_ndt&action=add_ndt"><i class="icon-plus"></i> Alat NDT Baru</a>
            </li>
			<?php edit('edit_ndt'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='personil_ndt') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $personil_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=personil_ndt"><i class="icon-list"></i> Daftar NDT Personil</a>
            </li>
            <li <?php echo $personil_ndt_add;?>>
                <a href="admin.php?mod_apps=ndt&media_app=personil_ndt&action=add_personil"><i class="icon-plus"></i> NDT Personil Baru</a>
            </li>
			<?php edit('edit_personil'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='jenis_ndt') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $laporan_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=laporan_ndt"><i class="icon-list"></i> Laporan NDT</a>
            </li>
            <li <?php echo $laporan_ndt_add;?>>
                <a href="admin.php?mod_apps=ndt&media_app=laporan_ndt&action=add_laporan"><i class="icon-plus"></i> Laporan NDT Baru</a>
            </li>
             <li <?php echo $jenis_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=jenis_ndt"><i class="icon-pencil"></i> Jenis NDT</a>
            </li>
			<?php edit('edit_laporan'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='ndt' && MEDIA_APP=='laporan_ndt') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $laporan_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=laporan_ndt"><i class="icon-list"></i> Laporan NDT</a>
            </li>
            <li <?php echo $laporan_ndt_add;?>>
                <a href="admin.php?mod_apps=ndt&media_app=laporan_ndt&action=add_laporan"><i class="icon-plus"></i> Laporan NDT Baru</a>
            </li>
             <li <?php echo $jenis_ndt_home;?>>
                <a href="admin.php?mod_apps=ndt&media_app=jenis_ndt"><i class="icon-pencil"></i> Jenis NDT</a>
            </li>
			<?php edit('edit_laporan'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && MEDIA_APP=='jadwal_oncall') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $jadwal_oncall_home;?>>
                <a href="admin.php?mod_apps=info&media_app=jadwal_oncall"><i class="icon-list"></i> Daftar Jadwal OC</a>
            </li>
            <li <?php echo $jadwal_oncall_add;?>>
                <a href="admin.php?mod_apps=info&media_app=jadwal_oncall&action=add_jadwal"><i class="icon-plus"></i> Jadwal OC Baru</a>
            </li>
			<?php edit('edit_jadwal'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && MEDIA_APP=='agenda_rapat') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $agenda_home;?>>
                <a href="admin.php?mod_apps=info&media_app=agenda_rapat"><i class="icon-list"></i> Daftar Agenda</a>
            </li>
            <li <?php echo $agenda_add;?>>
                <a href="admin.php?mod_apps=info&media_app=agenda_rapat&action=add_agenda"><i class="icon-plus"></i> Jadwal Agenda Baru</a>
            </li>
			<?php edit('edit_agenda'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && MEDIA_APP=='petugas_oncall') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $petugas_oncall_home;?>>
                <a href="admin.php?mod_apps=info&media_app=petugas_oncall"><i class="icon-list"></i> Daftar Petugas</a>
            </li>
            <li <?php echo $petugas_oncall_add;?>>
                <a href="admin.php?mod_apps=info&media_app=petugas_oncall&action=add_petugas"><i class="icon-plus"></i> Petugas Baru</a>
            </li>
            <li <?php echo $group_pegawai;?>>
                <a href="admin.php?mod_apps=info&media_app=group"><i class="icon-user"></i> Group</a>
            </li>
			<?php edit('edit_petugas'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && MEDIA_APP=='group') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $petugas_oncall_home;?>>
                <a href="admin.php?mod_apps=info&media_app=petugas_oncall"><i class="icon-list"></i> Daftar Petugas OC</a>
            </li>
            <li <?php echo $petugas_oncall_add;?>>
                <a href="admin.php?mod_apps=info&media_app=petugas_oncall&action=add_petugas"><i class="icon-plus"></i> Petugas OC Baru</a>
            </li>
            <li class='active'>
                <a href="admin.php?mod_apps=info&media_app=group"><i class="icon-user"></i> Group</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='foto' && MEDIA_APP=='foto_ta') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $foto_ta_home;?>>
                <a href="admin.php?mod_apps=foto&media_app=foto_ta"><i class="icon-list"></i> Daftar Foto TA</a>
            </li>
            <li <?php echo $foto_ta_add;?>>
                <a href="admin.php?mod_apps=foto&media_app=foto_ta&action=add_foto_ta"><i class="icon-plus"></i> Upload Foto TA</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='foto' && MEDIA_APP=='foto_rutin') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $foto_rutin_home;?>>
                <a href="admin.php?mod_apps=foto&media_app=foto_rutin"><i class="icon-list"></i> Daftar Foto Rutin</a>
            </li>
            <li <?php echo $foto_rutin_add;?>>
                <a href="admin.php?mod_apps=foto&media_app=foto_rutin&action=add_foto_rutin"><i class="icon-plus"></i> Upload Foto Rutin</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='sms_gateaway') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $member_sms_home;?>>
                <a href="admin.php?mod_apps=sms_gateaway"><i class="icon-list"></i> Daftar Member</a>
            </li>
            <li <?php echo $member_sms_add;?>>
                <a href="admin.php?mod_apps=sms_gateaway&media_app=app_add_member_sms">
                    <i class="icon-plus"></i> New member</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='anggaran') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
             <li <?php echo $anggaran_home;?>>
                <a href='admin.php?mod_apps=report&media_app=anggaran'>
                    <i class="icon-list"></i> Daftar Anggaran</a>
            </li>
            <li <?php echo $anggaran_add;?>>
                <a href='admin.php?mod_apps=report&media_app=anggaran&action=add_anggaran'>
                    <i class="icon-plus"></i> Tambah Anggaran Baru</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='log_book') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $log_book_home;?>>
                <a href='admin.php?mod_apps=report&media_app=log_book'>
                    <i class="icon-list"></i> Daftar Log Book</a>
            </li>
            <li <?php echo $log_book_add;?>>
                <a href='admin.php?mod_apps=report&media_app=log_book&action=upload_log_book'>
                    <i class="icon-plus"></i> Log Book</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && $_GET['media_app']=='pelat_pekerja') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $pelat_pekerja_home;?>>
                <a href='admin.php?mod_apps=info&media_app=pelat_pekerja'>
                    <i class="icon-list"></i>Daftar Pelatihan Pekerja</a>
            </li>
            <li <?php echo $pelat_pekerja_add;?>>
                <a href='admin.php?mod_apps=info&media_app=pelat_pekerja&action=upload_pelat_pekerja'>
                    <i class="icon-plus"></i> Pelatihan Pekerja</a>
            </li>
			<?php edit('edit_pelat_pekerja'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='info' && $_GET['media_app']=='top_issue') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $top_issue_home;?>>
                <a href='admin.php?mod_apps=info&media_app=top_issue'>
                    <i class="icon-list"></i>Daftar Top Issue</a>
            </li>
            <li <?php echo $top_issue_add;?>>
                <a href='admin.php?mod_apps=info&media_app=top_issue&action=add_issue'>
                    <i class="icon-plus"></i>Tambah Top Issue</a>
            </li>
			<?php edit('edit_issue'); ?>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='atk') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
             <li <?php echo $atk_home;?>>
                <a href='admin.php?mod_apps=report&media_app=atk'>
                    <i class="icon-list"></i> Daftar Alat Tulis Kantor</a>
            </li>
            <li <?php echo $atk_add;?>>
                <a href='admin.php?mod_apps=report&media_app=atk&action=add_atk'>
                    <i class="icon-plus"></i> Alat Tulis Kantor</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='cleaning_tangki') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $cleaning_tangki_home;?>>
                <a href='admin.php?mod_apps=report&media_app=cleaning_tangki'>
                    <i class="icon-list"></i> Daftar Cleaning Tangki</a>
            </li>
            <li <?php echo $cleaning_tangki_add;?>>
                <a href='admin.php?mod_apps=report&media_app=cleaning_tangki&action=add_tanki'>
                    <i class="icon-plus"></i> Cleaning Tangki</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='turn_around') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $turn_around_home;?>>
                <a href='admin.php?mod_apps=report&media_app=turn_around'>
                    <i class="icon-list"></i> Daftar Turn Around</a>
            </li>
            <li <?php echo $turn_around_add;?>>
                <a href='admin.php?mod_apps=report&media_app=turn_around&action=add_around'>
                    <i class="icon-plus"></i> Tambah Turn Around</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='lap_bulanan') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $lap_bulanan_home;?>>
                <a href='admin.php?mod_apps=report&media_app=lap_bulanan'>
                    <i class="icon-list"></i> Daftar Laporan Bulanan</a>
            </li>
            <li <?php echo $lap_bulanan_add;?>>
                <a href='admin.php?mod_apps=report&media_app=lap_bulanan&action=add_lap_bulanan'>
                    <i class="icon-plus"></i> Tambah Laporan Bulanan</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='onstream') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $onstream_home;?>>
                <a href='admin.php?mod_apps=report&media_app=onstream'>
                    <i class="icon-list"></i> Daftar Onstream Inspect</a>
            </li>
            <li <?php echo $onstream_add;?>>
                <a href='admin.php?mod_apps=report&media_app=onstream&action=add_onstream'>
                    <i class="icon-plus"></i> Tambah Onstream Inspect</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='report' && $_GET['media_app']=='coc') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li <?php echo $coc_home;?>>
                <a href='admin.php?mod_apps=report&media_app=coc'>
                    <i class="icon-list"></i> Daftar COC</a>
            </li>
            <li <?php echo $coc_add;?>>
                <a href='admin.php?mod_apps=report&media_app=coc&action=add_coc'>
                    <i class="icon-plus"></i> Tambah COC</a>
            </li>
        </ul>
    </div>
</div>
<?php } else if(MOD_APP=='webcam') { ?>
<div class="page-nav-options">
    <div class="span9">
        <ul class="nav nav-tabs">
            <li class="">
                <a href="javascript:webcam.capture();changeFilter();void(0);">Ambil foto langsung</a>
            </li>
            <li>
                <a href="javascript:webcam.capture(3);changeFilter();void(0);">Ambil foto dalam 3 detik</a>
            </li>
        </ul>
    </div>
</div>
<?php } ?>