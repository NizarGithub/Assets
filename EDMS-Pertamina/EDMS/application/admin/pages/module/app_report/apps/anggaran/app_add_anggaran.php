<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
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
                            <button type="submit" class="btn btn-primary" name="submit_import_anggaran"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
    </div><br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah Anggaran Baru</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=report&media_app=anggaran&action=aksi_anggaran" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Added New Calculation :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend>Informasi Anggaran</legend><br>
                    <div class="control-group ">
                        <label class="control-label">Deskripsi <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  required name="a" class="ckeditor" type="text" ></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Anggaran<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="b" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tahun<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="c" class="span3" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Pic<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="d" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="e" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_add_anggaran" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
            </form>
        </div>
    </div>
</div>
</div>

