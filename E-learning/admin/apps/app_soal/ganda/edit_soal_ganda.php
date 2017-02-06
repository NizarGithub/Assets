<?php
$id_topik = $_GET['id_topik'];
$id_soal = $_GET['id_soal'];
$qsoal_pg = mysql_query("SELECT * FROM quiz_pilganda WHERE id_quiz='".$id_soal."'");
$dsoal_pg = mysql_fetch_object($qsoal_pg);
$qjawaban = mysql_query("SELECT * FROM jawaban_pilganda WHERE id_quiz='$dsoal_pg->id_quiz'");
$jumlah = mysql_num_rows($qjawaban);

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?app=soal&act=update_pilganda">
	<div id="app_header">
		<div class="warp_app_header">
			<div class="app_title">Edit soal pilihan ganda</div>
			<div class="app_link">
                            <button type="submit" class="btn btn-success" title="Simpan" value="Next" name="uhere"><i class="icon-ok"></i> Simpan</button>				
                            <button type="submit" class="btn btn-metis-2" title="Simpan dan keluar" value="Next" name="uout"><i class="icon-ok-sign"></i>  Simpan dan keluar</button>
                            <a class="btn btn-default" href="index.php?app=soal&act=daftar_soal_ganda&id_topik=<?php echo $_GET[id_topik];?>" title="Batal"><i class="icon-reply"></i> Kambali</a>
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
			<h5>Pertanyaan</h5>
		</header>	
            <input type="hidden" name="id_topik" value="<?php echo $_GET['id_topik'];?>">	
            <input type="hidden" name="id_soal" value="<?php echo $dsoal_pg->id_quiz;?>">				
		<div>
			<table>
				<tr>
                                    <div style="padding:10px 0 0; overflow: hidden;">
			<div class="load-editor">
				<textarea required id="editor" name="pertanyaan" style="opacity:0"><?php echo $dsoal_pg->pertanyaan;?></textarea>
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
                    <td class="row-title">Kunci Jawaban</td>
                    <td><p>Jawaban</p></td>
                </tr>
                <tbody id="jawaban">
                    <?php
                    $alfa = array("","A","B","C","D","E","F","G");
                    $no = 1;
                    while($djawaban = mysql_fetch_object($qjawaban)) {
                        if($djawaban->status=='B') {
                            $checked = "checked";
                        }
                        else {
                            $checked = "";
                        }
                        echo "<tr>";
                        echo "<td><label><input name='key' $checked value='$djawaban->id_jawaban' type='radio'>  Jawaban $alfa[$no]</label></td>";
                        echo "<input type='hidden' name='id_jawaban[]'  value='$djawaban->id_jawaban'>";
                        echo "<td><textarea name='jawaban[]' class='form-control' style='width: 100%'>".$djawaban->jawaban."</textarea></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
                <tfoot id="kunci">
                </tfoot>
            </table>			
        </div>  
    </div>
</div>
</form>
<script type="text/javascript">
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