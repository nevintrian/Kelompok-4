<?php
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $USERNAME=$_SESSION['USERNAME'];
    $pt=mysqli_query($konek, "SELECT * FROM user WHERE USERNAME='$USERNAME'");
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
                            <strong>Insert Sukses!</strong> Penambahan data kategori baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data kategori baru gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data kategori berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan data kategori berhasil.
                        </div>
                        <?php } } ?>
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                        <div class="col-md-20 column">
                         <div class="heading-profile">
                              <h2>Data Profil</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                             </div>
                             <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Profil</li>
          </ul>
          
                    <div class="col-md-10">
                               </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                  <form action="../admin/lib/proses.php/" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <?php 
                                            
                                        while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                       
                                       
                                        <img src="../admin/images/<?php echo $row['FOTO']; ?>" height="100px" width="100px" >
                                        <br>

                                        <input type="file" name="FOTO" class="form-control" value="<?php echo $row['FOTO']; ?>">
                                       
                                        <label for="USERNAME">username</label>
                                        <input type="text" name="USERNAME" class="form-control" value="<?php echo $row['USERNAME']; ?>">
                                        <label for="EMAIL">email</label>
                                        <input type="text" name="EMAIL" class="form-control" value="<?php echo $row['EMAIL']; ?>">
                                        <label for="PASSWORD">password</label>
                                        <input type="password" name="PASSWORD" class="form-control" value="<?php echo $row['PASSWORD']; ?>">
                                    

                                           
                                        <label for="NAMA_LENGKAP">Nama lengkap</label>
                                        <input type="text" name="NAMA_LENGKAP" class="form-control" value="<?php echo $row['NAMA_LENGKAP']; ?>">
                                    

                                   
                                        <label for="TGL_LAHIR">tanggal lahir</label>
                                        <input type="date" name="TGL_LAHIR" class="form-control" value="<?php echo $row['TGL_LAHIR']; ?>">
                                    

                                    
                                        <label for="JENIS_KELAMIN">jenis kelamin</label>
                                        <input type="text" name="JENIS_KELAMIN" class="form-control" value="<?php echo $row['JENIS_KELAMIN']; ?>">
                                    
                                       
                                    
   
                                    <?php 
                                    }
                                     ?>                               
                                    </div>
                                            
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" name="update_profil">Simpan</button>
                                        </div>
                                </form>
                              </div>
                         </div>
                    </div>      

               </div>
          </div>
     </div><!-- Panel Content -->
                                            
                                          