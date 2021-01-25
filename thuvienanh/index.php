<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Home</title>
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
    <a class="breadcrumb-item" href="index.html">Home</a>
      </nav>
    
      <!--
        Nested albums, if any
      -->
      <div id="albums">
    <a href="anhtapthelop.php" style="background-image: url('media/original/%E1%BA%A2nh%20t%E1%BA%ADp%20th%E1%BB%83%20l%E1%BB%9Bp/107316869_319506822778195_2501697337343812667_n.jpg')">
            <div class="info">
              <h3>Ảnh tập thể lớp</h3>
              <div class="summary">7 photos</div>
              <div class="date">24 Jan 2021 - 24 Jan 2021</div>
            </div>
          </a>  </div>
    
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
      <footer>
        <p>Copyright 2021 C4K60. Created with love by <a href='https://facebook.com/tunnaduong'>Tunna Duong</a><br><a href='https://c4k60.fattiesoftware.com'>Quay lại trang chủ C4K60</a></p>
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