<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(500).animate({scrollTop:120}, 500);
	});
});
</script>
<div class="row">
<div class="span16">
    <div class="box">
        <div class="box-header">
            <i class="icon-file"></i>
            <h5>Foto Rutin</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=foto&media_app=foto_rutin&action=aksi_foto_rutin" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Upload Foto Rutin Baru :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Foto Rutin</span><?php echo btnBack('foto', 'foto_rutin');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Keterangan<span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="current-pass-control" required name="a" class="span8" type="text"></textarea>

                        </div>
                    </div><br>
                   <div class="control-group ">
                        <label class="control-label">Status Foto <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="aktif" value="Y">&nbsp;Aktif</label>
                            <label><input type="radio" name="aktif" checked value="N">&nbsp;Tidak aktif </label>
                        </div>
                   </div><br>

                    <div class="control-group ">
                     <label class="control-label">Foto Rutin <span class="required">*</span></label>
                   <div class="controls">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail"><img src="assets/images/upload.png" alt=""  width="i50" height="150"/></div>
                                <div><br>
                                    <a href="#" class="btn btn-danger btn-small fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                    <span class="fileupload-new"></span><span class="fileupload-exists"></span><input type="file" name="fupload" />
                                </div>
                              </div>
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

