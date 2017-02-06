<script src="atribute/post/validasi_komentar.js"></script>

                <div class="post">
                <?php
                $total_comment    = $query->jumlah_komentar($row['id_artikel']);
                if($total_comment > 0) {
                    echo " <h3>$total_comment Komentar</h3>";
                    $data_comment = $query->komentar($row['id_artikel']);
                    foreach ($data_comment as $comments) {
                    $tgl = tgl_indo($comments[tgl_komentar]);

                        echo " <div class='post-grids'>
                                <div class='col-md-2 post-right'>
                                    <a href='single.html'><img class='img-responsive thumb-img' src='assets/img/user_comment.png' alt=''></a>
                                </div>
                                <div class='col-md-9 post-right'>
                                    <h4>$comments[nama_komentar]</h4>
                                    <p class='comments'><i>$tgl - $comments[jam_komentar] WIB</i></p>
                                    <p class='text'>".sensor($comments['isi_komentar'])."</p>
                                </div>
                                <div class='clearfix'> </div>
                            </div>";
                    }
                  }
                  ?>
                            <!--leave-->
                            <div class="leave">
                                <h4>Berikan Komentar</h4>
                                <div id="contactwarning"></div>
                                <div id="contactajax"></div>
                                <div id="hide-form">
                                <form action="atribute/post/komentar.php" method="post" name="ajaxcontactform" id="ajaxcontactform" class="commentform">
                                    <input id="id_berita" type="hidden" name="id_berita" value="<?php echo $_GET['id_artikel'];?>">
                                    <p class="comment-form-author-name"><label for="author">Nama</label>
                                        <input id="nama" name="nama" type="text" class="form-control" size="30" aria-required="true">
                                    </p>
                                    <p class="comment-form-email">
                                        <label class="email">Email</label>
                                        <input id="email" type="text" class="form-control" size="30" aria-required="true">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label class="comment">Isi Komentar</label>
                                        <textarea name="konten" class="form-control" id="konten" ></textarea>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p class="form-submit">
                                        <input name="send" type="submit" id="submit" value="Kirim">
                                    </p>
                                    <div class="clearfix"></div>
                                </form>
                                </div>

                            </div>
                        </div>