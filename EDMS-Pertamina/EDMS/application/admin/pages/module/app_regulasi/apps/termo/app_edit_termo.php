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
    if($_GET['action']=='edit_termo') {
        $id       = validasi($_GET['id'], 'xss');
        $data     = $ARSql->getOne('termo_trend','id_thermo',$id);
    ?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_termo&action=aksi_termo" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit Termo Data :</h2>
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
                        <label class="control-label">Judul <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input id="current-pass-control" value="<?php echo $data->judul;?>" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Area</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->area;?>" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tag Number</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->tag_no;?>" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Tanggal</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->tgl;?>" required name="d" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                   
            <div class="control-group ">
                        <label class="control-label">User</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->user;?>" required name="e" class="span4" type="text" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }