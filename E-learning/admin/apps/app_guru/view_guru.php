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
                        url: "apps/app_guru/controller/status.php",
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
                            url: "apps/app_guru/controller/status.php",
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=guru&act=multi" id="form">
    <div id="app_header">
        <div class="warp_app_header">		
            <div class="app_title">Pengelolaan Data guru / pengajar</div>
            <div class="app_link">			
            <a class="add btn btn-primary btn-sm btn-grad" href="?app=guru&act=add" title="Tambahkan guru baru"><i class="icon-plus"></i> Guru Baru</a>
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
                <th style="width:20% !important;">NIP</th>	
                <th style="width:25% !important;" class='hidden-xs'>Nama Lengkap</th>
                <th style="width:13% !important;" class='hidden-xs'>No. Telepon</th>
                <th style="width:13% !important;" class='hidden-xs'>Status</th>
                <th style="width:15% !important;" class='hidden-xs'>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $qguru = mysql_query("SELECT * FROM pengajar ORDER BY nama_lengkap ASC");
            $no = 1;
            while($dguru = mysql_fetch_array($qguru)) {
//                $pengajar = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='$dguru[id_pengajar]'");
//                $dpengajar = mysql_fetch_array($pengajar);
//                $kguru = mysql_query("SELECT * FROM siswa WHERE id_siswa='$dguru[id_siswa]'");
//                $dkguru = mysql_fetch_array($kguru);
                if($dguru['blokir']=='N') {
                    $status = "<label class='cb-enable selected'><span>Aktif</span></label>
                               <label class='cb-disable'><span>Tidak</span></label>";
                }
                else {
                    $status = "<label class='cb-enable '><span>Aktif</span></label>
                               <label class='cb-disable selected'><span>Tidak</span></label>";
                }
                echo "<tr>
                        <td align='center'><input type='checkbox' data-name='rad-$no' name='cek_data[]' value='".$dguru['id_pengajar']."' rel='ck'></td>
                        <td>
                        <a class='xedit tips' data-rel='nip' id='$dguru[id_pengajar]' title='Edit nip guru'>".$dguru['nip']."</a>
                          
                        </td>
                        <td align='left' class='hidden-xs'><a class='xedit tips' data-rel='nama_lengkap' id='$dguru[id_pengajar]' title='Edit nama guru'>".$dguru['nama_lengkap']."</a></td>
                        <td align='left' class='hidden-xs'><a class='xedit tips' data-rel='no_telp' id='$dguru[id_pengajar]' title='Edit no telepon'>".$dguru['no_telp']."</a></td>
                        <td>
                            <p class='switch'>
                                ".$status."
                                <input type='text' value='".$dguru['id_pengajar']."' id='id' class='invisible'>
                                <input type='text' value='stat' id='type' class='invisible'>
                            </p>
                        </td>
                        <td>
                            <a class='openapp' href='index.php?app=guru&act=edit&id=$dguru[id_pengajar]'><i class='icon-pencil'></i> edit</a> &nbsp;
                            <a class='openapp' href='index.php?app=guru&act=view&id=$dguru[id_pengajar]'><i class='icon-user'></i> rincian</a>
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
				url: "apps/app_guru/controller/editable.php?id="+x+"&field="+f+"&data="+y,
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