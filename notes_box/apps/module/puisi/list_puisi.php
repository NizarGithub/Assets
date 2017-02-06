<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    
    <!-------------menu panel------------------->
                            <div class="x_panel">
                               <div class="x_title">
                                <h2>Puisi</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
      
                                
    <!--------------button action--------------->
              <div class="col-md-8 pull-left">
                  <div class="compose-btn">
                       <a class="btn btn-sm btn-primary" href="?module=add_puisi"><i class="fa fa-plus"></i> Tambah puisi</a>
                       <a style="padding-top:10px;" class="btn btn-sm btn-danger bulk-actions" href="#"><i class="fa fa-remove"></i> Hapus terpilih</a>   
                   </div> 
             </div>
                              
    
    <!---------------button export-------------->
                                <div class="col-md-3 pull-right">
                                   <div class="compose-btn pull-right">
                                    <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn  btn-sm btn-default tooltips"><i class="fa fa-print"></i> </button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Pdf" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-pdf-o"></i></button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Excel" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-excel-o"></i></button>
                                    <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Word" class="btn btn-sm btn-default tooltips"><i class="fa fa-file-word-o"></i></button>
                                 </div>
                                </div>
                                
                                
                                
                                
    <!------------------content table------------>
                              <div class="x_content">
                              <table class="dataTables-example table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title" width="30%">Judul </th>
                                                <th class="column-title">Kategori </th>
                                                <th class="column-title">Penulis </th>
                                                <th class="column-title">Ditulis </th>
                                                <th class="column-title no-link last" width="15%"><span class="nobr">Aksi</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> ) <i class="fa fa-check"></i></a>
                                                </th>
                                            </tr>
                                        </thead>

                            <tbody>
                                <?php
                                       
                                        $data = $query->show_puisi();
                                        foreach ($data as $row){
                                            
                                echo"<tr class='even pointer'>
                                    <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                    <td class=' '>$row[judul]</td>
                                    <td class=' '>$row[nama_k_puisi]</td>
                                    <td class=' '>$row[pencipta]</td>
                                    <td class=' '>".tgl_indo($row[tgl_ditulis])."</td>
                                    <td class=' last'>
                                    <a href='?module=view_puisi&id=$row[id_puisi]' title='Lihat' class='btn btn-sm btn-success'><i class='fa fa-eye'></i></a>
                                    <a href='?module=edit_puisi&id=$row[id_puisi]' title='Edit' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></a>
                                    <a href='?module=puisi&act=hapus&id=$row[id_puisi]' title='Hapus'  class='btn btn-sm btn-danger'><i class='fa fa-remove' onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data ini ?')\"></i></a>
                                    </td>
                                </tr>";
                                }
                                ?>
                                
                                            
                            </tbody>
                            </table>
                                  
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
    $query->delete_puisi($id);
    $query->log_aktifitas($_SESSION[id_user],'Menghapus data puisi',date('Y-m-d'),date('H:i:s'));
    echo "<script>window.location='?module=puisi';</script>";
}