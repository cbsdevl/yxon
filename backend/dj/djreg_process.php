<?php
			include '../dbconnect.php';
			if (isset($_POST['register'])) {
				$username = $_POST["username"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$code = $_POST["code"];
		$sql = "INSERT INTO workers (dj_username, dj_email, dj_password, dj_code)"."VALUES('$username', '$email', '$password', '$code')";
		$res = mysqli_query($dbconnection,$sql);		
            if ($res) {

				echo "<script>function red(){
					window.location='../../account_verification.php';
					} setInterval(red,1000);
					</script>";
			}


			}
			?>
