<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
$tieude = "Ảnh";
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
$content = "none";
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
if (isset($_GET['id'])) {
$c4id = $_GET['id'];
$sql = "SELECT images_upload.c4id, images_upload.username, images_upload.filename, images_upload.time_of_upload, images_upload.caption, accounts.name, accounts.profile_pic, accounts.id FROM images_upload INNER JOIN accounts ON images_upload.username = accounts.username WHERE c4id='$c4id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<style type="text/css">
	body {
		background-color: black;
	}
</style>
<div style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;width: 1500px;margin-top: 65px;">
<img src="<?php echo $row['filename'] ?>" style="position: absolute;margin: auto;top: 0;left: 0;right: 0;bottom: 0;max-height: 800px;">
</div>
<div style="float: right;background-color: white;width: 420px;height: 1000px;margin-top: 65px;">
	<div style="margin-top: 15px">
	<img src="<?php echo $row['profile_pic'] ?>" style='border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-left: 15px;'>
	<a href="/<?php echo $row['username'] ?>" style="color:black;margin-left: 66px;position: absolute;">
		<strong>
			
<?php echo $row['name'] ?>
</strong>
</a>
<p style='position: absolute;font-size: 12px;color:#9e9b9b;margin-left: 67px;margin-top: 23px;'>
  <a id="concac<?php echo $row['id']; ?>" href='/photo?id=<?php echo $row['c4id']; ?>' style='color: #9e9b9b'></a> · <i class='fas fa-globe-americas'></i></p>
<script type="text/javascript">
  document.getElementById('concac<?php echo $row['id']; ?>').innerHTML = moment('<?php echo $row['time_of_upload']; ?>', 'YYYY-MM-DD h:m:s').fromNow();
</script>
<style type="text/css">
	.edit {
    background-color: #e4e6eb;
  }
  .edit:hover {
    background-color: #d8d9da;
    cursor: pointer;
  }
</style>
<div class="edit" style="position: absolute;border-radius: 10px;top: 137px;right: 309px;padding-top: 5px;padding-bottom: 5px;padding-left: 12px;padding-right: 12px;font-weight: 500;">Chỉnh sửa</div>
</div>
<style type="text/css">
    .unlike {
      color: #65676b;
    }
    .liked {
      color:#0571ed;
    }
    .backlike,
    .backlike:before {
      background: -webkit-gradient(linear, left top, left bottom, from(#51a2ff), to(#2061b3));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }
    .pl {
      display: none;
    }
    .peopleliked {
      display: block;
    }
</style>
<div id='peopleliked<?php echo $row['id']; ?>' class='pl' style="
    margin-bottom: 7px;
    margin-top: 7px;
    position: absolute;
    top: 180px;
">
    <span class='fa-stack' style='
    font-size: 0.6rem;
    margin-bottom: 4px;
    margin-left: 3px;
    margin-right: 8px;
'>
  <i class='fas fa-circle fa-stack-2x backlike' style="
    margin-left: 9px;
"></i>
  <i class='fas fa-thumbs-up fa-stack-1x fa-inverse' style='
    margin-left: 9px;
'></i>
</span>
<p style='display: inline;color: #65676b;'>Dương Tùng Anh</p>
</div>
<div id='reaction1' class='noselect' style="position: absolute;top: 220px;">
 
<div id='butto2' style='height: 33px;width: 203px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;' onclick='funcLike<?php echo $row['id']; ?>()'>
  <div id='like1<?php echo $row['id']; ?>' class='unlike' style="
  width: 210px;
  padding: 0 75px;
  ">
<i class='far fa-thumbs-up' id='likee<?php echo $row['id']; ?>'></i> Thích
</div>
<script type='text/javascript'>
  function funcLike<?php echo $row['id']; ?>() {
  document.getElementById('likee<?php echo $row['id']; ?>').classList.toggle('fas');
  document.getElementById('like1<?php echo $row['id']; ?>').classList.toggle('liked');
  document.getElementById('peopleliked<?php echo $row['id']; ?>').classList.toggle('peopleliked');
}
</script>
</div>
<div id='butto2' style='height: 33px;width: 202px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;' onclick='funcComment<?php echo $row['id']; ?>()'>
  <div style="
  width: 195px;
  padding: 0 50px;
  height: 38px;
  text-align: left;
  color: #65676b;
  ">
<i class='far fa-comment'></i> Bình luận
<script type='text/javascript'>
  function funcComment<?php echo $row['id']; ?>() {
  $('#comment<?php echo $row['id']; ?>').focus();
}
</script>
</div>
</div>

<hr style='
    margin-bottom: 38px;
    margin-top: 0px;
    margin-left: 15px;
    margin-right: 15px;
'>
<hr style='
   margin-bottom: 10px;
   margin-top: 6px;
   margin-left: 15px;
   margin-right: 15px;
'>


<div id='textbox2' style='display: inline-block;width: 420px;height: 41px;border-radius: 20px;transition: 0.3s;'>
<img src='/images/tunna.jpg' style='border-radius: 50%;width: 40px;float:left;margin-left: 20px;'>
  <textarea class='commentar' id='comment<?php echo $row['id']; ?>' placeholder='Viết một bình luận...' style='border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 277px;height: 40px;margin-left: 9px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px;'></textarea>
<i class='fas fa-camera' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>
<i class='far fa-smile' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>
</div>
</div>
</div>
<?php
}
} else {
$content = "block";
?>
<style type="text/css">
	body {
		background-color: #f0f2f5;
	}
</style>
<?php
}
}else {
$content = "block";
?>
<style type="text/css">
	body {
		background-color: #f0f2f5;
	}
</style>
<?php
}
?>
<div class="content2" style="
  display: <?php echo $content; ?>;
    position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
">
<center>
<img src="/images/guy.svg" style="
    width: 110px;
">
<h4 style="color: #64676b">Rất tiếc, nội dung này hiện chưa thể hiển thị</h4>
<p style="color: #64676b">Liên kết có thể bị hỏng hoặc trang có thể đã bị xóa.<br> Hãy thử kiểm tra xem liên kết bạn đang cố mở có <br>chính xác không.</p>
<button type="button" class="btn btn-primary" style="
    width: 186px;
    margin-bottom: 10px;
" onclick="location.href = '/';">Đi đến bảng tin</button><br>
<a href="#" onclick="window.history.back();">Quay lại</a><br>
</center>
</div>