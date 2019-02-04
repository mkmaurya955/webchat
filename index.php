<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
			
		<h2>login here</h2>
			<form method="post" action="login.php">
				<label><br>Username:<br></label>
				<input type="text" name="uname" placeholder="enter username"><br>
				<label><br>Password:<br></label>
				<input type="text" name="pass" placeholder="enter Password"><br><br>
				<button style="background-color: #6495ed; color: white" type="submit">Login</button>
			</form>


			<form action="signup.php" method="post">
				<h2>do not have an account sign up here</h2>
				<label>Username: </label>
				<input type="text" name="uname" placeholder="Username"><br><br>
				<label>Email: </label>
				<input type="text" name="email" placeholder="Email"><br><br>
				<label>Password: </label>
				<input type="password" name="password" placeholder="Password"><br><br>
				<button style="background-color: #6495ed; color: white" type="submit">Signup</button>
				
				
			</form>

		</div>
		
	</div>

</body>
</html>