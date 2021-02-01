<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Ảnh dìm</title>
      <link rel="stylesheet" href="public/lightgallery/css/lightgallery.css" />
      <link rel="stylesheet" href="public/videojs/video-js.min.css" />
      <link rel="stylesheet" href="public/lightgallery/css/lg-exif.min.css" />
      <link rel="stylesheet" href="public/core.css" />
      <link rel="stylesheet" href="public/theme.css" />
      <?php 
$title = 'C4K60 - ';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>
  </head>

  <body>

    <?php 
$thuvienanh = 'active';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>
    <div id="container" class="container" style="
    margin-top: 52px;
">
    
      <!--
        Gallery title
      -->
      <header>
        <h3><i class="faf fas fa-images">
          </i> Thư viện ảnh C4K60</h3>
      </header>
    <style type="text/css">
      .breadcrumb-item {
        color:black;
      }
    </style>
      <!--
        Breadcrumbs of parent albums
      -->
      <nav class="breadcrumbs">
    <a class="breadcrumb-item" href="index.php">Trang chủ</a><a class="breadcrumb-item" href="anhdim.php">Ảnh dìm</a>
   <div id="tunna">
    <a href="upload.php"> <i class="fas fa-cloud-upload-alt"></i> Tải lên ảnh</a>
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
    </style>
      </nav>
     
      <!--
        Nested albums, if any
      -->
      <div id="albums">
      </div>
    
      <!--
        All photos and videos
      -->
      <ul id="media" class="clearfix">
          <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM thuvienanh WHERE album = 2";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo "<li data-src='".$row['path']."'
                data-download-url='".$row['path']."'
                data-filename='".$row['image_name']."'          
              >
              <a href='".$row['path']."'>
                <img src='".$row['path']."'
                     width='90'
                     height='90'
                     alt='".$row['image_name']."' />
              </a>
            </li>";
}
} else {
  echo "<h5>Không có ảnh nào</h5>";
}
        ?>
              </ul>
      <!--
        Pagination
      -->
    
      <!--
        Zip file link
      -->
    
    
      <!--
        Optional footer
      -->
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
          loop : false,
          download: true,
          counter: true,
          videojs: true,
          fullScreen: true,
          zoom: true
        });
      });
    </script>


  </body>

</html>