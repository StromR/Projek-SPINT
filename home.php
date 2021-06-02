<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

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

  <!-- Link Index CSS -->
  <link href="css/index.css" rel="stylesheet">

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

    <!-- Right Sidebar -->
    <div class="rounded text-left" id="right-sidebar-wrapper">
      <div class="input-group rounded text-left align-items-lg-start">
        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text amber lighten-3" id="basic-text1"><i class="" aria-hidden="true"><img
                src="assets/icon/search.svg"></i></span>
        </div>
      </div>

      <!-- Tournament -->
      <div class="card-body rounded" id="tournament">
        <h4 class="text-center">Tournament</h4>
        <ul class="list-group">
          <li class="list-group-item" id="list-tour"><img src="assets/icon/dota.svg" alt="dota" class="w-25 mx-1">
            The International</li>
          <li class="list-group-item" id="list-tour"><img src="assets/icon/csgo.svg" alt="cssgo" class="w-25 mx-1">
            CSGO Major</li>
          <li class="list-group-item" id="list-tour"><img src="assets/icon/ml.svg" alt="ml" class="w-25 mx-1"> M2
          </li>
        </ul>
      </div>

      <!-- Transfer -->
      <div class="card-body rounded" id="transfer">
        <h4 class="text-center">Transfer</h4>
        <ul class="list-group">
          <li class="list-group-item" id="list-tour"><img src="assets/trf-1.png" alt="ml" class="w-100 mx-1"></li>
          <li class="list-group-item" id="list-tour"><img src="assets/trf-2.png" alt="csgo" class="w-100 mx-1"></li>
          <li class="list-group-item" id="list-tour"><img src="assets/trf-3.png" alt="dota" class="w-100 mx-1"></li>
        </ul>
      </div>
    </div>
    <!-- End Right Sidebar -->


    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <button class="btn btn-primary" id="left-menu-toggle"></button>
              <button class="btn btn-primary" id="right-menu-toggle"></button>
            </nav>

            <div class="container text-center">
              <div class="row">
                <div class="col-sm">
                  <img src="assets/img/Game Item1.png" alt="dota">
                </div>
                <div class="col-sm">
                  <img src="assets/img/Game Item2.png" alt="csgo">
                </div>
                <div class="col-sm">
                  <img src="assets/img/Game Item3.png" alt="ml">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Post -->
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="card my-5 bg-dark ">
              <div class="card-body py-5">
                <div class="d-flex">
                  <div>
                    <img class="rounded" width="50" src="assets/icon/write.svg">
                  </div>
                  <div class="col bg">
                    <form method="post" action="post.php" enctype="multipart/form-data">
                      <div class="form-group mb-0">
                        <textarea class="form-control bg-dark" id="textarea-write" name="content" rows="2"
                          placeholder="Write here"></textarea>
                      </div>
                      <div class="card-footer p-2">
                    <div class="d-flex justify-content-between align-items-center text-center">
                      <div class="col">
                        <img class="text-center" src="assets/icon/photo.svg" alt="photo" class="mx-1 bg">
                        <input type="file" name="image" id="file" class="inputimage" />
                        <label for="file">Photo</label>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-fposts btn-block btn-sm bg-dark" id="write-footer"><img
                            src="assets/icon/location.svg" alt="location" class="mx-1 bg"> Share location</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-fposts btn-block btn-sm bg-dark" id="write-footer"><img
                            src="assets/icon/tag.svg" alt="photo" class="mx-1 bg"> Tag Players</button>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-outline-danger" id="right" name="Submit" value="Log out">Submit</button>
                  </form> 
                  </div>
                  
                  </div>
                </div>
            </div>
          
        

            <!-- New Item -->
            <?php
              include("includes/database.php");
                  $query=mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
                  while($row=mySQLi_fetch_array($query)){
                    $posted_by = $row['firstname']." ".$row['lastname'];
                    $location = $row['post_image'];
                    $profile_picture = $row['profile_picture'];
                    $content=$row['content']; 
                    $post_id = $row['post_id'];
                    $time=$row['created'];	
            ?>	
            <!-- Item -->
            <div class="card my-3 bg-dark">
              <div class="card-header bg-dark border-0 py-2">
                <div class="d-flex justify-content-between">
                  <div class="d-flex justify-content-between">
                    <a href="#">
                      <img class="rounded" src="<?php echo $profile_picture ?>" width="45" alt="" />
                    </a>
                    <div class="ml-3">
                      <div class="h6 m-0">
                        <a href="#" class="bg-dark"><?php echo $posted_by ?></a>
                      </div>
                      <div class="text-muted h8 bg-dark"><?php echo $time = time_stamp($time); ?>o</div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="delete_post.php">Delete</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body pt-0 pb-2" id="caption ">
               <?php echo $row['content']; ?>
              </div>
              <a href="#" class="pop">
                <img class="card-img-top rounded-0" src="<?php echo $location ?>" alt="post" id="postimg" style="width: 100%;">
              </a>
              <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" data-dismiss="modal">
                  <div class="modal-content bg-dark w">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal"><span
                          aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <img src="" class="imagepreview" style="width: 100%;">
                    </div>
                    <div class="modal-footer">
                      <div class="col-xs-12">
                        <?php echo $row['content']; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-dark border-0 p-2">
                <div class="d-flex justify-content-between align-items-sm-start my-1">
                  <div class="col bg-dark">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="assets/icon/like-active.svg" alt=""> Like 100</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="assets/icon/comment.svg" alt=""> Comment</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="assets/icon/share.svg" alt=""> Share</button>
                  </div>
                </div>
              </div>
              
            </div>
            <?php
            }
            ?>
           

          </div>
           <!-- End Item -->


        </div>
         <!-- End Post -->


  </div>
  <!-- End Page Content -->
  </div>
  <!-- End Wrapper -->

  

  <!-- Loader -->
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Javascript -->
  <script>
      $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
    $("#left-menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("left-toggled");
    });
    $("#right-menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("right-toggled");
    });
    $(function () {
      $('.pop').on('click', function () {
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');
      });
    });               
  </script>

</body>

</html>