<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').animate({scrollTop:70}, 500);
	});
});
</script>
<style type="text/css">
.CodeMirror { height: 800px; }
.CodeMirror-matchingtag { background: #4d4d4d; }
.breakpoints { width: .8em; }
.breakpoint { color: #3498db; }
    </style>
<div class="row">
    <div class="span5">
        <div class="blockoff-left">
            <legend class="lead">
                Pilih File PHP
            </legend>
            <ul>
            <?php
            $folderpath = APP_PAGES.'pweb';
            if ($handle = opendir($folderpath)) {
                    while (false !== ($file = readdir($handle))) {
                            if ($file != "." && $file != "..") {
                                    $filename = substr($file, 0);
                                    $pecah = explode(".", $filename);
                                    $ekstensi = $pecah[1];
                                    if ($ekstensi!='' AND $ekstensi!='jpg' AND $filename!='index.html'){
                                            echo "<li><a href='admin.php?mod_apps=themes&media_app=PHP&file=$filename'><i class='icon-file '></i>&nbsp;&nbsp;".str_replace(".php","",$filename)." <span class='pull-right'>".format_size(filesize(APP_PAGES.'pweb/'.$filename))."</span></a></li>";
                                    }else{ }
                            }
                    }
            }
            closedir($handle);
            ?>
            </ul>
        </div>
    </div>
    <div class="span11">
        <div class="blockoff-right">
            <?php
            if(!empty($_GET['file'])) {
                echo "<div class='alert alert-success'>";
                echo "<h3><i class='icon-file'></i> &nbsp;File PHP : ".$_GET['file']."</h3>";
                echo "<p>Silahkan pilih baris yang akan di edit..</p>";
                echo "</div>";
                $filename = APP_PAGES.'pweb/'.validasi($_GET['file'], 'xss');
                $fh = fopen($filename, "r") or die("Could not open file!");
                $data = fread($fh, filesize($filename)) or die("Could not read file!");
                fclose($fh);
                echo "<form enctype='multipart/form-data' action='admin.php?mod_apps=themes&media_app=PHP&action=aksi_php' method='post'>";
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