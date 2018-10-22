<?php
include 'inc/get.inc.php';
include 'inc/bloginfo.php';
getHead();
?>

<script type="text/javascript" src="//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js"></script>
<div class="container">
<br>
<!-- Bio -->
<div class="container">
  <div class="row text-center"><h1>Who Is <?php echo $artist;?>?</h1></div>
  <div class="row text-center"><?php echo $artistBio;?></div>
</div>
<!-- Content -->
<!-- Featured -->
<div class="container">
  <div class="row"><h1>Featured Music</h1></div>
  <div class="row">Stream more, go to <a href="music.php">Musik Page</a></div>
    <hr class="w3-clear">
</div>
<!--Performances -->
<div class="container" style="width:100%;">
  <div class="row">
    <h1>Performances</h1>
  </div>
  <div class="row">
    <div class="row text-center w3-white w3-padding">
      <table class="w3-table w3-bordered w3-striped" style="margin:auto;text-align:center">
        <tr class="w3-padding text-center">
          <td style="text-align:center;vertical-align:middle;">July<br>6-7</td>
          <td style="text-align:center;vertical-align:middle;">The Cultura Fest</td>
          <td style="text-align:center;vertical-align:middle;"><a onclick="document.getElementById('Event1').style.display='block'">View Poster<br><img src="img/performance1.jpg" class="w3-image" style="max-width:65px;"/></a></td>
          <td class="w3-hide-small" style="text-align:center;vertical-align:middle;">Greensboro, NC | 302 W Gate City Blvd</td>
          <td style="text-align:center;vertical-align:middle;"><a href="http://theculturafest.eventbrite.com">Tickets</a></td>
          <div id="Event1" class="modal w3-black" style="display:none;">
            <div class="modal-content container w3-grey w3-padding">
              <div class="col-sm-12 text-center w3-red" onclick="document.getElementById('Event1').style.display='none'">X</div>
              <div class="col-sm-12"><img src="img/performance1.jpg" class="w3-image" style="max-width:90%;"/></div></div>
          </div>
        </tr>
      </table>
    </div>
    <div class="col-sm-12">
    </div>
  </div>
  <div class="row text-center w3-light-grey w3-padding" style="margin:auto;text-align:center;">
    <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <h3 class="">Where Should I Perform Next?</h3>
        <form>
          <div class="col-sm-6">
          Venue:<br>
          <input class="form-control" type="text" name="Venue" placeholder="Venue">
          City:<br>
          <input class="form-control" type="text" name="City" placeholder="City">
        </div><div class="col-sm-6" style="padding-top:7%;">
          <input class="form-control w3-blue" type="submit" name="submit" value="Vote!">
        </div>
      </form>
    </div>
        <div class="col-sm-2"></div>
  </div>
  <hr class="w3-clear">
</div>
<!-- End Perf -->

<!-- Music -->
<!--div class="container text-center w3-round w3-border w3-border-white" style="max-width:350px;max-height:600px;overflow-y:scroll;">
<h2>Album</h2>
<br>
<?php
if(isset($_GET['submit'])){
$video = $_GET['video'];
if($video !=NULL){
?>
<video class="afterglow" id="myvideo" style="max-width:400px;max-height:200px;">
<source type="video/mp4" src="<?php echo $video;?>" />
</video>
<?php
}
}
?>
<h4>Tracklist</h4>
<form action="" method="get">
<?php
for($tl = 0; $tl <= 5; $tl++){
  if($tl == 0){
    $track = '';
  }else{
    $artist = "Mac Dee";
    $song = "A really very extremely long title for a song";
    $track = (int)$tl;
    ?>
    <div class="w3-blue w3-round w3-row">
      <div class="col-sm-1">
      <p><?php echo $track;?></p>
      </div>
      <div class="col-sm-8">
        <p class="text-left"><?php echo $artist;?><br><?php echo $song;?></p>
      </div>
      <div class="col-sm-1 w3-padding">
        <input type="hidden" name="video" value="<?php echo 'DullyTrailer.mp4';?>">
        <input type="submit" name="submit" value="Play">
      </div>
    </div>
    <?php
  ;}
}
?>
</form>
</div-->
</div>
</div>
