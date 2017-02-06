<?php
$module = 'Artikel';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[baca] == 'Y') {
    ?>
    <div class="container-fluid padded">
        <div class="form-group">

            <?php
            if ($role[tambah] == 'Y') {
                echo "<a href='?page=tambah_artikel' class='btn btn-blue' style='margin:5px;'>Tambah Artikel</a>";
            }
            if ($role[hapus] == 'Y') {
                echo "<button type='submit' class='btn btn-green'>Hapus yang ditandai</button>";
            }
            ?>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Artikel</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 65%">Judul</td>
                                <td style="width: 15%">Tanggal</td>
                                <td style="width: 5%">Publish</td>
                                <?php
                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo "<td style='width: 10%; text-align:center;'>Aksi</td>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_artikel_user($_SESSION['id_user']);
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                       <td class=' '>$row[judul]</td>
                                       <td class=' '>" . tgl_indo($row[tanggal]) . "</td>";

                                if ($row[publish] == 'Y') {
                                    echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                } else {
                                    echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                }

                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo"<td class='last' style='text-align:center;'>";
                                    if ($role[edit] == 'Y') {
                                        echo "<a title='Edit' href='?page=edit_artikel&id=$row[id_artikel]' class='btn btn-xs btn-green' style='margin:5px;'><i class='icon-pencil'></i></a>";
                                    }
                                    if ($role[hapus] == 'Y') {
                                        echo "<a href='?page=artikel&act=hapus&id=$row[id_artikel]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus artikel $row[judul] ?')\"></i></a>";
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
            <a href="?page=tambah_artikel" class="btn btn-blue">Tambah Artikel</a>
            <button type="submit" class="btn btn-green">Hapus yang ditandai</button>
        </div><br>
        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Artikel</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 65%">Judul</td>
                                <td style="width: 15%">Tanggal</td>
                                <td style="width: 5%">Publish</td>
                                <td style="width: 10%; text-align:center;">Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
    $data = $query->view_artikel();
    foreach ($data as $row) {

        echo"<tr class='status-pending'>
                              <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                               <td class=' '>$row[judul]</td>
                               <td class=' '>" . tgl_indo($row[tanggal]) . "</td>";

        if ($row[publish] == 'Y') {
            echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
        } else {
            echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
        }

        echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=edit_artikel&id=$row[id_artikel]' class='btn btn-xs btn-green'><i class='icon-pencil'></i></a>
                                    <a href='?page=artikel&act=hapus&id=$row[id_artikel]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus artikel $row[judul] ?')\"></i></a>
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
        $data = $query->get_artikel($id);
        if ($data['gambar'] != '') {
            unlink("../picture/artikel/$data[gambar]");

            $query->hapus_artikel($id);
             // Log Aktifitas
            $query->log($_SESSION[id_user],'Menghapus sebuah artikel',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=artikel';</script>";
        } else {
            $query->hapus_artikel($id);
             // Log Aktifitas
            $query->log($_SESSION[id_user],'Menghapus sebuah artikel',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=artikel';</script>";
        }
    }
} else {
    echo "error";
}
