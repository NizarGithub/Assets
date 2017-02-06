<script src="assets/files/js/files.upload.min.js"></script>
<form enctype="multipart/form-data" method="post" action="">
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
<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Rincian informasi Wali Kelas</div>
			<div class="app_link">
			<a class="danger btn btn-default" href="?app=kelas" title="Batal"><i class="icon-remove-sign"></i> Kembali</a>
			</div>
		</div>			 
	</div>
                    <?php
                   
	$in_id_guru = $_GET[id];
	define('_ID_GURU_',$in_id_guru);
	$in_qguru = mysql_query("SELECT * FROM pengajar WHERE id_pengajar='"._ID_GURU_."' AND BLOKIR='N'");
	$dguru = mysql_fetch_object($in_qguru);
        
         echo"
<div class=' box-left'>
	<div class='box'>								
		<header class='dark'>
			<h5>Data Informasi Wali Kelas</h5>
		</header>								
		<div>
			<table>
				<tr>
                                    <td class='row-title'><span class='tips' title='NIP' width='40%'>NIP</td>
                                    <td>
                                        $dguru->nip
                                    </td>
				</tr>
				<tr>
                                    <td class='row-title'><span class='tips' title='Nama guru'>Nama Lengkap</td>
                                    <td>
                                        $dguru->nama_lengkap</td>
				</tr>
                                <tr>
                                    <td class='row-title'><span class='tips' title='Nama guru'>Alamat Lengkap</td>
                                    <td>
                                       $dguru->alamat</td>
				</tr>
                                <tr>
                                    <td class='row-title'><span class='tips' title='Tempat lahir'>Tempat Tgl Lahir</td>
                                    <td>
                                        $dguru->tempat_lahir, ".tgl_indo($dguru->tgl_lahir)."</td>
				</tr>
                               
                                <tr>
                                    <td class='row-title'><span class='tips' title='Jenis kelamin'>Jenis kelamin</td>
                                    <td>";
                                         
                                        if($dguru->jenis_kelamin=='L') { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="L"> Laki-laki
                                        </label>
                                        <?php 
                                        } else { ?>
                                        <label style="cursor: pointer ">
                                            <input type="radio" name="jk" checked class="form-control" value="P"> Perempuan
                                        </label>
                                        <?php } ?>
<?php
                                   echo "</td>
                                    <tr>
                                        <td class='row-title'><span class='tips' title='Nomor Telepon'>No. Telepon</td>
                                        <td>
                                             $dguru->no_telp</td>
                                    </tr>
                                    <tr>
                                        <td class='row-title'><span class='tips' title='Agama'>Agama</td>
                                        <td>
                                            $dguru->agama
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='row-title'><span class='tips' title='Jabatan'>Jabatan</td>
                                        <td>
                                            $dguru->jabatan</td>
                                    </tr>
				</tr>
			</table>			
		</div>  
	</div>
</div>
<div class='col-lg-4 box-right'>
	<div class='box'>								
		<header class='dark'>
			<h5>Data Akun Wali Kelas</h5>
		</header>								
		<div>
			<table>
                                <tr>
                                    <td class='row-title'><span class='tips' title='Unggah foto profil'>Foto Profil</td>
                                    <td>
                                        <div class='control-group'>
                <div class='controls'><br>
        
        <div class='fileinput fileinput-new' data-provides='fileinput'>
                    <div class='fileinput-new thumbnail' style='max-width: 175px; max-height: 175px;'>";
          
            if($dguru->foto=='') {
                echo "<img src='assets/Images/contoh.png' alt='...'>";
            }
            else {
               echo "<img src='../Foto/pengajar/$dguru->foto' alt='...'>"; 
            }
            
            ?>
                 
                 </div>
                </div>
                </div>
        </div>
                                    </td>
				</tr>
                                
                               
                                <tr>
                                    <td class="row-title"><span class="tips" required title="Email">Email</td>
                                    <td>
                                        <?php echo $dguru->email;?></td>
				</tr>
                                <tr>
                                    <td class="row-title"><span class="tips" title="Website, blog atau link media sosial">Website</td>
                                    <td>
                                        <?php echo $dguru->website;?></td>
				</tr>
				<tr>
					<td class="row-title"><span class="tips" title="Status">Status</td>
					<td style="padding: 5px 10px;">
						<p class="switch">
                                                    <?php 
                                                    if($dguru->blokir=='N') { ?>
                                                    <label for="radio1" class="cb-enable selected "><span>Aktif</span></label>
                                                    <?php } else { ?>
                                                    <label for="radio2" class="cb-disable selected"><span>Tidak </span></label>
                                                    <?php } ?>
                                        </td>
				</tr>
			</table>	
		</div>  
	</div> 
</div>  
                 
                    
				

</form>
