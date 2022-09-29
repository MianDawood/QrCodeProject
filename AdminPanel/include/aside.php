<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
      <?php
          if(isset($_SESSION['ADMINID']))
          echo ucwords('admin panel');
        ?>
      </span>   
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if(isset($_SESSION['ADMINID'])) echo ucwords($_SESSION['ADMINNAME']); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
  <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-shield"></i>
              <p>
                Manage Admins
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adminform.php" class="nav-link ">
                  <i class="fas fa-plus"></i>
                  <p>Add Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admintable.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>View Admins</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="userform.php" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="usertable.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>View Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Manage Pakages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pakageform.php" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Add Pakage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pakagetable.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>View Pakages</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="userplanTable.php" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>User Plan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contactTable.php" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>View Contact</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


