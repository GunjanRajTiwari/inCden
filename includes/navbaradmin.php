    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexadmin.php">
        &nbsp;<img class="rounded-circle" src="img/vmlogo.jpg" style="width:50px;height:50px;">
        <div class="sidebar-brand-text mx-3">Vulnerability Manager</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="indexadmin.php">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span style="font-size: 11pt;">Dashboard</span></a>
      </li>



      <!-- Nav Item - Admin Profiles -->
      <li class="nav-item">
        <a class="nav-link" href="adminprof.php">
          <i class="fas fa-fw fa-user-shield"></i>
          <span style="font-size: 11pt;">Admin Profiles</span></a>
      </li>

      <!-- Nav Item - User Profiles -->
      <li class="nav-item">
        <a class="nav-link" href="userprof.php">
          <i class="fas fa-fw fa-user"></i>
          <span style="font-size: 11pt;">User Profiles</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tableadmin.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size: 11pt;">Vulnerability Register</span></a>
      </li>

      <!-- Nav Item - Database -->
      <li class="nav-item">
        <a class="nav-link" href="reportadmin.php">
          <i class="fas fa-fw fa-file-alt"></i>
          <span style="font-size: 11pt;">Incident Reports</span></a>
      </li>


      <!-- Nav Item - Database -->
      <li class="nav-item">
        <a class="nav-link" href="editdb.php">
          <i class="fas fa-fw fa-database"></i>
          <span style="font-size: 11pt;">Edit Database</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span style="font-size: 11pt;">Logout</span></a>
      </li>


    </ul>
    <!-- End of Sidebar -->


      <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST">
          <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>






              <!-- Content Wrapper -->
              <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">



      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-800">
          <?php echo $_SESSION['admin']; ?>
          </span>
          <i class="fas fa-user-circle fa-2x text-gray-900"></i>
          </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
            <b>Logout</b>
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
