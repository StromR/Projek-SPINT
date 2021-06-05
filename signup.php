<!DOCTYPE html>
<html>

<head>
	<title>Sign Up - SPINT</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link Index CSS -->
	<link rel="stylesheet" type="text/css" href="css/signup.css">

	<!-- Vendor CSS-->
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Link Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<script type="text/javascript">

        function wrongEmail(){
            Swal.fire({
                    icon: 'error',
                    title: 'Email',
                    text: 'Already taken',
                    });
        }
		function wrongPassword(){
            Swal.fire({
                    icon: 'error',
                    title: 'Password',
                    text: 'Does not match',
                    });
        }
		function singupSuccess(){
            Swal.fire(
					'Account successfully created!',
					'',
					'success'
					)
        }
    </script>

	<link rel="icon" href="assets/logo.svg">
</head>

<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
		<div class="wrapper wrapper--w680">
			<div class="card card-4">
				<div class="card-body">
					<h2 class="title">Sign Up</h2>
					<form method="POST" enctype="multipart/form-data">
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">First Name</label>
									<input class="input--style-4" type="text" name="firstname" required>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Last Name</label>
									<input class="input--style-4" type="text" name="lastname" required>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Username</label>
									<input class="input--style-4" type="text" name="username" required>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Repeat Username</label>
									<input class="input--style-4" type="text" name="username2" required>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Birthday</label>
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
										<option value="01">January</option>
										<option value="02">Febuary</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
									<select name=year style="font-size:18px;" required>
										<?php
										$year = 1901;
										while ($year <= 2021) {
											echo "<option> $year
					  </option>";
											$year++;
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Gender</label>
									<div class="p-t-10">
										<label class="radio-container m-r-45">Male
											<input type="radio" name="gender" required>
											<span class="checkmark"></span>
										</label>
										<label class="radio-container">Female
											<input type="radio" name="gender" required>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Game</label>
									<input class="input--style-4" type="text" name="game" required>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">MMR</label>
									<input class="input--style-4" type="text" name="mmr" required>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Your email address</label>
									<input class="input--style-4" type="text" name="email" required>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Repeat email</label>
									<input class="input--style-4" type="text" name="email2" required>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Password</label>
									<input class="input--style-4" type="password" name="password" required>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Repeat Password</label>
									<input class="input--style-4" type="password" name="password2" required>
								</div>
							</div>
						</div>
						<div class="p-t-15">
							<button class="btn btn--radius-2 btn--red" type="submit" name="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	</form>

	<?php
	include ('includes/database.php');
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$username2 = $_POST['username2'];
		$birthday = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
		$gender = $_POST['gender'];
		$game = $_POST['game'];
		$mmr = $_POST['mmr'];
		$email = $_POST['email'];
		$email2 = $_POST['email2'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		// Autocommit
		mysqli_autocommit($con, FALSE);


		$sql = mySQLi_query($con, "select * from user WHERE email='$email'");
		$row = mySQLi_num_rows($sql);
		if ($row > 0) {
			echo '<script>setTimeout(function(){ wrongEmail(); }, 200);</script>';
		} elseif ($password != $password2) {
			echo '<script>setTimeout(function(){ wrongPassword; }, 200);</script>';
		} else {
			mySQLi_query($con, "
			call TambahSignUp ('$firstname','$lastname','$username','$username2','$birthday','$gender','$game', $mmr,'$email','$email2','$password','$password2')");

			// Commit transaction
			mysqli_commit($con);
			if (mysqli_commit($con)) {
				echo '<script>setTimeout(function(){ signupSuccess(); }, 200); window.location="index.php"</script>';
			}
		}
	}
	?>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/global.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>