<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #e0f7fa; /* Light blue background */
			margin: 0;
			padding: 20px;
		}
		h1 {
			color: #0277bd; /* Dark blue for headings */
			text-align: center;
		}
		a {
			color: #fff;
			background-color: #0288d1; /* Blue button color */
			padding: 10px 15px;
			border-radius: 5px;
			text-decoration: none;
			margin: 0 5px;
		}
		a:hover {
			background-color: #0277bd; /* Darker blue on hover */
		}
		.greeting {
			margin-bottom: 20px;
		}
		form {
			text-align: center;
			margin-bottom: 20px;
		}
		input[type="text"] {
			padding: 10px;
			border: 1px solid #0288d1;
			border-radius: 5px;
			margin-right: 5px;
		}
		input[type="submit"] {
			background-color: #0288d1; /* Submit button color */
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0277bd; /* Darker blue on hover */
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		th, td {
			border: 1px solid #0288d1; /* Table border color */
			padding: 10px;
			text-align: left;
		}
		th {
			background-color: #0288d1; /* Header background color */
			color: white;
		}
		tr:nth-child(even) {
			background-color: #b2ebf2; /* Light blue for even rows */
		}
		tr:hover {
			background-color: #80deea; /* Highlight row on hover */
		}
	</style>
</head>
<body>
	<div class="greeting" style="text-align: center;">
		<h1 style="text-align: center;">Hello theree! Welcome, <?php echo $_SESSION['username']; ?></h1>
		<h1><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></h1>	
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here">
		<input type="submit" name="searchBtn">
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
    <Br>
	<p><a href="insert.php">Insert New User</a></p>

	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>Pilot Name</th>
			<th>Date Of Birth </th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>License Number</th>
			<th>Submission Date</th>
			<th>Action</th>
		</tr>

		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllUsers = getAllUsers($pdo); ?>
				<?php foreach ($getAllUsers as $row) { ?>
					<tr>
						<td><?php echo $row['PilotName']; ?></td>
						<td><?php echo $row['DateOfBirth']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['PhoneNumber']; ?></td>
						<td><?php echo $row['LicenseNumber']; ?></td>
						<td><?php echo $row['SubmissionDate']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAUser =  searchForAUser($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAUser as $row) { ?>
					<tr>
						<td><?php echo $row['PilotName']; ?></td>
						<td><?php echo $row['DateOfBirth']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['PhoneNumber']; ?></td>
						<td><?php echo $row['LicenseNumber']; ?></td>
						<td><?php echo $row['SubmissionDate']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
		
	</table>
</body>
</html>