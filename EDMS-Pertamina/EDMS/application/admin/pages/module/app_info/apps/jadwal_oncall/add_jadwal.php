<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css">
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<?php
require_once ('daterange.php');
?>
<script>
      $(function() {
        dateRange();
      });
    </script>
<div class="row">
<div class="span16">
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah Jadwal On Call Baru</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=info&media_app=jadwal_oncall&action=aksi_jadwal" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">
                
                <div class="alert alert-block alert-info">
            <h2>New Jadwal On Call :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
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
                                <input required id="datepicker" value="<?php echo date("Y-m-d");?>" name="tanggal" class="span8 focus-on form-control" type="text">
                                <br><input type="text" name="reservation" id="dateRange" class="form-control">
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
                                        echo "<option value='$dPetugas->id_petugas'>$dPetugas->nama</option>";
                                    }
                                    ?>
                                </select>
                        </div>
                    </div>
                    </div><br>
                    <div class="control-group ">
                        <div class="controls">
                        <div id="info_petugas"><span class="badge badge-important">Info</span> Belum memilih petugas</div>
                        </div>
                        </div><br>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <textarea name="ket" class="span8 form-control">-</textarea>
                        </div>
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

