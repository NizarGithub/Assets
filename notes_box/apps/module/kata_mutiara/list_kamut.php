<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    
    <!-------------menu panel------------------->
                            <div class="x_panel">
                               <div class="x_title">
                                <h2>Kata Mutiara</h2>
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
                       <a class="btn btn-sm btn-primary" href="?module=add_kamut"><i class="fa fa-plus"></i> Tambah Kata Mutiara</a>
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
                                                <th class="column-title" width="50%">Kata Mutiara </th>
                                                <th class="column-title" width="25%">Pengutip </th>
                                                <th class="column-title" width="15%">Kategori </th>
                                                <th class="column-title no-link last" width="10%"><span class="nobr">Aksi</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> ) <i class="fa fa-check"></i></a>
                                                </th>
                                            </tr>
                                        </thead>

                            <tbody>
                                <?php
                                       
                                        $data = $query->show_kamut();
                                        foreach ($data as $row){
                                            
                                echo"<tr class='even pointer'>
                                    <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                    <td class=' '>$row[kamut]</td>
                                    <td class=' '>$row[pengutip]</td>
                                    <td class=' '>$row[nama_k_kamut]</td>
                                    <td class=' last'>
                                    <a href='?module=edit_kamut&id=$row[id_kamut]' title='Edit' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></a>
                                    <a href='?module=kamut&act=hapus&id=$row[id_kamut]' title='Hapus'  class='btn btn-sm btn-danger'><i class='fa fa-remove' onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data ini ?')\"></i></a>
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
    $query->delete_kamut($id);
    $query->log_aktifitas($_SESSION[id_user],'Menghapus data kata mutiara',date('Y-m-d'),date('H:i:s'));
    echo "<script>window.location='?module=kamut';</script>";
}