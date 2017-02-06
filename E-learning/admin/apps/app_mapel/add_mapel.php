<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=mapel&act=aksi">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Tambah mata pelajaran baru</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="sbaru"><i class="icon-ok"></i> Simpan dan tambah baru</button>
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="skeluar"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
				</button>	
				<a class="danger btn btn-default" href="?app=mapel" title="Batal"><i class="icon-remove-sign"></i> Batal</a>
			</div>
		</div>			 
	</div>
    <script> 
    $(document).ready(function(){	
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
	});	
		
	// username checker
	$("#username").change(function(){ 
        $('#pesan').html("<span class='formloading'>checking...</span>");	
        var username  = $("#username").val(); 
		$.ajax({
		 type:"POST",
		 url:"apps/app_user/controller/check_user.php",    
		 data: "act=user&username=" + username,
		 success: function(data){                 
			if(data==0){
				$("#pesan").html("<span class='form_ok'>Username availible</span>");	
			} 
			else if(data==2){
				$("#pesan").html("<span class='form_error'>Username not valid</span>"); 
			} 
			else {
				$("#pesan").html("<span class='form_error'>Username not availible</span>");   
		   }
		}
		}); 		
		setTimeout(function(){
			$(".form_ok").fadeOut(1000, function() {
			});				
		}, 3000);		
	});
});
</script>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data mata pelajaran</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="ID Mata pelajaran jangan pakai spasi" width="40%">Kode / ID </td>
                                    <td>
                                    <input onchange="cek_idmapel(this.value);"  type="text" placeholder="Kode mata pelajaran (Contoh IPA01 dsb)" id="id_mapel" name="idmapel" style="width: 100%" required class='form-control'/>
                                    <p style="margin-top: 10px;"><small><span id="pesan_id_mapel"></span></small></p>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama Mata Pelajaran">Nama Mata Pelajaran</td>
                                    <td>
                                        <input id="nama_mapel" onchange="cek_nama(this.value);" type="text" required placeholder="Nama mata pelajaran" name="nama" style="width: 100%">
                                        <p style="margin-top: 10px;"><small><span id="pesan_nama_mapel"></span></small></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td class="row-title"><span class="tips" title="Nilai Kriteria Ketuntasan Minimal">Nilai KKM</td>
                                    <td>
                                        <input required type="text" name="kkm" size="5"></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Memilih guru pengajar">Guru Pengajar</td>
					<td>
                                            <select name="guru" id="select" style="width: 100%">
                                                <?php 
                                                $qguru = mysql_query("SELECT * FROM pengajar WHERE blokir='N' ORDER BY nama_lengkap ASC");
                                                while($dguru = mysql_fetch_array($qguru)) {
                                                    echo "<option value='".$dguru['id_pengajar']."'>".$dguru['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Kelas">Kelas</td>
					<td>
                                            <select name="kelas[]" class="chosen-select w-max" data-placeholder="Multiple kelas" style="min-width:150px; width:100%;" multiple>
                                                <option value=""></option>
                                                <?php
                                                $_GET['id']=0;
                                                $qkelas = mysql_query("SELECT * FROM kelas WHERE aktif='Y' ORDER BY id_kelas ASC");
                                                while($dkelas = mysql_fetch_array($qkelas)){
                                                        echo "<option value='$dkelas[id_kelas]' >$dkelas[nama]</option>";
                                                }
                                            ?>		
                                        </select>
					</td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="Y" name="status" type="radio" checked class="invisible">
                                                    <input id="radio2" value="N" name="status" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak aktif</span></label>
					</td>
				</tr>
                                
			</table>			
		</div>  
	</div>
</div><script type="text/javascript">
$(function() {	
	CKEDITOR.replace('editor');
});
</script>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Keterangan Mata Pelajaran (Opsional)</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <div style="padding:10px 0 0; overflow: hidden;">
			<div class="load-editor">
				<textarea required placeholder="Keterangan mata pelajaran" id="editor" name="keterangan" style="opacity:0"></textarea>
			</div>					
		</div>
                        </tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>
<script type="text/javascript">
	function cek_idmapel(idmapel){
        $('#pesan_id_mapel').html("sedang mengecek...");
        var id_mapel  = idmapel;
            if(id_mapel=='') {
                $("#pesan_id_mapel").html("<span style='color: red'><i class='icon-remove-sign'></i> Jangan kosong...</span>");
            } else {
                    $.ajax({
                     type:"POST",
                     url:"apps/app_mapel/controller/cekable.php",
                     data: "id_mapel=" + id_mapel,
                     success: function(response){
                            if(response==1){
                                    $('#id_mapel').val("").focus();
                                    $("#pesan_id_mapel").html("<span style='color: red'><i class='icon-remove-sign'></i> Kode <b>"+id_mapel+"</b> sudah ada. Coba yang lain !</span>");
                            }
                            else {
                                    $("#pesan_id_mapel").html("<span class='icon-ok'></span> "+id_mapel+" OK");
                       }
                    }
                    });
            }
        }
	function cek_nama(nama){
        $('#pesan_nama_mapel').html("sedang mengecek...");
        var nama_mapel  = nama;
		$.ajax({
		 type:"POST",
		 url:"apps/app_mapel/controller/cekable.php",
		 data: "nama=" + nama_mapel,
		 success: function(response){
			if(response==1){
				$('#nama_mapel').val("").focus();
				$("#pesan_nama_mapel").html("<span style='color: red'><i class='icon-remove-sign'></i> Nama mata pelajaran <b>"+nama_mapel+"</b> sudah ada. Coba yang lain !</span>");
			}
			else {
				$("#pesan_nama_mapel").html("<span class='icon-ok'></span> "+nama_mapel+" OK");
		   }
		}
		});
	}
</script>