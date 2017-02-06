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
    <div class="span8">
        <div class="blockoff-left">
            <legend class="lead">
                Pilih File JavaScript Umum
            </legend>
            <ul>
            <?php
            $folderpath = APP_JS;
                    if ($handle = opendir($folderpath)) {
                            while (false !== ($file = readdir($handle))) {
                                    if ($file != "." && $file != "..") {
                                            $filename = substr($file, 0);
                                            $pecah = explode(".", $filename);
                                            $ekstensi = $pecah[1];
                                            if ($ekstensi!='' AND $ekstensi!='jpg' AND $filename!='index.html'){
                                                    echo "<li><a href='admin.php?mod_apps=themes&media_app=JS&file=$filename'><i class='icon-file '></i>&nbsp;&nbsp; ".str_replace(".js","",$filename)." <span class='pull-right'>".format_size(filesize(APP_JS.$filename))."</span></a></li>";
                                            }else{ }
                                    }
                            }
                    }
                    closedir($handle);
            ?>
            </ul>
        </div>
    </div>
    <div class="span8">
    <div class="blockoff-left">
            <legend class="lead">
                File JS BootStrap
            </legend>
            <ul>
            <?php
            $folderpath = APP_JS.'bootstrap/';
                    if ($handle = opendir($folderpath)) {
                            while (false !== ($file = readdir($handle))) {
                                    if ($file != "." && $file != "..") {
                                            $filename = substr($file, 0);
                                            $pecah = explode(".", $filename);
                                            $ekstensi = $pecah[1];
                                            if ($ekstensi!='' AND $ekstensi!='jpg' AND $filename!='index.html'){
                                                    echo "<li><a href='admin.php?mod_apps=themes&media_app=JS&sub_dir=BS&file=$filename'><i class='icon-file '></i>&nbsp;&nbsp; ".str_replace(".js","",$filename)." <span class='pull-right'>".format_size(filesize(APP_JS.'bootstrap/'.$filename))."</span></a></li>";
                                            }else{ }
                                    }
                            }
                    }
                    closedir($handle);
            ?>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span16">
        <div class="blockoff-right">
            <?php
            if(!empty($_GET['file']) && $_GET['sub_dir']!='BS') {
                echo "<div class='alert alert-success'>";
                echo "<h3><i class='icon-file'></i> &nbsp;File JS : ".$_GET['file']."</h3>";
                echo "<p>Silahkan pilih baris yang akan diedit..</p>";
                echo "</div>";
                $filename = APP_JS.validasi($_GET['file'], 'xss');
                $fh = fopen($filename, "r") or die("Could not open file!");
                $data = fread($fh, filesize($filename)) or die("Could not read file!");
                $data = str_replace("textarea","teksarea",$data);
                fclose($fh);
                echo "<form enctype='multipart/form-data' action='admin.php?mod_apps=themes&media_app=JS&action=aksi_js' method='post'>";
                echo "<label><input type='text' readonly name='filename' value='".validasi($_GET['file'], 'xss')."'></label>";
                echo "<textarea name='konten_teks' id='codemirror' class='span11'>".$data."</textarea>";
                echo '<footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Simpan Perubahan</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn" onclick="back();" value="CANCEL">Batal</button>
                    </footer>';
                echo "</form>";
            } 
            else if(!empty($_GET['file']) && $_GET['sub_dir']=='BS') {
                echo "<div class='alert alert-success'>";
                echo "<h3><i class='icon-file'></i> &nbsp;File JS : ".$_GET['file']."</h3>";
                echo "<p>Silahkan pilih baris yang akan diedit..</p>";
                echo "</div>";
                $filename = APP_JS.'bootstrap/'.validasi($_GET['file'], 'xss');
                $fh = fopen($filename, "r") or die("Could not open file!");
                $data = fread($fh, filesize($filename)) or die("Could not read file!");
                fclose($fh);
                echo "<form enctype='multipart/form-data' action='admin.php?mod_apps=themes&media_app=JS&action=aksi_js' method='post'>";
                echo "<label><input type='text' readonly name='filename' value='".validasi($_GET['file'], 'xss')."'></label>";
                echo "<textarea name='konten_teks' id='codemirror' class='span11'>".$data."</textarea>";
                echo '<footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit_bs" value="CONFIRM">Simpan Perubahan</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn" onclick="back();" value="CANCEL">Batal</button>
                    </footer>';
                echo "</form>";
            }
            else {
                echo "<div class='alert alert-warning'>";
                echo "<h3>Pilih JS</h3>";
                echo "<p>Silahkan pilih file JS yang akan di edit..</p>";
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
    mode: "javascript",
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