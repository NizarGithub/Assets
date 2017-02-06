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
		$('html, body').delay(500).animate({scrollTop:120}, 500);
	});
});
</script>
<div class="row">
<div class="span16">
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Upload Laporan NDT</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=ndt&media_app=laporan_ndt&action=aksi_laporan" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Added New Report NDT :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Laporan NDT</span><?php echo btnBack('ndt', 'laporan_ndt');?></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Tag Number <span class="required">*</span></label>
                        <div class="controls">
                            <input required name="e" class="span8 form-control" type="text">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Requestor <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" required name="b" class=" form-control span8" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group">
                        <label for="challengeQuestion" class="control-label">Jenis</label>
                        <div class="controls">
                            <select name="c" id="challenge_question_control" class="span5 form-control">
                                <option>-- PILIH JENIS --</option>
                                <?php 
                                $qLevel = $ARSql->getAll('jenis_ndt','id_jenis','DESC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_jenis."'>".$dLevel->nama."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Permintaan</label>
                        <div class="controls">
                            <textarea name="d" class="ckeditor span6"></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Tanggal <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" id="datepicker" value="<?php echo date("Y-m-d");?>" required name="a" class=" form-control span8" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <input class="form-control span8" type="file" name="fupload">
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