<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Trang chủ</title>
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
    <style type="text/css">
      .breadcrumb-item {
        color:black;
      }
    </style>
      <!--
        Gallery title
      -->
      <header>
        <h3><i class="faf fas fa-images">
          </i> Thư viện ảnh C4K60</h3>
      </header>
    
      <!--
        Breadcrumbs of parent albums
      -->
      <nav class="breadcrumbs">
    <a class="breadcrumb-item" href="index.php">Trang chủ</a>
    <div id="tunna">
    <a href="upload.php"> <i class="fas fa-cloud-upload-alt"></i> Tải lên ảnh |</a>
    <a href="new_album.php"><i class="fas fa-folder-plus"></i> Tạo album mới</a>
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

        <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

$sql1 = "SELECT id FROM album";
$results1 = mysqli_query($db, $sql1);
if (mysqli_num_rows($results1)){
      while($row2=mysqli_fetch_assoc($results1)){
        $idd = $row2['id'];
$sql = "SELECT * FROM thuvienanh WHERE album = '$idd'";
$results = mysqli_query($db, $sql);
if ($results){
      // it return number of rows in the table. 
        $row = mysqli_num_rows($results); 
          $sql = "UPDATE album SET total_pic = '$row' WHERE id='$idd'";
          mysqli_query($db, $sql);
    } 
  }
} else {
  echo "<h5>Không có album nào.</h5>";
}

$sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo "<a href='".$row['link']."' style=".$row['background_image'].">
            <div class='info'>
              <h3>".$row['name']."</h3>
              <div class='summary'>".$row['total_pic']." ảnh</div>
            </div>
          </a>";
}
$up = '';
} else {
  echo "<h5>Không có album nào.</h5>";
}
        ?>
           </div>
      <!--
        All photos and videos
      -->
      <ul id="media" class="clearfix">
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

    <script>
      $(document).ready(function() {
        $("#media").lightGallery({
          thumbWidth: 80,
          controls: true,
          loop : false,
          download: true,
          counter: true,
          videojs: true
        });
      });
    </script>


  </body>