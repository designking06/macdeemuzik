<?php
function getHead(){
  ?>
  <head>
  <title>Mac Dee Muzik :: Musician</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/new_w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style>
  h1,h2,h3,h4{
    font-family: 'Molle', cursive;
  }
  body,p{
    font-family: 'Permanent Marker', cursive;
  }
  </style>
  <div id="bg" class="container-fluid w3-white w3-text-white text-center" style="min-height:100%;max-width:100%;background-image:url(img/_MG_0175.JPG);background-position:left;background-size:2400px 1700px;background-size:no-repeat;">
  <div class="text-center w3-black" style="padding:30 0 0 0;">
    <h1 id="font">MaC Dee Muzik</h1>
    <p style="padding:0 0 20 0">The Official Site</p>
  <!-- Social -->
  <div id="social" class="w3-padding container-fluid w3-yellow text-center">
    <div class="row w3-hide-large w3-hide-medium" style="max-width:80%;margin:auto;" onclick="document.getElementById('smallSocial').style.display='block'">Social</div>
    <div class="row w3-hide-small" style="max-width:40%;margin:auto;">
      <div id="0" class="col-sm-3 w3-padding w3-hover-blue"><img src="../favicon/insta_glyph.png" height="25" width="25"/></div>
      <div id="1" class="col-sm-3 w3-padding w3-hover-blue"><img src="../favicon/fb_glyph2.png" height="30" width="30"/></div>
      <div id="2" class="col-sm-3 w3-padding w3-hover-blue"><img src="../favicon/soundcloud_glyph.png" height="30" width="30"/></div>
      <div id="3" class="col-sm-3 w3-padding w3-hover-blue"><img src="../favicon/spotify_glyph.png" height="25" width="25"/></div>
    </div>
  </div>
  <!-- Banner Picture -->
  <div id="hero" class="container-fluid" style="min-height:30%;background-image:url(img/hero2.png);background-size:1366px 340px;background-position:center;"></div>
  <!-- Navigation -->
  <div class="w3-padding container-fluid w3-yellow text-center">
    <div class="row w3-hide-large w3-hide-medium" style="max-width:80%;margin:auto;" onclick="document.getElementById('smallNav').style.display='block'">Menu</div>
    <div class="row w3-hide-small" style="max-width:80%;margin:auto;">
      <div id="1" class="col-sm-4"><a href="video.php"><h4>Videos</h4></a></div>
            <div id="0" class="col-sm-4 w3-border-bottom"><a href="index.php"><h4>Home</h4></a></div>
      <div id="2" class="col-sm-4"><a href="music.php"><h4>Musik</h4></a></div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div id="smallNav" class="container modal row w3-hide-large w3-black" style="display:none;height:100%;padding-top:40%;vertical-align:middle;">
    <div class="w3-modal-content w3-black">
        <div class="col-sm-12 text-center w3-red w3-padding" onclick="document.getElementById('smallNav').style.display='none'">X</div>
        <div class="col-sm-12 w3-border-bottom"><a href="index.php"><h1>MaC Dee Muzik</h1></a></div><br>
        <div id="0" class="col-sm-3"><a href="index.php"><h4>Home</h4></a></div>
        <div id="1" class="col-sm-3"><a href="video.php"><h4>Videos</h4></a></div>
        <div id="2" class="col-sm-3"><a href="music.php"><h4>Musik</h4></a></div>
        <div id="3" class="col-sm-3"><a href=""><h4>Blog</a></h4></div>
    </div>
  </div>
<!-- Mobile Social Media Menu -->
  <div id="smallSocial" class="container modal row w3-hide-large w3-black" style="display:none;height:100%;padding-top:40%;vertical-align:middle;margin:auto;">
    <div class="w3-modal-content w3-black">
      <div class="col-sm-12 text-center w3-red w3-padding" onclick="document.getElementById('smallSocial').style.display='none'">X</div>
      <div id="0" class="col-sm-3 w3-padding w3-blue w3-hover-yellow"><img src="../favicon/insta_glyph.png" height="25" width="25"/></div>
      <div id="1" class="col-sm-3 w3-padding w3-blue w3-hover-yellow"><img src="../favicon/fb_glyph2.png" height="30" width="30"/></div>
      <div id="2" class="col-sm-3 w3-padding w3-blue w3-hover-yellow"><img src="../favicon/soundcloud_glyph.png" height="30" width="30"/></div>
      <div id="3" class="col-sm-3 w3-padding w3-blue w3-hover-yellow"><img src="../favicon/spotify_glyph.png" height="25" width="25"/></div>
    </div>
  </div>
  <!-- End Nav -->
</div>
  <?php
}
//Sticky Navigation
function getNav(){
  ?>
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="admin.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>
    <img src="images/CCAio.png" class="" style="height:23px;width:75px" alt="Avatar">
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
    <a href="comp.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">12</span></button>
      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
        <a href="#" class="w3-bar-item w3-button">One new friend request</a>
        <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
        <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
      </div>
    </div>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Logout</a>
    <a href="comp.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
      <img src="images/CCAio.png" class="w3-circle" style="height:23px;width:60px" alt="Avatar">
    </a>
   </div>
  </div>
  <?php
}

function getNavMobile(){
  ?>
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>
  <?php
}

function getFooter() {
  ?>
  <footer class="container-fluid w3-black">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-4">
          <h3>Manage:</h3>
            <ul style="list-style:none">
              <a href="clients.php"><li>Clients</li></a>
              <a href="media.php"><li>Media</li></a>
              <a href="pns.php"><li>Products</li></a>
              <a href="comp.php"><li>Settings</li></a>
            </ul>
        </div>
        <div class="col-sm-4">
          <h3>Go To:</h3>
            <ul style="list-style:none">
              <a href="admin.php#tasks"><li>Tasks</li></a>
              <a href=".php"><li>Forum</li></a>
              <a href="concerns.php"><li>Submit QCC</li></a>
            </ul>
        </div>
        <div class="col-sm-4">
          <h3>Contact:</h3>
            <ul style="list-style:none">
              <a href=""><li>Email:</li></a>
              <a href=""><li>Phone</li></a>
              <a href=""><li>Location: North Carolina</li></a>
            </ul>
        </div>
      </div>
    </div>
  </footer>
  <?php
}
?>
