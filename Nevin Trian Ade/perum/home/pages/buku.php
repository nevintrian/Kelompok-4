<!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a href="?p=buku&halaman=1">Cluster</a>
        </li>
        
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Catalogue -->
    <section class="section-wrap pt-70 pb-40 catalogue">
      <div class="container relative">
        <div class="row">

          <div class="col-md-9 catalogue-col right mb-50">

           

              <div class="row row-10">
              <?php
                $bukuAll = "SELECT KD_CLUSTER FROM cluster";
                $rsBukuAll = mysqli_query($konek, $bukuAll);
                $halaman = 6;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                if(isset($_GET['KD_PERUM'])){
                    $KD_PERUM = $_GET['KD_PERUM'];
                    $result = mysqli_query($konek,"SELECT * FROM cluster WHERE id_kategori=$KD_PERUM");
                } else 
                    $result = mysqli_query($konek,"SELECT * FROM cluster");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                if(isset($_GET['KD_PERUM'])){
                    $buku = "SELECT KD_CLUSTER, NAMA_CLUSTER, TIPE, GAMBAR FROM cluster WHERE id_kategori=$KD_PERUM ORDER BY KD_CLUSTER DESC LIMIT $mulai, $halaman";
                }
                else    
                    $buku = "SELECT KD_CLUSTER, NAMA_CLUSTER, TIPE, GAMBAR FROM cluster ORDER BY KD_CLUSTER DESC LIMIT $mulai, $halaman";
                $rs = mysqli_query($konek, $buku);
                $no =$mulai+1;
                $data = mysqli_num_rows($rs);
                if($data==0){
              ?>
              <div class="col-md-12 col-xs-12">
                    <div class="product-item text-center">
                        <h1>Maaf, data buku kategori terkait masih kosong!</h1>
                    </div>
              </div>
              <?php   
                } else {
                    while($row=mysqli_fetch_assoc($rs)){
              ?>
                    <div class="col-md-4 col-xs-12">
                    <div class="product-item">
                        <div class="product-img">
                        <a href="#">
                            <img src="img/book/<?php echo $row['GAMBAR']; ?>" alt="" style="height:347px; width:277px;">
                            <img src="img/book/<?php echo $row['GAMBAR']; ?>" alt="" class="back-img">
                        </a>
                        <a href="?p=buku_detail&KD_PERUM=<?php echo $row['KD_CLUSTER']; ?>" class="product-quickview">Lihat Selengkapnya</a>
                        </div>
                        <div class="product-details">
                        <h3>
                            <a title="<?php $row['NAMA_CLUSTER']; ?>" class="product-title" href="?p=buku_detail&id_buku=<?php echo $row['KD_CLUSTER']; ?>"><b><?php echo substr($row['NAMA_CLUSTER'], 0, 35); if(strlen($row['NAMA_CLUSTER'])>35) echo  "..." ?></b></a>
                        </h3>
                        <span class="price">
                            <ins>
                            <span class="ammount text-danger">
                                <?php
                                $harga = number_format($row['TIPE']);
                                echo.$harga;
                                ?>
                            </span>
                            </ins>
                        </span>
                        </div>
                    </div>
                    </div>
                <?php } } ?>
              </div> <!-- end row -->
            <div class="clear"></div>
           
            <!-- Pagination -->
            <?php 
                if($data!=0){ 
            ?>
            <div class="pagination-wrap">           
              <nav class="pagination right clear">
                <?php if(isset($_GET['KD_PERUM'])) { if($page == 1) echo ""; else {?>
                    <a href="?p=buku&KD_PERUM=<?php echo $_GET['KD_PERUM']; ?>&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=buku&KD_PERUM=<?php echo $_GET['KD_PERUM']; ?>&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php } } else { if($page == 1) echo ""; else {?>
                    <a href="?p=buku&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=buku&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php 
                    } }
                    if(isset($_GET['KD_PERUM'])){ 
                        for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=buku&KD_PERUM=<?php echo $_GET['KD_PERUM']; ?>&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } else { 
                    for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=buku&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } ?>

                <?php if(isset($_GET['KD_PERUM'])) { if($page == $pages) echo ""; else {?>
                    <a href="?p=buku&KD_PERUM=<?php echo $_GET['KD_PERUM']; ?>&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=buku&KD_PERUM=<?php echo $_GET['KD_PERUM']; ?>&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } else { if($page == $pages) echo ""; else {?>
                    <a href="?p=buku&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=buku&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } ?>
              </nav>
            </div>
            <?php } ?>

          </div> <!-- end col -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalogue -->