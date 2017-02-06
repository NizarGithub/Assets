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
    if($_GET['action']=='edit_metering') {
        $id_metering = validasi($_GET['id'], 'xss');
        $data        = $ARSql->getOne('metering','id_met',$id_metering);
    ?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_metering&action=aksi_metering" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit Metering Data :</h2>
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
                        <label class="control-label">Serial Number <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_metering" value="<?php echo $id_metering;?>">
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
                     <div class="control-group ">
                        <label class="control-label">Tag Number</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->tag_no;?>" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Prover</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->prover;?>" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Service</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->service;?>" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" value="<?php echo $data->type;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Size</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->size;?>" required name="h" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div>
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">Volume</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->volume;?>" required name="i" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Manufacture</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->manufacture;?>" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Remark</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->remark;?>" required name="k" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Test</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->test;?>" required name="l" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Link SN</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->link_sn;?>" required name="m" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Ijin</label>
                        <div class="controls">
                            <?php
                            if($data->ijin=='Y'){
                            echo"<label><input type='radio' name='n' checked  value='Y'>&nbsp;Ya</label>
                            <label><input type='radio' name='n' value='N'>&nbsp;Tidak </label>";
                            }else{
                              echo"<label><input type='radio' name='n'  value='Y'>&nbsp;Ya</label>
                            <label><input type='radio' name='n' checked value='N'>&nbsp;Tidak </label>";   
                            }
                            ?>
                        </div>
                    </div>
                  <div class="control-group ">
                        <label class="control-label">Berita</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->berita;?>" required name="o" class="span4" type="text" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_metering" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }
    