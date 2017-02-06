<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$data = $ARSql->getOne('ndt_personil','id_personil',$_GET['id']);
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
            <h5>Personil NDT</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=ndt&media_app=personil_ndt&action=aksi_personil" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Personil NDT :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Personil NDT</span><?php echo btnBack('report', 'atk');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama<span class="required">*</span></label>
                        <div class="controls">
                             <input type="hidden" name="id_personil" value="<?php echo $data->id_personil;?>">
                            <input required name="a" required  class="span8" type="text" value="<?php echo $data->nama;?>" autocomplete="false">

                        </div>
                    </div>

                  <div class="control-group ">
                        <label class="control-label">Qualifikasi <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="b" autocomplete="false" value="<?php echo $data->qualifikasi;?>" class="span8" type="text">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">No. Telepon <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="e" autocomplete="false" value="<?php echo $data->no_telp;?>" class="span8" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Alamat<span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="c" class="span8 ckeditor" type="text"><?php echo $data->alamat;?></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Keterangan<span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="d" class="span8" id="teks_editor" type="text"><?php echo $data->ket;?></textarea>

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

