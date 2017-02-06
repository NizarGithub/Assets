<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$data = $ARSql->getOne('top_issue','id_issue',$_GET['id']);
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
            <h5>Top Issue</h5>
        </div>
        <div class="box-content">
            <form  action="admin.php?mod_apps=info&media_app=top_issue&action=aksi_issue" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Top Issue :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Top Issue</span><a href="admin.php?mod_apps=info&media_app=top_issue" style="font-weight: normal; margin-top: 5px;" class="pull-right btn-info btn btn-small"><i class="icon-circle-arrow-left"></i>&nbsp; Kembali</a></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Tag Number <span class="required">*</span></label>
                        <div class="controls">
                             <input type="hidden" name="id_issue" value="<?php echo $data->id_issue;?>">
                            <input required name="a" required  class="span8" type="text" value="<?php echo $data->tag_no;?>" autocomplete="false">

                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label">Problems <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="b" class="ckeditor" type="text"><?php echo $data->problems;?></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Critic Consq <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="c" class="ckeditor" type="text"><?php echo $data->critic_consq;?></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Rtl Target <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="d" value="<?php echo $data->rtl_target;?>" class="span8" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <textarea name="e" class="span8"><?php echo $data->status;?></textarea>

                        </div>
                    </div>
                    <?php if($data->trafic=='1') { ?>
                     <div class="control-group ">
                        <label class="control-label">Status Trafic <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="f" checked value="1">&nbsp;&nbsp;<span class="badge" style="background: blue"> </span> <small style="padding-left: 10px;">Blue</small></label>
                            <label><input type="radio" name="f" value="2">&nbsp;&nbsp;<span class="badge" style="background: #00ff00"> </span> <small style="padding-left: 10px;">Green</small> </label>
                            <label><input type="radio" name="f" value="3">&nbsp;&nbsp;<span class="badge" style="background: yellow"> </span> <small style="padding-left: 10px;">Yellow</small></label>
                            <label><input type="radio" name="f" value="4">&nbsp;&nbsp;<span class="badge " style="background: red"> </span> <small style="padding-left: 10px;">Red</small></label>
                        </div>
                   </div>
                    <?php } else if($data->trafic=='2') { ?>
                     <div class="control-group ">
                        <label class="control-label">Status Trafic <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="f" value="1">&nbsp;&nbsp;<span class="badge" style="background: blue"> </span> <small style="padding-left: 10px;">Blue</small></label>
                            <label><input type="radio" name="f" checked value="2">&nbsp;&nbsp;<span class="badge" style="background: #00ff00"> </span> <small style="padding-left: 10px;">Green</small> </label>
                            <label><input type="radio" name="f" value="3">&nbsp;&nbsp;<span class="badge" style="background: yellow"> </span> <small style="padding-left: 10px;">Yellow</small></label>
                            <label><input type="radio" name="f" value="4">&nbsp;&nbsp;<span class="badge " style="background: red"> </span> <small style="padding-left: 10px;">Red</small></label>
                        </div>
                   </div>
                    <?php } else if($data->trafic=='3') { ?>
                     <div class="control-group ">
                        <label class="control-label">Status Trafic <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="f" value="1">&nbsp;&nbsp;<span class="badge" style="background: blue"> </span> <small style="padding-left: 10px;">Blue</small></label>
                            <label><input type="radio" name="f" value="2">&nbsp;&nbsp;<span class="badge" style="background: #00ff00"> </span> <small style="padding-left: 10px;">Green</small> </label>
                            <label><input type="radio" name="f" checked value="3">&nbsp;&nbsp;<span class="badge" style="background: yellow"> </span> <small style="padding-left: 10px;">Yellow</small></label>
                            <label><input type="radio" name="f" value="4">&nbsp;&nbsp;<span class="badge " style="background: red"> </span> <small style="padding-left: 10px;">Red</small></label>
                        </div>
                   </div>
                    <?php } else { ?>
                    <div class="control-group ">
                        <label class="control-label">Status Trafic <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="f" value="1">&nbsp;&nbsp;<span class="badge" style="background: blue"> </span> <small style="padding-left: 10px;">Blue</small></label>
                            <label><input type="radio" name="f" value="2">&nbsp;&nbsp;<span class="badge" style="background: #00ff00"> </span> <small style="padding-left: 10px;">Green</small> </label>
                            <label><input type="radio" name="f" value="3">&nbsp;&nbsp;<span class="badge" style="background: yellow"> </span> <small style="padding-left: 10px;">Yellow</small></label>
                            <label><input type="radio" name="f" checked value="4">&nbsp;&nbsp;<span class="badge " style="background: red"> </span> <small style="padding-left: 10px;">Red</small></label>
                        </div>
                   </div>
                    <?php } ?>
                    <div class="control-group ">
                        <label class="control-label">Pic <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="g" value="<?php echo $data->pic;?>" class="span8" type="text">

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

