<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yxon|Login&Signup</title>
	<link rel="stylesheet"href="assets/css/app.css">
</head>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;background: url('assets/images/postt.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}
.status-userNotCreated {
			padding: 5px 10px;
			color: #FFFFFF;
			border-radius: 0px;
			margin-top: 5px;
			background-color: #dc3545;
			border: none;
		}

</style>
<body>
	<div class="log">
	<img src="assets/images/logo.png" alt="" class="logo"></div>


	<div class="wrapper">
		<div class="form-box login">
			<h2>Admin Login</h2>
			<form action="backend/center/loginOp.php" method="post">
				<div class="input-box">
					<span class="icon"><ion-icon name="user"></ion-icon></span>
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				<div class="input-box">
					<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" name="password" required>
					<label>Password</label>
					</div> <br><br>
					<div class="remember-forgot">
					<label><input type="checkbox"> Remember me</label>
					<a href="#">Forgot Password?</a></div>
					<br>					
					<button type="submit" class="btn">Login</button>
					<div class="login-register">
				    	</div>
			</form>
		</div>
			
	</div>





<script type="text/javascript">
	const wrapper = document.querySelector('.wrapper')
	const loginLink = document.querySelector('.login-link')
	const btnPopup = document.querySelector('.btnlogin-popup');

	registerLink.addEventListener('click', ()=> {
		wrapper.classList.add('active')
	});

	loginLink.addEventListener('click', ()=> {
		wrapper.classList.remove('active')
	});

    btnPopup.addEventListener('click', ()=> {
		wrapper.classList.add('active-popup')
	});
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>