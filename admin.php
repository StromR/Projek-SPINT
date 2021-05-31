
<?php
    include ('session.php');
    $id = $_SESSION['id'];
    $query=mysqli_query ($con,"SELECT * FROM user WHERE user_id ='$id'");
    $row=mysqli_fetch_array($query);
    $email=$row['email'];

    if($email == "admin@spint.com" || $email == "admin2@spint.com")
							{					
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Kelompok 9 -->
  <!-- Guntur
         Goldly
         Naufal -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Sidebar CSS -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <!-- Link CSS -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/admin.css" rel="stylesheet">

  <!-- Link Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">

  <title>Spawn Point</title>
</head>

<body>

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Left Sidebar -->
    <div class="bg-dark rounded" id="left-sidebar-wrapper">
      <div class="sidebar-brand text-center">
        <img src="assets/logo.svg" alt="logo spint" id="logo">
      </div>
      <div class="text-center">
        <a href="updatephoto.php"><img src="<?php echo $row['profile_picture'] ?>" alt="profile picture" class="rounded" id="foto"></a>
        <p class="bg-dark"><?php echo $firstname ?></p>
      </div>
      <div class="list-group" id="sidebar">
        <a href="home.php" class="list-group-item active bg-dark mx-sm-2" id="iconbarleft"><img
            src="assets/icon/home-active.svg" alt="home" class="mx-auto"> Home</a>
        <a href="#" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img src="assets/icon/chat.svg"
            alt="chat" class="mx-auto iconhome"> Chat</a>
        <a href="#" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img src="assets/icon/notif.svg"
            alt="notification" class="mx-auto"> Notification</a>
        <a href="profile.php" class="list-group-item bg-dark mx-sm-2" id="iconbarleft">&nbsp;<img
            src="assets/icon/profile.svg" alt="profile" class="mx-auto" >&nbsp;&nbsp; Profile</a>
        <a href="setting.php" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img
            src="assets/icon/setting.svg" alt="setting" class="mx-auto"> Setting</a>
        <a href="logout.php" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img 
            src="assets/icon/logout.svg"alt="log out" class="mx-auto"> Log Out</a>
      </div>
    </div>
    <!-- End Left Sidebar -->



    <!-- Begin Page Content -->
    <div id="page-content-wrapper">
    <div class="content">
    
    <div class="container"> 
    
      <h2 class="mb-5">Table #8</h2>
      <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header" id="titlecard">
                        <h4>Data User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">ID</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Birthday</th>
              <th scope="col">Game</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            

             if(isset($_GET['search']))
             {   $con = mysqli_connect('localhost','root','','spintdb');

                 $filtervalues = $_GET['search'];
                 $query = "SELECT * FROM user WHERE CONCAT(username,email) LIKE '%$filtervalues%' ";
                 $query_run = mysqli_query($con, $query);

                 if(mysqli_num_rows($query_run) > 0)
                 {
                     foreach($query_run as $items)
                     {
                         ?>
                         <tr>
                             <td><?= $items['user_id']; ?></td>
                             <td><?= $items['username']; ?></td>
                             <td><?= $items['email']; ?></td>
                             <td><?= $items['birthday']; ?></td>
                             <td><?= $items['game']; ?></td>
                         </tr>
                         <?php
                     }
                 }
                 else
                 {
                     ?>
                         <tr>
                             <td colspan="4">No Record Found</td>
                         </tr>
                     <?php
                 }
             }
            ?>
          </tbody>
        </table>
      </div>


    </div>

  </div>

    </div>
    <!-- End Page Content -->>
    

  </div>
  <!-- End Wrapper -->
  <?php }
    else
    {
        header("location:404.php");
    }
  ?>

<!-- 
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div> -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 

</body>

</html>