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
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Personil NDT</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=ndt&media_app=personil_ndt&action=aksi_personil" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Added New Personil NDT :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Personil NDT</span></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="a" required  class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">No. Telepon <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="e" required  class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label">Qualifikasi <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="b" required class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Alamat <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="c" id="teks_editor" class="span8" type="text"></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="d" class="ckeditor" class="span8" type="text"></textarea>

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

