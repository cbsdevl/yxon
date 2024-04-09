<?php

// requesting the connection file
require_once "dbconnect.php";

// starting the session for goxy admin
session_start();

// user login function of goxy
function yxonlogin()
{

    // globalizing all variables
    global $dbConnection, $registrationuser, $loginPassword, $sql_admin, $execute_admin, $verify_admin, $message, $contentEncryptId1;

    # checking the user credentials and setting up the sessions

    if (isset($_SESSION['alvinusers'])) {

        switch ($_SESSION['alvinusersType']) {

            case 'administrator':

                header("location:center/");

                break;
            case 'workers';
                header("location:dj/");
                break;
         
        }
        # ending the switch statement

    } else {


        // checking and validating user credentials

        if (isset($_POST['login_into_system'])) {

            # input fields

            $registrationuser = mysqli_real_escape_string($dbConnection, $_POST['usernameToken']);

            $loginPassword    = mysqli_real_escape_string($dbConnection, $_POST['userPassword']);

            // commands to check the user fields matching


            # administrator select query
            $sql_admin   = "SELECT * from administrator WHERE username='$registrationuser' and password='$loginPassword'";

            #motar user select query
            $dj = "SELECT * from workers WHERE dj_username='$registrationuser' and dj_pass='$loginPassword'";

            // executing user queries

            $execute_admin        = mysqli_query($dbConnection, $sql_admin);
            $execute_dj           = mysqli_query($dbConnection, $dj);

            // verifying the user queries

            $verify_admin         = mysqli_fetch_array($execute_admin);
            $verify_dj            = mysqli_fetch_array($execute_dj);

            // avoiding some empty fields

            if (empty($registrationuser) || empty($loginPassword)) {

                $message = "<div class='status-userNotCreated'>" . "<center>" . "<strong style='font-size:16px;color:white;font-style:italic;'>" . "Error : Empty Fields" . "</strong>" . "</center>" . "</div>" . "<br>";
            }


            #executing and redirecting

            elseif (mysqli_num_rows($execute_admin) > 0) {

                $contentEncryptId1 = $verify_admin['admin_id'];
                $_SESSION['alvinusers'] = $contentEncryptId1;
                $_SESSION['alvinusersType'] = "admin";
                session_write_close();

                header("location:backend/center/");

                exit();
            } elseif (mysqli_num_rows($execute_dj) > 0) {

                $contentEncryptId2 = $verify_dj['dj_id'];
                $_SESSION['alvinusers'] = $contentEncryptId2;
                $_SESSION['alvinusersType'] = "dj";
                session_write_close();

                header("location:backend/dj/");

                exit();
            }
            } else {

                $message = "<div class='status-userNotCreated'>" . "<center>" . "<strong style='font-size:16px;color:white;font-style:italic;'>" . "Invalid Credentials. Try Again!" . "</strong>" . "</center>" . "</div>" . "<br>";
            }
        }
    }

?>
