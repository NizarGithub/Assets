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
                            <button type="submit" class="btn btn-primary" name="submit_import_bejana"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
        </div>
          <div class="alert alert-block alert-info">
            <h2>Added Bejana Data :</h2>
            <p>
               Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            
            </p>
          </div><br><br>
          <form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_bejana&action=aksi_bejana" method="post">
    <div class="container">

        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">SN <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">No. Ijin</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Ijin Habis</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" name="c" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Merk</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
            <div class="control-group ">
                        <label class="control-label">Kapasitas</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div>
                  <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-group">
                                    <span class="btn btn-file btn-file">
                                        <span class="fileupload-new">Browse file</span>
                                        <span class="fileupload-exists">Change file</span>
                                        <input type="file" required name="fupload" />
                                    </span> 
                                    &nbsp;
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                    <br /> <br />
                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>&nbsp;
                                        <span style="font-weight: 400" class="fileupload-preview text-info"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_bejana" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>