

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
                            <strong>Insert Sukses!</strong> Penambahan data report baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data report baru gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data report berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan data report berhasil.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-20 column">
                         <div class="heading-profile">
                              <h2>Data Report</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                         
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Report</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
              
              </div>
               <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="komentar" class='table table-responsive table-responsive table-striped table-hover'>
                                    <thead>
                                        <tr>
                                        <th>Kode Report</th>
                                          <th>Username</th>
                                          <th>Status</th>
                                          <th>Isi Report</th>
                                          <th>Nama Perumahan</th>
                                          <th>Nama Cluster</th>
                                          <th>Tanggal Report</th>
                                          <th>Hapus Report</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php 
                                          
                                             
                                          $query = mysqli_query($konek, "SELECT *
                                          FROM report
                                          INNER JOIN cluster
                                          ON report.KD_CLUSTER=cluster.KD_CLUSTER
                                          INNER JOIN perum
                                          ON cluster.KD_PERUM=perum.KD_PERUM
                                          INNER JOIN user
                                          ON user.USERNAME=report.USERNAME
                                          WHERE user.USERNAME='$USERNAME'");
         
                          while ($data = mysqli_fetch_assoc($query)) 
                                    {
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $data['KD_REP']; ?></td>
                                        <td><?php echo $data['USERNAME']; ?></td>
                                            <td><?php echo $data['STATUS']; ?></td>
                                            <td>
                                                <?php
                                                    $text = $data['ISI_REP'];
                                                    $strip = strip_tags(stripcslashes($text), '<a>');
                                                    // echo $strip;
                                                ?>
                                                <div role="alert" class="alert color skyblue-bg">
                                                    <?php
                                                        echo substr($strip, 0, 80);
                                                        if(strlen(trim($strip))>80) echo " [...]";
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?php echo $data['NAMA_PERUM']; ?></td>
                                            <td><?php echo $data['NAMA_CLUSTER']; ?></td>
                                            <td><?php echo $data['TGLWAKTU_REP']; ?></td>
                                            <td>
                                            <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $data['KD_REP']; ?>"class="c-btn small blue-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>
                                            <a href="#"  data-toggle="modal" data-target="#myModal1<?php echo $data['KD_REP']; ?>" class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                   
                                
                              </div>
                         </div>
                    </div>   
                    
     
   
                    <div class="modal fade" tabindex="-3" id="myModal<?php echo $data['KD_REP']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Report</h4>
            </div>
            <div class="modal-body">
            <form role="form" action="pages/report/editrep.php" method="get">
            <?php
                        $KD_REP = $data['KD_REP']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM report
                        INNER JOIN user
                        ON report.USERNAME=user.USERNAME
                        INNER JOIN cluster
                        ON report.KD_CLUSTER=cluster.KD_CLUSTER
                        INNER JOIN perum
                        ON cluster.KD_PERUM=perum.KD_PERUM
                        WHERE KD_REP='$KD_REP'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="KD_REP" value="<?php echo $row['KD_REP']; ?>">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="USERNAME" class="form-control" readonly value="<?php echo $row['USERNAME']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="STATUS" class="form-control" readonly value="<?php echo $row['STATUS']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Isi Diskusi</label>
                          <input type="text" name="ISI_REP" class="form-control" required value="<?php echo $row['ISI_REP']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Perumahan</label>
                          <input type="text" name="NAMA_PERUM" class="form-control" readonly value="<?php echo $row['NAMA_PERUM']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Cluster</label>
                          <input type="text" name="NAMA_CLUSTER" class="form-control" readonly value="<?php echo $row['NAMA_CLUSTER']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tanggal & Waktu Diskusi</label>
                          <input type="text" name="TGLWAKTU_REP" class="form-control" readonly value="<?php echo $row['TGLWAKTU_REP']; ?>">      
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


     <div class="modal fade" tabindex="-3" id="myModal1<?php echo $data['KD_REP']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data Report</h4>
            </div>
            <div class="modal-body">
            <form role="form" action="pages/report/delrep.php" method="get">
            <?php
                        $KD_REP = $data['KD_REP']; 
                        $query_edit = mysqli_query($konek, "SELECT * FROM report
                        INNER JOIN user
                        ON report.USERNAME=user.USERNAME
                        INNER JOIN cluster
                        ON report.KD_CLUSTER=cluster.KD_CLUSTER
                        INNER JOIN perum
                        ON cluster.KD_PERUM=perum.KD_PERUM
                        WHERE KD_REP='$KD_REP'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="KD_REP" value="<?php echo $row['KD_REP']; ?>">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="USERNAME" class="form-control" readonly value="<?php echo $row['USERNAME']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="STATUS" class="form-control" readonly value="<?php echo $row['STATUS']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Isi Report</label>
                          <input type="text" name="ISI_REP" class="form-control" readonly value="<?php echo $row['ISI_REP']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Perumahan</label>
                          <input type="text" name="NAMA_PERUM" class="form-control" readonly value="<?php echo $row['NAMA_PERUM']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama Cluster</label>
                          <input type="text" name="NAMA_CLUSTER" class="form-control" readonly value="<?php echo $row['NAMA_CLUSTER']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tanggal & Waktu Report</label>
                          <input type="text" name="TGLWAKTU_REP" class="form-control" readonly value="<?php echo $row['TGLWAKTU_REP']; ?>">      
                        </div>
                        <p>Apakah Anda yakin akan menghapus data di atas?</p>
                        
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
     
      </body>

</html>
      
