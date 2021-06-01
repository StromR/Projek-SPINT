<!DOCTYPE html>
<html>

<head>
	<title>Sign Up - SPINT</title>
	
	<!-- Link Bootstrap CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Sidebar CSS -->
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<!-- Link Index CSS -->
	<link rel="stylesheet" type="text/css" href="css/signup.css">

	<!-- Link Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

	<link rel="icon" href="assets/logo.svg">
</head>

<body>

	<div id="container">
		<div class="sign-in-form">

			<h2>Sign up</h2>
			<b>All fields are required.</b>
			<br />

			<fieldset class="sign-up-form-1">
				<form method="post" action="signup_form.php" enctype="multipart/form-data">
					<table cellpadding="5" cellspacing="5">
						<tr>
							<td><label>First name*</label></td>
							<td><label>Last name *</label></td>
						</tr>
						<tr>
							<td><input type="text" name="firstname" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
							<td><input type="text" name="lastname" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
						</tr>
						<tr>
							<td><label>Username*</label></td>
							<td><label>Repeat username*</label></td>
						</tr>
						<tr>
							<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
							<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
						</tr>
						<tr>
							<td colspan="2">Note: No one can follow your username.</td>
						</tr>
					</table>
			</fieldset>

			<br />

			<fieldset class="sign-up-form-1">
				<legend>Profile information</legend>
				<table cellpadding="5" cellspacing="5">
					<tr>
						<td><label>Birthday</label></td>
						<td>
							<select name=day style="font-size:18px;" required>
								<?php

								$day = 1;
								while ($day <= 31) {
									echo "<option> $day
					  </option>";
									$day++;
								}
								?>
							</select>
							<select name=month style="font-size:18px;" required>
								<option>January</option>
								<option>Febuary</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
							<select name=year style="font-size:18px;" required>
								<?php
								$year = 1901;
								while ($year <= 2014) {
									echo "<option> $year
					  </option>";
									$year++;
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Gender</label></td>
						<td>
							<label>Male</label><input type="radio" name="gender" value="male" required />
							<label>Female</label><input type="radio" name="gender" value="female" required />
						</td>
					</tr>
					<tr>
						<td><label>Game*</label></td>
						<td>
							<label>Mobile Legend</label><input type="radio" name="game" value="Mobile Legend" required />
							<label>Dota 2</label><input type="radio" name="game" value="Dota 2" required />
							<label>CSGO</label><input type="radio" name="game" value="CSGO" required />
							<label>Valorant</label><input type="radio" name="game" value="Valorant" required />
						</td>
					</tr>
				</table>
			</fieldset>

			<br />

			<fieldset class="sign-up-form-1">
				<legend>Log in information*</legend>
				<table cellpadding="5" cellspacing="5">
					<tr>
						<td><label>Your email address*</label></td>
						<td><label>Repeat email *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
						<td><input type="text" name="email2" class="form-1" title="Enter your lastname" required /></td>
					</tr>
					<tr>
						<td colspan="2" class="text-secondary mb-1" >Note: no-one can see your email address.</td>
					</tr>
					<tr>
						<td><label>Password*</label></td>
						<td><label>Repeat password*</label></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Enter your password....." class="form-1" title="Enter your username" required /></td>
						<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
					</tr>
					<tr>
						<td colspan="2" class="text-secondary mb-1">Note: no-one else can see your password.</td>
					</tr>
				</table>
			</fieldset>

			<br />

			<strong style="color: whitesmoke;">Yes, I have read and I accept the <a href="#">Terms of Use</a> and the <a href="#">Privacy Statement</a>.</strong>

			<br />
			<br />
			<div class="text-center" >
			<input type="submit" name="submit" value="Agree & Continue" class="btn btn-outline-danger"title="Log in" />
			</div>
			
			<br>
			</form>

		</div>
	</div>

</body>

</html>