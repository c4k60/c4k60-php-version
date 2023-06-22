<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Ảnh tập thể lớp</title>
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
      <nav class="breadcrumbs">
    <a class="breadcrumb-item" href="index.php">Trang chủ</a><a class="breadcrumb-item" href="anhtapthe.php">Ảnh tập thể lớp</a>
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
$sql = "SELECT * FROM thuvienanh WHERE album = 72";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
?>
<li data-src="<?php echo $row['path'] ?>" data-download-url="<?php echo $row['path'] ?>" data-filename="<?php echo $row['image_name'] ?>">
              <a href="<?php echo $row['path'] ?>" style="background-image: url('<?php echo $row['thumb_path'] ?>');width: 89px;height: 89px;background-size: cover;background-position: center center;border-radius: 8px;">
                <img src="<?php echo $row['thumb_path'] ?>" style="display: none;" />
              </a>
            </li>
<?php
}
} else {
  echo "<h5>Không có ảnh nào</h5><br>";
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
          loop : true,
          download: true,
          videojs: true,
          fullScreen: true,
          zoom: true,
          preload: 2,
        });
      });
    </script>


  </body>

</html>