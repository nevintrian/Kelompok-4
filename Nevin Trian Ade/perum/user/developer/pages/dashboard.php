<?php
    if(!defined('MyConst')){
            die('Akses langsung tidak diperbolehkan');
        }
    $USERNAME=$_SESSION['USERNAME'];
    $user=mysqli_query($konek, "SELECT user.KD_USER, user.USERNAME FROM user WHERE user.USERNAME='$USERNAME'");
    $pt=mysqli_query($konek, "SELECT pt.KD_PT, pt.NAMA_PT, user.USERNAME, user.KD_USER FROM pt INNER JOIN user ON pt.KD_USER=user.KD_USER WHERE user.USERNAME='$USERNAME'");
    $perum=mysqli_query($konek, "SELECT KD_PERUM 
    FROM user
    INNER JOIN pt ON user.KD_USER=pt.KD_USER
    INNER JOIN perum ON pt.KD_PT=perum.KD_PT
    WHERE user.USERNAME='$USERNAME'");
    $cluster=mysqli_query($konek, "SELECT user.USERNAME, perum.KD_PERUM, cluster.KD_CLUSTER, user.KD_USER, pt.KD_PT
    FROM cluster 
    INNER JOIN perum ON cluster.KD_PERUM=perum.KD_PERUM 
    INNER JOIN pt ON perum.KD_PT=pt.KD_PT
    INNER JOIN user ON pt.KD_USER=user.KD_USER
    WHERE user.USERNAME='$USERNAME'");
    $diskusi=mysqli_query($konek, "SELECT diskusi.KD_DIS, diskusi.ISI_DIS, diskusi.TGLWAKTU_DIS, user.KD_USER, user.USERNAME, user.STATUS, perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.GAMBAR, pt.KD_PT, pt.NAMA_PT
    FROM diskusi
    INNER JOIN cluster
    ON diskusi.KD_CLUSTER=cluster.KD_CLUSTER
    INNER JOIN perum
    ON cluster.KD_PERUM=perum.KD_PERUM
    INNER JOIN pt
    ON perum.KD_PT=pt.KD_PT
    INNER JOIN user
    ON pt.KD_USER=user.KD_USER
    WHERE user.USERNAME='$USERNAME'");
    $review=mysqli_query($konek, "SELECT review.KD_REV, review.ISI_REV, review.TGLWAKTU_REV, review.FOTO_REV, user.KD_USER, user.USERNAME, user.STATUS, perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.GAMBAR, pt.KD_PT, pt.NAMA_PT
    FROM review
    INNER JOIN cluster
    ON review.KD_CLUSTER=cluster.KD_CLUSTER
    INNER JOIN perum
    ON cluster.KD_PERUM=perum.KD_PERUM
    INNER JOIN pt
    ON perum.KD_PT=pt.KD_PT
    INNER JOIN user
    ON pt.KD_USER=user.KD_USER
    WHERE user.USERNAME='$USERNAME'");
    $report=mysqli_query($konek, "SELECT report.KD_REP, report.ISI_REP, report.TGLWAKTU_REP, user.KD_USER, user.USERNAME, user.STATUS, perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.GAMBAR, pt.KD_PT, pt.NAMA_PT
    FROM report
    INNER JOIN cluster
    ON report.KD_CLUSTER=cluster.KD_CLUSTER
    INNER JOIN perum
    ON cluster.KD_PERUM=perum.KD_PERUM
    INNER JOIN pt
    ON perum.KD_PT=pt.KD_PT
    INNER JOIN user
    ON pt.KD_USER=user.KD_USER
    WHERE user.USERNAME='$USERNAME'");
?>
<div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='sukses_login'){
                    ?>
                    <div role="alert" class="alert color green-bg fade in alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Berhasil login!</strong> selamat, Anda berhasil login sebagai administrator Zurin Bookstore.
                    </div>
                    <?php } } ?>
                </div>
                <div class="col-md-20 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                        <p align=right> Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
                    </div>
                </div>
                
            </div>
        </div><!-- Heading Sec -->
        <ul class="breadcrumbs">
            <li><a href="#" title="">Beranda</a></li>
            <li><a href="index.php" title="">Dashboard</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                  </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>PT</span>
                            <h4>
                                <?php echo mysqli_num_rows($pt); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total PT : <?php echo mysqli_num_rows($pt); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Perumahan</span>
                            <h4>
                                <?php echo mysqli_num_rows($perum); ?>
                            </h4>
                            <i class="fa fa-comments green-bg"></i>
                            <h5>Total Perumahan : <?php echo mysqli_num_rows($perum); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Cluster</span>
                            <h4 class="number">
                                <?php echo mysqli_num_rows($cluster); ?>
                            </h4>
                            <i class="fa fa-area-chart blue-bg"></i>
                            <h5>Total Cluster : <?php echo mysqli_num_rows($cluster); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Diskusi</span>
                            <h4>
                                <?php echo mysqli_num_rows($diskusi); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Diskusi : <?php echo mysqli_num_rows($diskusi); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Review</span>
                            <h4>
                                <?php echo mysqli_num_rows($review); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Review : <?php echo mysqli_num_rows($review); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Report</span>
                            <h4>
                                <?php echo mysqli_num_rows($report); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Report : <?php echo mysqli_num_rows($report); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->