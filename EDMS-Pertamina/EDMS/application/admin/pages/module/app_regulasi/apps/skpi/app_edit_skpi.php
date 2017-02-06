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
    if($_GET['action']=='edit_skpi') {
        $id_skpi = validasi($_GET['id'], 'xss');
        $data     = $ARSql->getOne('skpi','id_skpi',$id_skpi);
    ?>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_skpi&action=aksi_skpi" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit SKPI Data :</h2>
            <p>
                Enter updated security information for your account as desired.  Fields marked with an asterisk
                are required.
            </p>
        </div>
        <div class="row">
             <fieldset>
            <div id="acct-password-row" class="span7">
                    <div class="control-group ">
                        <label class="control-label">No. SKPI <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_skpi" value="<?php echo $id_skpi;?>">
                            <input id="current-pass-control" value="<?php echo $data->no_skpi;?>" required name="no" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tanggal</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->tgl;?>" required name="tgl" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Expire</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->expire;?>" name="expire" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Plant</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->plant;?>" required name="plant" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
            <div class="control-group ">
                        <label class="control-label">Dibuat</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->dibuat;?>" required name="dibuat" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Pembuat</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->pembuat;?>" required name="pembuat" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Digunakan</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->digunakan;?>" required name="digunakan" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Untuk</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->untuk;?>" required name="untuk" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>  
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_skpi" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>
<?php
    }