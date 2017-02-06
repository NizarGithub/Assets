<?php
$module = 'mainmenu';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[baca] == 'Y') {
    ?>
    <div class="container-fluid padded">
        <div class="form-group">

            <?php
            if ($role[tambah] == 'Y') {
                echo "<a href='?page=tambah_mainmenu' class='btn btn-blue' style='margin:5px;'>Tambah Sub Menu</a>";
            }
            if ($role[hapus] == 'Y') {
                echo "<button type='submit' class='btn btn-green'>Hapus yang ditandai</button>";
            }
            ?>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Sub Menu</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 20%">Sub Menu</td>
                                <td style="width: 20%">Main Menu</td>
                                <td style="width: 25%">Link</td>
                                <td style="width: 10%; text-align:center;">Aktif</td>
                                <?php
                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo "<td style='width: 10%; text-align:center;'>Aksi</td>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_submenu();
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                       <td class=' '>$row[nama_sub]</td>
                                       <td class=' '>$row[nama_main]</td>
                                       <td class=' '>$row[link_sub]</td>";
                                if ($row[sub_aktif] == 'Y') {
                                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }


                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo"<td class='last' style='text-align:center;'>";
                                    if ($role[edit] == 'Y') {
                                        echo "<a title='Edit' href='?page=edit_submenu&id=$row[id_sub]' class='btn btn-xs btn-green' style='margin:5px;'><i class='icon-pencil'></i></a>";
                                    }
                                    if ($role[hapus] == 'Y') {
                                        echo "<a href='?page=submenu&act=hapus&id=$row[id_sub]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus sub menu $row[nama_sub] ?')\"></i></a>";
                                    }
                                    echo"</td>";
                                }

                                echo "</tr>";
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
            <a href="?page=tambah_submenu" class="btn btn-blue">Tambah Sub Menu</a>
            <button type="submit" class="btn btn-green">Hapus yang ditandai</button>
        </div><br>
        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Sub Menu</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 20%">Sub Menu</td>
                                <td style="width: 20%">Main Menu</td>
                                <td style="width: 25%">Link</td>
                                <td style="width: 10%; text-align:center;">Aktif</td>
                                <td style="width: 10%; text-align:center;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    $data = $query->view_submenu();
    foreach ($data as $row) {

        echo"<tr class='status-pending'>
                              <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                              <td class=' '>$row[nama_sub]</td>
                              <td class=' '>$row[nama_main]</td>
                              <td class=' '>$row[link_sub]</td>";
                                if ($row[sub_aktif] == 'Y') {
                                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }

        echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=edit_submenu&id=$row[id_sub]' class='btn btn-xs btn-green'><i class='icon-pencil'></i></a>
                                    <a href='?page=submenu&act=hapus&id=$row[id_sub]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus sub menu $row[nama_sub] ?')\"></i></a>
                                    </td>
                                </tr>";
    }
    ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>












    <?php
// Proses Hapus
if ($_GET['act'] == 'hapus') {
    $id = $_GET['id'];
    $query->hapus_submenu($id);
     // Log Aktifitas
    $query->log($_SESSION[id_user],'Menghapus data sub menu',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=submenu';</script>";
}

} else {
    echo "error";
}
