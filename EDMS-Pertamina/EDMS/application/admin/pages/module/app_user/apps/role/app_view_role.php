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
                    <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table  table-striped">
                        <thead>
                           <tr>
                              <th width="4%">#</th>
                              <th width="18%" data-priority="1">Nama Modul</th>
                              <th width="18%" data-priority="1">Level Akses</th>
                              <th width="10%" data-priority="3">Read</th>
                              <th width="8%" data-priority="3">Write</th>
                              <th width="8%" data-priority="3">Modify</th>
                              <th width="8%" data-priority="3">Delete</th>
                              <th width="8%" data-priority="3">Tindakan</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $qUserRole = $ARSql->getAll('user_role','id_level','ASC');
                            while ( $dUserRole = $ARSql->mf_object($qUserRole)) {
                                $dLevel = $ARSql->getOne('user_level','id_level',$dUserRole->id_level);
                                $module = $ARSql->getOne('module','id_module',$dUserRole->id_module);
                                if($dUserRole->read_access=='Y') {
                                    $read_access = "<span class='badge badge-success'>Yes</span>";
                                } else {
                                    $read_access = "<span class='badge badge-important'>No access</span>";
                                }
                                if($dUserRole->write_access=='Y') {
                                    $write_access = "<span class='badge badge-success'>Yes</span>";
                                } else {
                                    $write_access = "<span class='badge badge-important'>No access</span>";
                                }
                                if($dUserRole->modify_access=='Y') {
                                    $modify_access = "<span class='badge badge-success'>Yes</span>";
                                } else {
                                    $modify_access = "<span class='badge badge-important'>No access</span>";
                                }
                                if($dUserRole->delete_access=='Y') {
                                    $delete_access = "<span class='badge badge-success'>Yes</span>";
                                } else {
                                    $delete_access = "<span class='badge badge-important'>No access</span>";
                                }

                                if($dLevel->id_level=='1') {
                                    $level = "<span class='badge badge-info'>$dLevel->level</span>";
                                } else {
                                    $level = "<span class='badge badge-warning'>$dLevel->level</span>";
                                }
                                echo "<tr>
                                    <td>$no.<p></p></td>
                                    <td>$module->module</td>
                                    <td>$level</td>
                                    <td>$read_access</td>
                                    <td>$write_access</td>
                                    <td>$modify_access</td>
                                    <td>$delete_access</td>
                                    <td class='td-actions' style='text-align: center'>";
                                if(LEVEL_USER!='1') {
                                    echo "<a href='#view-_sms' data-toggle='modal' class='btn btn-small btn-success'>
                                        <i class='btn-icon-only icon-external-link'></i>
                                        </a>&nbsp;<span class='badge badge-inverse'>Protected</span>";
                                } else {
                                    echo "<a href='admin.php?mod_apps=user&media_app=user_role&action=edit_role&id=".$dUserRole->id_role."' data-toggle='modal'>
                                        <img src='".APP_IKON."b_edit.png'>
                                    </a>&nbsp;&nbsp;
                                    <a onclick='return conDelete();' href='admin.php?mod_apps=user&media_app=user_role&action=hapus_role&id=".$dUserRole->id_role."'>
                                        <img src='".APP_IKON."b_drop.png'>
                                    </a>";
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