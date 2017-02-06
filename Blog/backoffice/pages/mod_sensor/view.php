<?php
$module = 'sensor';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[baca] == 'Y') {
    ?>
    <div class="container-fluid padded">
        <div class="form-group">

            <?php
            if ($role[tambah] == 'Y') {
                echo "<a href='?page=tambah_sensor' class='btn btn-blue' style='margin:5px;'>Tambah Sensor Kata</a>";
            }
            if ($role[hapus] == 'Y') {
                echo "<button type='submit' class='btn btn-green'>Hapus yang ditandai</button>";
            }
            ?>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Sensor Kata</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 40%">Kata Jelek</td>
                                <td style="width: 45%">Ganti</td>
                                <?php
                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo "<td style='width: 10%; text-align:center;'>Aksi</td>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_sensor();
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                       <td class=' '>$row[kata]</td>
                                       <td class=' '>$row[ganti]</td>";

                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo"<td class='last' style='text-align:center;'>";
                                    if ($role[edit] == 'Y') {
                                        echo "<a title='Edit' href='?page=edit_sensor&id=$row[id_kata]' class='btn btn-xs btn-green' style='margin:5px;'><i class='icon-pencil'></i></a>";
                                    }
                                    if ($role[hapus] == 'Y') {
                                        echo "<a href='?page=sensor&act=hapus&id=$row[id_kata]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus kata $row[kata] ?')\"></i></a>";
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
            <a href="?page=tambah_sensor" class="btn btn-blue">Tambah Sensor Kata</a>
            <button type="submit" class="btn btn-green">Hapus yang ditandai</button>
        </div><br>
        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Sensor Kata</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 40%">Kata Jelek</td>
                                <td style="width: 45%">Ganti</td>
                                <td style="width: 10%; text-align:center;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    $data = $query->view_sensor();
    foreach ($data as $row) {

        echo"<tr class='status-pending'>
                              <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                               <td class=' '>$row[kata]</td>
                               <td class=' '>$row[ganti]</td>";

        echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=edit_sensor&id=$row[id_kata]' class='btn btn-xs btn-green'><i class='icon-pencil'></i></a>
                                    <a href='?page=sensor&act=hapus&id=$row[id_kata]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus kata $row[kata] ?')\"></i></a>
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
    $query->hapus_sensor($id);
     // Log Aktifitas
    $query->log($_SESSION[id_user],'Menghapus daftar sensor kata',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=sensor';</script>";
}

} else {
    echo "error";
}
