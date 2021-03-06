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
    
    <!-- Link Index CSS -->
    <link href="css/index1.css" rel="stylesheet">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <title>Setting</title>
</head>

<body>
<?php include ('session.php');?>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid">
          <a href="index.html" class="navbar-brand"><img src="assets/logo.svg" alt="logo spint"></a>
                <div class="input-group rounded" >
                  <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <span class="input-group-text amber lighten-3" id="basic-text1"><i class="" aria-hidden="true"><img src="assets/icon/search.svg"></i></span>
                  </div>
                </div>
        </div>
    </nav>
    <!-- End of Navbar -->


    
    <div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">
        <!-- Sidebar -->
        <aside class="col-12 col-md-3 col-xl-2 p-0 flex-shrink-1 rounded sticky-top" id="sidebarleft">
          <nav class="navbar navbar-expand-md flex-md-column flex-row
           py-2 sticky-top rounded" id="sidebar">

            <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav"
            aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse proder-last" id="nav">
              <ul class="navbar-nav flex-column w-100 justify-content-center">
                <li>
                  <a href="setting.php" class="nav-link mt-5"><img src="assets/icon/profile.svg" height="50px" width="50px" alt="profile"> Profile</a>
                </li>
                <li>
                  <a href="account seting.php" class="nav-link active"><img src="assets/icon/setting_active.svg" class="nav-link active" height="50px" width="50px" alt="setting"> Account</a>
                </li>
                <li>
                  <a href="security.php" class="nav-link"><img src="assets/icon/security.svg" height="50px" width="50px" alt="security"> Security</a>
                </li>
                <li>
                  <a href="notif.php" class="nav-link"><img src="assets/icon/notif.svg" height="50px" width="50px" alt="notification"> Notification</a>
                </li>
                <hr><hr><hr><hr><hr><hr>
                <li>
                  <a href="home.php" class="nav-link"><img src="assets/icon/Back.svg" height="50px" width="50px" alt="back"> Back</a>
                </li>
              </ul>
            </div>
          </nav>
        </aside>
         <!-- End of Sidebar -->
         

         <!-- Content -->
         <main class="col px-0 flex mx-md-5">
          <div class="card-body tab-content">
          <div class="tab-pane active" id="profile">
           <div class="row align-items-center">
             <div class="col-sm-auto" style="color: white;">
              <div class="container">
              <h1>Account Setting</h1>
             </div>
             <div class="form-group" style="color: white;">
               <label for="Username">Username</label>
               <input type="text" class="form-control" id="Username" value="Ridz">
               <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
             </div>
             <div class="form-group">
                <label class="d-block text-danger">Delete Account</label>
                <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
              </div>
              <button class="btn btn-danger" type="button">Delete Account</button>
          </div>
           </div>
          </div>
          </div>
         <!-- End of Content -->
        </div>
    </div>
   

    <!-- Link Bootstrap JS -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>