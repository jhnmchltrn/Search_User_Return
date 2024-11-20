<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
            max-width: 500px;
        }

        .container h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        a {
            color: #fff;
            background-color: #dc3545;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            margin-left: 10px;
            display: inline-block;
            text-align: center;
        }

        a:hover {
            background-color: #c82333;
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            form p {
                margin-bottom: 10px;
            }

            a {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="Pilot_Name">Pilot Name</label> 
			<input type="text" name="PilotName">
		</p>
		<p>
			<label for="Pilot_Name">Date Of Birth</label> 
			<input type="text" name="DateOfBirth">
		</p>
		<p>
			<label for="Pilot_Name">Email</label> 
			<input type="text" name="Email">
		</p>
		<p>
			<label for="Pilot_Name">Phone Number</label> 
			<input type="text" name="PhoneNumber">
		</p>
		<p>
			<label for="Pilot_Name">License Number</label> 
			<input type="text" name="LicenseNumber">
		</p>
		<p>
			<input type="submit" name="insertUserBtn">
			<A href="index.php">Cancel</A>
		</p>
	</form>
</body>
</html>
