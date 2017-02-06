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
		$('html, body').delay(500).animate({scrollTop:120}, 700);
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
            <h2>Added New Top Issue :</h2>
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
                            <input required name="a" required  class="span8 focus-on" type="text" value="" autocomplete="false">

                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label">Problems <span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="b" class="span8"></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Criticality & Consequency<span class="required">*</span></label>
                        <div class="controls">
                            <textarea  name="c" class="ckeditor" type="text"></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">RTL & Target
 <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="d" class="span8" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <textarea name="e" class="span8"></textarea>

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Status Trafic <span class="required">*</span></label>
                        <div class="controls btn-group-box">
                            <label><input type="radio" name="f" checked value="1">&nbsp;&nbsp;<span class="badge" style="background: blue"> </span> <small style="padding-left: 10px;">Blue</small></label>
                            <label><input type="radio" name="f" value="2">&nbsp;&nbsp;<span class="badge" style="background: #00ff00"> </span> <small style="padding-left: 10px;">Green</small> </label>
                            <label><input type="radio" name="f" value="3">&nbsp;&nbsp;<span class="badge" style="background: yellow"> </span> <small style="padding-left: 10px;">Yellow</small></label>
                            <label><input type="radio" name="f" value="4">&nbsp;&nbsp;<span class="badge " style="background: red"> </span> <small style="padding-left: 10px;">Red</small></label>

                        </div>
                   </div>
                    <div class="control-group ">
                        <label class="control-label">Pic <span class="required">*</span></label>
                        <div class="controls">
                             <input required name="g" class="span8" type="text">

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

