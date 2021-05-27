					
<?php
include('includes/database.php');
	if(isset($_POST['submit']))
	{
			$email=$_POST['email'];
			$password=$_POST['password'];
		{
			$result = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' and password='$password'");
							
				$row = mysqli_fetch_array($result);
				$count = mysqli_num_rows($result);				
					if ($count == 0) 
						{
							echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
						} 
					else if ($count > 0)
						{	
							session_start();
							
							if(mysqli_query($con,"SELECT * FROM user WHERE user_id = 1 OR user_id = 2"))
							{
								$_SESSION['id'] = $row['user_id'];
								header("location:https://www.google.com/");
							}
							else {
							$_SESSION['id'] = $row['user_id'];
							header("location:home.php");
							}
						}
		}				
	}
?>