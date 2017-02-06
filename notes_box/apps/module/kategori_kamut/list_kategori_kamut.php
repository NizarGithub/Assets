<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    
    <!-------------menu panel------------------->
                            <div class="x_panel">
                               <div class="x_title">
                                <h2>Kategori Kata Mutiara</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
      
                                
    <!--------------button action--------------->
              <div class="col-md-4 pull-left">
                  <div class="compose-btn">
                    <a class="btn btn-sm btn-danger bulk-actions" href="#"><i class="fa fa-remove"></i> Hapus terpilih</a>   
                   </div> 
             </div>
                              
    
    <!---------------button export-------------->
                                <div class="col-md-3 pull-left">
                                   <div class="compose-btn pull-right">
                                    <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn  btn-sm btn-default tooltips"><i class="fa fa-print"></i> </button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Pdf" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-pdf-o"></i></button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Excel" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-excel-o"></i></button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Word" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-word-o"></i></button>
                                 </div>
                                </div>
                                
                                
                                
                                
    <!------------------content table------------>
                              <div class="x_content">
                              <div class="col-md-7 pull-left">
                              <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">Nama Kategori </th>
                                                <th class="column-title">Keterangan </th>
                                                <th class="column-title no-link last"><span class="nobr">Aksi</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> ) <i class="fa fa-check"></i></a>
                                                </th>
                                            </tr>
                                        </thead>

                            <tbody>
                                <?php
                                       
                                        $data = $query->show_kategori_kamut();
                                        foreach ($data as $row){
                                            
                                echo"<tr class='even pointer'>
                                    <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                    <td class=' '>$row[nama_k_kamut]</td>
                                    <td class=' '>$row[ket_k_kamut]</td>
                                    <td class=' last'>
                                    <a title='Edit' href='?module=kategori_kamut&act=edit&id=$row[id_k_kamut]' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></a>
                                    <a href='?module=kategori_kamut&act=hapus&id=$row[id_k_kamut]' title='Hapus'  class='btn btn-sm btn-danger'><i class='fa fa-remove' onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data ini ?')\"></i></a>
                                    </td>
                                </tr>";
                                }
                                ?>
                                
                                            
                            </tbody>
                            </table>
                            </div>
 
                                  
                                  
  <!------------------Form Edit------------>
  
  <?php
 if($_GET['act']=='edit'){ 
// Mendapatkan id kategori
$data = $query->getone_kategori_kamut($_GET['id']);
  ?>
                       <div class="col-md-5">  
                             <div class="product_price">
                                 <h4 class="pull-right" style="color:#26b99a;"><i class='fa fa-info'></i> edit</h4><br>   
                                 <form method="POST" action="?module=aksi_kategori_kamut" class="form-horizontal form-label-left">       
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="hidden" name="id" value="<?php echo $data[id_k_kamut]; ?>">
                                        <input type="text" name="a" class="form-control" value="<?php echo $data[nama_k_kamut]; ?>" placeholder="Nama Kategori">
                                    </div><br><br>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="b" rows="3" placeholder='Keterangan'><?php echo $data[ket_k_kamut]; ?></textarea>
                                    </div>
                                     

                                      <br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="edit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                                                <button name="cancel" class="btn btn-sm btn-danger"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
                                            </div>
                                        </div>
                                    </form>
                         </div>
                         </div>
 <?php 
 }else{
  ?>
  
   <!------------------Form Tambah------------>
                        <div class="col-md-5 ">              
                           <div class="product_price">
                                 <h4 class="pull-right" style="color:#26b99a;"><i class='fa fa-info'></i> tambah</h4><br>  
                              <form method="POST" action="?module=aksi_kategori_kamut" class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" name="a" class="form-control" placeholder="Nama Kategori">
                                    </div><br><br>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="b" rows="3" placeholder='Keterangan'></textarea>
                                    </div>
                                     

                                      <br><div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="save" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> &nbsp;Simpan</button>
                                                <button name="cancel" class="btn btn-sm btn-danger"><i class="fa fa-mail-reply"></i>  &nbsp; Batal</button>
                                            </div>
                                        </div>

                                    </form>
                         </div>
                         </div>
  <?php
 }
  ?>
  
  
         </div>
         </div>
         </div>
                        <br />
                        <br />
                        <br />

         </div>

<?php
// Proses Hapus
if($_GET['act']=='hapus'){
    $id     = $_GET['id'];
    $query->delete_kategori_kamut($id);
    $query->log_aktifitas($_SESSION[id_user],'Menghapus data kategori kata mutiara',date('Y-m-d'),date('H:i:s'));
    echo "<script>window.location='?module=kategori_kamut';</script>";
}