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
    if($_GET['action']=='edit_pipe') {
        $id_pipe = validasi($_GET['id'], 'xss');
        $data       = $ARSql->getOne('pipe','id_pipe',$id_pipe);
    ?>
<form id="userSecurityForm" enctype="multipart/form-data" class="form-horizontal" action="admin.php?mod_apps=engine-docs&media_app=pipe_list&action=aksi_pipe" method="post">
    <div class="container">

          <div class="alert alert-block alert-info">
            <h2>Added New Pipe Data :</h2>
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
                        <label class="control-label">Line No <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_pipe" value="<?php echo $id_pipe;?>">
                            <input id="current-pass-control" value="<?php echo $data->line_no;?>" required name="a" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Ins</label>
                        <div class="controls">
                            <input id="new-pass-control" value="<?php echo $data->ins;?>" required name="b" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">NPS Dia</label>
                        <div class="controls">
                            <input id="new-pass-verify-control" name="c" value="<?php echo $data->nps;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">NPS Sch</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="d" value="<?php echo $data->nps_sch;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">From</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="e" value="<?php echo $data->dari;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Service</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="f" value="<?php echo $data->service;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">VL</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="g" value="<?php echo $data->vl;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
               
            </div>
            
             <div id="acct-password-row" class="span7">
                     <div class="control-group ">
                        <label class="control-label">To</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="h" value="<?php echo $data->untuk;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Press Desg</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="i" value="<?php echo $data->press_desg;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div> 
                 <div class="control-group ">
                        <label class="control-label">Press Opr</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="j" value="<?php echo $data->press_opr;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                   <div class="control-group ">
                        <label class="control-label">Temp Desg</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="k" value="<?php echo $data->temp_desg;?>" class="span4" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Temp Opr</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="l" class="span4" value="<?php echo $data->temp_opr;?>" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                 <div class="control-group ">
                        <label class="control-label">Remarks</label>
                        <div class="controls">
                            <input id="new-pass-control" required name="m" value="<?php echo $data->remarks;?>" class="span4" type="text" value="" autocomplete="false">

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
            <button id="submit-button" type="submit" class="btn  btn-primary" name="submit_edit_pipe" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>

<?php
    }