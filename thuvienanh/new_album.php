
<?php
 require $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
  // Initialize message variable
  $err = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {

    // POST image name
    $album_name = $_POST['album_name'];
    $album_link = $_POST['album_link'].".php";
    mkdir("media/original/".$album_name);
    $file = fopen($album_link,"w");
    // Store the path of source file 
$source = 'anhdim.php';  
  
// Store the path of destination file 
$destination = $album_link;  
  
// Copy the file from /user/desktop/geek.txt  
// to user/Downloads/geeksforgeeks.txt' 
// directory 
if( !copy($source, $destination) ) {  
    echo "File can't be copied! \n";  
}  
else {  
    echo "File has been copied! \n";  
}  


$sql = "INSERT INTO album (name, link) VALUES ('$album_name', '$album_link')";
   
    // execute query
    mysqli_query($db, $sql);
  $err = "Tạo album mới thành công";
  }
?>

      <?php 
$title = 'C4K60 - Tạo album mới';
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
      <h3><i class="fas fa-folder-plus"></i> Tạo album mới</h3><br>
      <form method="POST" action="new_album.php" enctype="multipart/form-data">
        <p>Tên album:</p>
        <input type="text" class="form-control" name="album_name" style="
    width: 218px;
" required><br>
<p>Link album: (VD: anhkyyeu)</p>
<input type="text" class="form-control" name="album_link" style="
    width: 218px;
" required><br>

 <button type="submit" name="submit" class="btn btn-primary">Tạo album</button>
<br>
<p><?php echo $err;?></p>
</form>
<a href="/thuvienanh">< Quay lại</a>
</div>
 <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>
  </body>