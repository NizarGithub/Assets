<?php
$module = 'templates';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[baca] == 'Y') {
    ?>
    <div class="container-fluid padded">
        <div class="form-group">

            <?php
            if ($role[tambah] == 'Y') {
                echo "<a href='?page=tambah_templates' class='btn btn-blue' style='margin:5px;'>Tambah Template</a>";
            }
            ?>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Templates</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%">No</td>
                                <td style="width: 40%">Judul</td>
                                <td style="width: 30%">Pembuat</td>
                                <td style="width: 10%; text-align:center;">Aktif</td>
                                <?php
                                if ($role[edit] == 'Y') {
                                    echo "<td style='width: 15%; text-align:center;'>Aksi</td>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_templates();
                            $no=1;
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '>$no</td>
                                       <td class=' '>$row[judul]</td>
                                       <td class=' '>$row[pembuat]</td>";
                                if ($row[aktif] == 'Y') {
                                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }       

                                if ($role[edit] == 'Y') {
                                    echo"<td class='last' style='text-align:center;'>";
                                    if ($role[edit] == 'Y') {
                                        echo "<a title='Edit' href='?page=edit_templates&id=$row[id_templates]' class='btn btn-xs btn-green' style='margin:5px;'>Edit</a>";
                                        echo "<a title='aktifkan' href='?page=templates&act=active&id=$row[id_templates]' class='btn btn-blue'>Aktif</a>";
                                    }
                                    echo"</td>";
                                }

                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>










    <?php
} elseif ($_SESSION[level_user] == 'admin') {
    ?>

    <div class="container-fluid padded">
        <div class="form-group">
            <a href="?page=tambah_templates" class="btn btn-blue">Tambah Template</a>
        </div><br>
        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Templates</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                 <td style="width: 5%">No</td>
                                <td style="width: 40%">Judul</td>
                                <td style="width: 30%">Pembuat</td>
                                <td style="width: 10%; text-align:center;">Aktif</td>
                                <td style="width: 15%; text-align:center;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    $data = $query->view_templates();
    $no = 1;
    foreach ($data as $row) {

        echo"<tr class='status-pending'>
                              <td class='a-center '>$no</td>
                               <td class=' '>$row[judul]</td>
                               <td class=' '>$row[pembuat]</td>";
                                if ($row[aktif] == 'Y') {
                                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }   

        echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=edit_templates&id=$row[id_templates]' class='btn btn-xs btn-green'>Edit</a>
                                    <a title='aktifkan' href='?page=templates&act=active&id=$row[id_templates]' class='btn btn-blue'>Aktif</a>
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












    <?php
    if ($_GET['act'] == 'active') {

    $id = $_GET['id'];
    $query->nonactive_templates();
    $query->active_templates($id);
    // Log Aktifitas
    $query->log($_SESSION[id_user],'Mengganti tampilan website',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=templates';</script>";
}

} else {
    echo "error";
}
