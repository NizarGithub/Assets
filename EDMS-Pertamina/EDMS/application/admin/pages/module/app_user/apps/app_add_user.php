<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<form id="userSecurityForm" enctype="multipart/form-data" action="admin.php?mod_apps=user&media_app=app_aksi_user" method="post">
    <div class="container">

        <div class="alert alert-block alert-info">
            <h2>Added New User :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            
            </p>
        </div>
        <div class="row">
            <div id="acct-password-row" class="span8">
                <fieldset>
                    <legend>Informasi Pengguna</legend><br>
                    <div class="control-group ">
                        <label class="control-label">Nama Lengkap <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="nama" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">E-mail <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="email" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">No. Telepon</label>
                        <div class="controls">
                            <input name="no_telp" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Biodata</label>
                        <div class="controls">
                            <textarea name="bio" class="ckeditor span6"></textarea>

                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="acct-verify-row" class="span8">
                <fieldset>
                    <legend>Account Pengguna</legend>
                    <div class="control-group ">
                        <label class="control-label">Username <span class="required">*</span></label>
                        <div class="controls">
                            <input id="current-pass-control" required name="username" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Password <span class="required">*</span></label>
                        <div class="controls">
                            <input id="new-pass-control" required name="password" class="span8" type="password" autocomplete="false">

                        </div>
                    </div>
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
                    <div class="control-group ">
                        <label class="control-label">Status Account <span class="required">*</span></label>
                        <div class="controls">
                            <label><input type="radio" name="blokir" value="N">&nbsp;Aktif</label>
                            <label><input type="radio" name="blokir" checked value="Y">&nbsp;Tidak aktif </label>
                        </div>
                    </div>
                    <br>
                    <div class="control-group ">
                        <label class="control-label">Foto User</label>
                        <div class="controls">
                            <input type="file" name="fupload">
                            
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_add_user" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
    </div>
</form>