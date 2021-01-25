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
  </head>

  <body>

    
    <div id="container">
    
      <!--
        Gallery title
      -->
      <header>
        <h1><a href="index.html">Thư viện ảnh C4K60</a></h1>
      </header>
    
      <!--
        Breadcrumbs of parent albums
      -->
      <nav class="breadcrumbs">
    <a class="breadcrumb-item" href="index.html">Home</a>&nbsp;/&nbsp;<a class="breadcrumb-item" href="Anh-tap-the-lop.html">Ảnh tập thể lớp</a>
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
$sql = "SELECT * FROM thuvienanh";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo "<li data-src='".$row['path']."'
                data-download-url='".$row['path']."'
                data-filename='".$row['image_name']."'          
              >
              <a href='".$row['path']."'>
                <img src='".$row['path']."'
                     width='120'
                     height='120'
                     alt='".$row['image_name']."' />
              </a>
            </li>";
}
$up = '';
} else {
  echo "<h5>Không có ảnh nào.</h5>";
  $up = "Bấm vào đây để upload ảnh";
}
        ?>
              </ul>
    <a href='upload.php'><?php echo $up ?></a>
      <!--
        Pagination
      -->
    
      <!--
        Zip file link
      -->
    
    
      <!--
        Optional footer
      -->
      <footer>
        <p>Copyright 2021 C4K60. Created with love by <a href='https://facebook.com/tunnaduong'>Tunna Duong</a><br><a href='https://c4k60.fattiesoftware.com'>Quay lại trang chủ C4K60</a> - <a href='upload.php'>Tải lên ảnh</a></p>
      </footer>
    
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