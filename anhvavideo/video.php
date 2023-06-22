<!DOCTYPE html>

<html>



  <head>

      <meta charset="utf-8" />

      <meta name="viewport" content="width=device-width, user-scalable=no" />

      <title>Thư viện ảnh C4K60 - Video</title>

      <link rel="stylesheet" href="public/lightgallery/css/lightgallery.css" />

      <link rel="stylesheet" href="public/videojs/video-js.min.css" />

      <link rel="stylesheet" href="public/lightgallery/css/lg-exif.min.css" />

      <link rel="stylesheet" href="public/core.css" />

      <link rel="stylesheet" href="public/theme.css" />

      <META HTTP-EQUIV="Pragma" CONTENT="no-cache">

      <META HTTP-EQUIV="Expires" CONTENT="-1">

      <?php 

$title = 'C4K60 - ';

require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';

 ?>

  </head>



  <body style="margin-top: 100px;">



    <?php 

$thuvienanh = 'active';

require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';

 ?>

    <div class="container" style="max-width: 720px;">



        <?php

if (isset($_GET['alert'])) {

  echo "<div class='alert alert-warning'>

  <button type='button' class='close' data-dismiss='alert'>&times;</button>

    <strong>Chú ý!</strong> Bạn nên tải lại trang để thay đổi có hiệu lực.

  </div>";

}

?>

      <!--

        Gallery title

      -->

      <header>

        <h3><i class="fas fa-photo-video"></i> Ảnh và video C4K60</h3>

      </header>

    <style type="text/css">

      .breadcrumb-item {

        color:black;

      }

    </style>

      <!--

        Breadcrumbs of parent albums

      -->

      <nav class="breadcrumbs" style="border-bottom: 0;margin-bottom: 0;">

    <a class="breadcrumb-item" href="index.php">Trang chủ</a><a class="breadcrumb-item" href="video.php">Video</a>

   <div id="tunna">

    <a href="upload_video.php"> <i class="fas fa-cloud-upload-alt"></i> Tải lên video</a>

  </div>

    <style type="text/css">



      @media only screen and (max-width: 600px) {

        #tunna {

          display:block;

        }

      }

      @media only screen and (min-width: 600px) {

        #tunna {

          float: right;

        }

      }



.demo-gallery-poster > img {

    margin-left: 26px;

    margin-top: 26px;

    width: 40px;

}

    </style>

      </nav>

      <?php

  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

$sql = "SELECT * FROM videos WHERE album = 75";

$results = mysqli_query($db, $sql);

if (mysqli_num_rows($results)){

      while($row=mysqli_fetch_assoc($results)){

?>

     <!-- Hidden video div -->

<div style="display:none;" id="video<?php echo $row['id'] ?>">

    <video class="lg-video-object lg-html5" controls preload="none">

        <source src="<?php echo $row['path'] ?>" type="video/mp4">

         Trình duyệt của bạn không hỗ trợ video HTML5.

    </video>

</div>

      <?php

}

} 

        ?>

      <!--

        All photos and videos

      -->
<style>
.hr-text {
	 line-height: 1em;
	 position: relative;
	 outline: 0;
	 border: 0;
	 color: black;
	 height: 1.5em;
	 opacity: 0.5;
}
 .hr-text:before {
	 content: '';
	 background: #818078;
	 position: absolute;
	 left: 0;
	 top: 50%;
	 width: 100%;
	 height: 1px;
}
 .hr-text:after {
	 content: attr(tunna);
	 position: relative;
	 display: inline-block;
	 color: black;
	 padding: 0 0.5em;
	 line-height: 1.5em;
	 color: #818078;
	 background-color: #fcfcfa;
}
</style>
      <ul id="media" class="clearfix">
        <hr class="hr-text" tunna="Video YouTube">
         <?php

  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

  $sql = "SELECT * FROM videos WHERE album = 75";

$results = mysqli_query($db, $sql);

if (mysqli_num_rows($results)){

$sql = "SELECT * FROM videos WHERE type='youtube' AND album = 75";

$results = mysqli_query($db, $sql);

if (mysqli_num_rows($results)){

      while($row=mysqli_fetch_assoc($results)){

?>

<a class="abc" href="<?php echo $row['link_youtube'] ?>" data-sub-html="<?php echo $row['caption'] ?>" style="background-image: url('<?php echo $row['thumb_path'] ?>');width: 89px;height: 89px;background-size: cover;background-position: center center;border-radius: 8px;">

                <img src="<?php echo $row['thumb_path'] ?>" style="display: none;" />

              <div class="demo-gallery-poster">

            <img src="public/play.png">

          </div>

              </a>

<?php

}

}

?>

<hr class="hr-text" tunna="Video đã tải lên">

          <?php

  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

$sql = "SELECT * FROM videos WHERE type='html5' AND album = 75";

$results = mysqli_query($db, $sql);

if (mysqli_num_rows($results)){

      while($row=mysqli_fetch_assoc($results)){

?>

<li data-poster="<?php echo $row['thumb_path'] ?>" data-sub-html="<?php echo $row['caption'] ?>" data-html="#video<?php echo $row['id'] ?>" >

      <a href="" class="abc" style="background-image: url('<?php echo $row['thumb_path'] ?>');width: 89px;height: 89px;background-size: cover;background-position: center center;border-radius: 8px;">

                <img src="<?php echo $row['thumb_path'] ?>" style="display: none;" />

              <div class="demo-gallery-poster">

            <img src="public/play.png">

          </div>

              </a>

  </li>

<?php

}

}

} else {

	echo "<h4>Không có video nào</h4><br>";

}

        ?>

             

              </ul>

     
<br>
     <?php 

require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';

 ?>

    </div>

    <!-- Video loader -->

    <div id="videos">

    </div>



    <!-- jQuery -->

    <script src="public/jquery.min.js"></script>

    <!-- VideoJS -->

    <script src="public/videojs/video.min.js"></script>

    <!-- LightGallery -->

    <script src="public/lightgallery/js/lightgallery.js"></script>

    <script src="public/lightgallery/js/lg-autoplay.js"></script>

    <script src="public/lightgallery/js/lg-pager.js"></script>

    <script src="public/lightgallery/js/lg-thumbnail.js"></script>

    <script src="public/lightgallery/js/lg-video.js"></script>

    <script src="public/lightgallery/js/lg-exif.min.js"></script>

    <script src="public/lightgallery/js/lg-zoom.min.js"></script>

    <script src="public/lightgallery/js/lg-fullscreen.min.js"></script>



    <script>

      $(document).ready(function() {

        $("#media").lightGallery({

          thumbWidth: 80,

          controls: true,

          loop : true,

          download: true,

          videojs: true,

          fullScreen: true,

          zoom: true,

          preload: 2,

        });

      });

      $('#media').lightGallery(); 

    </script>





  </body>



</html>