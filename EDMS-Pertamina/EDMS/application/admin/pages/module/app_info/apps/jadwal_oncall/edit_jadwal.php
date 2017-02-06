<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data    = $ARSql->getOne('jadwal_oncall','id_jadwal',$_GET['id']);
$petugas = $ARSql->getOne('petugas_oncall','id_petugas',$data->id_petugas);
$group   = $ARSql->getOne('group_pegawai','id_group',$petugas->id_group);
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
            <h5>Edit Jadwal On Call</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=info&media_app=jadwal_oncall&action=aksi_jadwal" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">

                <div class="alert alert-block alert-info">
            <h2>Edit Jadwal On Call :</h2>
            <p>
                Anda dapat mengubah data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>

            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Jadwal</span><a href="admin.php?mod_apps=info&media_app=jadwal_oncall" style="font-weight: normal; margin-top: 5px;" class="pull-right btn-info btn btn-small"><i class="icon-circle-arrow-left"></i>&nbsp; Kembali</a></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Tanggal Tugas <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input type="hidden" name="id_jadwal" value="<?php echo $data->id_jadwal;?>">
                                <input required id="datepicker" value="<?php echo $data->tanggal;?>" name="tanggal" class="span8 form-control" type="text">
                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Pilih Petugas <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <select onchange="info_petugas(this.value);" name="id_petugas" class="span8" data-placeholder="Pilih Petugas On Call" tabindex="2">
                                    <option value="">PILIH PETUGAS ON CALL</option>
                                    <?php
                                    $qPetugas = $ARSql->query("SELECT * FROM petugas_oncall WHERE aktif='Y' ORDER BY nama ASC");
                                    while($dPetugas = $ARSql->mf_object($qPetugas)) {
                                        echo "<option value='$dPetugas->id_petugas'";
                                        echo $dPetugas->id_petugas==$data->id_petugas ? 'selected' : '';
                                        echo ">$dPetugas->nama</option>";
                                    }
                                    ?>
                                </select>
                        </div>
                    </div>
                    </div><br>
                    <div class="control-group ">
                        <div id="info_petugas">
                            <?php 
                            echo "<img align='left' style='margin-right: 20px; width: 150px; height: 160px; border-radius: 15px; border: 4px solid #e9e9e9' src='uploaded/foto_petugas_oncall/medium_$petugas->foto'>";
        echo "<center><h3>$petugas->nama</h3></center>";
        echo "<p>Kantor : $petugas->kantor</p>";
        echo "<p>E-mail : $petugas->email</p>";
        echo "<p>No. HP : $petugas->no_telp</p>";
        echo "<p>Group : <span class='badge badge-info'>$group->nama</span></p><br><br>";
                            ?>
                        </div>
                    </div><br>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <textarea name="ket" class="span8 form-control"><?php echo $data->keterangan;?></textarea>
                        </div>
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
<script type="text/javascript">
    function info_petugas() {
        var form_data = {
            kd_petugas  : $('select[name=id_petugas]').val()
        };
        $.ajax({
            url:"<?php echo APP_INFO .'apps/jadwal_oncall/Info_petugas.php';?>",
            data: form_data,
            type:'post',
            dataType:'html',
            success: function(response) {
                $("#info_petugas").html(response);
            }
        });
    }
</script>

