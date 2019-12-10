<div class="main-content-area">
               <div class="row">
               <div class="streaming-table">
                    <a href="#" data-toggle="modal" data-target=".tambah" class="icon-btn pulse-grow"><i class="fa fa-plus-square blue-bg"></i> Tambah Data Cluster</a>
                  </div>
              </div>
               <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="buku" class='table table-responsive table-responsive table-striped table-hover'>
                                    <thead>
                                        <tr>

                                          <th>Isi Diskusi</th>
                                          <th>Operasi</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                          
                                          $query = mysqli_query($konek,  "SELECT *
                               FROM cluster 
                               INNER JOIN perum
                               ON cluster.KD_PERUM=perum.KD_PERUM
                               INNER JOIN pt
                               ON perum.KD_PT=pt.KD_PT
                               INNER JOIN user
                               ON pt.USERNAME=user.USERNAME
                               WHERE user.USERNAME='$USERNAME'");
         
                          while ($data = mysqli_fetch_assoc($query)) 
                                    {
                                        ?>
                                        
                                        <tr>
                                            
                                        <td><?php echo $data['KD_CLUSTER']; ?></td>
                                            <td><?php echo $data['NAMA_CLUSTER']; ?></td>
                                            <td><?php echo $data['NAMA_PERUM']; ?></td>
                                          
                                            <td><?php echo $data['TIPE']; ?></td>
                                            <td><?php echo $data['LUAS_TANAH']; ?></td>
                                            <td><?php echo $data['STOK']; ?></td>
                                            <td><?php echo $data['HARGA']; ?></td>
                                            <td><?php echo $data['FASILITAS']; ?></td>
                                       

                                                <td>
                                                <a data-fancybox="gallery" href="pages/cluster/images/<?php echo $data['GAMBAR']; ?>">
                                                    <img src="pages/cluster/images/<?php echo $data['GAMBAR']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:50px;">
                                                </a>
                                            </td>
                                            <td>
                                                <a data-fancybox="gallery" href="pages/cluster/images/<?php echo $data['GAMBAR1']; ?>">
                                                    <img src="pages/cluster/images/<?php echo $data['GAMBAR1']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:50px;">
                                                </a>
                                            </td>
                                            <td>
                                                <a data-fancybox="gallery" href="pages/cluster/images/<?php echo $data['GAMBAR2']; ?>">
                                                    <img src="pages/cluster/images/<?php echo $data['GAMBAR2']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:50px;">
                                                </a>
                                            </td>
                                            <td>
                                            <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $data['KD_CLUSTER']; ?>"class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>
                                            <a href="#"  data-toggle="modal" data-target="#myModal1<?php echo $data['KD_CLUSTER']; ?>" class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                   
                                
                              </div>
                         </div>
                    </div> 