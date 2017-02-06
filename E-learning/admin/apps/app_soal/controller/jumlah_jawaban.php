<?php
$jumlah = $_POST['jumlah'];
if(isset($_POST['jumlah'])) {
    echo "<input name='jumlah_pilganda' type='hidden' value='$jumlah'>";
    $alfa = array("","A","B","C","D","E","F","G");
    for($i=1;$i<=$jumlah;$i++) {
        echo "<tr><td><input type=\"hidden\" name='key_an[]' value='$i'> Jawaban <b><span class='badge' style='background-color: #3a87ad;'>".$alfa[$i]."</span></b></td><td><textarea required='' placeholder='Masukan jawaban ..' name='jawaban[]' class='form-control' style='width:100%'></textarea></td></tr>";
    }
}

echo "<tr><td>Kunci Jawaban</td><td>";
echo "<select name='key' onchange='select_key(this.value);' required>";
echo "<option value=''>PILIH KUNCI JAWABAN</option>";
for($k=1;$k<=$jumlah;$k++) {
    $h = $k - 1;
    echo "<option value='$k'>$alfa[$k]</option>";
}
echo "</select>";
echo "</td></tr>";
?>