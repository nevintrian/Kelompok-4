<!-- Navigation -->

<header class="nav-type-1">
    
    <nav class="navbar navbar-static-top">
      <!--<div class="navigation" id="sticky-nav">-->
      <div class="navigation">
        <div class="container relative">

          <div class="row">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <div class="header-wrap">
              <div class="header-wrap-holder">

                <!-- Search -->
                <div class="nav-search hidden-sm hidden-xs">
                  <form method="get" name="cari" action="index.php">
                    <input type="text" name="judul" class="form-control" placeholder="Cari Perumahan">
                    <button name="cari" type="submit" class="search-button">
                      <i class="icon icon_search"></i>
                    </button>
                  </form>
                </div>

                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap text-center">
                    <a href="index.php">
                      <!--<img class="logo" src="img/logo_dark.png" alt="logo">-->
                      <h4 class="logo"><b>carirumah.com</b><h4>
                    </a>
                  </div>
                </div>

              </div>
            </div> <!-- end header wrap -->

            <div class="nav-wrap">
              <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <ul class="nav navbar-nav">

                  <li id="mobile-search" class="hidden-lg hidden-md">
                    <form method="get" name="cari" action="index.php" class="mobile-search relative">
                      <input type="text" name="judul" class="form-control" placeholder="Cari...">
                      <button name="cari" type="submit" class="search-button">
                        <i class="icon icon_search"></i>
                      </button>
                    </form>
                  </li>

                  <li class="dropdown">
                    <a href="index.php">Beranda</a>
                  </li>
                
                  <li class="dropdown">
                    <a href="#">Informasi</a>
                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                      <li><a href="?p=about">Tentang Kami</a></li>
                    </ul>
                  </li>

                 
                  <li class="dropdown">
                    <a href="../login/login.php">Akun</a>                    
                  </li>
                 
                <li class="dropdown">
                <a><?php echo $_SESSION['USERNAME'];?></a>
                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                    <li><a href="?p=contact">Dashboard</a></li>
                    <li><a href="../home/index.php">Logout</a></li>
                </ul>
              </li>
                
                </ul> <!-- end menu -->
              </div> <!-- end collapse -->
            </div> <!-- end col -->
        
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header> <!-- end navigation -->
  