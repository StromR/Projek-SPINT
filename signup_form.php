<?php
	include ('includes/database.php');
	
	if (isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$username2=$_POST['username2'];
		$birthday=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
		$gender=$_POST['gender'];
		$game=$_POST['game'];
		$mmr=$_POST['mmr'];
		$email=$_POST['email'];
		$email2=$_POST['email2'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
			
			// Autocommit
			mysqli_autocommit($con,FALSE);


			$sql=mySQLi_query($con,"select * from user WHERE email='$email'");
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			elseif($password != $password2)
			{
			echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
			}else
		{
			mySQLi_query($con,"
			call TambahSignUp ('$firstname','$lastname','$username','$username2','$birthday','$gender','$game', $mmr,'$email','$email2','$password','$password2')");
			
			// Commit transaction
			mysqli_commit($con);
			if (mysqli_commit($con)) {
			echo "<script>alert('Account successfully created!'); window.location='index.php'</script>";}
		}
			
	}
	
?>