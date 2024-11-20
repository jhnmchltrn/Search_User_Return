<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 20px;
		}
		h1 {
			color: #d9534f; /* Bootstrap Danger color */
			text-align: center;
		}
		.container {
			border: 2px solid red;
			background-color: #ffcbd1;
			padding: 20px;
			border-radius: 5px;
			max-width: 500px;
			margin: 20px auto;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}
		h2 {
			color: #333;
			margin: 10px 0;
		}
		.deleteBtn {
			text-align: right;
			margin-top: 20px;
		}
		input[type="submit"], a {
			background-color: #f69697;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			text-decoration: none; /* Remove underline from the link */
			margin-left: 10px;
			cursor: pointer;
			display: inline-block;
		}
		input[type="submit"]:hover, a:hover {
			background-color: #d9534f; /* Darker red on hover */
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>Pilot Name: <?php echo $getUserByID['PilotName']; ?></h2>
		<h2>Date Of Birth: <?php echo $getUserByID['DateOfBirth']; ?></h2>
		<h2>Email: <?php echo $getUserByID['Email']; ?></h2>
		<h2>Phone Number: <?php echo $getUserByID['PhoneNumber']; ?></h2>
		<h2>License Number: <?php echo $getUserByID['LicenseNumber']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
				<a href ="index.php" style="background-color: #f69697; border-style: solid;">Cancel</a>
			</form>			
		</div>	

	</div>
</body>
</html>
