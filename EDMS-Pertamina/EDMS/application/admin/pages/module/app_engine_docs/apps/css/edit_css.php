<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data = $ARSql->getOne('css','id_css',$_GET['id']);
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
            <h5>Edit CSS</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=engine-docs&media_app=css&action=aksi_css" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit CSS :</h2>
            <p>
                Anda dapat mengubah data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                  
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi CSS</span><a href="admin.php?mod_apps=engine-docs&media_app=css" style="font-weight: normal; margin-top: 5px;" class="pull-right btn-info btn btn-small"><i class="icon-circle-arrow-left"></i>&nbsp; Kembali</a></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Edisi <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input type="hidden" name="id_css" value="<?php echo $data->id_css;?>">
                                <input value="<?php echo $data->edisi;?>" required name="edisi" class="span8 form-control" type="text">

                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tahun <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input value="<?php echo $data->tahun;?>" required name="tahun" class="span2 form-control" type="text">

                        </div>
                    </div>
                    </div>
                     <?php
                    if($data->filename!='') {
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: #0080FF'><i class='icon-file'></i> $data->filename </em>
                            </p>
                         </div>
                         </div><br>";
                    }else{
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: red'><i class='icon-info-sign'></i> Tidak ada file yang di upload !</em>
                            </p>
                         </div>
                         </div><br>";
                    }
                    ?>
                    <div class="control-group ">
                        <label class="control-label">Upload File</label>
                        <div class="controls">
                            <input class="form-control" type="file" name="fupload">
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
            </form>
        </div>
    </div>
</div>
</div>

