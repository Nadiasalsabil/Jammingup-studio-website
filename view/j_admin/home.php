<?php
      require("config/lib.php");
                  $Lib = new Library();
                  $show = $Lib->showArt();
        ?>
<!DOCTYPE html>

<html lang="en">
<head>
</head>

<body>
      <div class="main-panel">
          <!-- Body -->    
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-file text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Our Portofolio</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Jumlah Data</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-primary icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Our Team</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Jumlah Data</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-image text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Our Galery</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Jumlah Data</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Our Article</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <h3><?php echo date ('l'); ?></h3>
                    <p class="text-gray">
                      <span class="weather-date"><?php echo date ('d-M-Y'); ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/misc.js"></script>  
  <script src="../../assets/js/dashboard.js"></script>  
</body>
</html>