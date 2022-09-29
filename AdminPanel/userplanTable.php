<?php

require 'process/connection.php';
require 'process/security.php';

// if(isset($_GET['pid']) && $_GET['pid'] !="")
// {
//   $pid = $_GET['pid'];
//   $pstatus = $_GET['pstatus'];

//   if($pstatus == 0)
//   {
//     $query = "update pakages set pakageStatus = 1 where pakageId = '$pid' "; 
//     $QueryExecute = mysqli_query($connect,$query);
//   }
//   else
//   {
//     $query = "update pakages set pakageStatus = 0 where pakageId = '$pid' "; 
//     $QueryExecute = mysqli_query($connect,$query);
//   }
// }

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $SqlQuery = "SELECT * FROM userplane UP
inner join users US on US.user_id = UP.user_id
inner join pakages PK on pk.pakageId = UP.pakageId
 where username like '%$search%' or email like '%$search%' or pakage like '%$search%'";
  $QueryExecute = mysqli_query($connect, $SqlQuery);
} else {
  $SqlQuery = "SELECT * FROM userplane UP
inner join users US on US.user_id = UP.user_id
inner join pakages PK on pk.pakageId = UP.pakageId";
  $QueryExecute = mysqli_query($connect, $SqlQuery);
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
              <h1>Pakages Record</h1>
            </div>
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol> -->
            </div>
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
                    <div class="col-5">
                      <?php

                      if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                        echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your Record Delete Successfully</strong>
                  </div>";
                      } elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                        echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Delete  Successfully</strong>
                  </div>";
                      } elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                        echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your All Record Delete  Successfully</strong>
                  </div>";
                      } elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                        echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Delete  Successfully</strong>
                  </div>";
                      } elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'success') {
                        echo " <div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Congratulation Your Record Updated Successfully</strong>
                  </div>";
                      } elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') {
                        echo " <div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry Your Record Not Update Successfully</strong>
                  </div>";
                      } else {
                        echo "<h3><b>Record</b></h3>";
                      }

                      ?>
                    </div>
                    <div class="col-2">
                      <!-- <a href="pakageform.php"><button class="btn btn-primary"><i class="fas fa-plus"> Add</i></button></a> -->
                    </div>
                    <div class="col-2">
                      <a href="UserPlan/deleteall.php"><button class="btn btn-danger" onclick="return confirm('are you sure want to delete all record')"><i class="fas fa-trash"> DeleteAll</i></button></a>
                    </div>
                    <div class="col-3">
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 250px;">
                          <form action="" method="get">
                            <input type="text" name="search" class="form-control float-right" placeholder="Search">

                          </form>
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 ">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Pakage Name</th>
                        <th>Pakage Amount</th>
                        <th>Pakage</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $a = 1;
                      while ($show = mysqli_fetch_array($QueryExecute)) { ?>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $show['username']; ?></td>
                          <td><?php echo $show['email']; ?></td>
                          <td><?php echo $show['pakageName'] ?></td>
                          <td>
                            <?php 
                              if($show['pakage'] == 'Yearly')
                              {
                                echo $show['pakageAmountYearly'];
                              }
                              else 
                              {
                                echo $show['pakageAmount'];
                              }
                             
                            ?>
                          </td>
                          <td><span style="border-radius: 20px 20px 0px;" class="bg-dark"><?php echo $show['pakage']; ?></span></td>
                          <td>

                            <!-- <?php
                                  if ($show['pakageStatus'] == 0) {
                                  ?>
                        <a href="pakagetable.php?pid=<?php echo $show['pakageId'] ?>&&pstatus=<?php echo $show['pakageStatus']; ?>"><button class="btn btn-danger"><i class="fas fa-undo"></button></i></a>
                      <?php } else { ?>
                        <a href="pakagetable.php?pid=<?php echo $show['pakageId'] ?>&&pstatus=<?php echo $show['pakageStatus']; ?>"><button class="btn btn-success"><i class="fas fa-check"></button></i></a>
                        <?php } ?> -->
                            <a href="UserPlan/delete.php?upid=<?php echo $show['upId'] ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                            <!-- <a href="pakageedit.php?pid=<?php echo $show['pakageId'] ?>"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a> -->
                          </td>
                        </tr>
                      <?php $a++;
                      } ?>
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
    <?php require 'include/footer.php'; ?>

</body>

</html>