<?php
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $USERNAME=$_SESSION['USERNAME'];
    $pt=mysqli_query($konek, "SELECT user.KD_USER, user.USERNAME, profil.NAMA_LENGKAP, profil.JENIS_KELAMIN, profil.TGL_LAHIR, profil.FOTO, profil_detil.NAMA, profil_detil.NO_TELEPON, profil_detil.KD_PROFIL
    FROM user
    INNER JOIN profil
    ON user.KD_USER=profil.KD_USER
    INNER JOIN profil_detil
    ON profil.KD_PROFIL=profil_detil.KD_PROFIL
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
                              <h2>Data Marketing</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                         
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Marketing</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
                    <div class="col-md-6">
                        <div class="widget">
                              <div class="widget-title">
                                   <h3>Data Marketing</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <table class="table table-responsive table-bordered table-condensed table-hover table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Kode profil</th>
                                            <th>Nama Marketing</th>
                                            <th>Nomor telepon</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                            
                                            while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $row['KD_PROFIL'] ?></td>
                                            <td><?php echo $row['NAMA'] ?></td>
                                            <td><?php echo $row['NO_TELEPON'] ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target=".pt" data-id='<?php echo $row['KD_PT'] ?>' data-pt='<?php echo $row['NAMA_PT'] ?>' 
                                                class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="#" data-toggle="modal" data-target=".hapus" data-id='<?php echo $row['KD_PT'] ?>' data-pt='<?php echo $row['NAMA_PT'] ?>'
                                                class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
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
                                   <h3>Tambah Marketing</h3>
                                   <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                   </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                <form action="proses_tambah.php" method="post">
                                    <div class="form-group">
                                        <label for="NAMA">Nama Marketing</label>
                                        <input type="text" name="NAMA" placeholder="Masukkan nama marketing" class="form-control">
                                        <label for="NO_TELEPON">Nomor telepon</label>
                                        <input type="text" name="NO_TELEPON" placeholder="Masukkan nomor telepon" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" name="tambah_kat">Tambah</button>
                                        <button type="reset" class="c-btn large red-bg">Batal</button>
                                    </div>
                                </form>
                              </div>
                         </div>
                    </div>      
               </div>
          </div>
     </div><!-- Panel Content -->
   