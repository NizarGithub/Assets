<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$data = $ARSql->getOne('atk','id_atk',$_GET['id']);
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
            <h5>Alat Tulis Kantor</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=report&media_app=atk&action=aksi_atk" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Alat Tulis Kantor :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi ATK</span><?php echo btnBack('report', 'atk');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama<span class="required">*</span></label>
                        <div class="controls">
                             <input type="hidden" name="id_atk" value="<?php echo $data->id_atk;?>">
                            <input required name="a" required  class="span8" type="text" value="<?php echo $data->nama;?>" autocomplete="false">

                        </div>
                    </div>

                  <div class="control-group ">
                        <label class="control-label">Jumlah <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="b" value="<?php echo $data->jumlah;?>" class="span2" type="number">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan<span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="c" class="span8" type="text"><?php echo $data->keterangan;?></textarea>

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

