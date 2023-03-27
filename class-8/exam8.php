<!-- registition page -->
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
    

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$first_name = $_POST["first_name"];
			$last_name = $_POST["last_name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];
			
			if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p style='color: red;'>All fields are required.</p>";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p style='color: red;'>Invalid email format.</p>";
			}
			else if($password != $confirm_password) {
				echo "<p style='color: red;'>Passwords do not match.</p>";
			}
			else {
				echo "<p style='color: green;'>Registration successful.</p>";
				// You can add code here to store the user's information in a database or perform other actions as needed.
			}
		}
	?>
    
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" required><br><br>
		
		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" required><br><br>
		
		<label for="email">Email Address:</label>
		<input type="email" name="email" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>
		
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>
		
		<input type="submit" value="Register">
	</form>
</body>
</html>
