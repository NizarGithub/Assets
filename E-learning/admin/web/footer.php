				<div class="line-bottom">
					<div class="crumbs"> 
						<span class="right "><a href="http://www.ibeesnay.org/" target="_blank"><i class=" icon-globe"></i>IBeESNay</a> <span style="color:#ccc; margin: 2px;">&nbsp;&nbsp;&nbsp;</span> 
						<a href="" target="_blank"><i class="icon-book"></i>Bantuan Manual</a> <span style="color:#ccc; margin: 2px;">&nbsp;&nbsp;&nbsp;</span> 
						
						Versi : <span class="version-val"><b>1.1.3.5</b></span>						
                        </span>Elapsed Time : <span id="load-time">
                            <?php
                            $start_time = microtime(TRUE);
                            define('_START_TIME_', $start_time /1000000000 );

                            $end_time = microtime(TRUE);
                            echo substr($end_time - _START_TIME,0 ,6) ;
                            ?> detik
                        </span>
					</div>
				</div>
            </div>
		<!-- end .inner -->
        </div>
        <!-- end .outer -->
     </div>
   <!-- end #content -->
</div> 
<div class="modal fade" id="mods" style="display:none">
  <div class="modal-dialog modal-sm modal-error">
    <div class="modal-content">
      <div class="modal-header"><h4 class="modal-title">Oops!!!</h4>
      </div>
      <div class="modal-body">
       <div class="modal-info" style="position: relative;"><p>Sorry, failed to open page or link.<br/>Check your link or internet connection!</p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true" style="display:none">
  <div class="modal-dialog modal-sm">
    <div class="modal-content modal-question">
      <div class="modal-header"><h4 class="modal-title">Konfirmasi Hapus</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p class="question">Yakin ingin menghapus item yang dipilih?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button><button type="button" class="btn btn-danger btn-grad" id="confirm" name="delete">Hapus</button>	
      </div>
    </div>
  </div>
</div><!-- /#wrap -->
<link rel="stylesheet" href="assets/files/css/files.upload.min.css"/>
<script src="assets/js/loader.js"></script>
<script src="assets/js/main.js"></script>	
<script src="assets/js/datatables.js"></script>
<script src="assets/js/highcharts.js"></script>
<script src="../plugins/plg_ckeditor/ckeditor.js"></script>	