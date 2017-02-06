<?php
if(isset($_POST['key_an'])) {
    $key = $_POST['key_an'];
    $alfa = array("","A","B","C","D","E","F","G");
    if($key=='') {
        echo "<tr><td colspan=2><center>Kunci jawaban belum dipilih..</center></td></tr>";
    }
    else {
        echo "<tr class='success'><td class='suceess'> Status</td><td>Jawaban yang dipilih adalah <b><span class='badge' style='background-color: #953b39;'>".$alfa[$key]."</span></b<</td></tr>";

    }
}
?>