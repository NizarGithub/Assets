<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<?php
    if($_GET['action']=='edit_tanki') {
        $id_tanki = validasi($_GET['id'], 'xss');
        $data       = $ARSql->getOne('tanki','id_tanki',$id_tanki);
    ?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_tanki&action=aksi_tanki" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit Tanki Data :</h2>
            <p>
                Enter updated security information for your account as desired.  Fields marked with an asterisk
                are required.
            </p>
        </div><br><br>
        <div class="row">
             <fieldset>
                 <legend></legend>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">Tag Number <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_tanki" value="<?php echo $id_tanki;?>">
                            <input id="current-pass-control" value="<?php echo $data->tag_no;?>" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Test Date</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->test_date;?>" required name="b" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->type;?>" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Diameter</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->diameter;?>" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">High</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->tinggi;?>" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Capacity</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->kapasitas;?>" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Ijin Kalibrasi</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->ijin_kalibrasi;?>" required name="g" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">Kalibrasi Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->kalibrasi_habis;?>" required name="h" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Dibuat</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->dibuat;?>" required name="i" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Penggunaan Kalibrasi</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->penggunaan_kal;?>" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Penggunaan Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->penggunaan_habis;?>" required name="k" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Ijin SKKP</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->ijin_skkp;?>" required name="l" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">SKKP Habis</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->skkp_habis;?>" required name="m" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">User</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->user;?>" required name="n" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <?php
                    if($data->filename!='') {
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: #0080FF'><i class='icon-file'></i> $data->filename </em>
                            </p>
                         </div>
                         </div><br>";
                    }else{
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: red'><i class='icon-info-sign'></i> Tidak ada file yang di upload !</em>
                            </p>
                         </div>
                         </div><br>";
                    }
                    ?>
                     <div class="control-group ">
                        <label class="control-label">Upload File</label>
                        <div class="controls">
                            <input class="form-control" type="file" name="fupload">
                        </div>
                    </div>
               
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_tanki" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }