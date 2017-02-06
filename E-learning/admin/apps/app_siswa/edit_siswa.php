<?php
function combotgl($awal, $akhir, $var, $terpilih){
  echo "<select name=$var>";
  for ($i=$awal; $i<=$akhir; $i++){
    $lebar=strlen($i);
    switch($lebar){
      case 1:
      {
        $g="0".$i;
        break;     
      }
      case 2:
      {
        $g=$i;
        break;     
      }      
    }  
    if ($i==$terpilih)
      echo "<option value=$g selected>$i</option>";
    else
      echo "<option value=$g>$i</option>";
  }
  echo "</select> ";
}

function combobln($awal, $akhir, $var, $terpilih){
  echo "<select name=$var>";
  for ($bln=$awal; $bln<=$akhir; $bln++){
    $lebar=strlen($bln);
    switch($lebar){
      case 1:
      {
        $b="0".$bln;
        break;     
      }
      case 2:
      {
        $b=$bln;
        break;     
      }      
    }  
      if ($bln==$terpilih)
         echo "<option value=$b selected>$b</option>";
      else
        echo "<option value=$b>$b</option>";
  }
  echo "</select> ";
}

function combothn($awal, $akhir, $var){
  echo "<select name=$var>";
  for ($i=$awal; $i<=$akhir; $i++){
      echo "<option value=$i>$i</option>";
  }
      echo "</select> ";
}

function combonamabln($awal, $akhir, $var, $terpilih){
  $nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                      "Juni", "Juli", "Agustus", "September", 
                      "Oktober", "November", "Desember");
  echo "<select name=$var>";
  for ($bln=$awal; $bln<=$akhir; $bln++){
      if ($bln==$terpilih)
         echo "<option value=$bln selected>$nama_bln[$bln]</option>";
      else
        echo "<option value=$bln>$nama_bln[$bln]</option>";
  }
  echo "</select> ";
}

$id = $_GET['id'];
$qsiswa = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id'");
$dsiswa = mysql_fetch_object($qsiswa);
?>
<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=siswa&act=aksi">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Edit data siswa</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" name="update"><i class="icon-ok"></i> Simpan</button>	
                                <button type="submit" class="btn btn-metis-2" title="Simpan dan keluar"name="update_exit"><i class="icon-ok"></i> Simpan dan keluar</button>	
                                
				<a class="danger btn btn-default" href="?app=siswa" title="Batal"><i class="icon-remove-sign"></i> Batal</a>
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
	
});
</script>
<script type="text/javascript">
	function cek_uname(uname){
        $('#pesan').html("sedang mengecek...");	
        var username  = uname; 
            if(username=='') {
                $("#pesan").html("<span style='color: red'><i class='icon-remove-sign'></i> Jangan kosong...</span>");	
            } else {
                    $.ajax({
                     type:"POST",
                     url:"apps/app_siswa/controller/cekable.php",    
                     data: "username=" + username,
                     success: function(response){                 
                            if(response==1){
                                    $('#uname').val("").focus();
                                    $("#pesan").html("<span style='color: red'><i class='icon-remove-sign'></i> Username <b>"+username+"</b> sudah ada. Coba yang lain !</span>");	
                            } 
                            else {
                                    $("#pesan").html("<span class='icon-ok'></span> "+username+" OK");   
                       }
                    }
                    }); 				
            }
        }
	function cek_email(email){
        $('#pesanemail').html("sedang mengecek...");	
        var demail  = email; 
		$.ajax({
		 type:"POST",
		 url:"apps/app_siswa/controller/cekable.php",    
		 data: "email=" + demail,
		 success: function(response){                 
			if(response==1){
				$('#email').val("").focus();
				$("#pesanemail").html("<span style='color: red'><i class='icon-remove-sign'></i> <b>"+demail+"</b> sudah terdaftar. Coba yang lain !</span>");	
			} 
			else {
				$("#pesanemail").html("<span class='icon-ok'></span> "+demail+" OK");   
		   }
		}
		}); 				
	}
</script>
<div class=" box-left">
	<div class="box">								
		<header class="dark">
			<h5>Data Informasi siswa</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="NIS" width="40%">NIS</td>
                                    <td>
                                        <input type="hidden" name="id" value="<?php echo $id;?>">
                                        <input value="<?php echo $dsiswa->nis;?>" type="text" id="nis" name="nis" style="width: 100%" required class='form-control'/>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama siswa">Nama Lengkap</td>
                                    <td>
                                        <input value="<?php echo $dsiswa->nama_lengkap;?>" type="text" name="nama" style="width: 100%" required></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Alamat siswa">Alamat Lengkap</td>
                                    <td>
                                        <textarea name="alamat" style="width: 100%" required ><?php echo $dsiswa->alamat;?></textarea></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Tempat lahir">Tempat Lahir</td>
                                    <td>
                                        <input type="text" value="<?php echo $dsiswa->tempat_lahir;?>" name="tlahir" style="width: 100%"></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Pilih tanggal - bulan - masukan tahun">Tanggal Lahir</td>
                                    <td>
                                        <?php
                                        $tanggal = $dguru->tgl_lahir;
                                        // 2000-09-09
                                        $tgl_Skrg = substr($tanggal, 9, 2);
                                        if(strlen($tgl_skrg) < 2) {
                                            $htgl = "0".$tgl_skrg;
                                            }
                                            else {
                                            $htgl = $tgl_skrg;
                                            }
                                        $bln_skrg = substr($tanggal, 5, 2);
                                        $thn_skrg = substr($tanggal, 0, 4);
						
                                        combotgl(1,31,'tgl',$tgl_skrg);
                                        combonamabln(1,12,'bln',$bln_skrg);
                                        ?>
                                        <input type="text" value="<?php echo $thn_skrg;?>" name="thn" min="4" maxlength="4" size="9" placeholder="Contoh 1990">
                                        <p style="margin-top: 10px">Pilih tanggal kemudian bulan dan masukan tahun</p>
                                    </td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Jenis kelamin">Jenis kelamin</td>
                                    <td>
                                        <?php 
                                        if($dsiswa->jenis_kelamin=='L') { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="L"> Laki-laki
                                        </label>
                                        &nbsp;&nbsp;&nbsp;
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" class="form-control" value="P"> Perempuan
                                        </label>
                                        <?php 
                                        } else { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" class="form-control" value="L"> Laki-laki
                                        </label>
                                        &nbsp;&nbsp;&nbsp;
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="P"> Perempuan
                                        </label>
                                        <?php } ?>
                                    
                                    </td>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Nomor Telepon">No. Telepon</td>
                                        <td>
                                            <input value="<?php echo $dsiswa->no_telp;?>" type="text" name="no_telp" style="width: 100%"></td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Tahun masuk">Tahun masuk</td>
                                        <td>
                                            <input value="<?php echo $dsiswa->th_masuk;?>" type="text" name="th_masuk" style="width: 100%"></td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Agama">Agama</td>
                                        <td>
                                            <select name="agama" style="width: 100%">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Lainnya">Lainnya</option>
                                                
                                                
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Kelas">Kelas</td>
                                        <td>
                                            <select name="kelas" style="width: 100%">
                                                <?php 
                                                $qkelas = mysql_query("SELECT * FROM kelas ORDER BY id_kelas");
                                                while($dkelas = mysql_fetch_object($qkelas)) {
                                                echo "<option value='$dkelas->id_kelas'>$dkelas->nama</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-title"><span class="tips" title="Jabatan atau status di kelas">Jabatan</td>
                                        <td>
                                            <select name="jabatan" style="width: 100%">
                                                <option value="1">Siswa</option>
                                                <option value="2">Ketua Kelas</option>
                                                <option value="3">Bendahara</option>
                                            </select>
                                        </td>
                                    </tr>
                                    
				</tr>
			</table>			
		</div>  
	</div>
    <div class="box">								
		<header class="dark">
			<h5>Data Informasi Orang Tua</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama ayah" width="40%">Nama ayah</td>
                                    <td>
                                        <input value="<?php echo $dsiswa->nama_ayah;?>" type="text" name="ayah" style="width: 100%" class='form-control'/>
                                    </td>
				</tr>
				<tr>
                                    <td class="row-title"><span class="tips" title="Nama ibu">Nama Ibu</td>
                                    <td>
                                        <input value="<?php echo $dsiswa->nama_ibu;?>" type="text" name="ibu" style="width: 100%"></td>
				</tr>
			</table>			
		</div>  
	</div>
</div>

<div class="col-lg-6 box-right">
	<div class="box">								
		<header class="dark">
			<h5>Data Akun siswa</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Unggah foto profil">Foto Profil</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='max-width: 250px; max-height: 250px;'>
            <?php
            if($dsiswa->foto=='') {
                echo "<img src='assets/Images/contoh.png' alt='...'>";
            }
            else {
               echo "<img src='../Foto/siswa/$dsiswa->foto' alt='...'>"; 
            }
            
            ?>
                 </div><div class='fileinput-preview fileinput-exists thumbnail' style='max-width: 250px; max-height: 250px;'></div>
                <div>
                <span class='btn btn-default btn-file'><span class='fileinput-new'>Pilih foto</span> <span class='fileinput-exists'>Pilih foto</span> 
                    <input type='file' name='fupload' style="cursor: pointer" class="form-control">
                </span> 
                <a href='#' class='btn btn-default fileinput-exists' data-dismiss='fileinput'>Hapus</a> 
                </div>
                </div>
                </div>
        </div>
                                    </td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Username">Username</td>
                                    <td>
                                        <input type="text" value="<?php echo $dsiswa->username_login; ?>" name="uname" style="width: 100%" required></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Password siswa">Password</td>
                                    <td>
                                        <input type="password" name="fpass" style="width: 100%" id="pass"><p style="margin-top: 10px;">
                                        	<small>Jika tidak ingin diubah dikosongkan saja.</small>
                                        </p></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Email">Email</td>
                                    <td>
                                        <input value="<?php echo $dsiswa->email;?>" type="text" onchange="cek_email(this.value);" name="email" style="width: 100%" id="email">
                                        	<p style="margin-top: 10px"><small><span id="pesanemail"></span></small></p>
                                        </td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Pilih Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <input id="radio1" value="N" name="blokir" type="radio" checked class="invisible">
                                                    <input id="radio2" value="Y" name="blokir" type="radio" class="invisible">
                                                    <label for="radio1" class="cb-enable selected"><span>Aktif</span></label>
                                                    <label for="radio2" class="cb-disable"><span>Tidak </span></label>
					</td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
</form>