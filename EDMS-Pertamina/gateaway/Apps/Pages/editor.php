<?php
/*
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<style type="text/css">
.CodeMirror { height: 800px; }
.CodeMirror-matchingtag { background: #4d4d4d; }
.breakpoints { width: .8em; }
.breakpoint { color: #3498db; }
    </style>
<h1 class="text-info">Editor PHP</h1>
<hr>
<div class="row-fluid">
    <div class="span3">
            <ul style="list-style: none">
            <?php
            $folderpath = 'gateaway';
            if ($handle = opendir($folderpath)) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        $filename = substr($file, 0);
                        $pecah = explode(".", $filename);
                        $ekstensi = $pecah[1];
                        if ($ekstensi!='' AND $ekstensi!='jpg' AND $filename!='index.html'){
                                echo "<li><a href='editor.php5?file=$filename'><i class='icon-file '></i>&nbsp;&nbsp;".str_replace(".php","",$filename)." <span class='pull-right'>".format_size(filesize('gateaway/'.$filename))."</span></a></li>";
                        }else{ }
                    }
                }
            }
            closedir($handle);
            ?>
            </ul>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="blockoff-right">
            <?php
            if(!empty($_GET['file'])) {
                echo "<div class='alert alert-success'>";
                echo "<h3><i class='icon-file'></i> &nbsp;File PHP : ".$_GET['file']."</h3>";
                echo "<p>Silahkan pilih baris yang akan di edit..</p>";
                echo "</div>";
                $filename = 'gateaway/'.validasi($_GET['file'], 'xss');
                $fh = fopen($filename, "r") or die("Could not open file!");
                $data = fread($fh, filesize($filename)) or die("Could not read file!");
                $data = str_replace("textarea","teksarea",$data);
                fclose($fh);
                echo "<form enctype='multipart/form-data' action='' method='post'>";
                echo "<label><input type='text' readonly name='filename' value='".validasi($_GET['file'], 'xss')."'></label>";
                echo "<textarea name='konten_teks' id='codemirror' class='span11'>".$data."</textarea>";
                echo '<footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Simpan Perubahan</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn" onclick="back();" value="CANCEL">Batal</button>
                    </footer>';
                echo "</form>";
            } else {
                echo "<div class='alert alert-warning'>";
                echo "<h3>Pilih PHP</h3>";
                echo "<p>Silahkan pilih file PHP yang akan di edit..</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<?php
require_once 'plugins.php';
?>
<script>
var editor = CodeMirror.fromTextArea(document.getElementById("codemirror"), {
	lineNumbers: true,
    mode: "php",
	extraKeys: {
		"Ctrl-J": "toMatchingTag",
		"F11": function(cm) {
			cm.setOption("fullScreen", !cm.getOption("fullScreen"));
		},
		"Esc": function(cm) {
			if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
		},
		"Ctrl-Space": "autocomplete"
	},
	gutters: ["CodeMirror-linenumbers", "breakpoints"],
	styleActiveLine: true,
	autoCloseBrackets: true,
	autoCloseTags: true,
    theme: "github"
});

editor.on("gutterClick", function(cm, n) {
  var info = cm.lineInfo(n);
  cm.setGutterMarker(n, "breakpoints", info.gutterMarkers ? null : makeMarker());
});

function makeMarker() {
  var marker = document.createElement("div");
  marker.style.color = "#ff0000";
  marker.innerHTML = "●";
  return marker;
}
</script>
<?php
if(isset($_POST['submit_edit'])){
    $file = validasi($_POST['filename'],'xss');
    $filename = 'gateaway/'.$file;
    if (file_exists("$filename")){
        $data = $_POST['konten_teks'];
        $data = str_replace("teksarea", "textarea", $data);
        $newdata = $data;
        if ($newdata != ''){
            $fw = fopen($filename, 'w') or die('Could not open file!');
            $fb = fwrite($fw,$newdata) or die('Could not write to file');
            fclose($fw);
        }
        header('location: editor.php5?file='.$file);
    }
    else {
        echo "<center><h2>File tidak ditemukan</h2></center>";
    }
}