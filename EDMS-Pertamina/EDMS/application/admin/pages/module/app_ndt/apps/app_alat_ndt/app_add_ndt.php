<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>

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
                            <button type="submit" class="btn btn-primary" name="submit_import_alat_ndt"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
        </div><br>
<form id="userSecurityForm" action="admin.php?mod_apps=ndt&media_app=alat_ndt&action=aksi_ndt" method="post">
    <div class="container">
          <div class="alert alert-block alert-info">
            <h2>Added Alat NDT Data :</h2>
            <p>
               Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            <hr>
          </div>
        
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span8">
                    <div class="control-group ">
                        <label class="control-label">Description <span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="teks_editor" required name="a" class="span5" type="text" value="" autocomplete="false"></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Merek <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="b" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Serial <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="c" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span8">
                 <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <textarea required name="e" class="span5 ckeditor" type="text" value="" autocomplete="false"></textarea>

                        </div>
                    </div>
            <div class="control-group ">
                        <label class="control-label">Jumlah <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" class="span2" type="number" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Peminjam <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_ndt" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>