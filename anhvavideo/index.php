
<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Trang chủ</title>
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
$linkafter = "";
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
  $linkafter = "?alert=refresh";
}
?>
    <style type="text/css">
      .breadcrumb-item {
        color:black;
      }
    </style>
      <!--
        Gallery title
      -->
      <header>
        <h3><i class="fas fa-photo-video"></i> Ảnh và video C4K60</h3>
      </header>
    
      <!--
        Breadcrumbs of parent albums
      -->
      <nav class="breadcrumbs">
    <a class="breadcrumb-item" href="index.php">Trang chủ</a>
    <div id="tunna">
    <a href="upload_video.php">	<i class="fas fa-video"></i> Tải lên video |</a>
    <a href="upload.php"> <i class="fas fa-cloud-upload-alt"></i> Tải lên ảnh |</a>
    <a href="new_album.php"><i class="fas fa-folder-plus"></i> Tạo album mới</a>
  </div>
    <style type="text/css">

      @media only screen and (max-width: 600px) {
        #tunna {
          display:block;
          font-size: 14px;
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


$sql11 = "SELECT id FROM album";
$results11 = mysqli_query($db, $sql11);
if (mysqli_num_rows($results11)){
      while($row21=mysqli_fetch_assoc($results11)){
        $idd1 = $row21['id'];
$sql111 = "SELECT * FROM thuvienanh WHERE album = '$idd1'";
$results111 = mysqli_query($db, $sql111);
if ($results111){
      // it return number of rows in the table. 
        $row111 = mysqli_num_rows($results111); 
          $sql22 = "UPDATE album SET total_pic = '$row111' WHERE id='$idd1'";
          mysqli_query($db, $sql22);
    } 
  }
} 
$sql1 = "SELECT id FROM album WHERE type='video'";
$results1 = mysqli_query($db, $sql1);
if (mysqli_num_rows($results1)){
      while($row2=mysqli_fetch_assoc($results1)){
        $idd = $row2['id'];
$sql = "SELECT * FROM videos WHERE album = '$idd'";
$results = mysqli_query($db, $sql);
if ($results){
      // it return number of rows in the table. 
        $row3 = mysqli_num_rows($results); 
          $sql = "UPDATE album SET total_pic = '$row3' WHERE id='$idd'";
          mysqli_query($db, $sql);
    } 
  }
} 

$sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo "<a href='".$row['link'].$linkafter."' style=".$row['background_image'].">
            <div class='info'>
              <h3>".$row['name']."</h3>
              <div class='summary'>".$row['total_pic']." ".$row['type']."</div>
            </div>
          </a>";
}
$up = '';
} else {
  echo "<h5>Không có album nào</h5><br>";
}
        ?>
           </div>
      <!--
        All photos and videos
      -->
    
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