<?php

    $pt=mysqli_query($konek, "SELECT *
    FROM pt 
    INNER JOIN user
    ON pt.USERNAME=user.USERNAME
    WHERE user.USERNAME='$USERNAME'");
    


?>
<div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                       <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='insert_sukses'){
                        ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Sukses!</strong> Penambahan data PT baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data PT baru gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data PT berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan data PT berhasil.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-20 column">
                         <div class="heading-profile">
                              <h2>Data PT</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                         
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data PT</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
                    <div class="col-md-6">
                        <div class="widget">
                              <div class="widget-title">
                                   <h3>Data PT</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <table class="table table-responsive table-bordered table-condensed table-hover table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Kode PT</th>
                                            <th>Nama PT</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                            
                                            while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $row['KD_PT'] ?></td>
                                            <td><?php echo $row['NAMA_PT'] ?></td>
                                            
                                            <td>
                                            <a href="#" data-toggle="modal" data-target=".pt"
                                                class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="#" data-toggle="modal" data-target=".hapus"
                                                class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>

                                            <?php
                                            echo "<td><a href='../developer/pt/pt.php?KD_PT=".$row['KD_PT']."' >Ubah</a></td>";
                                            echo "<td><a href='pt.php?KD_PT=".$row['KD_PT']."'>Hapus</a></td>";
                                            ?>
                                        </tr>
                                        <?php 
                                    }
                                     ?>
                                    </tbody>
                                </table>
                              </div>
                         </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="widget">
                              <div class="widget-title">
                                   <h3>Tambah PT</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <form action="../developer/lib/proses.php" method="post">
                              
                                <div class="form-group">
                                        <label for="USERNAME"></label>
                                        <input type="hidden" name="USERNAME" value="<?php echo $_SESSION['USERNAME']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="NAMA_PT">Nama PT</label>
                                        <input type="text" name="NAMA_PT" placeholder="Masukkan nama pt" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" name="tambah_pt">Tambah</button>
                                        <button type="reset" class="c-btn large red-bg">Batal</button>
                                    </div>
                                </form>
                                
                              </div>
                         </div>
                    </div>      
               </div>
          </div>
     </div><!-- Panel Content -->

<?php

     $pt1=mysqli_query($konek, "SELECT *
     FROM pt 
     INNER JOIN user
     ON pt.USERNAME=user.USERNAME
     WHERE pt.KD_PT='$KD_PT'");
    

$row1 = mysqli_fetch_assoc($pt1); // Ambil data dari hasil eksekusi $sql

?>

     <div class="modal fade pt" tabindex="-3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data PT</h4>
            </div>
            <div class="modal-body">
                <form action="../developer/lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-10 col-md-offset-1">

                <div class="form-group">
               
                    
                <label for="KD_PT">Kode PT</label>
                 <input type="text" name="KD_PT" class="form-control" value="<?php echo $row1['KD_PT']; ?>">

                    <label for="NAMA_PT">Nama PT</label>
                 <input type="text" name="NAMA_PT" class="form-control" value="<?php echo $row1['NAMA_PT']; ?>">

                        
                       
                    
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="update_pt">Update</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>

     <div class="modal fade hapus" tabindex="-3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data PT</h4>
            </div>
            <div class="modal-body">
                <form action="../developer/lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">Kode Kategori</label>
                            <input type="text" id="id" name="id" class="form-control hapus_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pt">Nama Pt</label>
                            <input type="text" id="pt" name="pt" class="form-control hapus_pt" readonly>
                        </div>
                        <p>Apakah Anda yakin akan menghapus kategori dengan data seperti di atas?</p>
                        <div role="alert" class="alert white">
                            <span><i class="ti-trash red-bg"></i></span><strong>Perhatian!</strong> Menghapus kategori juga akan menghapus data buku dengan kategori terkait!
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn medium blue-bg" name="hapus_pt">Hapus</button>
                        <button type="button" class="c-btn medium red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>            
            </div>
        </div>
     </div>