

<?php

 require $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

  // Initialize message variable

  $err = "";

  $msg = "";

  // If upload button is clicked ...

  if (isset($_POST['submit'])) {



    // POST image name

    $album_name = $_POST['album_name'];

    $album_link = $_POST['album_link'].".php";

    $image_name = $_FILES['image']['name'];

    $image = "media/thumbnail/".$_FILES['image']['name'];

    $tarPOST = "media/thumbnail/".basename($image);


if (!isset($_POST['isvideoalbum'])) {
    mkdir("media/original/".$album_name);
    mkdir("media/thumbnail/".$album_name);
} else {
    mkdir("media/thumbnail/".$album_name);
}
    $file = fopen($album_link,"w");

    // Store the path of source file 

if (!isset($_POST['isvideoalbum'])) {
$type = "ảnh";
$source = 'example_album.php';  

// Store the path of destination file 

$destination = $album_link;  

copy($source, $destination);  

} else {
$type = "video";
  $source = 'example_video_album.php';  

// Store the path of destination file 

$destination = $album_link;  

copy($source, $destination);  

}





$background = "\"background-image: url('".$image."')\"";



$str = addslashes($background);



$sql = "INSERT INTO album (name, background_image, link, type) VALUES ('$album_name', '$str', '$album_link', '$type')";

   

    // execute query

    mysqli_query($db, $sql);

  $err = "Tạo album mới thành công";

if (move_uploaded_file($_FILES['image']['tmp_name'], $tarPOST)) {

        $msg = "Ảnh đã được upload thành công";

    }else{

        $msg = "Tải lên ảnh thất bại hoặc không có ảnh";

    }

  $sql = "SELECT id FROM album WHERE name='$album_name'";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

   $idd = $row["id"];

if (isset($_POST['isvideoalbum'])) {
  $url = $album_link;



$strings = file_get_contents($url);



$a = "Example Video";

$b = $album_name;

$strreplace = str_replace($a, $b, $strings);



file_put_contents($url, $strreplace);



$strings2 = file_get_contents($url);

$a2 = "WHERE album = 2";

$b2 = "WHERE album = ".$idd;

$strreplace2 = str_replace($a2, $b2, $strings2);



file_put_contents($url, $strreplace2);



$strings3 = file_get_contents($url);

$a3 = "AND album = 2";

$b3 = "AND album = ".$idd;

$strreplace3 = str_replace($a3, $b3, $strings3);



file_put_contents($url, $strreplace3);



$strings22 = file_get_contents($url);

$a22 = "example_video_album.php";

$b22 = $album_link;

$strreplace22 = str_replace($a22, $b22, $strings22);



file_put_contents($url, $strreplace22);

} 

$url = $album_link;



$strings = file_get_contents($url);



$a = "Ảnh dìm";

$b = $album_name;

$strreplace = str_replace($a, $b, $strings);



file_put_contents($url, $strreplace);



$strings2 = file_get_contents($url);

$a2 = "WHERE album = 2";

$b2 = "WHERE album = ".$idd;

$strreplace2 = str_replace($a2, $b2, $strings2);



file_put_contents($url, $strreplace2);



$strings22 = file_get_contents($url);

$a22 = "anhdim.php";

$b22 = $album_link;

$strreplace22 = str_replace($a22, $b22, $strings22);



file_put_contents($url, $strreplace22);



  }

}



  }







?>



      <?php 

$title = 'C4K60 - Tạo album mới';

require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';

 ?>





  <body style="margin-top: 100px;">

    <?php 

$thuvienanh = 'active';

require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';

 ?>



    <div id="container" class="container" style="max-width: 720px;">

      <h3><i class="fas fa-folder-plus"></i> Tạo album mới</h3><br>

      <form method="POST" action="new_album.php" enctype="multipart/form-data">

        <p>Tên album:</p>

        <input type="text" class="form-control" name="album_name" style="

    width: 218px;

" required><br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="isvideoalbum" value="yes" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Là album video
  </label>
</div><br>

<p>Link album: (VD: anhkyyeu)</p>

<input type="text" class="form-control" name="album_link" style="

    width: 218px;

" required><br>

<p>Ảnh đại diện:</p>

<input type="file" id="image" name="image" required><br><br>

 <button type="submit" name="submit" class="btn btn-primary">Tạo album</button>

<br>

<p><?php

echo $err;
echo "<br>";
echo $msg;

?></p>

</form>

<a href="/anhvavideo?alert=refresh">< Quay lại</a>

<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';

 ?>

</div>

  </body>