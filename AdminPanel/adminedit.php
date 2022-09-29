<?php 

require 'process/connection.php';
require 'process/security.php';  

$aid = $_GET['Aid']; 
                                                  //and adminID = {$_SESSION['ADMINID']}
$SqlQuery = "SELECT * FROM admin where adminID = '$aid'";
$QueryExecute = mysqli_query($connect,$SqlQuery);
$show = mysqli_fetch_array($QueryExecute);

?>
<!DOCTYPE html>
<html lang="en">
<?php require 'include/head.php'; ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php require 'include/nav.php'; ?>

<?php require 'include/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>Update Admin</h1>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <?php
                  
                  if(isset($_GET['msg']) && $_GET['msg'] == 'success')
                  {
                    echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation You Submit Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['msg']) && $_GET['msg'] == 'error')
                  {
                    echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry You Not Submit Successfully</strong>
                  </div>";
                  }
                  else
                  {
                    echo "Updation";
                  }
                  ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="Admin/update.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Full Name</label>
                    <input type="text" class="form-control" name="FullName" placeholder="Enter Name" value="<?php echo $show['adminName']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $show['adminEmail']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password" value="<?php echo $show['adminPassword']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea name="Address" id="" cols="10" rows="7" class="form-control"><?php echo $show['adminAddress']; ?></textarea>  
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <input type="hidden" name="Admin" value="Update">
                  <input type="hidden" name="update" value="<?php echo $show['adminId']; ?>">
                </div>
              </form>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
             
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
     
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'include/footer.php'; ?>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
