<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_tanki&action=aksi_tanki" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Tanki Data :</h2>
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
                        <label class="control-label">Tag Number <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Test Date</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="b" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Type</label>
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
                        <label class="control-label">High</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Capacity</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Ijin Kalibrasi</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">Kalibrasi Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="h" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Dibuat</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="i" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Penggunaan Kalibrasi</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Penggunaan Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="k" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Ijin SKKP</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="l" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">SKKP Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="m" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">User</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="n" class="span4" type="text" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_add_tanki" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>