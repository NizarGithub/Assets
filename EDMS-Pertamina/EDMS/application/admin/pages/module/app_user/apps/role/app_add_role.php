<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
<div class="span16">
    <div>
    </div>
    <br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah User Role</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=user&media_app=user_role&action=aksi_role" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">
                
                <div class="alert alert-block alert-info">
            <h2>Tambah Role :</h2>
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
                            <select name="id_level" id="challenge_question_control" class="span5 form-control">
                                <option>-- PILIH LEVEL --</option>
                                <?php 
                                $qLevel = $ARSql->getAll('user_level','id_level','DESC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_level."'>".$dLevel->level."</option>";
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
                                $qLevel = $ARSql->getAll('module','id_module','DESC');
                                while ($dLevel = $ARSql->mf_object($qLevel)) {
                                    echo "<option value='".$dLevel->id_module."'>".$dLevel->module."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="control-group ">
                        <label class="control-label"><span class="badge badge-inverse">Access :</span></label><br>
                        <div class="controls">
                            <label><input type="checkbox" name="read" value="Y">&nbsp; Read Access</label><br>
                            <label><input type="checkbox" name="write" value="Y">&nbsp; Write Access </label><br>
                            <label><input type="checkbox" name="modify" value="Y">&nbsp; Modify Access</label><br>
                            <label><input type="checkbox" name="delete" value="Y">&nbsp; Delete Access </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_add" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
        </form>
        </div>
    </div>
</div>

