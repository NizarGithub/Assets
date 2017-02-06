<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksmana
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
                            <?php
                            if(LEVEL_USER=='1' OR LEVEL_USER=='2') {
                            $log = $ARSql->getAll('log_user','id_log','DESC');
                            ?>
                           <tr>
                              <th width="4%">#</th>
                              <th data-priority="1">User</th>
                              <th data-priority="1">Aktifitas</th>
                              <th data-priority="1">Tanggal</th>
                              <th width="10%" data-priority="3">Waktu</th>
                              <th width="5%" data-priority="1">Aksi</th>
                           </tr>
                           <?php }
                           else {
                            $log = $ARSql->query("SELECT * FROM log_user WHERE id_user='".ID_USER."' ORDER BY id_log DESC");
                           ?>
                           <tr>
                              <th width="4%">#</th>
                              <th data-priority="1">Aktifitas</th>
                              <th data-priority="1">Tanggal</th>
                              <th width="10%" data-priority="3">Waktu</th>
                              <th width="5%" data-priority="1">Aksi</th>
                           </tr>
                           <?php } ?>

                        </thead>
                        <tbody>
                           <?php
                        $no = 1;
                        while ( $rows = $ARSql->mf_object($log)) {
                        $data   = $ARSql->getOne('users','id_user',$rows->id_user);
                        echo "<tr>
                            <td>$no.</td>";
                        if(LEVEL_USER=='1' OR LEVEL_USER=='2') {
                            echo "<td><a class='line_edit' data-rel='judul' data=pk='1' title='Edit Judul' id='".$rows->id_art."'>".$data->nama_lengkap."</a></td>";
                        }
                            echo "<td><a class='line_edit' data-rel='tahun' data=pk='1' title='Edit Tahun' id='".$rows->id_art."'>".$rows->aktifitas."</a></td>
                            <td><a class='line_edit' data-rel='pengarang' data=pk='1' title='Edit Pengarang' id='".$rows->id_art."'>".tanggal($rows->tanggal)."</a></td>
                            <td><a class='line_edit' data-rel='ket' data=pk='1' title='Edit Keterangan' id='".$rows->id_art."'>".$rows->waktu."</a></td>
                             <td class='td-actions'>
                                <a onclick='return conDelete();' href='admin.php?mod_apps=user&media_app=app_user_log&action=hapus_log&id=".$rows->id_log."' class='btn btn-small btn-danger'>
                                    <i class='btn-icon-only icon-remove'></i>
                                </a>
                            </td>
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