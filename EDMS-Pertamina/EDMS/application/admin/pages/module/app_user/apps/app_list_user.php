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
        <div class="row">
            <div class="span16">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                        <thead>
                           <tr>
                              <th width="4%">#</th>
                              <th data-priority="1">Nama Lengkap</th>
                              <th width="20%" data-priority="1">Email</th>
                              <th data-priority="3">No. Telepon</th>
                              <th width="10%" data-priority="3">Level Akses</th>
                              <th width="10%" data-priority="1">Tindakan</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $qUserList = $ARSql->getAll('users','level','ASC');
                            while ( $dUserList = $ARSql->mf_object($qUserList)) {
                                $dLevel = $ARSql->getOne('user_level','id_level',$dUserList->level);
                                if($dUserList->blokir=='N') {
                                    $blokir = "<span class='badge badge-success pull-right '>Aktif</span>";
                                } else {
                                    $blokir = "<span class='badge badge-important pull-right '>No aktif</span>";
                                }
                                if($dLevel->id_level=='1') {
                                    $level = "<span class='badge badge-info '>$dLevel->level</span>";
                                } else {
                                    $level = "<span class='badge badge-warning '>$dLevel->level</span>";
                                }
                                echo "<tr>
                                    <td>$no.<p></p></td>
                                    <td>$dUserList->nama_lengkap".$blokir."</td>
                                    <td>$dUserList->email</td>
                                    <td>$dUserList->no_telp</td>
                                    <td>$level</td>
                                    <td class='td-actions'>";
                                if(LEVEL_USER!='1') {
                                    echo "<a href='#view-_sms' data-toggle='modal'>
                                        <img src='".APP_IKON."eye.png'>
                                        </a>&nbsp;<span class='badge badge-important'>Protected</span>";
                                } else {
                                    if($dUserList->level=='1') {
                                        echo "<a href='admin.php?mod_apps=user&media_app=app_detail_user&id=".$dUserList->id_user."'>
                                            <img src='".APP_IKON."eye.png'>
                                            </a>&nbsp;&nbsp;
                                            <a href='admin.php?mod_apps=user&media_app=app_edit_user&id=".$dUserList->id_user."' >
                                            <img src='".APP_IKON."b_edit.png'>
                                        </a>&nbsp;&nbsp;";
                                    } else {
                                        echo "<a href='admin.php?mod_apps=user&media_app=app_detail_user&id=".$dUserList->id_user."'>
                                        <img src='".APP_IKON."eye.png'>
                                        </a>&nbsp;&nbsp;
                                        <a href='admin.php?mod_apps=user&media_app=app_edit_user&id=".$dUserList->id_user."'>
                                            <img src='".APP_IKON."b_edit.png'>
                                        </a>&nbsp;&nbsp;
                                        <a onclick='return conDelete();' href='admin.php?mod_apps=user&media_app=app_hapus_user&id=".$dUserList->id_user."'>
                                            <img src='".APP_IKON."b_drop.png'>
                                        </a>";
                                    }
                                }
                                    echo "</td>
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
</div>