<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
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
                            <button type="submit" class="btn btn-primary" name="submit_import_member_sms"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
    </div><br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah Member Baru</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=sms_gateaway&media_app=app_aksi_member_sms" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Added New Member :</h2>
            <p>
                Layanan untuk mendapatkan atau menerima SMS Gateaway dalam bentuk permintaan informasi berupa SMS. <br><br>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong. 
                Dan gunakan kode negara untuk memasukan nomor telepon misalnya <b>+6285290156462</b>.
            
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend>Informasi Member</legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama lengkap <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="nama" class="span8 focus-on" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Nomor Telepon <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="no_telp" class="span4" type="text" value="+62" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="aktif" checked value="Y">&nbsp;Aktif</label>
                            <label><input type="radio" name="aktif" value="N">&nbsp;Tidak </label>
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
</div>

