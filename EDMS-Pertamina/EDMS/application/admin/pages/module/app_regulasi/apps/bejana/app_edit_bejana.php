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
    if($_GET['action']=='edit_bejana') {
        $id       = validasi($_GET['id'], 'xss');
        $data     = $ARSql->getOne('bejana','id_bejana',$id);
    ?>
<form id="userSecurityForm" class="form-horizontal" enctype="multipart/form-data" action="admin.php?mod_apps=regulasi&media_app=app_bejana&action=aksi_bejana" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit Bejana Data :</h2>
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
                        <label class="control-label">SN <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_bejana" value="<?php echo $id;?>">
                            <input id="current-pass-control" value="<?php echo $data->sn;?>" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">No. Ijin</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->no_ijin;?>" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Ijin Habis</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->ijin_habis;?>" name="c" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Merk</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->merk;?>" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
            <div class="control-group ">
                        <label class="control-label">Kapasitas</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->kapasitas;?>" required name="e" class="span4" type="number" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_bejana" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }