<?php
  include 'sessioncheck1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Verify Account Transfer</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../config/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../config/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../config/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../config/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../config/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <div class="text-block text-center my-3">
              	<img src="../../images/auth/logo.png" width="256" height="96" alt="Vontobel" longdesc="index.html">
                <h4>Authorise Funds Transfer</h4>
                <p>&nbsp;</p>
              </div>
              <form action="../query/t_approve.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="label">Client Authorisation Code</label>
                  <div class="input-group">
                    <input type="text" name="cac" class="form-control" placeholder="Client Authorisation Code">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Tax Authority Code</label>
                  <div class="input-group">
                    <input type="text" name="tac" class="form-control" placeholder="Tax Authority Code">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                  <input type="hidden" name="tid" value="<?php echo $_GET['tid']; ?>" />
                  <input type="hidden" name="cid" value="<?php echo $_SESSION['client_id']; ?>" />
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Authorise</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">

                  </div>
                  <!--<a href="#" class="text-small forgot-password text-black">Forgot Password</a> -->
                </div>

                <div class="form-group">
                <!--
                  <button class="btn btn-block g-login">
                    <img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with Google
                  </button>
                -->
                </div>

                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold"></span>

                </div>
              </form>
            </div>

            <p>&nbsp;</p>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <ul class="auth-footer" style="color: #FFF000;">
                      <li>
                        <a href="#" style="color: #FFF000;">Conditions</a>
                      </li>
                      <li>
                        <a href="#" style="color: #FFF000;">Help</a>
                      </li>
                      <li>
                        <a href="#" style="color: #FFF000;">Terms</a>
                      </li>
                    </ul>
                    <p class="footer-text text-center" style="color: #000000; background: #FFFFFF;">copyright © 2018 Vontobel. All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../config/vendors/js/vendor.bundle.base.js"></script>
  <script src="../config/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../config/js/off-canvas.js"></script>
  <script src="../config/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
