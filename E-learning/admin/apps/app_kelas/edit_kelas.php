<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=kelas&act=aksi">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Edit kelas</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="update"><i class="icon-ok"></i> Simpan dan keluar</button>
				</button>	
				<a class="danger btn btn-default" href="?app=kelas" title="Batal"><i class="icon-remove-sign"></i> Batal</a>
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
$qkelas = mysql_query("SELECT * FROM kelas WHERE id='$_GET[id]'");
$dkelas = mysql_fetch_object($qkelas);
?>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data kelas</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="ID Kelas" width="40%">ID Kelas</td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $dkelas->id;?>">
                                        <input type="text"  readonly value="<?php echo $dkelas->id_kelas;?>" name="idkelas" style="width: 100%" required class='form-control'/>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama Kelas">Nama Kelas</td>
                                    <td>
                                        <input type="text" value="<?php echo $dkelas->nama;?>" name="nama" style="width: 100%" id="pass"></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Wali kelas">Wali Kelas</td>
					<td>
                                            <select name="wkelas" id="select" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qguru = mysql_query("SELECT * FROM pengajar ORDER BY nama_lengkap ASC");
                                                while($dguru = mysql_fetch_array($qguru)) {
                                                    echo "<option value='".$dguru['id_pengajar']."' ";
                                                    echo $dguru['id_pengajar']==$dkelas->id_pengajar ? 'selected' : '';
                                                    echo ">".$dguru['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Ketua kelas">Ketua Kelas</td>
					<td>
                                            <select name="kkelas" id="select" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qsiswa = mysql_query("SELECT * FROM siswa ORDER BY nama_lengkap ASC");
                                                while($dsiswa = mysql_fetch_array($qsiswa)) {
                                                    echo "<option value='".$dsiswa['id_siswa']."' ";
                                                    echo $dsiswa['id_siswa']==$dkelas->id_siswa ? 'selected' : '';
                                                    echo ">".$dsiswa['nis']." - ".$dsiswa['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                
			</table>			
		</div>  
	</div>
</div>
<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Status kelas</h5>
		</header>								
		<div>
			<table>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<?php 
                                        if($dkelas->aktif=='Y') {
                                        ?>
                                        <td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="Y" name="status" type="radio" checked class="invisible">
                                                    <input id="radio2" value="N" name="status" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
					</td>
                                        <?php 
                                        } else {
                                        ?>
                                        <td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="Y" name="status" type="radio"  class="invisible">
                                                    <input id="radio2" value="N" name="status" type="radio" checked class="invisible">
                                                    <label for="radio1" class="cb-enable "><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable selected"><span>Tidak </span></label>
					</td>
                                        <?php 
                                        }
                                        ?>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>

