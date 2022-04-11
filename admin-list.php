<?php 
  session_start();
  include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Riode- Admin list</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
<?php 
  include 'aside.php';
?>
      <div class="page-wrapper">
                  <!-- Header -->
 <?php 
  include 'header.php';
 ?>
					    <div class="row">
								<div class="col-12">
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2 >LISTES DES UTILISATEURS RIODE ECOM</h2> 
                      <a href="add.php">
                        <button type="submit" class="btn btn-primary">Add Admin</button>
                      </a>
                      
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                          <thead>
                             <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th >STATUTS</th>
                                <th> REMOVE </th>
                              </tr>
                          </thead>
                          <?php 
                            $sql="SELECT admin_id, admin_name, admin_email FROM admin_infos";
                            $result=mysqli_query($conn, $sql);
                          ?>
                          <?php
                            foreach($result as $val){
                          ?>
                          <tbody>
                            <tr>
                              <td> <?php echo $val["admin_id"]; ?> </td>
                              <td> <?php echo $val["admin_name"];?> </td>
                              <td> <?php echo $val["admin_email"];?> </td>
                              <?php 
                                if(session_start() AND $val["admin_name"]=="Tunde"){
                              ?>
                              <td> 
                                <span class="badge badge-success">Principal</span>
                              </td>
                              
                              <?php
                                }else{
                              ?>
                              <td> 
                                <span class="badge badge-success">Secondaire</span>
                              </td>
                              <td>
                                <a href="remove.php">
                                  <span class="badge badge-danger">
                                    Remove
                                  </span>
                                </a>
                              </td>
                              <?php
                                }
                              ?>
                            </tr>
                          </tbody>
                            <?php
                              }
                            ?>
                      </table>
                    </div>
                  </div>
              </div>
  </div>
                              
 <footer class="footer mt-auto">
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
 </footer>
    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>
