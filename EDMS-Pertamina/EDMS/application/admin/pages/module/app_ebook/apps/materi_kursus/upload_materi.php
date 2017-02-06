<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
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
            <h5>Upload Materi Kursus</h5>
        </div>
        <div class="box-content">
            
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Upload Materi Kursus :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                <h3 style="color: #666">Select Count :</h3>
                <form action="admin.php?mod_apps=e-book&media_app=materi_kursus" method="post">
                    <div class="btn-group">
                        <input value="1" class="span2" type="number" name="jumlah" style="margin-top: 8px; margin-right: 10px;">
                        <input class="btn btn-sm btn-default" type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="span7">
                <form enctype="multipart/form-data" action="admin.php?mod_apps=e-book&media_app=materi_kursus&action=aksi_materi" method="post">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Materi Kursus</span> </legend><br>
                    <div class="control-group ">
                        <label class="control-label">Materi <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-star-empty"></i></span>
                            <input required name="judul" class="span8 focus-on form-control" type="text">

                        </div>
                    </div><br>
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

