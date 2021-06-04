					
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
							echo "<script>Swal.fire(
								'Good job!',
								'You clicked the button!',
								'success'
							  ); window.location='index.php'</script>";
						} 
					else if ($count > 0)
						{	
							if($row['email'] == "admin@spint.com" || $row['email'] == "admin2@spint.com")
							{	
								session_start();
								$_SESSION['id'] = $row['user_id'];
								header("location:admin.php");
							}
							else 
							{
								session_start();
								$_SESSION['id'] = $row['user_id'];
								header("location:home.php");
							}
						}
		}				
	}
?>
