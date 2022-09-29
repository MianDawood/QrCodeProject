<?php 

require 'process/connection.php';
require 'process/security.php';  

$uid = $_GET['Uid'];

$SqlQuery = "SELECT * FROM users where user_id = '$uid'";
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
            <h1>Update User</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Form</li>
            </ol> -->
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
                <h3 class="card-title"></h3>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="User/update.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">User Name</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $show['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $show['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" value="<?php echo $show['password']; ?>">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <input type="hidden" name="reg" value="update">
                  <input type="hidden" name="update" value="<?php echo  $show['user_id']; ?>">
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
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
