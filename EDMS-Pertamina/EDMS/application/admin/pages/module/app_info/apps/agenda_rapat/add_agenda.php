<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(5000).animate({scrollTop:345}, 1500);
                
	});
});
</script>
<div class="row">
<div class="span16">
    <div>
    <form action="Import.php" method="post" enctype="multipart/form-data">
        <h3 class="text-info"><i class="icon icon-upload-alt"></i> Import Data From Excel (97/2003) &nbsp;Spreadsheets</h3><hr>
            <div class="control-group ">
                        <label class="control-label">Silahkan upload atau import data dari Ms. Excel dengan ketentuan field harus sama dengan field seperti form dibawah.</label>
                        <div class="controls">
                            <input required type="file" name="fexcel">
                        </div>
                    </div>
            <div class="control-group ">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary" name="submit_import_agenda"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
    </div>
    <br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah Jadwal Agenda Baru</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=info&media_app=agenda_rapat&action=aksi_agenda" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">
                
                <div class="alert alert-block alert-info">
            <h2>Added Jadwal Agenda :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Agenda</span><?php echo btnBack('info','agenda_rapat');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Topik Agenda <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input required id="topik" name="topik" class="span8 form-control" type="text">

                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tanggal <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input required id="datepicker" value="<?php echo date("Y-m-d");?>" name="tanggal" class="span8 form-control" type="text">

                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <textarea id="teks_editor" name="ket" class="span8 form-control"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="aktif" checked value="Y">&nbsp;Aktif</label>
                            <label><input type="radio" name="aktif" value="N">&nbsp;Tidak aktif </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_add" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
        </form>
        </div>
    </div>
</div>

