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
            <h2><i class="icon-envelope"></i> &nbsp;Daftar Pesan Masuk</h2>
            Pesan masuk dari member yang terdaftar dalam permintaan informasi dengan menggunakan SMS.
        </div>
    </div>
</div>
<div class="row">
    <div class="span16">
                <div class="table-responsive" data-pattern="priority-columns">
   <table id="filter_tabel" cellspacing="0" id="tech-companies-1" class="table table-striped">
      <thead>
         <tr>
            <th width="5%">#</th>
            <th width="35%" data-priority="1">Nama Lengkap</th>
            <th data-priority="1">Nomor Pengirim</th>
            <th data-priority="3">Waktu</th>
            <th width="15%" data-priority="1" class="td-actions">Tindakan</th>
         </tr>
      </thead>
      <tbody>
            <?php
            $qinbox = $ARSql->getAll('inbox','ReceivingDateTime','DESC');
            $no = 1;
            while($inbox = $ARSql->mf_object($qinbox)) {
            $dmember = $ARSql->getOne('member_sms','no_telp',$inbox->SenderNumber);
            echo "<tr>
                <td>$no.</td>
               <th>".$dmember->nama."</th>
               <td>".$inbox->SenderNumber."</td>
               <td>".$inbox->ReceivingDateTime."</td>
               <td class='td-actions'>
                   <a href='#view-".$inbox->ID."_sms' data-toggle='modal' class='btn btn-small btn-success'>
                        <i class='btn-icon-only icon-external-link'></i>
                    </a>&nbsp;
                    <a href='#edit-".$inbox->ID."_member' data-toggle='modal' class='btn btn-small btn-info'>
                        <i class='btn-icon-only icon-pencil'></i>
                    </a>&nbsp;
                    <a onclick='return conDelete();' href='admin.php?mod_apps=sms_gateaway&media_app=app_aksi_hapus_sms&id=".$inbox->ID."' class='btn btn-small btn-danger'>
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
