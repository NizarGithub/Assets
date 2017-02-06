<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=engine-docs&media_app=welder&action=aksi_welder" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Welder Data :</h2>
            <p>
               Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div><br><br>
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">Nama <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Kualifikasi</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Posisi</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Diameter</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Thickness</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Material</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Berlaku</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Pengalaman</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="h" class="span4" type="text" value="" autocomplete="false"></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Project</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="i" class="span4" type="text" value="" autocomplete="false"></textarea>

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">No. Handphone</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="k" class="span4" type="email" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">No. Sertifikat</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="l" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                
               
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_welder" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>