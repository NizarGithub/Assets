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
                        url: "apps/app_mapel/controller/status.php",
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
                            url: "apps/app_mapel/controller/status.php",
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=mapel&act=multi" id="form">
    <div id="app_header">
            <div class="warp_app_header">		
                <div class="app_title">Pengelolaan Data Mata Pelajaran</div>
                <div class="app_link">			
                <a class="add btn btn-primary btn-sm btn-grad" href="?app=mapel&act=add" title="Tambahkan mata pelajaran baru"><i class="icon-plus"></i> Mata Pelajaran Baru</a>
                <button type="submit" class="delete btn btn-danger btn-sm btn-grad" title="Hapus" value="Hapus" name="delete_cek"><i class="icon-trash"></i> &nbsp;Hapus</button>
                </div>
            </div>
    </div>
    <table class= "data">
        <thead>
            <tr>								  
                <th style="width:5% !important;" class="no" colspan="0" id="ck">  
                    <input type="checkbox" id="checkall" target='cek_data[]'>
                </th>	
                <th style="width:20% !important;">Nama Mata Pelajaran</th>	
                <th style="width:20% !important;">Guru Pengajar</th>
                <th style="width:20% !important;">Kelas Akses</th>
                <th style="width:5% !important;">KKM</th>
                <th style="width:18% !important;">Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             if(_LEVEL_=='admin') {
            $qmapel = mysql_query("SELECT * FROM mata_pelajaran ORDER BY nama ASC");
            }else{
                $qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id_pengajar='$_SESSION[id_guru]' ORDER BY nama ASC");
            }
            $no = 1;
            while($dmapel = mysql_fetch_array($qmapel)) {
                $pengajar = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$dmapel[id_pengajar]'");
                $dpengajar = mysql_fetch_array($pengajar);
                $qujian = mysql_query("SELECT * FROM topik_quiz WHERE id_matapelajaran='$dmapel[id_matapelajaran]'");
                $dujian = mysql_num_rows($qujian);
                if($dujian > 0) {
                    $link = "<a class='openapp' href='index.php?app=tujian&act&id=$dmapel[id_matapelajaran]'><i class='icon-external-link-sign'></i> data ujian <span class='badge badge-info' style='background-color: #3a87ad;'>".$dujian."</span></a>";
                }
                else {
                    $link = "<a class='openapp' href='index.php?app=tujian&act=add&id_mapel=$dmapel[id_matapelajaran]'><i class='icon-plus'></i> &nbsp;<span class='label label-success'>&nbsp;Ujian baru</span></a>";
                }
                echo "<tr>
                        <td align='center'><input type='checkbox' data-name='rad-$no' name='cek_data[]' value='".$dmapel['id']."' rel='ck'></td>
                        <td>
                        <a class='xedit tips' data-rel='nama' id='$dmapel[id]' title='Edit nama mata pelajaran'><b>".$dmapel['nama']."</b></a>
                            
                        </td>
                        <td align='left'><a class='guru' data-val='$dpengajar[id_pengajar]' data-rel='id_pengajar' id='$dmapel[id]' data-type='select' title='Guru pengajar' data-pk='1'>".$dpengajar['nama_lengkap']."</a></td>";
                        
                        echo "<td align='left'>";
                        
                        $kelas = $dmapel['id_kelas'];
                        $id_kelas = explode(",",$kelas);
                        foreach ($id_kelas as $iddata) {
                          $kkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$iddata' ORDER BY id_kelas DESC");
                          $dkkelas = mysql_fetch_array($kkelas);
                          echo " <a href=''><span class='label label-success'>".$dkkelas['nama']."</span></a>&nbsp;";  
//                            echo "<a class='openapp' href='index.php?app=kelas&act=view=id=".$dkkelas['id']."'>
//                                ".$dkkelas['nama']."</a>";
                                    
                        }
                            echo "</td><td><a class='xedit tips' data-rel='kkm' id='$dmapel[id]' title='Edit nilai KKM'><center>$dmapel[kkm]</center></a></td><td>
                            <a class='openapp' href='index.php?app=mapel&act=edit&id=$dmapel[id]'><i class='icon-pencil'></i> edit</a> &nbsp;|&nbsp;
                            ".$link."
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
        
        $('.guru').editable({    
            source: [
                {value:'',text: ':: PILIH PENGAJAR ::'}, 
                <?php
                $qsg = mysql_query("SELECT * FROM pengajar WHERE blokir='N' ORDER BY nama_lengkap");
                while($dsg = mysql_fetch_object($qsg)) {
                echo "{value: $dsg->id_pengajar, text: '$dsg->nama_lengkap'},";
                }
                ?>
                  
               ]
        });
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('a').attr('id');
                        var f = $(this).closest('td').children('a').attr('data-rel');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('a');
			$.ajax({
				url: "apps/app_mapel/controller/editable.php?id="+x+"&field="+f+"&data="+y,
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