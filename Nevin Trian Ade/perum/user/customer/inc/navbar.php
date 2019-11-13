<!-- Our Website Content Goes Here -->
<?php 
 $USERNAME=$_SESSION['USERNAME'];
  
 $diskusi=mysqli_query($konek, "SELECT diskusi.KD_DIS, user.USERNAME, user.KD_USER  FROM diskusi INNER JOIN user ON diskusi.KD_USER=user.KD_USER WHERE user.USERNAME='$USERNAME'");
 $review=mysqli_query($konek, "SELECT review.KD_REV, user.USERNAME, user.KD_USER FROM review INNER JOIN user ON review.KD_USER=user.KD_USER WHERE user.USERNAME='$USERNAME'");
 $report=mysqli_query($konek, "SELECT report.KD_REP, user.USERNAME, user.KD_USER FROM report INNER JOIN user ON report.KD_USER=user.KD_USER WHERE user.USERNAME='$USERNAME'");

?>
<header class="simple-normal">
     <div class="top-bar">
          <div class="logo">
               <a href="index.php" title=""><i class="fa fa-bullseye"></i> carirumah.com</a>
          </div>
          <div class="menu-options"><span class="menu-action"><i></i></span></div>
          <div class="top-bar-quick-sec">
               <a href="#" data-toggle="modal" data-target=".logout"><span class="full-screen-btn"><i class="fa fa-sign-out"></i></span></a>
               <span id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt fa-spin"></i></span>
          </div>
     </div><!-- Top Bar -->
     <div class="side-menu-sec" id="header-scroll">
         <br>
          <div class="side-menus">
               <span>MENU UTAMA</span>
               <nav>
                    <ul class="parent-menu">
                         <li class="<?php if(!isset($_GET['p'])) echo 'active'; ?>">
                              <!--badge red <i class="badge red-bg">HOT</i>-->
                              <a title="Halaman Utama" href="index.php"><i class="ti-desktop"></i><span>Dashboard</span></a>
                         </li>
                         
                       
                        <li class="menu-item-has-children <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='pt') echo 'active'; ?>">
                              <a title="Area administrasi buku"><i class="ti-book"></i><span>Lainnya</span></a>
                              <ul <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='pt') { ?> style="display: block;" <?php } ?>>
                              <li><a href="?p=diskusi/diskusi">Data Diskusi <i class="badge blue-bg"><?php echo mysqli_num_rows($diskusi); ?></i></a></li>     
                              <li><a href="?p=review/review">Data Review <i class="badge red-bg"><?php echo mysqli_num_rows($review); ?></i></a></li> 
                              <li><a href="?p=report/report">Data Report <i class="badge red-bg"><?php echo mysqli_num_rows($report); ?></i></a></li> 
                                   
                         </ul>
                        </li>
                        <li class="">
                              <a title="Keluar dari Halaman Admin" href="#logout" data-toggle="modal" data-target=".logout"><i class="ti-export"></i><span>Log Out</span></a>
                        </li>
                    </ul>
               </nav>
          </div>
     </div>
</header>