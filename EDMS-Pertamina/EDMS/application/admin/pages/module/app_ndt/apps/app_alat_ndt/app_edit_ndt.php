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
    if($_GET['action']=='edit_ndt') {
        $id_ndt   = validasi($_GET['id'], 'xss');
        $data     = $ARSql->getOne('alat_ndt','id_alat',$id_ndt);
    ?>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=ndt&media_app=alat_ndt&action=aksi_ndt" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit NDT Data :</h2>
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
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <input type="hidden" name="id_alat" value="<?php echo $id_ndt; ?>">
                            <textarea id="current-pass-control" required name="a" class="span4" type="text" value="" autocomplete="false"><?php echo $data->description; ?></textarea>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Merek</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->merk;?>" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Serial</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->serial;?>" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
            <div class="control-group ">
                        <label class="control-label">Jumlah</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->jumlah;?>" required name="d" class="span4" type="number" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Keterangan</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="e" class="span4" type="text" value="" autocomplete="false"><?php echo $data->ket;?></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Peminjam</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->peminjam;?>" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_ndt" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }
    ?>