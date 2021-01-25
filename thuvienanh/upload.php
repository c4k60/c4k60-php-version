<?php
 require $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    // POST image name
    $image_name = $_FILES['image']['name'];
    $sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
if ($_POST['album']==$row['id']){
  $image = "media/original/".$row['name']."/".$_FILES['image']['name'];
  // image file directory
    $tarPOST = "media/original/".$row['name']."/".basename($image);
}
}
} else {
  $image = "media/original/".$_FILES['image']['name'];
   // image file directory
    $tarPOST = "media/original/".basename($image);
}

$album = $_POST['album'];
    
$sql = "INSERT INTO thuvienanh (image_name, path, album)
VALUES ('$image_name', '$image', '$album')";
   
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $tarPOST)) {
        $msg = "Ảnh đã được upload thành công";
    }else{
        $msg = "Tải lên ảnh thất bại hoặc không có ảnh";
    }
  }
?>
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <title>Thư viện ảnh C4K60 - Upload ảnh</title>
      <link rel="stylesheet" href="public/lightgallery/css/lightgallery.css" />
      <link rel="stylesheet" href="public/videojs/video-js.min.css" />
      <link rel="stylesheet" href="public/lightgallery/css/lg-exif.min.css" />
      <link rel="stylesheet" href="public/core.css" />
      <link rel="stylesheet" href="public/theme.css" />
  </head>

  <body>
    <div id="container">
      <h1>Tải lên ảnh vào thư viện ảnh C4K60</h1><br><br>
      <form method="POST" action="upload.php" enctype="multipart/form-data">
<input type="file" id="image" name="image" required><br><br>
<p>Album: </p>
<select name="album" id="album">
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo "<option value='".$row['id']."'>".$row['name']."</option>";
}
} else {
  echo "<option value='none'>Không có album nào</option>";
}
        ?>
  </select><br><br>
<input type="submit" name="submit">
<br><br>
<p><?php echo $msg;?></p>
</form>
<a href="/thuvienanh">< Quay lại</a>
</div>
  </body>