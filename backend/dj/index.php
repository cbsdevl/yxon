<?php
include '../numbers.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Yxon|Dj Dashboard,
    <?php
    include 'usernames.php';
    echo $username;
    ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #333" class="navbar-nav bg-dark-info sidebar sidebar-dark accordion" id="accordionSidebar">
<img src="../../assets/images/logo.png" class="logo"><br>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <span>Disk joker(DJ) Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface Links
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
 

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>overview</span></a>
      </li>

      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="download.php">
          <i class="fas fa-fw fa-download"></i>
          <span>fetch/download</span></a>
      </li>
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-bell"></i>
          <span>Notifications</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-clock"></i>
          <span>History</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-question"></i>
          <span>Help</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
                <span class="mr-2 d-none d-lg-inline text-gray-600" style="text-transform: capitalize;"></span>
                <img class="profile" src="../../assets/dashboard/images/profile.png">
                <h3 class="prcont"><?php     echo $username;?></h3>
                <h3 class="pr2cont">online</h3>

            </li>

      <!-- Sidebar Toggler (Sidebar) -->

    </ul>
    <!-- End of Sidebar -->

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

          <ul class="navbar-nav ml-auto">
      <h3 class="des">Online System For Weeks Movie Fetching and Rating</h3>
            <div class="topbar-divider d-none d-sm-block"></div>


          </ul>

        </nav>

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Disk joker(DJ) Dashboard</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">UPLOADED WEEKS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $queryuploaded;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-upload fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DOWNLOADED WEEKS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
            <!-- Pending Requests Card Example -->
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body" height="200px">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">notifications</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


         
      
    </div>
    <!-- End of Content Wrapper -->
    
<div>

</div>
<style>
  .video-container {
    height: 300px;
    position: relative;
 margin: 0;
}


.video-container video {
  margin-left: 25px;
  width: 90%;
  height: 400px;
  position: absolute;
  object-fit: cover;
  z-index: 0;
}
.vid{
  border-radius: 10px;
}
</style>
<div class="video-container">
    <video autoplay muted loop class="vid">
        <source src="../../assets/videos/tor.mp4" type="video/mp4" />
    </video>
</div>
    </div>
    </div>
  <!-- End of Page Wrapper -->

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
        <div class="modal-body">Select "Logout" below if you are ready to leave your account.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../assets/dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../assets/dashboard/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../assets/dashboard/js/demo/chart-area-demo.js"></script>
  <script src="../../assets/dashboard/js/demo/chart-pie-demo.js"></script>
  <style>
  .logo{
    margin-left: 40px;
    height: 140px;
    width: 140px;
    border-radius: 50%;
}
.des{
    color: #333;
}
.graph{
    background-color: #333;
    height: 300px;
    margin-left: 25px;
    margin-top: 135px;
    width: 43%;
}
.graph2{
    margin-top: -1070px;
    background-color: #333;
    height: 200px;
    margin-left: 610px;
    width: 43%;
}
.profile{
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-left: 10px;

}
.prcont{
  margin-left: 65px;
  margin-top: -50px;

}
.pr2cont{
  margin-left: 65px;
  margin-top: -15px;
  font-size: 20px;

}

</style>
</body>

</html>
