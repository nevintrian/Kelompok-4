<?php
    if(!defined('MyConst')){
        die('Akses langsung tidak diperbolehkan');
    }
    $USERNAME=$_SESSION['USERNAME'];
    $pt=mysqli_query($konek, "SELECT user.KD_USER, user.USERNAME, profil.KD_PROFIL, profil.NAMA_LENGKAP, profil.JENIS_KELAMIN, profil.TGL_LAHIR, profil.FOTO
    FROM user
    INNER JOIN profil
    ON user.KD_USER=profil.KD_USER
    WHERE user.USERNAME='$USERNAME'");
?>
<div class="panel-content">
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
                                <form action="lib/proses.php?USERNAME=<?php echo $USERNAME; ?>" method="post">
                                    <div class="form-group">
                                    <?php 
                                            
                                            while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                     
                                        <label for="KD_PROFIL">Kode Profil</label>
                                        <input type="text" name="KD_PROFIL" class="form-control" value="<?php echo $row['KD_PROFIL']; ?>">
                                      
                                    
                                        <label for="NAMA_LENGKAP">Nama lengkap</label>
                                        <input type="text" name="NAMA_LENGKAP" class="form-control" value="<?php echo $row['NAMA_LENGKAP']; ?>">
                                    

                                   
                                        <label for="TGL_LAHIR">tanggal lahir</label>
                                        <input type="text" name="TGL_LAHIR" class="form-control" value="<?php echo $row['TGL_LAHIR']; ?>">
                                    

                                    
                                        <label for="JENIS_KELAMIN">jenis kelamin</label>
                                        <input type="text" name="JENIS_KELAMIN" class="form-control" value="<?php echo $row['JENIS_KELAMIN']; ?>">
                                    
                                    
                                    
                                        <label for="FOTO">foto</label>
                                        <input type="file" name="FOTO" class="form-control" value="<?php echo $row['FOTO']; ?>">
                                        <img src="../../images/<?php echo $row['FOTO']; ?>" height="150px" width="150px" class="rounded-circle z-depth-1-half avatar-pic">
                                       
                                    <?php 
                                    }
                                     ?>                               
                                    </div>
                                            
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" name="tambah_kat">Simpan</button>
                                        </div>
                                </form>
                              </div>
                         </div>
                    </div>      

               </div>
          </div>
     </div><!-- Panel Content -->
                                            
                                          