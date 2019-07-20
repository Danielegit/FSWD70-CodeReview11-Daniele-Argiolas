<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css" media="screen">
		body{
			background-color: #d1d8e6;
		}

		input[type=text],input[type=email],input[type=password]{
			width: 100%;
		}
		form{
			background-color: lightblue;
		}
		.tasto:hover{
			cursor: pointer;
			color:  forestgreen;
		}
		.w-50{
			margin: 0 auto;
			border-radius: 5%;
		}
		h4{
			border-radius: 5%;
		}
		#registration{
			display: none;
		}
		
	</style>
</head>

<body>

	
		<div class="ml-3 w-50 mb-5  w-100" id="registration">	
			<form action="registration.php" method="POST" accept-charset="utf-8" class="mt-5 w-50 p-3 text-secondary">
				<h4 class="bg-primary p-3 text-white">Registration Form</h4>
				<div>
					<label for="userName">Name</label>
				</div>
				<div>
					<input type="text" required name="userName">
				</div>
				<div>
					<label for="userEmail">Email</label>
				</div>
				<div>
					<input type="email" required name="userEmail">
				</div>
				<div>
					<label for="userPass">Password</label>
				</div>
				<div>
					<input type="password" required name="userPass">
				</div>
				<div class="mt-2 text-center">
					<input type="submit" name="submit" class="btn btn-primary" value="Sign up">
				</div>
				<h4 id="show_login" class="text-center mt-2 tasto">Are you already registered? LOG-IN now!!!</h4>
			</form>
		</div>

			<div class="ml-3 w-50 mb-5  w-100" id="login">				
				<form action="login.php" method="POST" accept-charset="utf-8" class="mt-5 w-50 p-3  text-secondary" >
					<h4 class="bg-primary p-3 text-white">Login Form</h4>
					<div>
						<label for="userEmail">Your Email</label>
					</div>
					<div>
						<input type="text" name="userEmail">
					</div>
					<div>
						<label for="userPass">Password</label>
					</div>
					<div>
						<input type="password"  name="userPass">
					</div>
					<div class="mt-2 text-center">
						<input type="submit" name="submit" class="btn btn-primary" value="Log in" class="w-30">
					</div>
					<h4 id="show_reg" class="text-center mt-2 tasto">Are you not registered yet? Register now!!!</h4>
				</form>

			</div>
   <!-- eraqui -->
	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<script>
		var registration = document.getElementById('registration');
		var login = document.getElementById('login');

		var show_reg = document.getElementById('show_reg');
		var show_login= document.getElementById('show_login');

		show_reg.addEventListener('click', function(){
			registration.style.display='block';
			login.style.display='none';
		});
		show_login.addEventListener('click', function(){
			registration.style.display='none';
			login.style.display='block';
		});
	</script>
</body>
</html>


