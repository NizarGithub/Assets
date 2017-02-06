<?php

/* 
 * Dedicated to PERTAMINA                                        
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeEs; Licensed
 * IBeES (Information Based Electronic System)
 */
  
  ?>
<?php
    if($_GET['action']=='edit_furnace') {
        $id_furnace = validasi($_GET['id'], 'xss');
        $data       = $ARSql->getOne('furnace','id_furnace',$id_furnace);
    ?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=regulasi&media_app=app_furnace&action=aksi_furnace" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Edit Furnace Data :</h2>
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
                        <label class="control-label">TagNumber <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="tag_no" class="span4" type="text" value="<?php echo $data->tag_no;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">SN <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_furnace" value="<?php echo $id_furnace;?>">
                            <input id="current-pass-control" required value="<?php echo $data->sn;?>" name="sn" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Size</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->size;?>" required name="size" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                <div class="control-group ">
                        <label class="control-label">Thickness</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="thickness" class="span4" type="text" value="<?php echo $data->thickness;?>" autocomplete="false">

                        </div>
                    </div>
                <div class="control-group ">
                        <label class="control-label">Material</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="material" class="span4" type="text" value="<?php echo $data->material;?>" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Service</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" value="<?php echo $data->service;?>" name="service" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Press</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->press;?>" required name="press" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Temp</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->temp;?>" required name="temp" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">SKKP</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->skkp;?>" required name="skkp" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">Date</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->date;?>" required name="date" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Expired</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->expired;?>" required name="expired" class="span4" type="date" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Area</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->area;?>" required name="area" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Used</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->digunakan;?>" required name="used" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Keterangan</label>
                        <div class="controls">
                            <textarea id="new-pass-control" required name="ket" class="span4" type="text" value="" autocomplete="false"><?php echo $data->keterangan;?></textarea>

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
               
            </div>
 </fieldset>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_furnace" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>                                    

<?php
    }