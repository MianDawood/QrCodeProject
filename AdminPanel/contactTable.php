<?php 

require 'process/connection.php';
require 'process/security.php';  

if(isset($_GET['search']))
{
  $search = $_GET['search'];
  $SqlQuery = "SELECT * FROM contact where cUserName like '%$search%'";
$QueryExecute = mysqli_query($connect,$SqlQuery);

}

else
{
  $SqlQuery = "SELECT * FROM contact";
$QueryExecute = mysqli_query($connect,$SqlQuery);
}

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
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Tables</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                    <?php
                    
                    if(isset($_GET['msg']) && $_GET['msg'] == 'success')
                  {
                    echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your Record Delete Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['msg']) && $_GET['msg'] == 'error')
                  {
                    echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Delete  Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['sms']) && $_GET['sms'] == 'success')
                  {
                    echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your All Record Delete  Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['sms']) && $_GET['sms'] == 'error')
                  {
                    echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Delete  Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['msgs']) && $_GET['msgs'] == 'success')
                  {
                    echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your Record Updated Successfully</strong>
                  </div>";
                  }
                  elseif(isset($_GET['msgs']) && $_GET['msgs'] == 'error')
                  {
                    echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Update Successfully</strong>
                  </div>";
                  }
                  else
                  {
                    echo "<h3><b>Record</b></h3>";
                  }
                    
                    ?>
                    </div>
                      <div class="col-2">
                      <a href="contact/deleteall.php"><button class="btn btn-danger" onclick="return confirm('are you sure want to delete all record')"><i class="fas fa-trash"> DeleteAll</i></button></a>
                      </div>
                      <div class="col-3">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <form action="" method="get">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search">
                      </form>
                    </div>
                  </div>
                  </div>
                    </div>
                      </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>S.NO</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Messege</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $a =1;  while($display = mysqli_fetch_array($QueryExecute)){ ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $display['cUserName']; ?></td>
                      <td><?php echo $display['cEmail']; ?></td>
                      <td><?php echo $display['cMessage']; ?></td>
                      <td>  
                        <a href="contact/delete.php?cid=<?php echo $display['cId'] ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>                      </td>
                    </tr>
                    <?php $a++; }  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'include/footer.php'; ?>
</body>
</html>
