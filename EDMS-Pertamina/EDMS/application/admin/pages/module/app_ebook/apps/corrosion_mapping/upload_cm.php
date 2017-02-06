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
            <i class="icon-book"></i>
            <h5>Corrosion Mapping</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=e-book&media_app=corrosion_mapping&action=aksi_cm" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Tambah Corrosion Mapping Baru :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Corrosion Mapping</span><?php echo btnBack('e-book','corrosion_mapping');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Unit <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="a" class="span8 focus-on" type="text">

                        </div>
                    </div>
                        <div class="control-group ">
                        <label class="control-label">Corrosion Mapping <span class="required">*</span></label>
                        <div class="controls">
                            <textarea required name="b" class="ckeditor" type="text"></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Tahun <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="c" class="span2" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan<span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="current-pass-control" required name="d" class="ckeditor" type="text"></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <input class="form-control" type="file" name="fupload">
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

