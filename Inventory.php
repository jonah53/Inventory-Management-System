<?php
  //session_start();
  require_once 'config/log.db.inc.php';
  include 'auth/sessioncheck.php';
  include 'queries/getUser.php';
  include 'queries/inventory.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" sizes="192x192" href="images/logo.jpg">

    <title> Logistics | Inventory </title>

    <link href="config/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="config/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="config/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="config/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="config/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="config/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="config/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="config/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="config/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; background: #FFFFFF; text-align: center">
              <!--<a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>AMZ GROUP</span></a>-->
              <a href="index.php" class="site_title"><img src="images/logo.jpg" width="40%" /></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?php echo $img[0]; ?>" alt="Avatar" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, </span>
                <h2><?php echo $urow[3]; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php
              include 'page_components/sidebar.php';
            ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php
          include 'page_components/topNav.php';
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Register</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Warehouse <small> INVENTORY </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
							<th>Warehouse</th>
                          <th>Item ID</th>
                          <th>Batch_No</th>
                          <th>Name</th>
                          <th>Quantity</th>
                          <th>Unit of Measurement</th>
                          <th>Origin</th>
						  <th>Date of Entry</th>
						  <th>Recieved By</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while($list = mysqli_fetch_row($result))
                        {
                          echo '<tr>';
							echo '<td>' .$list[8]. '</td>';
                            echo '<td>' .$list[0]. '</td>';
                            echo '<td>' .$list[1]. '</td>';
                            echo '<td>' .$list[2]. '</td>';
                            echo '<td>' .$list[3]. '</td>';
                            echo '<td>' .$list[4]. '</td>';
                            echo '<td>' .$list[5]. '</td>';
							echo '<td>' .$list[6]. '</td>';
							echo '<td>' .$list[7]. '</td>';
                          echo '</tr>';
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
          include 'page_components/footer.php';
        ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="config/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="config/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="config/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="config/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="config/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="config/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="config/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="config/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="config/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="config/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="config/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="config/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="config/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="config/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="config/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="config/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="config/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="config/vendors/jszip/dist/jszip.min.js"></script>
    <script src="config/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="config/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="config/build/js/custom.min.js"></script>

    <script>
    function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("datatable-buttons");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </body>
</html>
