<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data = $ARSql->getOne('user_role','id_role',$_GET['id']);
?>
<div class="row">
<div class="span16">
    <div>
    </div>
    <br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Edit User Role</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=user&media_app=user_role&action=aksi_role" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">
                
                <div class="alert alert-block alert-info">
            <h2>Edit Role :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Akses User Role</span></legend><br>
                    <div class="control-group">
                        <label for="challengeQuestion" class="control-label">Level Akses</label>
                        <div class="controls">
                         <input type="hidden" name="id_role" value="<?php echo $data->id_role; ?>">
                            <select name="id_level" id="challenge_question_control" class="span5 form-control">
                                <option>-- PILIH LEVEL --</option>
                                <?php 
                                $qLevel = $ARSql->getAll('user_level','id_level','ASC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_level."'";
                                    echo $data->id_level==$dLevel->id_level ? 'selected' : '';
                                    echo ">".$dLevel->level."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                   <div class="control-group">
                        <label for="challengeQuestion" class="control-label">Module</label>
                        <div class="controls">
                            <select name="id_module" id="challenge_question_control" class="span5 form-control">
                                <option>-- PILIH MODULE --</option>
                                <?php 
                                $qLevel = $ARSql->getAll('module','module','ASC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_module."'";
                                    echo $data->id_module==$dLevel->id_module ? 'selected' : '';
                                    echo ">".$dLevel->module."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="control-group ">
                        <label class="control-label"><span class="badge badge-inverse">Access :</span></label><br>
                        <div class="controls">
                            <?php
                            if($data->read_access=='Y'){
                            echo"<label><input type='checkbox' checked name='read' value='Y'>&nbsp; <em style='color: #0080FF'>Read Access</em></label><br>";
                            }else{
                            echo"<label><input type='checkbox' name='read' value='Y'>&nbsp;Read Access</label><br>";  
                            }
                            if($data->write_access=='Y'){
                            echo"<label><input type='checkbox' checked name='write' value='Y'>&nbsp; <em style='color: #0080FF'>Write Access</em> </label><br>";
                            }else{
                              echo"<label><input type='checkbox' name='write' value='Y'>&nbsp;Write Access </label><br>";   
                            }
                            if($data->modify_access=='Y'){
                            echo"<label><input type='checkbox' checked name='modify' value='Y'>&nbsp; <em style='color: #0080FF'>Modify Access</em></label><br>";
                            }else{
                            echo"<label><input type='checkbox' name='modify' value='Y'>&nbsp;Modify Access</label><br>";  
                            }
                            if($data->delete_access=='Y'){
                            echo"<label><input type='checkbox' checked name='delete' value='Y'>&nbsp; <em style='color: #0080FF'>Delete Access </em></label>";
                            }else{
                            echo"<label><input type='checkbox' name='delete' value='Y'>&nbsp;Delete Access </label>";
                            }
                            ?>
                        </div>
                    </div>
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

