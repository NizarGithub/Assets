<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data = $ARSql->getOne('module','id_module',$_GET['id']);
?>
<div class="row">
<div class="span16">
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Edit Module</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=user&media_app=app_user_modul&action=aksi_module" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">

                <div class="alert alert-block alert-info">
            <h2>Edit Module :</h2>
            <p>
                Anda dapat mengubah data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>

            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi Module</span></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Module <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input type="hidden" name="id_module" value="<?php echo $data->id_module;?>">
                                <input required name="a" value="<?php echo $data->module;?>" class="span8 form-control" type="text">

                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <textarea id="teks_editor" name="b" class="span8 form-control"><?php echo $data->ket;?></textarea>
                        </div>
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
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
        </form>
        </div>
    </div>
</div>
