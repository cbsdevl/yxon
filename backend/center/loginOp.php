<?php
session_start();
include '../dbconnect.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $u=$_POST['username'];
  $psw=$_POST['password'];
  $sql=mysqli_query($dbconnection,"SELECT * FROM administrator WHERE username='$u' and password='$psw'")or die(mysqli_error($dbconnection));

  $count=mysqli_num_rows($sql);
  if ($count==1) 
  {
    $_SESSION['username']=$u;
    while($row=mysqli_fetch_array($sql))
    {
     $_SESSION["admin_id"] = $row['admin_id'];
        echo "<script>function red(){
        window.location='index.php';
        } setInterval(red,1000);
        </script>";
      }

    }
     else{
        echo "
        <center>
        <br><br><br><br><br><br>
        <img src='../../assets/images/logo.png' class='logo'><br>

        <font color='red' style='font-size: 20px;'>You are entering Invalid Username and Password <br>Please enter real username and password</font>
                 <br> <br><a href='../../centerlogin.php'>Try Again</a>
        </center>";
        echo "<script>function red(){
        window.location='doslogin.php';
        };
        </script>";
    }
  }
?>
<style>
 .logo{
           height: 250px;
       }
       a{
         padding: 4px;
        text-decoration: none;
        border: 1px solid #333;
        border-radius: 8px;
        color: #333;
       }
       a:hover{
         background-color: #333;
         color: white;
       }
</style>