<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
<div class="span16">
    <div>
    <form action="Import.php" method="post" enctype="multipart/form-data">
        <h3 class="text-info"><i class="icon icon-upload-alt"></i> Import Data From Excel (97/2003) &nbsp;Spreadsheets</h3><hr>
            <div class="control-group ">
                        <label class="control-label">Silahkan upload atau import data dari Ms. Excel dengan ketentuan field harus sama dengan field seperti form dibawah.</label>
                        <div class="controls">
                            <input required type="file" name="fexcel">
                        </div>
                    </div>
            <div class="control-group ">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary" name="submit_import_css"><i class="icon-ok"></i> Import Data</button>
                        </div>
                    </div>
        </form>
    </div>
    <br>
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Tambah CSS Baru</h5>
        </div>
        <form enctype="multipart/form-data" action="admin.php?mod_apps=engine-docs&media_app=css&action=aksi_css" method="post">
        <div class="box-content">
            <div class="row">
            <div class="span7">
                
                <div class="alert alert-block alert-info">
            <h2>Added New CSS :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                
            </div>
            <div class="span7">
                <fieldset>
                    <legend><span class="badge badge-info"> Informasi CSS</span></legend><br>
                    <div class="control-group ">
                        <label class="control-label">Edisi <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                                 <input required name="edisi" class="span8 form-control" type="text">

                        </div>
                    </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tahun <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-prepend">
                            <input required name="tahun" class="span2 form-control" type="text">

                        </div>
                    </div>
                    </div>
                      <div class="control-group ">
                        <label class="control-label">Upload File <span class="required">*</span></label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-group">
                                    <span class="btn btn-file btn-file">
                                        <span class="fileupload-new">Browse file</span>
                                        <span class="fileupload-exists">Change file</span>
                                        <input type="file" required name="fupload" />
                                    </span> 
                                    &nbsp;
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                    <br /> <br />
                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>&nbsp;
                                        <span style="font-weight: 400" class="fileupload-preview text-info"></span>
                                    </div>
                                </div>
                            </div>
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
</div>

