<!-- #menu -->
<!-- #menu -->
<ul id="menu" class="collapse top affix content">
<?php
if(_LEVEL_=='admin') {
?>
<li class="panel "><a href="index.php?token=<?php echo md5("home");?>"><i class="icon-home" style=" "></i> Beranda</a></li>
<li class="panel <?php echo $mapel;?>">
    <a href="?app=mapel&token=<?php echo md5("mapel");?>">
        <i class="icon-book" style=""></i> Mata Pelajaran
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel <?php echo $kelas;?>">
    <a href="?app=kelas&token=<?php echo md5("kelas");?>">
        <i class="icon-weibo" style=""></i> Manage Kelas
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel <?php echo $guru;?>">
    <a href="?app=guru&token=<?php echo md5("guru");?>">
        <i class="icon-user" style=""></i> Guru Pengajar
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel <?php echo $siswa;?>">
    <a href="?app=siswa&token=<?php echo md5("siswa");?>">
        <i class="icon-user" style=""></i> Manage Siswa
        <span class="pull-right">
        </span>
    </a>
</li>

<li class="panel <?php echo $admin;?>">
    <a href="?app=admin&token=<?php echo md5("admin");?>">
        <i class="icon-signin" style=""></i> Manage admin
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel <?php echo $pengaturan;?>">
    <a href="?app=pengaturan">
        <i class="icon-wrench" style=""></i> Pengaturan
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel">
    <a href="system/download.php?act=backup&token=<?php echo md5("admin");?>">
        <i class="icon-download" style=""></i> Backup
        <span class="pull-right">
        </span>
    </a>
</li>
<!-- /#menu -->
<?php 
} else { ?>
<li class="panel "><a href="index.php?token=<?php echo md5("home");?>"><i class="icon-home" style=" "></i> Beranda</a></li>
<li class="panel <?php echo $mapel;?>">
    <a href="?app=mapel&token=<?php echo md5("mapel");?>">
        <i class="icon-folder-open" style=""></i> Mata Pelajaran
        <span class="pull-right">
        </span>
    </a>
</li>
<li class="panel <?php echo $ujian;?>">
    <a href="?app=tujian">
        <i class="icon-list-alt" style=""></i> Manage Ujian
        <span class="pull-right">
        </span>
    </a>
</li>
<?php 
}
?>
</ul>
<script language="javascript" type="text/javascript">
$(function() {	
	$('#left #menu a[href]').click(function(e) {
            $('#left #menu').find('li').removeClass('active');
            $(this).parents('li').addClass('active');
	});
	$('#menu li.active a').removeClass('collapsed');
	$('#menu li.active ul').addClass('in');
	$('#menu li.active li.active').addClass('active');
});
</script>