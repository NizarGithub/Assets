<!-- .navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
			<header class="navbar-header">
				<a data-placement="bottom" class="side-bar changeSidebarPos">
					<i class="icon-reorder"></i>
				</a>
				<a data-placement="bottom" class="side-bar right userSideBar">
					<i class="icon-ellipsis-horizontal"></i>
				</a>
				<span class="navbar-logo" href="index.php"></span>
			</header>
			
			<div class="site-title">
				<a href="./" data-placement="right" data-original-title="Informasi Aplikasi" data-toggle="tooltip" >
                    <span class="icon-desktop"></span> Sistem Ujian  <?php echo _SEKOLAH_ ;?>
                </a>
			</div>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
	<!-- .nav -->
	<ul class="nav navbar">
            <li class='dropdown profile'>
			<a href="logout.php" class="dropdown-toggle">
                            <i class="icon-power-off"></i> Keluar			</a>
			<div class="popover fade bottom in" style=""><div class="arrow" style=""></div></div>
			<ul class="dropdown-menu">
				<li><a href="?app=profil&act=edit"><i class="icon-pencil"></i> Edit Profil</a></li>
				<li class="divider"></li>
				<li><form method="post" action="">
				<a href="logout.php" name="fiyo_logout" id="user-logout" title="Click to logout"><i class="icon-signout"></i> Log Out</a></form></li>
			</ul>
		</li>
                <li class='dropdown profile'>
			<a href="?app=profil" class="dropdown-toggle">
                            Selamat datang <span class="badge" style="background-color: #3a87ad;">&nbsp;<?php echo _nama_lengkap_; ?>&nbsp;</span> <span class='gravatar' data-gravatar-hash="20ca4fecf01640735e5d3b3ad3308061"></span>			</a>
			<div class="popover fade bottom in" style=""><div class="arrow" style=""></div></div>
		</li>
	</ul>
</div>			
		</nav>
	<!-- /.navbar -->