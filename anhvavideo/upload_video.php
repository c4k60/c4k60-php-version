<?php 
$title = 'C4K60 - Tải lên video';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>

<body style="margin-top: 100px;">
    <?php 
$thuvienanh = 'active';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>
            <div id="container" class="container" style="max-width: 720px;">
              <?php
require $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
if (isset($_POST['submit'])) {
if($_POST['optradio'] == 'filevideo'){
  $caption = $_POST['caption'];
    $album = $_POST['album'];
    $errors= array();
  foreach($_FILES['files']['tmp_name'] as $key => $tmp_name){
    $file_name = $_FILES['files']['name'][$key];
    $file_tmp = $_FILES['files']['tmp_name'][$key];
    $file_type= $_FILES['files']['type'][$key]; 
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    // Allow certain file formats
if($ext != "mp4" && $ext != "mov" && $ext != "mp3") {
  echo "<a href='/anhvavideo/upload_video.php'>< Quay lại</a><br><br>";
  die ("Xin lỗi, chỉ tệp MP4, MOV & MP3 được chấp nhận.");
}
      $video = "media/video/".$file_name;


if(isset($_FILES['photo'])){
$image_name = $_FILES['photo']['name'];
$image_temp = $_FILES['photo']['tmp_name'];
$sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
if ($_POST['album']==$row['id']){
    $thumb_path = "media/thumbnail/".$row['name']."/".$image_name;
}
}
} else {
    $thumb_path = "media/thumbnail/".$image_name;
}

move_uploaded_file($image_temp, $thumb_path);
}

         $type = "html5";
        $query="INSERT into videos VALUES('','$caption','$video','','$thumb_path','$type','$album')";
        if(empty($errors)==true){
          move_uploaded_file($file_tmp, $video);
     mysqli_query($con, $query);      
        }else{
                print_r($errors);
        }
    }
  if(empty($errors)){
  echo "<div class='alert alert-success'>Video của bạn đã được upload thành công!</div>";
  
  }
}

if ($_POST['optradio'] == 'linkyt') {
$caption = $_POST['caption'];
$linkyt = $_POST['link'];
if(isset($_FILES['photo'])){
$image_name = $_FILES['photo']['name'];
$sql = "SELECT * FROM album";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
if ($_POST['album']==$row['id']){
    $thumb_path = "media/thumbnail/".$row['name']."/".$image_name;
}
}
} else {
    $thumb_path = "media/thumbnail/".$image_name;
}
move_uploaded_file($_FILES['photo']['tmp_name'], $thumb_path);
}
$type = "youtube";
$album = $_POST['album'];
$query="INSERT into videos VALUES('','$caption','','$linkyt','$thumb_path','$type','$album')";
 mysqli_query($con, $query);
 echo "<div class='alert alert-success'>Video của bạn đã được upload thành công!</div>";
}
}
?>
            <h3><i class="fas fa-cloud-upload-alt"></i> Tải lên video vào album</h3><br>
      <form method="POST" action="#" enctype="multipart/form-data">
<div id="filevideo" style="display: block;">
<input type="file" id="upload" name="files[]" multiple><br><br>
<p>Định dạng tệp cho phép: MP4, MOV, MP3, Link YouTube</p>
</div>
<div id="linkyoutube" style="display: none;">
<p>Link YouTube:</p>
<input type="text" id="linkyt" name="link"><br><br>
<p>VD: https://www.youtube.com/watch?v=KVHimR1vf0o</p>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="filevideo" checked> File video</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="linkyt"> Link YouTube</label>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('input:radio[name="optradio"]').change(function() {
        if ($(this).val() == 'filevideo'){
                document.getElementById("filevideo").style.display = "block";
                document.getElementById("linkyoutube").style.display = "none";
        }
        if ($(this).val() == 'linkyt'){
                document.getElementById("filevideo").style.display = "none";
                document.getElementById("linkyoutube").style.display = "block";
        }
    });
});
</script>
<p>Album: </p>
<select name="album" id="album" class="custom-select" style="width: 178px;">
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM album WHERE type='video'";
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
  <label for="exampleFormControlInput1" class="form-label">Chú thích:</label>
  <input type="text" name="caption" style="width: 319px" class="form-control" placeholder="VD: Video 20/10 C4K60 2020">
  <br>
  <p>Ảnh đại diện:</p>
  <input type="file" id="image" name="photo" required><br><br>
 <button type="submit" name="submit" class="btn btn-primary">Tải lên</button>
<br>
</form>
<a href="/anhvavideo?alert=refresh">< Quay lại</a>
<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>
</div>
</body>
</html>