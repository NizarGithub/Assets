<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=soal&act=aksi_input_pilganda">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Tambah soal pilihan ganda</div>
			<div class="app_link">
				<button type="submit" class="btn btn-success" title="Simpan" value="Next" name="sbaru"><i class="icon-ok"></i> Simpan Dan Baru</button>				
				<button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="skeluar"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
				<a class="btn btn-default" href="index.php?app=soal&id_topik=<?php echo $_GET[id_topik];?>" title="Batal"><i class="icon-reply"></i> Kambali</a>
			</div>
		</div>			 
	</div>
<script type="text/javascript">
$(function() {	
	CKEDITOR.replace('editor');
});
</script>
<div class="box-left">
	<div class="box">								
		<header class="dark">
			<?php 
			$qna = mysql_query("SELECT * FROM quiz_pilganda  WHERE id_tq='$_GET[id_topik]'");
			$jna = mysql_num_rows($qna) + 1;
			?>
			<h5>Pertanyaan Nomor <?php echo $jna;?></h5>
		</header>	
		<input type="hidden" name="id_topik" value="<?php echo $_GET['id_topik'];?>">	
		<input type="hidden" name="id_soal" value="<?php echo auto_number('quiz_pilganda','id_quiz',3,'PG_');?>">				
		<div>
			<table>
				<tr>
                                    <div style="padding:10px 0 0; overflow: hidden;">
			<div class="load-editor">
				<textarea required id="editor" name="pertanyaan" style="opacity:0"></textarea>
			</div>					
		</div>
                        </tr>
			</table>	
		</div>  
	</div> 
</div>  
<div class="box-right">
	<div class="box">								
		<header class="dark">
			<h5>Jawaban Pilihan Ganda</h5>
		</header>								
		<div>
			<table class="table">				
				<tr>
				<td>Jumlah Pilihan</td>
				<td>
                   <select required name='jumlah_jawaban' onchange="jumlah_jawaban_soal(this.value);">
                   <option value=""> PILIH JUMLAH PILIHAN </option>
                   <option value='2'> 2 Pilihan (A,B)</option>
                   <option value='3'> 3 Pilihan (A,B,C)</option>
                   <option value='4'> 4 Pilihan (A,B,C,D)</option>
                   <option value='5'>5 Pilihan (A,B,C,D,E)</option>
                   </select>
                 </<td>
				</tr>
				<tbody id="jawaban">
				</tbody>
				<tfoot id="kunci">
				</tfoot>
				
			</table>			
		</div>  
	</div>
</div>
</form>
<script type="text/javascript">
function jumlah_jawaban_soal() {
    var form_data = {
        jumlah : $('select[name=jumlah_jawaban]').val()
    };
        $.ajax({
           url:"apps/app_soal/controller/jumlah_jawaban.php",
           data: form_data,
           type:"post",
           dataType:"html",
           timeout: 10000,
           success: function(response) {
               $("#jawaban").html(response);
           }
        });
    }
function select_key() {
    var form_data = {
        key_an : $('select[name=key]').val()
    };
        $.ajax({
           url:"apps/app_soal/controller/pilih_jawaban.php",
           data: form_data,
           type:"post",
           dataType:"html",
           timeout: 10000,
           success: function(response) {
               $("#kunci").html(response);
           }
        });
    }
</script>