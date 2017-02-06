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
            <h5>Produk</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=e-book&media_app=produk&action=aksi_produk" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Added New Produk :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Produk</span><a href="admin.php?mod_apps=e-book&media_app=produk" style="font-weight: normal; margin-top: 5px;" class="pull-right btn-info btn btn-small"><i class="icon-circle-arrow-left"></i>&nbsp; Kembali</a></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Merk <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="merk" class="span8 focus-on" type="text">

                        </div>
                    </div>
<!--                    <div class="control-group ">
                        <label class="control-label">Produksi <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="produksi" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>-->
                    <div class="control-group ">
                        <label class="control-label">Fungsi <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="fungsi" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Negara Asal <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="negara" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Perusahaan / Agent <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="agent" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Contact Person <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="contact" class="span4" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <textarea class="ckeditor" required name="ket" class="span8"></textarea>

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

