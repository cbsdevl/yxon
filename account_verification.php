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
			<h3 align="center" style="color: white;">ACCOUNT VERIFICATION</h3>
			<form action="backend/dj/loginOp.php" method="post">

			<h4>The word of 6 letters are sended to </h4>

				<div class="input-box">
					<span class="icon"><ion-icon name="user"></ion-icon></span>
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				 <br><br>
					<br>					
					<button type="submit" class="btn">Verification</button>
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