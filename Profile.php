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

  <!-- Link Index CSS -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/profile.css" rel="stylesheet">
  <!-- Link Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">

  <link rel="icon" href="assets/logo.svg">
  <title>Spawn Point</title>
</head>

<body>
<?php include ('session.php');?>

  <!-- Wrapper -->
  <div id="wrapper">

  <!-- Left Sidebar -->
  <div class="bg-dark rounded" id="left-sidebar-wrapper">
    <div class="sidebar-brand text-center">
      <img src="assets/logo.svg" alt="logo spint" id="logo">
    </div>
    <div class="text-center">
      <a href="updatephoto.php"><img src="<?php echo $row['profile_picture'] ?>" alt="profile picture" class="rounded" id="foto" ></a>
      <p class="bg-dark"><?php echo $firstname ?></p>
    </div>
    <div class="list-group" id="sidebar">
      <a href="home.php" class="list-group-item list-group-item-action bg-dark mx-sm-2"><img
          src="assets/icon/home.svg" alt="home" class="mx-auto"> Home</a>
      <a href="#" class="list-group-item list-group-item-action bg-dark mx-sm-2"><img src="assets/icon/chat.svg"
          alt="chat" class="mx-auto"> Chat</a>
      <a href="#" class="list-group-item list-group-item-action bg-dark mx-sm-2"><img src="assets/icon/notif.svg"
          alt="notification" class="mx-auto"> Notification</a>
      <a href="profile.php" class="list-group-item list-group-item-action active bg-dark mx-sm-2">&nbsp;<img
          src="assets/icon/profile-active.svg" alt="profile" class="mx-auto">&nbsp;&nbsp; Profile</a>
      <a href="setting.php" class="list-group-item list-group-item-action bg-dark mx-sm-2"><img
          src="assets/icon/setting.svg" alt="setting" class="mx-auto"> Setting</a>
      <a href="logout.php" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img 
          src="assets/icon/logout.svg"alt="log out" class="mx-auto"> Log Out</a>
    </div>
  </div>
  
  <!-- End Left Sidebar -->
  <!-- Navbar -->
  <!-- <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="assets/logo.svg" alt="logo spint" id="logo"></a>
      <div class="input-group rounded">
        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text amber lighten-3" id="basic-text1"><i class="" aria-hidden="true"><img
                src="assets/icon/search.svg"></i></span>
        </div>
      </div>
    </div>
  </nav> -->
  <!-- End of Navbar -->

  <div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center rounded">
                <img src="<?php echo $row['profile_picture'] ?>" alt="Admin" width="100" height="100" class="rounded">
                <div class="mt-3">
                  <h4 id="wartek"><?php echo $firstname." ".$lastname ?></h4>
                  <p class="text-secondary mb-1"><?php echo $username ?></p>
                  <p class="text-muted font-size-sm">Mantan Pro Player</p>
                  <button class="btn btn-outline-primary">Recruit</button>
                  <button class="btn btn-outline-secondary">Message</button>
                </div>
              </div>
            </div>
          </div>

          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" id="latar">
                <h6 class="mb-0" id="wartek"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#E9E7EC" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                    </path>
                  </svg>Twitter</h6>
                <span class="text-secondary">@KamilUPIEDU</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" id="latar">
                <h6 class="mb-0" id="wartek"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#E9E7EC" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>Instagram</h6>
                <span class="text-secondary">@ridz</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" id="latar">
                <h6 class="mb-0" id="wartek"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#E9E7EC" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>Facebook</h6>
                <span class="text-secondary">Kamil</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" id="latar">
                <h6 class="mb-0" id="wartek"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#E9E7EC" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                      d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z" />
                  </svg>&ensp;Youtube</h6>
                <span class="text-secondary">Kamil Gaming</span>
              </li>
            </ul>
          </div>
        </div>


        <?php
		  	include('includes/database.php'); ?>

		  	 <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body" id="wartek">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Full Name</h6>
                </div>
                <div class="col-sm-9 text-primary">
                   <?php echo $firstname." ".$lastname ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-1">Username</h6>
                </div>
                <div class="col-sm-9 text-primary">
                  <?php echo $username ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-primary">
                  <?php echo $email ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Game</h6>
                </div>
                <div class="col-sm-9 text-primary">
                  <?php echo $game ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-primary">
                  Home
                </div>
              </div>
            </div>
          </div>

          <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3" id="wartek"><i>SKILLS</i></h6>
                  <small id="wartek">Dota 2</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small id="wartek">CS : GO</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 2%" aria-valuenow="2"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small id="wartek">Mobile Legends : Bang Bang</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small id="wartek">Feeding</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small id="wartek">Melawak</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3" id="wartek"><i>Team Experience</i></h6>
                  <div class="text-secondary">
                    None
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>