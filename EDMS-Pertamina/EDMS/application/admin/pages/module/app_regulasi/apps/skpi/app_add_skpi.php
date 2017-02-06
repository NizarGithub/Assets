<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>

<div class="alert alert-success">
            <form action="" method="post" enctype="multipart/form-data">
            <h2>Import Data From Excel</h2>
            <div class="control-group ">
                        <label class="control-label">Silahkan upload atau import data dari Ms. Excel dengan ketentuan field harus sama dengan field seperti form dibawah.</label>
                        <div class="controls">
                            <input required type="file" name="fexcel">
                        </div>
                    </div>
            <div class="control-group ">
                        <div class="controls">
                            <button type="submit" class="btn btn-success" name="submit_import"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
        </div>

          <div class="alert alert-block alert-info">
            <h2>Added SKPI Data :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
        
            </p>
          </div>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_skpi&action=aksi_skpi" method="post">
    <div class="container">
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">No. SKPI <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="no" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tanggal</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="tgl" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Expire</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" name="expire" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Plant</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="plant" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
            <div class="control-group ">
                        <label class="control-label">Dibuat</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="dibuat" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Pembuat</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="pembuat" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Digunakan</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="digunakan" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Untuk</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="untuk" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>  
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_skpi" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>