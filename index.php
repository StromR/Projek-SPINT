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
        <a href="Profile.html"><img src="assets/img/rkpp.png" alt="profile picture" class="" id="foto"></a>
      </div>
      <div class="list-group" id="sidebar">
        <a href="index.html" class="list-group-item active bg-dark mx-sm-2" id="iconbarleft"><img
            src="assets/icon/home-active.svg" alt="home" class="mx-auto"> Home</a>
        <a href="#" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img src="assets/icon/chat.svg"
            alt="chat" class="mx-auto iconhome"> Chat</a>
        <a href="#" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img src="assets/icon/party.svg"
            alt="party" class="mx-auto"> Party</a>
        <a href="#" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img src="assets/icon/notif.svg"
            alt="notification" class="mx-auto"> Notification</a>
        <a href="Profile.html" class="list-group-item bg-dark mx-sm-2" id="iconbarleft">&nbsp;<img
            src="assets/icon/profile.svg" alt="profile" class="mx-auto" >&nbsp;&nbsp; Profile</a>
        <a href="setting.html" class="list-group-item bg-dark mx-sm-2" id="iconbarleft"><img
            src="assets/icon/setting.svg" alt="setting" class="mx-auto"> Setting</a>
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
                    <form action="#">
                      <div class="form-group mb-0">
                        <textarea class="form-control bg-dark" id="textarea-write" rows="2"
                          placeholder="Write here"></textarea>
                          <hr>
                          <input class="btn btn-outline-danger" id="right" type="button" value="Post" id="post"  onclick="showDiv()"/>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card-footer p-2">
                <div class="d-flex justify-content-between align-items-center text-center">
                  <div class="col">
                    <img class="text-center" src="assets/icon/photo.svg" alt="photo" class="mx-1 bg">
                    <input type="file" name="file" id="file" class="inputimage" onchange="readURL(this)"; />
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
            </div>

            <!-- New Item -->
            <div class="card my-3 bg-dark" id="newpost" style="display:none;">
              <div class="card-header bg-dark border-0 py-2">
                <div class="d-flex justify-content-between">
                  <div class="d-flex justify-content-between">
                    <a href="#">
                      <img class="rounded" src="assets/img/rkpp.png" width="45" alt="" />
                    </a>
                    <div class="ml-3">
                      <div class="h6 m-0">
                        <a href="#" class="bg-dark">Ridz</a>
                      </div>
                      <div class="text-muted h8 bg-dark">1 second ago</div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body pt-0 pb-2">
                <div id="text"></div>
              </div>
              <a href="#" class="pop">
                <img class="card-img-top rounded-0" src="" alt="your image" id="postimg">
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
                      <div class="col-xs-12" id="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-dark border-0 p-2">
                <div class="d-flex justify-content-between align-items-sm-start my-1">
                  <div class="col bg-dark">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/like-active.svg" alt=""> Like 100</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/comment.svg" alt=""> Comment</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/share.svg" alt=""> Share</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End New Item -->


            <!-- Item -->
            <div class="card my-3 bg-dark">
              <div class="card-header bg-dark border-0 py-2">
                <div class="d-flex justify-content-between">
                  <div class="d-flex justify-content-between">
                    <a href="#">
                      <img class="rounded" src="https://picsum.photos/80/80/?random" width="45" alt="" />
                    </a>
                    <div class="ml-3">
                      <div class="h6 m-0">
                        <a href="#" class="bg-dark">23Savage</a>
                      </div>
                      <div class="text-muted h8 bg-dark">2 minutes ago</div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body pt-0 pb-2" id="caption ">
                Hello. So today im doing 100 code days. But i fail on day 1 because i want to play ranked on DOTA......
              </div>
              <a href="#" class="pop">
                <img class="card-img-top rounded-0" src="assets/img/post.png" alt="post">
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
                        <p class="text-left"> Hello. So today im doing 100 code days. But i fail on day 1 because i want
                          to play ranked on DOTA and i'm not worried abou my college. I LOVE DOTA</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-dark border-0 p-2">
                <div class="d-flex justify-content-between align-items-sm-start my-1">
                  <div class="col bg-dark">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/like-active.svg" alt=""> Like 100</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/comment.svg" alt=""> Comment</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/share.svg" alt=""> Share</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->

            <!-- ITEM -->
            <div class="card my-3 bg-dark">
              <div class="card-header bg-dark border-0 py-2">
                <div class="d-flex justify-content-between">
                  <div class="d-flex justify-content-between">
                    <a href="#">
                      <img class="rounded" src="https://picsum.photos/80/81/?random" width="45" alt="" />
                    </a>
                    <div class="ml-3">
                      <div class="h6 m-0">
                        <a href="#" class="bg-dark">LordSenpai</a>
                      </div>
                      <div class="text-muted h8 bg-dark">5 minutes ago</div>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body pt-0 pb-2" id="caption ">
                I'm a minecraft veteran on SGCRAFT. There's an event to play
              </div>
              <a href="#" class="pop">
                <img class="card-img-top rounded-0" src="assets/img/minecraft.png" alt="post" id="postimg">
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
                        <p class="text-left"> I'm a minecraft veteran on SGCRAFT. There's an event to play</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-dark border-0 p-2">
                <div class="d-flex justify-content-between align-items-sm-start my-1">
                  <div class="col bg-dark">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/like-active.svg" alt=""> Like 100</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/comment.svg" alt=""> Comment 100</button>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-fbook btn-block btn-sm bg-dark mx-1" id="write-footer"><img
                        src="../assets/icon/share.svg" alt=""> Share</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->

          </div>
        </div>
        <!-- End Post -->

      </div>
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
  
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#postimg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
    function showDiv() {
    document.getElementById('newpost').style.display = "block";
    $('#text').html($('#textarea-write').val());
    } 
                 
  </script>

</body>

</html>