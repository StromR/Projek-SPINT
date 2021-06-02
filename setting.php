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
          <a href="home.php" class="navbar-brand"><img src="assets/logo.svg" alt="logo spint"></a>
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
                  <a href="setting.php" class="nav-link active mt-5"><img src="assets/icon/profile-active.svg" height="50px" width="50px" alt="profile"> Profile</a>
                </li>
                <li>
                  <a href="account seting.php" class="nav-link"><img src="assets/icon/setting.svg" height="50px" width="50px" alt="setting"> Account</a>
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
         <div class="col px-0 flex mx-md-5">
          <div class="card-body tab-content">
          <div class="tab-pane active" id="profile">
           <div class="row align-items-center">
             <div class="col-sm-auto">
              <div class="container">
              <h1 style="color: #E9E7EC;">Your Profile Information</h1>
             </div>
             <div class="form-group">
               <label for="fullname">Full Name</label>
               <input type="text" class="form-control" id="fullName" value="Ridwan Kamil">
             </div>
             <div class="form-group">
              <label for="nick">Nick Name</label>
              <input type="text" class="form-control" id="fullName" value="Ridz">
            </div>
             <div class="form-group">
              <label for="bio">Bio</label>
              <input type="text" class="form-control" id="bio" value="your bio in here">
            </div>
            <div class="form-group">
              <label for="Loc">Location</label>
              <input type="text" class="form-control" id="Loc" value="Bandung, Jawa Barat, Indonesia">
            </div>
          </div>
        </div>
          
        <div class="row mt-5">
            <div class="col-sm-auto">
            <button type="button" class="btn btn-primary" id="update">Update Profile</button>
            <button type="reset" class="btn btn-light" id="reset">Reset Changes</button>
            </div>
          </div> 
          </div>
          </div>
         <!-- End of Content -->
        </div>
        </div>
    </div>
   
    <!-- Link Bootstrap JS -->
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>