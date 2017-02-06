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
                        url: "apps/app_soal/controller/status_essay.php",
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
                            url: "apps/app_soal/controller/status_essay.php",
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=soal&act=hapus_multi_essay" id="form">
    <div id="app_header">
            <div class="warp_app_header">		
                <div class="app_title">Pengelolaan Soal Isian</div>
                <div class="app_link">	
                    <input type="hidden" name="id_tq" value="<?php echo $_GET['id_topik'];?>">
                <a class="add btn btn-primary btn-sm btn-grad" href="?app=soal&act=form_essay&id_topik=<?php echo $_GET['id_topik'].'&token='.md5($_GET['id_topik']);?>" title="Tambahkan soal baru"><i class="icon-plus"></i> Soal Baru</a>
                <button type="submit" class="delete btn btn-danger btn-sm btn-grad" title="Hapus" value="Hapus" name="delete_cek"><i class="icon-trash"></i> &nbsp;Hapus</button>
				<a class="btn btn-default" href="index.php?app=soal&act=view&view=soal_essay&id_topik=<?php echo $_GET['id_topik'] ;?>" title="Batal"><i class="icon-reply"></i> Kembali</a>
                </div>
            </div>
    </div>
    <?php
    $id_tq = $_GET['id_topik'];
    $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_tq='$id_tq'");
    $dujian = mysql_fetch_object($qujian);
    $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$dujian->id_matapelajaran'");
    $dmapel = mysql_fetch_object($qmapel);
    $id_kelas = explode(",",$dujian->id_kelas);
    ?>
    <table class="table table-striped">
        <thead>
        <tr  class="success" width="20%">
            <td>Nama Mata Pelajaran</td><td>:</td><td><?php echo $dmapel->nama;?></td>
        </tr>
        <tr>
            <td class="row-title">Nama Ujian</td><td>:</td><td><?php echo $dujian->judul;?></td>
        </tr>
        <tr>
            <td>Kelas yang mengikuti ujian</td><td>:</td><td>
            <?php
            foreach($id_kelas as $dkelas) {
                $nkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$dkelas'");
                $nkelas1 = mysql_fetch_object($nkelas);
                echo "<span class='label label-success'>$nkelas1->nama</span>&nbsp;&nbsp;";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td class="row-title">Durasi ujian</td><td>:</td><td><?php echo $dujian->waktu_pengerjaan / 60; ;?> menit</td>
        </tr>
        <tr >
            <td>Keterangan ujian</td><td>:</td><td><?php echo $dujian->info ;?></td>
        </tr>

        </thead>
    </table>
    <table class= "data">
        <thead>
            <tr>								  
                <th style="width:5% !important;" class="no" colspan="0" id="ck">  
                    <input type="checkbox" id="checkall" target='cek_data[]'>
                </th>	
                <th style="width:3% !important;">No.</th>		
                <th style="width:35% !important;">Pertanyaan</th>	
                <th style="width:20% !important;" class='hidden-xs'>Gambar Pertanyaan</th>
                <th style="width:15% !important;" class='hidden-xs'>Tanggal Buat</th>
                <th style="width:15% !important;" class='hidden-xs'>Status</th>
                <th style="width:20% !important;" class='hidden-xs'>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $id = $_GET['id_topik'];
            $qesay = mysql_query("SELECT * FROM quiz_esay WHERE id_tq='$id' ORDER BY id_quiz ASC");
            $no = 1;
            while($desay = mysql_fetch_array($qesay)) {
                $pertanyaan = html_entity_decode($desay['pertanyaan']);
                if($desay['aktif']=='Y') {
                    $status = "<label class='cb-enable selected'><span>Aktif</span></label>
                               <label class='cb-disable'><span>Tidak</span></label>";
                }
                else {
                    $status = "<label class='cb-enable '><span>Aktif</span></label>
                               <label class='cb-disable selected'><span>Tidak</span></label>";
                }
                echo "<tr>
                        <td align='center'><input type='checkbox' data-name='rad-$no' name='cek_data[]' value='".$desay['id_quiz']."' rel='ck'></td>
                        <td>$no.</td>
                        <td>
                        <a class='xedit tips' id='$desay[id_quiz]' data-pk='1' data-type='textarea' title='Edit nama kelas'>".$pertanyaan."</a>
                            <span class='label label-primary right visible-xs'>10</span>
                        </td>
                        <td align='left' class='hidden-xs'><a class='openapp' href='index.php?app=pengajar&id=".$desay['gambar']."'>".$desay['gambar']."</a></td>
                        <td align='left' class='hidden-xs'>".tgl_indo($desay['tgl_buat'])."</td>
                        <td>
                            <p class='switch'>
                                ".$status."
                                <input type='text' value='".$desay['id_quiz']."' id='id' class='invisible'>
                                <input type='text' value='stat' id='type' class='invisible'>
                            </p>
                        </td>
                        <td>
                            <a class='openapp' href='index.php?app=soal&act=edit_essay&id=$desay[id_quiz]&id_topik=$_GET[id_topik]'><i class='icon-pencil'></i> edit</a> &nbsp;
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
        $('.xedit').editable({
        rows: 2,
        cols: 8
        });
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('a').attr('id');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('a');
			$.ajax({
				url: "apps/app_kelas/controller/editable.php?id="+x+"&data="+y,
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