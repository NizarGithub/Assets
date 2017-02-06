<?php
$module = 'advertisement';
$role = $query->get_role($module);
if ($_SESSION[level_user] == 'user' AND $role[baca] == 'Y') {
    ?>
    <div class="container-fluid padded">
        <div class="form-group">

            <?php
            if ($role[tambah] == 'Y') {
                echo "<a href='?page=tambah_advertisement' class='btn btn-blue' style='margin:5px;'>Tambah Advertisement</a>";
            }
            if ($role[hapus] == 'Y') {
                echo "<button type='submit' class='btn btn-green'>Hapus yang ditandai</button>";
            }
            ?>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Advertisement</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 30%">Judul</td>
                                <td style="width: 25%">URL</td>
                                <td style="width: 15%">Tgl. Posting</td>
                                <td style="width: 15%">Gambar</td>
                                <?php
                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo "<td style='width: 10%; text-align:center;'>Aksi</td>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_advertisement();
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                       <td class=' '>$row[judul]</td>
                                       <td class=' '>$row[url]</td>
                                       <td class=' '>" . tgl_indo($row[tgl_posting]) . "</td>
                                       <td class=' '><img src='../picture/advertisement/$row[gambar]' alt='' /></td>";

                                if ($role[edit] == 'Y' OR $role[hapus] == 'Y') {
                                    echo"<td class='last' style='text-align:center;'>";
                                    if ($role[edit] == 'Y') {
                                        echo "<a title='Edit' href='?page=edit_advertisement&id=$row[id_ads]' class='btn btn-xs btn-green' style='margin:5px;'><i class='icon-pencil'></i></a>";
                                    }
                                    if ($role[hapus] == 'Y') {
                                        echo "<a href='?page=advertisement&act=hapus&id=$row[id_ads]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus Advertisement $row[judul] ?')\"></i></a>";
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

                <a href='?page=tambah_advertisement' class='btn btn-blue' style='margin:5px;'>Tambah Advertisement</a>
           
                <button type='submit' class='btn btn-green'>Hapus yang ditandai</button>
        </div><br>
      <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Advertisement</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%"><input type="checkbox" id="check-all"></td>
                                <td style="width: 30%">Judul</td>
                                <td style="width: 25%">URL</td>
                                <td style="width: 15%">Tgl. Posting</td>
                                <td style="width: 15%">Gambar</td>
                                <td style='width: 10%; text-align:center;'>Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_advertisement();
                            foreach ($data as $row) {

                                echo"<tr class='status-pending'>
                                      <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                       <td class=' '>$row[judul]</td>
                                       <td class=' '>$row[url]</td>
                                       <td class=' '>" . tgl_indo($row[tgl_posting]) . "</td>
                                       <td class=' '><img src='../picture/advertisement/$row[gambar]' alt='' /></td>";

                                    echo"<td class='last' style='text-align:center;'>";
                                        echo "<a title='Edit' href='?page=edit_advertisement&id=$row[id_ads]' class='btn btn-xs btn-green' style='margin:5px;'><i class='icon-pencil'></i></a>";
                                        echo "<a href='?page=advertisement&act=hapus&id=$row[id_ads]' title='Hapus'  class='btn btn-xs btn-red'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus Advertisement $row[judul] ?')\"></i></a>";
                                    echo"</td>";
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
// Proses Hapus
if ($_GET['act'] == 'hapus') {
        $id = $_GET['id'];
        $data = $query->get_advertisement($id);
        if ($data['gambar'] != '') {
            unlink("../picture/advertisement/$data[gambar]");

            $query->hapus_advertisement($id);
             // Log Aktifitas
             $query->log($_SESSION[id_user],'Menghapus data advertisement',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=advertisement';</script>";
        } else {
            $query->hapus_advertisement($id);
             // Log Aktifitas
             $query->log($_SESSION[id_user],'Menghapus data advertisement',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=advertisement';</script>";
        }
    }

} else {
    echo "error";
}
