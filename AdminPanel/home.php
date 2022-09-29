<?php 

 
require 'process/connection.php';
//print_r($_SESSION); exit;
require 'process/security.php';  
 
 
?>

<!DOCTYPE html>
<html lang="en">
<?php require 'include/head.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php require 'include/nav.php'; ?>

  <?php require 'include/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <?php 
                if(isset($_SESSION['ADMINID']))
                {
                  echo "Welcome" . " " . ucwords($_SESSION['ADMINNAME']);
                }
              ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <div class="card">
        <div class="card-body bg-dark"><br>
          <i class="fas fa-house-user fa-3x"><span style="font-size:30px;"><a href="admintable.php" class="text text-light">Admin</a></sapn></i>
          <div class="text-right fa-2x">
                <?php 
                  $query = "select count(adminId) from admin";
                  $responce = mysqli_query($connect,$query);
                  $data = mysqli_fetch_array($responce);
                  echo $data[0];
                ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <div class="card">
        <div class="card-body bg-warning"><br>
          <i class="fa fa-users fa-3x"><span style="font-size:30px;"><a href="usertable.php" class="text text-dark"> Users</a></span></i>
          <div class="text-right fa-2x">
                <?php 
                  $query = "select count(user_id) from users";
                  $responce = mysqli_query($connect,$query);
                  $data = mysqli_fetch_array($responce);
                  echo $data[0];
                ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'include/footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
