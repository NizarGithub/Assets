<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$processed = (@$_GET['processed']);
if($processed=='true') {
?>
<h2 class="text-info"><i class="icon-envelope-alt"></i> Pesan masuk :: sudah diproses</h2>
<div class="row-fluid">
    <div class="span9">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li><a href="#tab1" data-toggle="tab">Semua pesan masuk</a></li>
                <li><a href="#tab2" data-toggle="tab">Belum diproses</a></li>
                <li class="active"><a href="#tab3" data-toggle="tab">Sudah diproses</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane " id="tab1">
                    <p>Daftar semua pesan yang masuk ke server serta mengecek pesan yang sudah atau belumnya pesan itu diproses.  Silahkan klik <a href="inbox.php5">disini</a> </p>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Daftar semua permintaan atau pesan yang masuk ke server yang belum diproses. Silahkan klik <a href="inbox.php5?processed=false">disini</a> </p>
                </div>
                <div class="tab-pane active" id="tab3">
                   <p>Daftar semua permintaan atau pesan yang masuk ke server yang sudah diproses.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
<div class="span3">
    <br><br>
<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group">
        <button class="btn">Pilih Tindakan</button>
        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="Hapus_inbox.php5?Type=Inbox_true"><i class="icon-trash"></i> Hapus yang sudah diproses</a></li>
        </ul>
    </div>
</div>
</div>
</div>
<br>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="15%">Nomor Pengirim</th>
        <th width="25%">Pesan Teks</th>
        <th width="20%">Waktu Pengiriman</th>
        <th width="10%">Tindakan</th>
    </tr>
    </thead>
    <tbody id="InboxTrue">
    </tbody>
</table>
<?php
} else if($processed=='false') { ?>
<h2 class="text-warning"><i class="icon-envelope-alt"></i> Pesan masuk :: belum diproses</h2>
<div class="row-fluid">
    <div class="span9">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li><a href="#tab1" data-toggle="tab">Semua pesan masuk</a></li>
                <li class="active""><a href="#tab2" data-toggle="tab">Belum diproses</a></li>
                <li><a href="#tab3" data-toggle="tab">Sudah diproses</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane " id="tab1">
                    <p>Daftar semua pesan yang masuk ke server serta mengecek pesan yang sudah atau belumnya pesan itu diproses. Silahkan klik <a href="inbox.php5">disini</a></p>
                </div>
                <div class="tab-pane active" id="tab2">
                    <p>Daftar semua permintaan atau pesan yang masuk ke server yang belum diproses. </p>
                </div>
                <div class="tab-pane" id="tab3">
                   <p>Daftar semua permintaan atau pesan yang masuk ke server yang sudah diproses. Silahkan klik <a href="inbox.php5?processed=true">disini</a> </p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
<div class="span3">
    <br><br>
<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group">
        <button class="btn">Pilih Tindakan</button>
        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="Hapus_inbox.php5?Type=Inbox_false"><i class="icon-trash"></i> Hapus yang belum diproses</a></li>
        </ul>
    </div>
</div>
</div>
</div>
<br>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="15%">Nomor Pengirim</th>
        <th width="25%">Pesan Teks</th>
        <th width="20%">Waktu Pengiriman</th>
        <th width="10%">Tindakan</th>
    </tr>
    </thead>
    <tbody id="InboxFalse">
    </tbody>
</table>
<?php } else { ?>
<h2 class="text-success"><i class="icon-envelope-alt"></i> Semua pesan/permintaan masuk </h2>
<div class="row-fluid">
    <div class="span9">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Semua pesan masuk</a></li>
                <li><a href="#tab2" data-toggle="tab">Belum diproses</a></li>
                <li><a href="#tab3" data-toggle="tab">Sudah diproses</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>Daftar semua pesan yang masuk ke server serta mengecek pesan yang sudah atau belumnya pesan itu diproses.</p>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Daftar semua permintaan atau pesan yang masuk ke server yang belum diproses. Silahkan klik <a href="inbox.php5?processed=false">disini</a> </p>
                </div>
                <div class="tab-pane" id="tab3">
                   <p>Daftar semua permintaan atau pesan yang masuk ke server yang sudah diproses. Silahkan klik <a href="inbox.php5?processed=true">disini</a> </p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
<div class="span3">
    <br><br>
<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group">
        <button class="btn">Pilih Tindakan</button>
        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="Hapus_inbox.php5?Type=Inbox_true"><i class="icon-trash"></i> Hapus yang sudah diproses</a></li>
            <li><a href="Hapus_inbox.php5?Type=Inbox_false"><i class="icon-trash"></i> Hapus yang belum diproses</a></li>
            <li class="divider"></li>
            <li><a href="Hapus_inbox.php5?Type=Inbox_all"><i class="icon-trash"></i> Hapus semua pesan</a></li>
        </ul>
    </div>
</div>
</div>
</div>
<br>
<table class="table table-condensed table-striped table-bordered">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="15%">Nomor Pengirim</th>
        <th width="25%">Pesan Teks</th>
        <th width="15%">Waktu Pengiriman</th>
        <th width="15%">Status Permintaan</th>
        <th width="12%">Tindakan</th>
    </tr>
    </thead>
    <tbody id="InboxAll">
    </tbody>
</table>
<?php } ?>
<div id="balasSms" class="modal hide fade formBalasSms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- tempat untuk menampilkan form SMS -->
    <div class="modal-body">

    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
        <a id="kirim-balas-sms" class="btn btn-success">Kirim</a>
    </div>
</div>