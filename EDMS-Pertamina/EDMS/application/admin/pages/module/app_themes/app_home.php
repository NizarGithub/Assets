<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div class="row">
    <div class="span10">
        <div class="col-md-6">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <br>
                <i style="font-size: 29px;" class="icon-large icon-folder-open"></i>
                    <h3><?php echo format_size(folder_size('assets'));?></h3>
                <div class="panel-footer back-footer-green">
                   Total ukuran folder assets
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="span6">
        <div class="box">
        <div class="box-header">
            <i class="icon-bookmark"></i>
            <h5>Folder Aplikasi</h5>
            <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-coll">
                <i class="icon-reorder"></i>
             </button>
        </div>
            <div class="box-coll">
        <div class="box-content bg-info">
            <div class="btn-group-box">
                <ul style="list-style: none">
<?php
$dir_assets = ".";
$handle=opendir($dir_assets);
$projectContents = '';
while ($file = readdir($handle))
{
	if (is_dir($file) && !in_array($file,$projectsListIgnore))
	{
            if($file=='.' || $file=='..') {
                $projectContents .= '';
            } else {
		$projectContents .= '<li><a href="admin.php?mod_apps=themes&folder='.$file.'"><i class="icon-folder-open"></i>&nbsp;'.$file.'<span class="pull-right">'.format_size(folder_size($file)).'</span></a></li>';
            }
        }
}
closedir($handle);
echo $projectContents;
?>
                </ul>
                </div>
        </div>
            </div>
    </div>
    </div>
</div>