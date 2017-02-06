
    <div class="container-fluid padded">
        <div class="form-group">
            <a href='?page=tambah_user' class='btn btn-blue' style='margin:5px;'>Tambah User</a>
        </div><br>

        <div class="row-fluid">
            <div class="box col">
                <div class="box-header"><span class="title">Daftar User</span></div>
                <div class="box-content">
                    <!-- find me in partials/data_tables_custom -->
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <td style="width: 5%">No</td>
                                <td style="width: 25%">Nama</td>
                                <td style="width: 10%">Jenis Kelamin</td>
                                <td style="width: 15%">E-Mail</td>
                                <td style="width: 15%">Telepon</td>
                                <td style="width: 5%; text-align:center;">Blokir</td>
                                <td style='width: 15%; text-align:center;'>Aksi</td>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $data = $query->view_user();
                            $no=1;
                            foreach ($data as $row) {
                                if ($row[jenis_kelamin]=='L'){
                                    $jk = 'Laki-Laki';
                                }else{
                                    $jk = 'Perempuan';
                                }

                                echo"<tr class='status-pending'>
                                      <td class='a-center '>$no</td>
                                       <td class=' '><a href='?page=detail_user&id=$row[id_user]'>$row[nama_lengkap]</a></td>
                                       <td class=' '>$jk</td>
                                       <td class=' '>$row[user_email]</td>
                                       <td class=' '>$row[user_phone]</td>";
                                if ($row[blokir] == 'Y') {
                                        echo "<td class='icon status-info' style='text-align:center;'><i class='icon-ok'></i></td>";
                                                } else {
                                        echo "<td class='icon status-error' style='text-align:center;'><i class='icon-remove'></i></td>";
                                                }       
                                if($row[blokir] == 'N'){
                      
                                    echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=list_user&act=blokir&id=$row[id_user]' class='btn btn-xs btn-blue'>Blokir</a>";
                                }else{
                                    echo"<td class=' last' style='text-align:center;'>
                                    <a title='Edit' href='?page=list_user&act=unblokir&id=$row[id_user]' class='btn btn-xs btn-green'>Unblokir</a>";
                                }
                                    echo "<a href='?page=list_user&act=hapus&id=$row[id_user]' title='Hapus'  class='btn btn-xs btn-red' style='margin-left:5px;'><i class='icon-trash' onClick=\"return confirm('Apakah Anda yakin ingin menghapus user $row[nama_lengkap] ?')\"></i></a>
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
    $id = $_GET['id'];

    if ($_GET['act'] == 'blokir') {
    $query->blokir($id);
     // Log Aktifitas
    $query->log($_SESSION[id_user],'Memblokir seorang pengguna (user)',$tgl_sekarang,$jam_sekarang);
    echo "<script>window.location='?page=list_user';</script>";
      } 
      else
      if ($_GET['act'] == 'unblokir') {
         $query->unblokir($id);
          // Log Aktifitas
         $query->log($_SESSION[id_user],'Mengaktifkan kembali seorang pengguna yang diblokir',$tgl_sekarang,$jam_sekarang);
         echo "<script>window.location='?page=list_user';</script>";
      }
      else
       if ($_GET['act'] == 'hapus') {
        $data = $query->get_user($id);
        if ($data['user_image'] != '') {
            unlink("../picture/users/$data[user_image]");

            $query->hapus_user($id);
             // Log Aktifitas
            $query->log($_SESSION[id_user],'Menghapus seorang pengguna (user)',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=list_user';</script>";
        } else {
            $query->hapus_user($id);
             // Log Aktifitas
             $query->log($_SESSION[id_user],'Menghapus seorang pengguna (user)',$tgl_sekarang,$jam_sekarang);
            echo "<script>window.location='?page=list_user';</script>";
        }
    }



