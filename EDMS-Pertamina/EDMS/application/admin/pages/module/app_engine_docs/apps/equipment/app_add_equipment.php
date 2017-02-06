<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=engine-docs&media_app=equipment&action=aksi_equipment" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Equipment Data :</h2>
            <p>
               Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div><br><br>
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">Tag Number <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="b" class="span4" type="text" value="" autocomplete="false"></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Material</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Temp Design</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Temp Operasi</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Pre Design</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                <div class="control-group ">
                        <label class="control-label">Pre Operasi</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Fluida Service</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="h" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Corrosion</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="i" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Dimension</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Jumlah Tube</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="k" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Thickness Design</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="l" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Thickness Actual</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="m" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                  <div class="control-group ">
                        <label class="control-label">Tahun Buat</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="n" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                
               
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>