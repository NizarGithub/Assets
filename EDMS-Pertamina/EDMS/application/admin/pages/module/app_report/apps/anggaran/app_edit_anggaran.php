<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<?php
$data = $ARSql->getOne('anggaran','id_angg',$_GET['id']);
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
            <h5>Anggaran</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=report&media_app=anggaran&action=aksi_anggaran" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Anggaran :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend>Informasi Anggaran <?php echo btnBack('report', 'anggaran');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Deskripsi <span class="required">*</span></label>
                        <div class="controls">
                             <input type="hidden" name="id_anggaran" value="<?php echo $data->id_angg;?>">
                            <textarea  required name="a" class="ckeditor" type="text" ><?php echo $data->description;?></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Anggaran<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" value="<?php echo $data->anggaran;?>" required name="b" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tahun<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" value="<?php echo $data->tahun;?>" required name="c" class="span3" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Pic<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" value="<?php echo $data->pic;?>" required name="d" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status<span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" value="<?php echo $data->status;?>" required name="e" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit_anggaran" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
            </form>
        </div>
    </div>
</div>
</div>

