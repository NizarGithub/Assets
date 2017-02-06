<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data = $ARSql->getOne('petugas_oncall','id_petugas',$_GET['id']);
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(1000).animate({scrollTop:180}, 500);
	});
});
</script>
<form id="userSecurityForm" enctype="multipart/form-data" action="admin.php?mod_apps=info&media_app=petugas_oncall&action=aksi_petugas" method="post">
    <div class="container">

        <div class="alert alert-block alert-info">
            <h2>Edit Petugas On Call :</h2>
            <p>
               Anda dapat mengubah data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            
            </p>
        </div>
        <div class="row">
            <div id="acct-password-row" class="span8">
                <fieldset>
                    <legend>Informasi Petugas</legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama Lengkap <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_petugas" value="<?php echo $data->id_petugas;?>">
                            <input required name="nama" class="span8" type="text" value="<?php echo $data->nama;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">E-mail <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="email" class="span8" type="text" value="<?php echo $data->email;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">No. Telepon / HP</label>
                        <div class="controls">
                            <input name="no_telp" class="span8" type="text" value="<?php echo $data->no_telp;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <textarea name="alamat" class="span8"><?php echo $data->alamat;?></textarea>

                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="acct-verify-row" class="span8">
                <fieldset>
                    <legend>Informasi Kepegawaian <?php echo btnBack('info', 'petugas_oncall');?></legend>
                    <div class="control-group ">
                        <label class="control-label">Kantor <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="kantor" class="span8" type="text" value="<?php echo $data->kantor;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group">
                        <label for="challengeQuestion" class="control-label">Group Pegawai</label>
                        <div class="controls">
                            <select name="id_group" id="challenge_question_control" class="span8 form-control">
                                <option>-- PILIH GROUP --</option>
                                <?php 
                                $qLevel = $ARSql->getAll('group_pegawai','nama','ASC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_group."'";
                                    echo $data->id_group==$dLevel->id_group ? 'selected' : '';
                                    echo ">".$dLevel->nama."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php
                    if($data->foto!='') {
                        echo"<div class='control-group'>
                            <label class='control-label'>Foto Petugas</label>
                            <div class='controls'>
                            <div class='thumbnail'><img style='border-radius: 10px; border: 3px solid #e0e0e0' src='uploaded/foto_petugas_oncall/medium_$data->foto'></div>
                         </div>
                         </div><br>";
                    }else{
                        echo"<div class='control-group'>
                            <label class='control-label'>Foto Petugas</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: red'><i class='icon-info-sign'></i> Tidak ada foto yang di upload !</em>
                            </p>
                         </div>
                         </div><br>";
                    }
                    ?>
                    <br>
                    <div class="control-group ">
                        <label class="control-label">Ganti Foto Petugas</label>
                        <div class="controls">
                            <input type="file" name="fupload">
                            
                        </div>
                    </div>
                    <br>
                    <?php 
                    if($data->aktif=='Y') { ?>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="aktif" checked value="Y">&nbsp;Aktif</label>
                            <label><input type="radio" name="aktif" value="N">&nbsp;Tidak aktif </label>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="control-group ">
                        <label class="control-label">Status <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="aktif" value="Y">&nbsp;Aktif</label>
                            <label><input type="radio" name="aktif" checked value="N">&nbsp;Tidak aktif </label>
                        </div>
                    </div>
                    <?php } ?>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit_petugas" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>