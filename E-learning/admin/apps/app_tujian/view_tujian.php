<script type="text/javascript">
if (!$.isFunction($.fn.dataTable) ) {
    var script = '../plugins/plg_jquery_ui/datatables.js';
    document.write('<'+'script src="'+script+'" type="text/javascript"><' + '/script>');	
}	
$(function() {
        $('.openapp').click(function() {
            var url = $(this).attr("href");
            window.location = url;
        });
	$("#form").submit(function(e){
            var ff = this;
            var checked = $('input[name="cek_data[]"]:checked').length > 0;
           if(checked) {	
                e.preventDefault();
                $('#confirmDelete').modal('show');	
                $('#confirm').on('click', function(){
                    ff.submit();
                });		
		} else {
                    noticeabs("<div class='alert error alert-error' >Pilih data yang akan dihapus!</div>");
                    $('input[name="cek_data[]"]').next().addClass('input-error');
                    return false;
		}
	});
        $(".cb-enable").click(function(){
            var parent = $(this).parents('.switch');
            $('.cb-disable',parent).removeClass('selected');
            $(this).addClass('selected');
            $('.checkbox',parent).attr('checked', true);
            var id = $('#id',parent).attr('value');
            var type = $('#type',parent).attr('value');
			
                $.ajax({
                        url: "apps/app_tujian/controller/status.php",
                        data: type+"=1&id="+id,
                        success: function(data){
                        notice(data);
                        var loadings = $("#stat");
                        loadings.hide();
                        loadings.fadeIn();	
                        setTimeout(function(){
                                $('#stat').fadeOut(1000, function() {
                                });				
                        }, 1000);
                        }
                });
        });
		
            $(".cb-disable").click(function(){
                    var parent = $(this).parents('.switch');
                    $('.cb-enable',parent).removeClass('selected');
                    $(this).addClass('selected');
                    $('.checkbox',parent).attr('checked', false);
                    var id = $('#id',parent).attr('value');
                    var type = $('#type',parent).attr('value');

                    $.ajax({
                            url: "apps/app_tujian/controller/status.php",
                            data: type+"=0&id="+id,
                            success: function(data){
                            notice(data);
                            var loadings = $("#stat");
                            loadings.hide();
                            loadings.fadeIn();	
                            setTimeout(function(){
                                    $('#stat').fadeOut(1000, function() {
                                    });				
                            }, 1000);

                            }
                    });
            });
	loadTable();
});
</script>
<?php 
$nm_mapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$_GET[id]'");
$nm_mapel = mysql_fetch_object($nm_mapel);
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=tujian&act=multi" id="form">
    <div id="app_header">
    <input  type="hidden" name="id_mapel" value="<?php echo $nm_mapel->id_matapelajaran;?>"/>
            <div class="warp_app_header">	
            	<?php
            	if(isset($_GET['id'])) { ?>
                <div class="app_title">Daftar Ujian - <?php echo $nm_mapel->id_matapelajaran.' - '.$nm_mapel->nama;?></div>
                <?php } else { ?>
                <div class="app_title">Daftar Semua Ujian</div>
                <?php } ?>
                <div class="app_link">			
                <a class="add btn btn-primary btn-sm btn-grad" href="?app=tujian&act=add&id_mapel=<?php echo $nm_mapel->id_matapelajaran;?>" title="Tambahkan topik ujian baru"><i class="icon-plus"></i> Ujian Baru</a>
                <button type="submit" class="delete btn btn-danger btn-sm btn-grad" title="Hapus" value="Hapus" name="delete_cek"><i class="icon-trash"></i> &nbsp;Hapus</button>
                <a href="index.php?app=mapel&token=11b8b16520e644018a5eb87364b2a106" class="btn btn-default"><i class="icon-reply"></i> Kemblai</a>
                </div>
            </div>
    </div>
    <table class= "data">
        <thead>
            <tr>								  
                <th style="width:5% !important;" class="no" colspan="0" id="ck">  
                <input type="checkbox" id="checkall" target='cek_data[]'>
                </th>		
                <th style="width:22% !important;">Topik Ujian & Kelas</th>	
                <th style="width:15% !important;" >Tanggal buat</th>
                <th style="width:8% !important;" >Waktu</th>
                <th style="width:12% !important;" >Terbit</th>
                <th style="width:35% !important;" >Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET['id'])) {
                $qtopik = mysql_query("SELECT * FROM topik_quiz WHERE id_matapelajaran='$_GET[id]' ORDER BY tgl_buat DESC");
            } else {
                $qtopik = mysql_query("SELECT * FROM topik_quiz ORDER BY tgl_buat DESC");
            }
            $no = 1;
            while($dtopik = mysql_fetch_array($qtopik)) {
                $wpengerjaan = $dtopik['waktu_pengerjaan'] / 60;
                $pengajar = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$dtopik[id_pengajar]'");
                $dpengajar = mysql_fetch_array($pengajar);
                $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dtopik[id_matapelajaran]'");
                $dmapel = mysql_fetch_array($qmapel);
                $pembuat =  mysql_query("SELECT * FROM pengajar WHERE id_pengajar = '$dtopik[pembuat]'");
                $cek_pembuat = mysql_num_rows($pengajar);
                $kkelas= mysql_query("SELECT * FROM kelas WHERE id_kelas='$dtopik[id_kelas]'");
                $dkkelas = mysql_fetch_array($kkelas);
                $jml_soal_esay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$dtopik[id_tq]'");
                $jml_soal_esay1 = mysql_num_rows($jml_soal_esay);
                $jml_soal_ganda = mysql_query("SELECT * FROM quiz_pilganda WHERE id_tq='$dtopik[id_tq]'");
                $jml_soal_ganda1 = mysql_num_rows($jml_soal_ganda);
                $total_soal = $jml_soal_esay1 + $jml_soal_ganda1;
                if($total_soal > 0) {
                    $show_total_soal = "<span class='badge badge-info'  style='background-color: #3a87ad;'>".$total_soal."</span>";
                }
                else {
                    $show_total_soal = "<span class='badge badge-important' style='background-color: #953b39;'>".$total_soal."</span>";
                }
                if($dtopik['terbit']=='Y') {
                    $status = "<label class='cb-enable selected'><span>Ya</span></label>
                               <label class='cb-disable'><span>Tidak</span></label>";
                }
                else {
                    $status = "<label class='cb-enable '><span>Ya</span></label>
                               <label class='cb-disable selected'><span>Tidak</span></label>";
                }
                echo "<tr>
                        <td align='center'><input type='checkbox' data-name='rad-$no' name='cek_data[]' value='".$dtopik['id_tq']."' rel='ck'></td>
                        <td>
                        <a class='xedit tips' id='$dtopik[id_tq]' data-rel='judul' title='Edit topik ujian'><b>".$dtopik['judul']."</b></a><br><p style='margin-top: 5px;'>Kelas : ";
                         
                        $kelas = $dtopik['id_kelas'];
                        $id_kelas = explode(",",$kelas);
                        foreach ($id_kelas as $iddata) {
                          $kkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$iddata'");
                          $dkkelas = mysql_fetch_array($kkelas);
                          echo " <a href=''><span class='label label-success'>".$dkkelas['nama']."</span></a>&nbsp;";  
//                            echo "<a class='openapp' href='index.php?app=kelas&act=view=id=".$dkkelas['id']."'>
//                                ".$dkkelas['nama']."</a>";
                                    
                        }
                            echo "
                        </td>
                        <td align='left' class='hidden-xs'>
                            ".tgl_indo($dtopik['tgl_buat'])."
                        </td>
                        <td align='left' class='hidden-xs'>
                            <a class='xedit tips' id='$dtopik[id_tq]' title='Edit waktu pengerjaan' data-rel='waktu_pengerjaan'>".$wpengerjaan."</a> menit
                        </td>
                        <td>
                            <p class='switch'>
                                ".$status."
                                <input type='text' value='".$dtopik['id_tq']."' id='id' class='invisible'>
                                <input type='text' value='stat' id='type' class='invisible'>
                            </p>
                        </td>
                        <td>
                            <a class='openapp tips' title='Edit ujian' href='index.php?app=tujian&act=edit&id_mapel=$_GET[id]&id=$dtopik[id_tq]'><i class='icon-pencil'></i> edit</a> &nbsp;|&nbsp;
                            <a class='openapp tips' title='Lihat daftar soal pada ujian ini' href='index.php?app=soal&&id_topik=$dtopik[id_tq]'>".$show_total_soal." daftar soal</a> &nbsp;|&nbsp;
                                <a class='openapp tips ' title='Tambah soal baru pada ujian ini' href='index.php?app=soal&act=add&id_topik=$dtopik[id_tq]'><i class='icon-plus'></i> soal</a> &nbsp;|&nbsp;
                                <a class='openapp tips' title='Melihat sekaligus mengkoreksi soal yang telah dikerjakan oleh peserta' href='index.php?app=koreksi&act=koreksi&id_topik=$dtopik[id_tq]'><i class='icon-user'></i> koreksi</a>
                                
                                
                        </td>
                </tr>";
            $no++;
            } ?>
        </tbody>			
    </table>
</form>
<script src="assets/js/bootstrap-editable.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $.fn.editable.defaults.mode = 'popup';
        $('.xedit').editable();		
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('a').attr('id');
			var f = $(this).closest('td').children('a').attr('data-rel');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('a');
			$.ajax({
				url: "apps/app_tujian/controller/editable.php?id="+x+"&field="+f+"&data="+y,
				type: 'GET',
				success: function(s){
					if(s == 'status'){
					$(z).html(y);}
					if(s == 'error') {
					alert('Error Processing your Request!');}
				},
				error: function(e){
					alert('Error Processing your Request!!');
				}
			});
		}); 
    });
</script>