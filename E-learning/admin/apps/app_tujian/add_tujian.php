<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=tujian&act=aksi">
    <div id="app_header">
            <div class="warp_app_header">
                <div class="app_title">Tambah ujian baru</div>
                <div class="app_link">
                        <button type="submit" class="btn btn-success" title="Simpan" value="Next" name="sbaru"><i class="icon-ok"></i> Simpan Dan Tambah Baru</button>
                        <button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="update_exit" name="skeluar"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
                        <a class="danger btn btn-default" onclick="self.history.back();" title="Batal"><i class="icon-remove-sign"></i> Batal</a>
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
<?php

?>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data ujian</h5>
		</header>								
		<div>
			<table>
				<tr>
                    <td class="row-title"><span class="tips" title="Judul ujian" width="40%">Judul / Topik</td>
                    <td>
                    <input type="hidden" name="id_matapelajaran" value="<?php echo $_GET[id_mapel];?>"/>
                    <input type="text" id="judul" name="judul" placeholder="Judul ujian" style="width: 100%" required class='form-control'/>
                    </td>
				</tr>
				<tr>
                    <td class="row-title"><span class="tips" title="Pilih Kelas">Pilih Kelas</td>
                    <td>
                    	<select name="kelas[]" class="chosen-select w-max" data-placeholder="Multiple kelas" style="min-width:150px; width:100%;" multiple>
                            <option value=""></option>
                            <?php
                            $id_mapel = $_GET['id_mapel'];
                            $qmapel   = mysql_query("SELECT * FROM mata_pelajaran WHERE id_matapelajaran='$id_mapel'");
                            $dmapel   = mysql_fetch_array($qmapel);
                            $id_kelas = explode(",",$dmapel['id_kelas']);
                            foreach ($id_kelas as $dkelas) {
                                $qkelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$dkelas'");
                                $nkelas = mysql_fetch_array($qkelas);
                                echo "<option value='$dkelas'>$nkelas[nama]</option>";
                            }
                            ?>		
                        </select>
                    	</td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Lama waktu pengerjaan dalam menit">Lama Waktu</td>
					<td>
                                            <div class="input-prepend">
                                            <input id="prependedInput" size="5" required type="text" placeholder="menit" name="waktu" class="span2">
                                            <span class="add-on">&nbsp;menit</span>
                                            </div>
                                        </td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Deskripsi atau info ujian">Deskripsi / Info</td>
					<td>
						<textarea placeholder="Masukan info atau keterangan ujian" class="form-control" name="info" style="width: 100%" rows="3"></textarea>
					</td>
				</tr>
                                
			</table>			
		</div>  
	</div>
</div>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Status Terbit</h5>
		</header>								
		<div>
			<table>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                            <input id="radio1" value="Y" name="terbit" type="radio" checked class="invisible">
                            <input id="radio2" value="N" name="terbit" type="radio" class="invisible">
                            <label for="radio1" class="cb-enable selected"><span>Terbit</span></label>
                            <label for="radio2" class="cb-disable"><span>Tidak </span></label>
					</td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>