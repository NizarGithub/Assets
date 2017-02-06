<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$data = $ARSql->getOne('around','id_ar',$_GET['id']);
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
            <h5>Turn Around</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=report&media_app=turn_around&action=aksi_around" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Turn Around :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Turn Around</span><?php echo btnBack('report', 'turn_around');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">No<span class="required">*</span></label>
                        <div class="controls">
                             <input type="hidden" name="id_around" value="<?php echo $data->id_ar;?>">
                            <input required name="a" required  class="span8" type="text" value="<?php echo $data->no;?>" autocomplete="false">

                        </div>
                    </div>

                  <div class="control-group ">
                        <label class="control-label">Tanggal <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="b" value="<?php echo $data->tgl;?>" class="span3" type="date">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Kepada<span class="required">*</span></label>
                        <div class="controls">
                            <input required name="c" required  class="span8" type="text" value="<?php echo $data->kepada;?>" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Tembusan<span class="required">*</span></label>
                        <div class="controls">
                            <input required name="d" required  class="span8" type="text" value="<?php echo $data->tembusan;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Perihal<span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="e" class="span8" type="text"><?php echo $data->perihal;?></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Tindak Lajut<span class="required">*</span></label>
                        <div class="controls">
                            <input required name="f" required  class="span8" type="text" value="<?php echo $data->t_lanjut;?>" autocomplete="false">

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

