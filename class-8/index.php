<!DOCTYPE html>
<html>
<head>
	<title>Age Calculator</title>
</head>
<body>
	<h2>Enter Your Birthdate</h2>
	<form>
		<label>Month</label>
		<input type="number" name="month" min="1" max="12" required><br><br>

		<label>Day</label>
		<input type="number" name="day" min="1" max="31" required><br><br>

		<label>Year</label>
		<input type="number" name="year" min="1900" max="<?php echo date('Y'); ?>" required><br><br>

		<button type="submit" name="submit">Calculate Age</button>
	</form>

	<div id="result"></div>

	<script>
		document.querySelector('form').addEventListener('submit', function(e) {
			e.preventDefault(); // Prevent form submission

			var dob = new Date(document.querySelector('input[name="year"]').value,
							   document.querySelector('input[name="month"]').value - 1,
							   document.querySelector('input[name="day"]').value);

			var ageInMs = Date.now() - dob.getTime();
			var ageDate = new Date(ageInMs);
			var age = Math.abs(ageDate.getUTCFullYear() - 1970);

			document.querySelector('#result').innerHTML = 'You are ' + age + ' years old.';
		});
	</script>
</body>
</html>
