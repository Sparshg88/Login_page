<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Page</title>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
	<div class="container">
		<div class="form-container sign-up-container">
			<form action="database.php" method="POST">
				<h1>Create Account</h1>
				<input name="name"type="text" placeholder="Name" required />
				<input name="email"type="email" placeholder="Email" required />
				<input name="pass"type="password" placeholder="Password" required />
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="fetch.php" method="POST">
				<h1>Sign in</h1>
				<input name="email"type="email" placeholder="Email" required />
				<input name="pass"type="password" placeholder="Password" required />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
	</div>
	<script src="app.js"></script>
</body>
</html>
