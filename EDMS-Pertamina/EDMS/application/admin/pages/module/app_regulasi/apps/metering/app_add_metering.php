<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_metering&action=aksi_metering" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Metering Data :</h2>
            <p>
                Enter updated security information for your account as desired.  Fields marked with an asterisk
                are required.
            </p>
        </div><br><br>
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">Serial Number <span class="required">*</span></label>
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
                     <div class="control-group ">
                        <label class="control-label">Tag Number</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Prover</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Service</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Size</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="h" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div>
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">Volume</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="i" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Manufacture</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Remark</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="k" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Test</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="l" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Link SN</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="m" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Ijin</label>
                        <div class="controls">
                            <label><input type="radio" name="n" checked  value="Y">&nbsp;Ya</label>
                            <label><input type="radio" name="n" value="N">&nbsp;Tidak </label>
                        </div>
                    </div>
                  <div class="control-group ">
                        <label class="control-label">Berita</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="o" class="span4" type="text" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_metering" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>