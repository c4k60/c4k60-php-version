<?php
$title = 'C4K60 - Tải lên ảnh';
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
    $rd = rand();
    if (isset($_FILES['files'])) {
      $album = $_POST['album'];
      $errors = array();
      foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $key . $rd . $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        if ($file_size > 200097152) {
          $errors[] = 'Dung lượng ảnh phải dưới 200 MB!';
        }
        $sql = "SELECT * FROM album";
        $results = mysqli_query($db, $sql);
        if (mysqli_num_rows($results)) {
          while ($row = mysqli_fetch_assoc($results)) {
            if ($_POST['album'] == $row['id']) {
              $image = "media/original/" . $row['name'] . "/" . $file_name;
              $tarPOST = "media/original/" . $row['name'] . "/" . basename($image);
              $thumb_path = "media/thumbnail/" . $row['name'] . "/" . $file_name;
            }
          }
        } else {
          $image = "media/original/" . $file_name;
          $tarPOST = "media/original/" . basename($image);
          $thumb_path = "media/thumbnail/" . $file_name;
        }
        $query = "INSERT into thuvienanh(`image_name`,`path`,`thumb_path`,`imgtype`,`imgsize`,`album`) VALUES('$file_name','$image','$thumb_path','$file_type','$file_size','$album');";
        if (empty($errors) == true) {
          if (is_dir($tarPOST) == false) {
            $src = imagecreatefromjpeg($tmp_name);
            list($width, $height) = getimagesize($tmp_name);
            $newwidth = ($width / $height) * 150;
            $newheight = 150;
            $tmp = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $rd = rand();
            $filename = $thumb_path;
            imagejpeg($tmp, $filename, 100);
            imagedestroy($src);
            compressImage($file_tmp, $tarPOST, 60);
          } else {                  // rename the file if another one exist
            $new_dir = $tarPOST . time();
            rename($file_tmp, $new_dir);
          }
          mysqli_query($con, $query);
        } else {
          print_r($errors);
        }
      }
      if (empty($error)) {
        echo "<div class='alert alert-success'>Ảnh của bạn đã được upload thành công!</div>";
      }
    }
    // Compress image
    function compressImage($source, $destination, $quality)
    {
      $info = getimagesize($source);
      if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source);
      elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source);
      elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source);
      imagejpeg($image, $destination, $quality);
    }
    ?>
        <h3>
            <i class="fas fa-cloud-upload-alt">
            </i> Tải lên ảnh vào thư viện ảnh C4K60
        </h3>
        <br>
        <form method="POST" action="#" enctype="multipart/form-data">
            <input type="file" id="upload" name="files[]" multiple required>
            <br>
            <br>
            <p>Định dạng tệp cho phép: JPG, JPEG
                <br>
                Chất lượng ảnh sẽ bị giảm xuống 60% nhằm tiết kiệm băng thông máy chủ
            </p>
            <p>Album:
            </p>
            <select name="album" id="album" class="custom-select" style="width: 178px;">
                <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
        $sql = "SELECT * FROM album WHERE type='ảnh'";
        $results = mysqli_query($db, $sql);
        if (mysqli_num_rows($results)) {
          while ($row = mysqli_fetch_assoc($results)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
        } else {
          echo "<option value='none'>Không có album nào</option>";
        }
        ?>
            </select>
            <br>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Tải lên
            </button>
            <br>
        </form>
        <a href="/anhvavideo?alert=refresh">
            < Quay lại </a>
                <?php
        require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
        ?>
    </div>
</body>

</html>