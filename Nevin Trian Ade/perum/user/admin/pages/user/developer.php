

<body>
  <?php
  include 'lib/koneksi.php';
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
                    </div>
                    <div class="col-md-20 column">
                         <div class="heading-profile">
                              <h2>Data Developer</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                         
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Developer</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
               <div class="streaming-table">
                    <a href="#" data-toggle="modal" data-target=".tambah" class="icon-btn pulse-grow"><i class="fa fa-plus-square blue-bg"></i> Tambah Data Developer</a>
                  </div>
              </div>
               <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="buku" class='table table-responsive table-responsive table-striped table-hover'>
                                    <thead>
                                        <tr>
                                            
                                        <th>username</th>
                                          <th>email</th>
                                          <th>password</th>
                                          <th>nama lengkap</th>
                                          <th>tanggal lahir</th>
                                          <th>jenis kelamin</th>
                                          <th>foto</th>
                                          <th>Operasi</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                          
                                             
                               $query = mysqli_query($konek, "SELECT *
                               FROM user 
                               WHERE user.STATUS='developer'");
         
                          while ($data = mysqli_fetch_assoc($query)) 
                                    {
                                        ?>
                                        
                                        <tr>
                                            
                                        <td><?php echo $data['USERNAME']; ?></td>
                                            <td><?php echo $data['EMAIL']; ?></td>
                                            <td><?php echo $data['PASSWORD']; ?></td>
                                            <td><?php echo $data['NAMA_LENGKAP']; ?></td>
                                            <td><?php echo $data['TGL_LAHIR']; ?></td>
                                            <td><?php echo $data['JENIS_KELAMIN']; ?></td>

                                                <td>
                                                <a data-fancybox="gallery" href="pages/user/images/<?php echo $data['FOTO']; ?>">
                                                    <img src="pages/user/images/<?php echo $data['FOTO']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:50px;">
                                                </a>
                                            </td>
                                            <td>
                                            <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $data['USERNAME']; ?>"class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>
                                            <a href="#"  data-toggle="modal" data-target="#myModal1<?php echo $data['USERNAME']; ?>" class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                   
                                
                              </div>
                         </div>
                    </div>   
                    
     
     <div class="modal fade" tabindex="-3" id="myModal<?php echo $data['USERNAME']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Developer</h4>
            </div>
            <div class="modal-body">
            <form role="form" action="pages/user/editdev.php" method="get">
                        <?php
                        $USERNAME = $data['USERNAME']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM user WHERE USERNAME='$USERNAME'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="USERNAME" value="<?php echo $row['USERNAME']; ?>">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="EMAIL" class="form-control" value="<?php echo $row['EMAIL']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>password</label>
                          <input type="text" name="PASSWORD" class="form-control" value="<?php echo $row['PASSWORD']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="NAMA_LENGKAP" class="form-control" value="<?php echo $row['NAMA_LENGKAP']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="text" name="TGL_LAHIR" class="form-control" value="<?php echo $row['TGL_LAHIR']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="JENIS_KELAMIN" class="form-control" value="<?php echo $row['JENIS_KELAMIN']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Foto</label>
                          <input type="file" name="FOTO" class="form-control" value="<?php echo $row['FOTO']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>

     <div class="modal fade" tabindex="-3" id="myModal1<?php echo $data['USERNAME']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data Kategori</h4>
            </div>
            <div class="modal-body">
            <form role="form" action="pages/user/deldev.php" method="get">
            <?php
                        $USERNAME = $data['USERNAME']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM user WHERE USERNAME='$USERNAME'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="USERNAME" value="<?php echo $row['USERNAME']; ?>">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="EMAIL" class="form-control" value="<?php echo $row['EMAIL']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>password</label>
                          <input type="text" name="PASSWORD" class="form-control" value="<?php echo $row['PASSWORD']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="NAMA_LENGKAP" class="form-control" value="<?php echo $row['NAMA_LENGKAP']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="text" name="TGL_LAHIR" class="form-control" value="<?php echo $row['TGL_LAHIR']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="JENIS_KELAMIN" class="form-control" value="<?php echo $row['JENIS_KELAMIN']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Delete</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>

           
            <?php               
          } 
          ?>
        </tbody>
      </table>   
      <div class="modal fade tambah" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Developer</h4>
            </div>
            <div class="modal-body">
            <form role="form" action="pages/user/tamdev.php" method="post">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="form-group">
                                        <label for="USERNAME">Username</label>
                                        <input type="text" name="USERNAME" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="EMAIL">Email</label>
                                        <input type="text" name="EMAIL" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="PASSWORD">Password</label>
                                        <input type="text" name="PASSWORD" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="NAMA_LENGKAP">Nama lengkap</label>
                                        <input type="text" name="NAMA_LENGKAP" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="TGL_LAHIR">Tanggal lahir</label>
                                        <input type="text" name="TGL_LAHIR" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="JENIS_KELAMIN">Jenis Kelamin</label>
                                        <input type="text" name="JENIS_KELAMIN" placeholder="Masukkan judul kategori baru" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                              </div>
                         </div>
                    </div>      
               </div>
          </div>
     </div><!-- Panel Content -->       
  </div>
      </body>

</html>
      
