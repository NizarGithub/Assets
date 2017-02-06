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
#codemirror { height: 500px;}
.breakpoint { color: #3498db; }
    </style>
<div class="row">
    <div class="span16">
        <div class="blockoff-right">
            <?php
                echo "<div class='alert alert-success'>";
                echo "<h3><i class='icon-file'></i> &nbsp;File Auto Reply SMS Gateaway</h3>";
                echo "<p>Silahkan pilih baris yang akan diedit..</p>";
                echo "</div>";
                $filename = 'gateaway/auto_reply_sms.php';
                $fh = fopen($filename, "r") or die("Could not open file!");
                $data = fread($fh, filesize($filename)) or die("Could not read file!");
                fclose($fh);
                echo "<form enctype='multipart/form-data' action='admin.php?mod_apps=sms_gateaway&media_app=gateaway_editor&action=aksi_gateaway' method='post'>";
                echo "<textarea name='konten_teks' id='codemirror' style='height: 500px' class='span16'>".$data."</textarea>";
                echo '<footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Simpan Perubahan</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn" onclick="back();" value="CANCEL">Batal</button>
                    </footer>';
                echo "</form>";
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
    mode: "css",
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