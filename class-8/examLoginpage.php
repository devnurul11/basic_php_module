<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = $_POST["email"];
			$password = $_POST["password"];
			
			if(empty($email) || empty($password)) {
				echo "<p style='color: red;'>Both fields are required.</p>";
			}
			else {
				// You can add code here to validate the user's login credentials against a database or perform other actions as needed.
				// For this example, we'll just assume that the login is successful and redirect to the welcome page.
				header("Location: welcome.php?first_name=John");
				exit();
			}
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="email">Email Address:</label>
		<input type="email" name="email" required><br><br>
		
	
