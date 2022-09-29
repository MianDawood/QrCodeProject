<?php
require 'process/connection.php';
require 'process/security.php';  

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
          <div class="col-sm-9">
            <h1>Add Pakages</h1>
          </div>
          <div class="col-sm-3">
          <a href="pakagetable.php" class="nav nav-link text text-light"><button class="btn btn-primary"><i class="fas fa-eye"> View Record</i></button></a>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Form</li>
            </ol>
          </div> -->
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
                    echo "Registration";
                  }
                  ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="Pakage/insertion.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Pakage Name</label>
                    <input type="text" class="form-control" name="pakagename" placeholder="Enter Pakage Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Amount Monthly</label>
                    <input type="text" class="form-control" name="pakageamount" placeholder="Enter Pakage Amount" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Amount Yearly</label>
                    <input type="text" class="form-control" name="pakageamountyearly" placeholder="Enter Pakage Amount Yearly" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Time</label>
                    <input type="time" class="form-control" name="pakagetime">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Description</label>
                    <textarea name="pakagedisc" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-xl-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Static</label>
                    <select name="pakstatic" class="form-control">
                      <option value="1">Allow</option>
                      <option value="0">Deny</option>
                    </select>
                  </div>
                    </div>
                    <div class="col-md-2 col-xl-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Dynamic</label>
                    <select name="pakdynamic" class="form-control">
                      <option value="1">Allow</option>
                      <option value="0">Deny</option>
                    </select>
                  </div>
                    </div>
                    <div class="col-md-2 col-xl-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Statistics</label>
                    <select name="pakstatistic" class="form-control">
                      <option value="1">Allow</option>
                      <option value="0">Deny</option>
                    </select>
                  </div>
                    </div>
                    <div class="col-md-2 col-xl-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Pakage Custome</label>
                    <select name="pakcustome" class="form-control">
                      <option value="1">Allow</option>
                      <option value="0">Deny</option>
                    </select>
                  </div>
                    </div>
                    <div class="col-md-2 col-xl-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Pakage High Quality</label>
                    <select name="pakhighquality" class="form-control">
                      <option value="1">Allow</option>
                      <option value="0">Deny</option>
                    </select>
                  </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                  <input type="hidden" name="pakage" value="insertion">
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
