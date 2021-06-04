<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Link Bootstrap CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Sidebar CSS -->
     <link href="css/simple-sidebar.css" rel="stylesheet">
 
     <!-- Link Index CSS -->
     <link href="css/login.css" rel="stylesheet">
 
     <!-- Link Google Font -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

     <link rel="icon" href="assets/logo.svg">
    
     <!-- Include the Dark theme sweetalert -->
     <link href="vendor/dark/dark.scss" rel="stylesheet">

     <script type="text/javascript">

        function myFn(){
            Swal.fire({
                    icon: 'error',
                    title: 'Email or Password',
                    text: 'Does not match',
                    });
        }
        </script>
     <title>Login</title>
</head>
<body class="main-bg">
    <div class="login-container text-c animated flipInX ">
            <div>
                <img src="assets/logo.svg" alt="">
            </div>
                <p class="text-whitesmoke">  </p>
            <div class="login-box">
                <form class="margin-t" method="post" enctype="multipart/form-data">
                    <div class="user-box">
                        <input type="email" required="" name="email" placeholder="Your Email">
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" required="" placeholder="Password">
                    </div>
                        <a><medium><input type="submit" name="login" value="SIGN IN"/></medium></a>
                    <hr>
                    <p class="text-whitesmoke text-center"><small>Do not have an account?
                    <a class="text-whitesmoke" href="signup.php"><medium>Sign Up</medium></a></small></p>
                </form>
                <p class="margin-t text-whitesmoke"><small> SPINT &copy; 2021</small> </p>
            </div>
        </div>


        <!-- Proses Login -->
        <?php
        include('includes/database.php');
            if(isset($_POST['login']))
            {
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                {
                    $result = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' and password='$password'");
                                    
                        $row = mysqli_fetch_array($result);
                        $count = mysqli_num_rows($result);				
                            if ($count == 0) 
                                {
                                    echo '<script>setTimeout(function(){ myFn(); }, 200);</script>'; 
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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>