<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=kelas&act=aksi">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Tambah kelas baru</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="sbaru"><i class="icon-ok"></i> Simpan Dan Tambah Baru</button>
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="skeluar"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
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
                                        <input onchange="cek_idkelas(this.value);" placeholder="Kode kelas (misalnya 7a, 8a dsb.)" type="text" id="id_kelas" name="id" style="width: 100%" required class='form-control'/>
                                        <p style="margin-top: 10px;"><small><span id="pesan_id_kelas"></span></small></p>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama Kelas">Nama Kelas</td>
                                    <td>
                                        <input onchange="cek_namakelas(this.value);"  type="text" placeholder="Nama kelas (misalnya VII A dsb.)" name="nama" style="width: 100%" id="nama_kelas">
                                        <p style="margin-top: 10px;"><small><span id="pesan_nama_kelas"></span></small></p>
                                    </td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Wali kelas">Wali Kelas</td>
					<td>
                                            <select name="wkelas" id="select" data-placeholder="Pilih wali kelas" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qguru = mysql_query("SELECT * FROM pengajar ORDER BY nama_lengkap ASC");
                                                while($dguru = mysql_fetch_array($qguru)) {
                                                    echo "<option value='".$dguru['id_pengajar']."'>".$dguru['nama_lengkap']."</option>";
                                                }
                                                ?>
                                            </select>
					</td>
				</tr>
                                <tr>
					<td class="row-title"><span class="tips" title="Ketua kelas">Ketua Kelas</td>
					<td>
                                            <select name="kkelas" id="select" data-placeholder="Pilih ketua kelas" style="width: 100%">
                                                <option value=""></option>
                                                <?php 
                                                $qsiswa = mysql_query("SELECT * FROM siswa ORDER BY nama_lengkap ASC");
                                                while($dsiswa = mysql_fetch_array($qsiswa)) {
                                                    echo "<option value='".$dsiswa['id_siswa']."'>".$dsiswa['nis']." - ".$dsiswa['nama_lengkap']."</option>";
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
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="Y" name="status" type="radio" checked class="invisible">
                                                    <input id="radio2" value="N" name="status" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
					</td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>

<script type="text/javascript">
	function cek_idkelas(idkelas){
        $('#pesan_id_kelas').html("sedang mengecek...");
        var id_kelas  = idkelas;
            if(id_kelas=='') {
                $("#pesan_id_kelas").html("<span style='color: red'><i class='icon-remove-sign'></i> Jangan kosong...</span>");
            } else {
                    $.ajax({
                     type:"POST",
                     url:"apps/app_kelas/controller/cekable.php",
                     data: "id_kelas=" + id_kelas,
                     success: function(response){
                            if(response==1){
                                    $('#id_kelas').val("").focus();
                                    $("#pesan_id_kelas").html("<span style='color: red'><i class='icon-remove-sign'></i> ID kelas <b>"+id_kelas+"</b> sudah ada. Coba yang lain !</span>");
                            }
                            else {
                                    $("#pesan_id_kelas").html("<span class='icon-ok'></span> "+id_kelas+" OK");
                       }
                    }
                    });
            }
        }
	function cek_namakelas(namakelas){
        $('#pesan_nama_kelas').html("sedang mengecek...");
        var nama_kelas  = namakelas;
		$.ajax({
		 type:"POST",
		 url:"apps/app_kelas/controller/cekable.php",
		 data: "nama=" + nama_kelas,
		 success: function(response){
			if(response==1){
				$('#nama_kelas').val("").focus();
				$("#pesan_nama_kelas").html("<span style='color: red'><i class='icon-remove-sign'></i> Nama kelas <b>"+nama_kelas+"</b> sudah ada. Coba yang lain !</span>");
			}
			else {
				$("#pesan_nama_kelas").html("<span class='icon-ok'></span> "+nama_kelas+" OK");
		   }
		}
		});
	}
</script>