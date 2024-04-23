<?php
include '../dbconnect.php';

    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

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
          <span>Agasobanuye Dashboard</span></a>
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
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-upload"></i>
          <span>Upload</span></a>
      </li>
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-bell"></i>
          <span>Notifications</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-clock"></i>
          <span>History</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-question"></i>
          <span>Help</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
                <span class="mr-2 d-none d-lg-inline text-gray-600" style="text-transform: capitalize;"></span>
                <img class="profile" src="../../assets/dashboard/images/profile.png">
                <h3 class="prcont">Admin</h3>
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
           <div class="cont">
           <li>
        <a class="upload-icon" onclick="op()" href="#">
          <i class="fas fa-fw fa-upload"></i>
</a>
      </li>

            <center>
              <h2 style="color: white;">UPLOADED WEEKS</h2><br>
    <table style="color: white; border: 2px solid white; width: 580px;">
        <tr>
            <td style="width: 70px;"><img src="../../assets/images/folder.png" alt=""></td>
            <td rowspan="2" style="width: 340px;">This Week7 is uploaded on 12/05/2023.This Week7 is uploaded on 12/05/2023</td>
            <td rowspan="2"><span><button>Delete</button></span>&nbsp;&nbsp;&nbsp;<span><button>Update</button></span></td>
        </tr>
        <tr>
            <td>Week7</td>
        </tr>
    </table>

</center>
<div id="overop"><br><br><br><br><br><br>
  <div class="ser">
<center>
    <br>
<form method="post" enctype="multipart/form-data">
  <button onclick="off()" class="close">&times</button>
    <h2 style="color: white;">UPLOADING MOVIE WEEKS</h2>
<input type="text" name="week_name" id="week_name" placeholder="Enter Name Of Week" required><br><br>
<textarea name="description" id="description" cols="30" rows="5" placeholder="Discription of Week Here" required></textarea><br><br>
<input type="file" name="uploadfile" class="file" id="file" required><br><br>
<button type="submit" name="upload" id="button"><span><i class="fas fa-fw fa-upload"></i></span>
<span>Upload</span>
</button>
</form>
<?php
//file directory
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"] ["tmp_name"];
$folder = "../uploads/".$filename;
move_uploaded_file($tempname, $folder);

//insert into db
if (isset($_POST['upload'])) {
$week_name = $_POST['week_name'];
$description = $_POST['description'];
$sql = "INSERT INTO upload (week_name, description, file)"."VALUES('$week_name', '$description','$folder')";
mysqli_query($dbconnection,$sql);
}
?>


</center>
</div>
</div>

           </div>
      

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

  .close {
    margin-right: 40px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: white;
  cursor: pointer;
}
  .ser{
    background-color: #333;
    width: 80%;
    color: white;
    height: 420px;
    margin: auto;
    border-radius: 8px;
    font-size: 16px
}

   #button{
        border-radius: 8px;
        margin-right: 408px;
    }
    #button:hover{
        color: white;
        background-color: #333;
    }
    #week_name{
        width: 500px;
        border-radius: 5px;
    }
    #description{
        width: 500px;
        border-radius: 5px;

    }
    .file{
        margin-right: 204px;
    }
    #file{
        border-radius: 6px;
    }
  .upload-icon{
    color: white;
    font-size: 25px;
    margin-left: 900px;
  }
  .upload-icon:hover{
    color: gray;
  }
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
.cont{
    background-color: #333;
    height: 85%;
    width: 90%;
    margin-left: 60px;
    overflow-y: scroll;
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
#overop {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.7
  );
  z-index: 2;
  cursor: pointer;
}


</style>
<script>
function op() {
  document.getElementById("overop").style.display = "block";
}
function off() {
  document.getElementById("overop").style.display = "none";
}
</script>

</body>

</html>
