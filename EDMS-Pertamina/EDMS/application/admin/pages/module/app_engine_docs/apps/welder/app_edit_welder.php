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
    if($_GET['action']=='edit_welder') {
        $id       = validasi($_GET['id'], 'xss');
        $data     = $ARSql->getOne('welder','id_welder',$id);
    ?>
<form id="userSecurityForm" class="form-horizontal" action="admin.php?mod_apps=engine-docs&media_app=welder&action=aksi_welder" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Welder Data :</h2>
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
                        <label class="control-label">Nama <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_welder" value="<?php echo $id;?>">
                            <input id="current-pass-control" value="<?php echo $data->nama;?>" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Kualifikasi</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->kualifikasi;?>" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Posisi</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->posisi;?>" name="c" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Diameter</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->diameter;?>" required name="d" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Thickness</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->thickness;?>" required name="e" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Material</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->material;?>" required name="f" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   
               
            </div>
            
             <div id="acct-password-row" class="span7">
                   <div class="control-group ">
                        <label class="control-label">Berlaku</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->berlaku;?>" required name="g" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Pengalaman</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="h" class="span4" type="text" value="" autocomplete="false"><?php echo $data->pengalaman;?></textarea>

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Project</label>
                        <div class="controls">
                            <textarea id="new-pass-control"  required name="i" class="span4" type="text" value="" autocomplete="false"><?php echo $data->project;?></textarea>

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">No. Handphone</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->no_hp;?>" required name="j" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->email;?>" required name="k" class="span4" type="email" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">No. Sertifikat</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->no_sertifikat;?>" required name="l" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                
               
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_welder" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }