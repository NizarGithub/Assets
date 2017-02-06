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
        <div class="alert alert-info">
            <h2>Daftar Member Layanan SMS</h2>
            Member yang telah terdaftar bisa mendapatkan berbagai informasi melalui layanan SMS Gateaway.
        </div>
    </div>
</div>
    <div class="row">
    <div class="span10">
                <div class="table-responsive" data-pattern="priority-columns">
           <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-striped">
                <thead>
                        <tr>
                            <th>#</th>
                            <th data-priority="1">Nama Lengkap</th>
                            <th data-priority="1">Nomor Telepon</th>
                            <th data-priority="3">Status aktif</th>
                            <th data-priority="1" class="td-actions">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel1 = $ARSql->getAll('member_sms','nama','ASC');
                        $no1 = 1;
                        while ( $rows = $ARSql->mf_object($qLevel1)) {
                        echo "<tr>
                            <td>$no1.</td>
                            <td>".$rows->nama."</td>
                            <td>".$rows->no_telp."</td>"; 
                        if($rows->aktif=='Y') {        
                            echo "<td><span class='badge badge-info'>Aktif</span></td>";   
                        }
                        else {
                            echo "<td><span class='badge badge-important'>Tidak</span></td>";
                        }
                        echo "<td class='td-actions'>
                                <a href='#edit-".$rows->id_member."_member' data-toggle='modal'>
                                    <img src='".APP_IKON."b_inline_edit.png'>
                                </a>&nbsp;&nbsp;&nbsp;
                                <a onclick='return conDelete();' href='admin.php?mod_apps=sms_gateaway&media_app=app_aksi_member_sms&id=".$rows->id_member."'>
                                    <img src='".APP_IKON."b_drop.png'>
                                </a>
                            </td>
                        </tr>";
                        $no1++;   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="span6">
        <div class="box">
            <div class="box-content box-table">
                <table id="sample-table" class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th>Nama Lengkap</th>
                            <th width="33%">Hits Request</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $qLevel3 = $ARSql->getAll('member_sms','hits','DESC');
                        $no = 1;
                        while ( $rowsD = $ARSql->mf_object($qLevel3)) {
                        echo "<tr>
                            <td>$no.</td>
                            <td>".$rowsD->nama."</td>
                            <td><span class='badge badge-success'>".$rowsD->hits."</span></td>
                        </tr>";
                        $no++;   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
<?php
$data3 = $ARSql->getAll('member_sms','nama','ASC');
while ($edit = mysql_fetch_object($data3)) { ?>
  <div id="edit-<?php echo $edit->id_member;?>_member" class="modal fade" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">          
        <div>
            <center><h2>Edit Member SMS</h2></center>
            </div>
        <form action="admin.php?mod_apps=sms_gateaway&media_app=app_aksi_member_sms" method="POST"> 
        <div class="modal-content">
                 <div class="modal-body">
                     <div class="alert alert-success">
                         <div class='form-group'><label class='control-label col-lg-4'>Nama Member</label>
                             
                                 <input type="hidden" name="id_member" value="<?php echo $edit->id_member;?>">
                                 <input type="text" name="nama" value="<?php echo $edit->nama;?>"
                                        class="form-control">
                         </div>
                         <div class='form-group'><label class='control-label col-lg-4'>Nomor telepon</label>
                                 <input type="text" name="no_telp" value="<?php echo $edit->no_telp;?>"
                                        class="form-control">
                             </div>
                         </div>
                         <div class="control-group ">
                            <label class="control-label">Status <span class="required">*</span></label>
                            <div class="controls">
                                <?php if($edit->aktif=='Y') { ?>
                                <label><input type="radio" name="aktif" checked value="Y">&nbsp;Aktif</label>
                                <label><input type="radio" name="aktif"  value="N">&nbsp;Tidak </label>
                                <?php } else { ?>
                                <label><input type="radio" name="aktif" value="Y">&nbsp;Aktif</label>
                                <label><input type="radio" name="aktif" checked value="N">&nbsp;Tidak </label>
                                <?php } ?>
                            </div>
                        </div>
                     </div> 
                     </div>
            <div class="modal-footer">
                <button class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                    Tutup
                </button>
                <button type="submit" name="submit_edit" class="btn btn-primary btn-sm">
                    Simpan
                </button>
            </div>
            </form>
        </div>
    </div>
<?php } ?>
</div>