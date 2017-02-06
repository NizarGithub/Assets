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
            <h5>Upload Pink Book</h5>
        </div>
        <div class="box-content">
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Upload Pink Book :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                <h3 style="color: #666">Select Count :</h3>
                <form action="admin.php?mod_apps=e-book&media_app=pink_book&action=upload_pbook" method="post">
                    <div class="btn-group">
                        <input value="1" class="span2" type="number" name="jumlah" style="margin-top: 8px; margin-right: 10px;">
                        <input class="btn btn-sm btn-default" type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="span7">
                 <form enctype="multipart/form-data" action="admin.php?mod_apps=e-book&media_app=pink_book&action=aksi_pbook" method="post">
    
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Pink Book</span> <?php echo btnBack('e-book','pink_book');?></legend><br>
                    <?php
                    if($_POST['submit']) {
                    $jumlah = $_POST['jumlah'];
                    for($i=1;$i<=$jumlah;$i++) {
                    ?>
                    <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-group input-prepend">
                                    <select name="id_cat[]" id="challenge_question_control" style="margin-right: 10px;" class="span6 form-control">
                                        <?php
                                        $qLevel = $ARSql->getAll('cat_book','id_cat','ASC');
                                        while ($dLevel = $ARSql->mf_object($qLevel)) {
                                            echo "<option value='".$dLevel->id_cat."'>".$dLevel->name."</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="btn btn-file btn-file">
                                        <span class="fileupload-new">Browse file</span>
                                        <span class="fileupload-exists">Change file</span>
                                        <input type="file" required name="fupload[]" />
                                    </span>
                                    &nbsp;
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>

                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>&nbsp;
                                        <span style="font-weight: 400" class="fileupload-preview text-info"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } 
                    } else {
                    ?>
                    <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-group input-prepend input-append">
                                    <select name="id_cat[]" id="challenge_question_control" style="margin-right: 10px;" class="span6 form-control">
                                        <?php
                                        $qLevel = $ARSql->getAll('cat_book','id_cat','ASC');
                                        while ($dLevel = $ARSql->mf_object($qLevel)) {
                                            echo "<option value='".$dLevel->id_cat."'>".$dLevel->name."</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="btn btn-file btn-file">
                                        <span class="fileupload-new">Browse file</span>
                                        <span class="fileupload-exists">Change file</span>
                                        <input type="file" required name="fupload[]" />
                                    </span>
                                    &nbsp;
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>

                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>&nbsp;
                                        <span style="font-weight: 400" class="fileupload-preview text-info"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <hr>	<h3 class="text-info">Multiple Uploaded File</h3>
                    <p>Fitur dengan upload banyak file</p>
<link href="assets/css/uploadfilemulti.css" rel="stylesheet">
<script src="assets/JS/jquery-1.8.0.min.js"></script>
<script src="assets/JS/jquery.fileuploadmulti.min.js"></script>
<div id="mulitplefileuploader">Upload</div>
<div id="status"></div>
<script>
$(document).ready(function() {
var settings = {
	url: "http://www.ibeesnay.com/EDMS/application/admin/pages/module/app_ebook/apps/pink_book/upload_multi.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,doc,pdf,zip",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{
		$("#status").html("<font color='green'>Upload is success</font>");

	},
    afterUploadAll:function()
    {
        alert("all file uploaded!!");
    },
	onError: function(files,status,errMsg)
	{
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
}
$("#mulitplefileuploader").uploadFile(settings);
});
</script>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_add" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <a class="btn" onclick="back();" value="CANCEL">Cancel</a>
        </footer>
            </form>
        </div>
       
    </div>
</div>
</div>

