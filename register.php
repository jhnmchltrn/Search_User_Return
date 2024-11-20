<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f4f4f9;
			color: #333;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			flex-direction: column;
		}

		.container {
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 400px;
		}

		.container h1 {
			margin-bottom: 20px;
			color: #333;
			text-align: center;
		}

		/* Styling messages */
		.message {
			text-align: center;
			margin-bottom: 20px;
			font-size: 1rem;
		}

		.message.success {
			color: green;
		}

		.message.error {
			color: red;
		}

		/* Form styling */
		form {
			display: flex;
			flex-direction: column;
		}

		form p {
			margin-bottom: 15px;
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"], 
		input[type="password"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 1rem;
		}

		input[type="submit"] {
			background-color: #007BFF;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 4px;
			font-size: 1rem;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #0056b3;
		}

		/* Link styling */
		p a {
			color: #007BFF;
			text-decoration: none;
		}

		p a:hover {
			text-decoration: underline;
		}

		/* Responsive design */
		@media (max-width: 480px) {
			.container {
				padding: 15px;
			}

			form p {
				margin-bottom: 10px;
			}
		}
	</style>
<body>
	<h1>Register here!</h1>

	<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

		if ($_SESSION['status'] == "200") {
			echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
		}

		else {
			echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";	
		}

	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
	?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username">
		</p>
		<p>
			<label for="username">First Name</label>
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="username">Last Name</label>
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="username">Password</label>
			<input type="password" name="password">
		</p>
		<p>
			<label for="username">Confirm Password</label>
			<input type="password" name="confirm_password">
		</p>
		<p>
			<input type="submit" name="insertNewUserBtn">
			<p> Already have an account? <a href ="login.php">Login here!</a></p>
		</p>
	</form>
</body>
</html>