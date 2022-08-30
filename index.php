<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<h1>Silahkan Login</h1>
<body>
	<form action="cek_log.php" method="post">
		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type"text" placeholder="Enter Username" name="uname" required>
			<br>
			<label for="psw"><b>Password</b></label>
			<input type"password" placeholder="Enter Password" name="psw" required>
			<br>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</head>
</html>