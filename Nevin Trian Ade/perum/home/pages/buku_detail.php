
<?php
    $KD_CLUSTER = $_GET['KD_CLUSTER'];
   
    $queryProduct = "SELECT perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.TIPE, cluster.STOK, cluster.HARGA, cluster.FASILITAS, cluster.GAMBAR, cluster.LUAS_TANAH, pt.KD_PT, user.KD_USER, profil.KD_PROFIL, profil_detil.NAMA, profil_detil.NO_TELEPON
    FROM cluster
    INNER JOIN perum
    ON cluster.KD_PERUM=perum.KD_PERUM
    INNER JOIN pt
    ON perum.KD_PT=pt.KD_PT
    INNER JOIN user
    ON pt.KD_USER=user.KD_USER
    INNER JOIN profil
    ON user.KD_USER=profil.KD_USER
    INNER JOIN profil_detil
    ON profil.KD_PROFIL=profil_detil.KD_PROFIL
    WHERE cluster.KD_CLUSTER=$KD_CLUSTER";
    
    $rsProduct = mysqli_query($konek, $queryProduct);
    $row = mysqli_fetch_assoc($rsProduct);
    $queryKomentar = "SELECT diskusi.KD_DIS, diskusi.ISI_DIS, diskusi.TGLWAKTU_DIS, user.KD_USER, user.USERNAME, user.STATUS, perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.GAMBAR, pt.KD_PT, pt.NAMA_PT
    FROM diskusi
    INNER JOIN cluster
    ON diskusi.KD_CLUSTER=cluster.KD_CLUSTER
    INNER JOIN perum
    ON cluster.KD_PERUM=perum.KD_PERUM
    INNER JOIN pt
    ON perum.KD_PT=pt.KD_PT
    INNER JOIN user
    ON diskusi.KD_USER=user.KD_USER
    WHERE diskusi.KD_CLUSTER=$KD_CLUSTER";
    $rsKomentar = mysqli_query($konek, $queryKomentar);
    
?>
<!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>=
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a href="?p=buku&halaman=1">Cluster</a>
        </li>
        <li class="active">
          <?php echo $row['NAMA_CLUSTER']; ?>
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>

    <!-- Single Product -->
    <section class="section-wrap single-product">
      <div class="container relative">
        <div class="row">
        <?php 
            if(isset($_GET['a'])){ 
                $alert = $_GET['a'];
                if ($alert=='komentar_sukses'){
        ?>
        <div class="col-sm-12 col-xs-12">
            <div class="alert alert-success fade in alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Sukses!</strong> Komentar Anda telah ditambahkan
            </div>
        </div>
            <?php } else { ?>
        <div class="col-sm-12 col-xs-12">
            <div class="alert alert-danger fade in alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Gagal!</strong> Komentar Anda gagal ditambahkan
            </div>
        </div>
        <?php } } ?>

          <div class="col-sm-6 col-xs-12 mb-60">

            <div class="flickity  mfp-hover" id="gallery-main">

              <div class="gallery-cell">
                <a href="img/perum/<?php echo $row['GAMBAR']; ?>" class="lightbox-img">
                  <img src="img/perum/<?php echo $row['GAMBAR']; ?>" alt="" />
                </a>
              </div>
              
            </div> <!-- end gallery main -->

          </div> <!-- end col img slider -->

          <div class="col-sm-6 col-xs-12 product-description-wrap">
            <h1 class="product-title"><?php echo $row['NAMA_CLUSTER']; ?></h1>
        
            <span class="price">
              <ins>
                <span class="ammount text-danger">
                    <?php
                        $harga = number_format($row['HARGA'], 2, ",", ".");
                        echo "Rp.".$harga;
                    ?>
                </span>
              </ins>
            </span>
            

            <div class="product_meta">
                <table class="table table-hover table-responsive">
                    <tr>
                        <td width="5px"><span class="icon_book"></span></td>
                        <td><span class="sku">TIPE</td>
                        <td><?php echo $row['TIPE']; ?></span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_documents"></span></td>
                        <td><span class="tagged_as">LUAS TANAH</td>
                        <td><?php echo $row['LUAS_TANAH']; ?> </span></td>
                    </tr>
                    <tr>
                        <td width="5px"><span class="icon_printer-alt"></span></td>
                        <td><span class="posted_in">STOK</td>
                        <td><?php echo $row['STOK']; ?></span></td>
                    </tr>
                
                    <tr>
                        <td width="5px"><span class="icon_tags"></span></td>
                        <td><span class="posted_in">NAMA PERUM</td>
                        <td><a href="?p=buku&KD_PERUM=<?php echo $row['KD_PERUM'] ?>&halaman=1" target="_blank">
                            <?php echo $row['NAMA_PERUM']; ?></a></span></td>
                    </tr>
                </table>
                <!-- tabs -->
                <div class="row">
                <div class="col-md-12">
                    <div class="tabs tabs-bb">
                    <ul class="nav nav-tabs">                                 
                        <li class="active">
                        <a href="#tab-description" data-toggle="tab">Fasilitas</a>
                        </li>    
                        <li>
                        <a href="#tab-reviews" data-toggle="tab">Diskusi</a>
                        </li>                               
                        <li>
                        <a href="#tab-info" data-toggle="tab">Kirim Diskusi</a>
                        </li>                                 
                      
                        <li>
                        <a href="#tab-kontak" data-toggle="tab">Kontak</a>
                        </li>                                   
                    </ul> <!-- end tabs -->
                    
                    <!-- tab content -->
                    <div class="tab-content">

                        
                    <div class="tab-pane fade in active" id="tab-description">
                        <p align="justify">
                            <?php echo htmlspecialchars_decode(stripcslashes($row['FASILITAS'])); ?>
                        </p>
                        </div>     
                        <div class="tab-pane" id="tab-kontak">
                        <p align="justify">
                            <?php echo htmlspecialchars_decode(stripcslashes($row['NO_TELEPON'])); ?>
                            <?php echo htmlspecialchars_decode(stripcslashes($row['NAMA'])); ?>
                        </p>
                        </div> 
                        <div class="tab-pane fade" id="tab-info">
                            <div class="col-md-12">
                                <form action="lib/proses.php" name="komentar" method="post">
                                    <input name="KD_CLUSTER" type="hidden" value="<?php echo $_GET['KD_CLUSTER']; ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input class="form-control" name="NAMA" id="NAMA" type="text" placeholder="Masukkan nama lengkap Anda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi">Isi Komentar</label>
                                        <textarea rows="3" cols="5" name="ISI_DIS" id="ISI_DIS"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-md" name="komentar">Kirim Komentar</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="tab-reviews">

                        <div class="reviews">
                            <ul class="reviews-list">
                            <?php if(mysqli_num_rows($rsKomentar)==0) { ?>
                                <div class="review-body">
                                <div class="review-content">
                                    <h3 class="text-center">Belum ada komentar pada buku ini</h3>
                                </div>
                                </div>
                            <?php 
                                } else { 
                                    while($row=mysqli_fetch_assoc($rsKomentar)){ 
                            ?>
                            <li>
                                <div class="review-body">
                                <div class="review-content">
                                    <p class="review-author"><strong><?php echo $row['USERNAME']; ?></strong><small> - <?php echo $row['TGLWAKTU_DIS']; ?></small></p>
                                    <p align="justify">
                                        <?php
                                             echo $row['ISI_DIS'];
                                        ?>
                                    </p>
                                </div>
                                </div>
                            </li>
                            <br><hr><br>
                            <?php } } ?>
                            </ul>         
                        </div> <!--  end reviews -->
                        </div>
                      
                    </div> <!-- end tab content -->

                    </div>
                </div> <!-- end tabs -->
                </div> <!-- end row -->
            </div>

          </div> <!-- end col product description -->
        </div> <!-- end row -->


        
      </div> <!-- end container -->
    </section> <!-- end single product -->