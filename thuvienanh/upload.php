
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

      <?php 
$title = 'C4K60 - Tải lên ảnh';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>


  <body style="
    margin-left: 31px;
    margin-right: 31px;
    margin-top: 81px;
">
    <?php 
$thuvienanh = 'active';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>

    <div id="container">
      <h3><i class="fas fa-cloud-upload-alt"></i> Tải lên ảnh vào thư viện ảnh C4K60</h3><br>
      <form method="POST" action="upload.php" enctype="multipart/form-data">
<input type="file" id="image" name="image" required><br><br>
<p>Album: </p>
<select name="album" id="album" class="custom-select"  style="
    width: 178px;
">
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
 <button type="submit" name="submit" class="btn btn-primary">Tải lên</button>
<br>
<p><?php echo $msg;?></p>

</form>
<a href="/thuvienanh">< Quay lại</a>
</div>
 <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>
  </body>