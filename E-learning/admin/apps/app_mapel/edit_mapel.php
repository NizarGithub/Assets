<?php
$qmapel = mysql_query("SELECT * FROM mata_pelajaran WHERE id='$_GET[id]'");
$dmapel = mysql_fetch_object($qmapel);
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=mapel&act=aksi">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Edit mata pelajaran</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="update"><i class="icon-ok"></i> Simpan</button>				
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="update_exit"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
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
                                    <td class="row-title"><span class="tips" title="ID Mata pelajaran" width="40%">Kode / ID </td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dmapel->id;?>">
                                        <input readonly value="<?php echo $dmapel->id_matapelajaran;?>" type="text" id="id" name="idmapel" style="width: 100%" required class='form-control'/>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama Mata Pelajaran">Nama Mata Pelajaran</td>
                                    <td>
                                        <input value="<?php echo $dmapel->nama;?>" type="text" name="nama" style="width: 100%"></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Nilai Kriteria Ketuntasan Minimal">Nilai KKM</td>
                                    <td>
                                        <input value="<?php echo $dmapel->kkm;?>" required type="text" name="kkm" size="5"></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Memilih guru pengajar">Guru Pengajar</td>
					<td>
                                            <select name="guru" id="select" style="width: 100%">
                                                <?php 
                                                $qguru = mysql_query("SELECT * FROM pengajar ORDER BY nama_lengkap ASC");
                                                while($dguru = mysql_fetch_array($qguru)) {
                                                    echo "<option value='".$dguru['id_pengajar']."' ";
                                                    echo $dguru['id_pengajar']==$dmapel->id_pengajar ? 'selected' : '';
                                                    echo ">".$dguru['nama_lengkap']."</option>";
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
                                                $qkelas = mysql_query("SELECT * FROM kelas WHERE aktif='Y' ORDER BY id_kelas ASC");
                                                while($dkelas = mysql_fetch_array($qkelas)){
                                                        $sel = multipleSelected($dmapel->id_kelas,$dkelas['id_kelas']);
                                                        echo "<option value='$dkelas[id_kelas]' $sel >$dkelas[nama]</option>";
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
				<textarea required id="editor" name="keterangan" rows="30" cols="90" style="opacity:0"></textarea>
			</div>					
		</div>
                        </tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>