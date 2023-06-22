
<!DOCTYPE html>
<html>
<head>
<title>C4K60 - Tin tức</title>
<!-- Bộ mã Bootstrap 4 -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bộ mã jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Bộ mã JavaScript cho Bootstrap 4 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bộ mã Font Awesome -->
 <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/vi.min.js"></script>
<link rel="icon" type="image/png" href="c4k60.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #f0f2f5;">
<nav class="navbar navbar-expand-md bg-warning navbar-light fixed-top">
	<a class="navbar-brand" href="/">
    <img src="/images/c4k60.png" alt="Logo" style="width:40px;">
  </a>
  <ul class="navbar-nav mr-auto">
    
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm">
    <button class="btn btn-success" type="submit" style="background-color:#e4562b85;border-color:#e4562b85"><i class="fas fa-search"></i></button>
  </form>
    
  </ul>
   <ul class="navbar-nav">
  
  <li class="nav-item">
 <a class="nav-link" href="#" style="font-size: 1.4rem;"><i class="fas fa-user-plus"></i></a>
    </li>
    <li class="nav-item">
 <a class="nav-link" href="#" style="font-size: 1.4rem;"><i class="fas fa-comment"></i></a>
    </li>
    <li class="nav-item">
 <a class="nav-link" href="#" style="font-size: 1.4rem;"><i class="fas fa-globe-americas"></i></a>
    </li>
  <a class="navbar-brand" href="/">
    <img src="/images/tunna.jpg" alt="Logo" style="width:40px;border-radius: 50%;margin-left: 10px;">
  </a>
</ul>
</nav>
<style type="text/css">
   #butto1:hover{
    background-color: #f0f2f5
   }
   #butto2:hover{
    background-color: #f0f2f5
   }
   #butto1:active{
    background-color: #c3c3c3
   }
   #butto2:active{
    background-color: #c3c3c3
   }

 </style>
<style type="text/css">
  .content{
  width: 600px;
    margin: 0 auto;
    }
    #mydiv{
          box-shadow: 0px 0px 8px -1px rgb(0 0 0 / 75%);
    -webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
    -moz-box-shadow: 0px 0px 8px -1px rgba(0,0,0,0.75);
    border-radius: 7px;
    }
</style>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
$content = "none";
if(isset($_GET['id'])){
  $id = $_GET['id'];
$sql = "SELECT id, author, content, timeofpost, image, has_image, avatar FROM tintuc_posts WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

<div class="content" style="
    margin-top: 86px;
    margin-bottom: 65px;
">
<div id='mydiv' style='background-color: white;padding-top: 10px;padding-left: 0px;padding-right: 0px;padding-bottom: 5px;margin-top: 20px;'>
  <img src='<?php echo $row['avatar']; ?>' style='border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-left: 15px;'>
  <div style='display: inline-block;margin-left: 65px;'>
  <p style='
    margin-bottom: 0px;
'><strong style=''><?php echo $row['author']; ?> <i title='Tài khoản đã xác minh' style='color:#07f;font-size:14px;display:none;display:inline' class='fas fa-check-circle'></i></strong></p><p style='position: absolute;font-size: 12px;color:#9e9b9b'>
  <a id="concac<?php echo $row['id']; ?>" href='post.php?id=<?php echo $row['id']; ?>' style='color: #9e9b9b'></a> · <i class='fas fa-globe-americas'></i></p>
<script type="text/javascript">
  document.getElementById('concac<?php echo $row['id']; ?>').innerHTML = moment('<?php echo $row['timeofpost']; ?>', 'YYYY-MM-DD h:m:s').fromNow();
</script>
</div>
<style type="text/css">
.dropdown<?php echo $row['id']; ?> {
  position: relative;
  float: right;
}

.dropdown-content<?php echo $row['id']; ?> {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content<?php echo $row['id']; ?> a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content<?php echo $row['id']; ?> a:hover {background-color: #ddd;
border-radius: 10px;
}

.show {display: block;}

</style>
 <div class="dropdown<?php echo $row['id']; ?>" onclick="funcDropdown<?php echo $row['id']; ?>()">
 <i class="fas fa-ellipsis-h dropbtn<?php echo $row['id']; ?>" style="margin-top: 7px;margin-right: 15px;cursor: pointer;"></i>
<div id="myDropdown<?php echo $row['id']; ?>" class="dropdown-content<?php echo $row['id']; ?>">
  <a href="#"><i class="far fa-bookmark" style="margin-right: 6px;"></i> Lưu bài viết</a>
  <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $row['id']; ?>"><i class="far fa-trash-alt" style="margin-right: 6px;"></i> Xoá bài viết</a>
</div>
<!-- The Modal -->
<div class="modal" id="deleteModal<?php echo $row['id']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Xoá bài viết</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Bạn có chắc chắn muốn xoá bài viết này?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" style="color: #3568dc;
    background-color: #ffffff;
    border-color: #ffffff;">Huỷ</button>
        <a href="/index.php?action=delete&post_id=<?php echo $row['id']; ?>" class="btn btn-danger" style="background-color: #3568dc;
    border-color: #3568dc;color: white;cursor: pointer;">Xoá</a>
      </div>

    </div>
  </div>
</div>
 </div>
 <script type="text/javascript">
   function funcDropdown<?php echo $row['id']; ?>(){
    document.getElementById("myDropdown<?php echo $row['id']; ?>").classList.toggle("show");
   }
   // Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn<?php echo $row['id']; ?>')) {
    var dropdowns = document.getElementsByClassName("dropdown-content<?php echo $row['id']; ?>");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 </script>
 <div id='post-content' style='
    margin-left: 15px;
    margin-right: 15px;
'>
<p style='
    margin-top: 25px;
'><?php echo $row['content']; ?></p>

</div>
<img src='<?php echo $row['image'] ?>' style='width: 600px;margin-bottom: 0px;cursor: pointer;display: <?php echo $row['has_image'] ?>;
'>
 <style type='text/css'>
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
<div id='reaction1' class='noselect'>
 
<div id='butto2' style='
height: 33px;
width: 200px;
padding-top: 5px;
border-radius: 7px;
float:left;
transition: 0.3s;
cursor: pointer;
margin-top: 4px;
margin-left: 0px;
' onclick='funcLike<?php echo $row['id']; ?>()'>
  <div id='like1<?php echo $row['id']; ?>' class='unlike' style='
  width: auto;
  padding: 0 69px;
  height: 38px;
  text-align: left;
  
  '>
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
<div id='butto2' style='
height: 33px;
width: 200px;
padding-top: 5px;
border-radius: 7px;
float:left;
transition: 0.3s;
cursor: pointer;
margin-top: 4px;
margin-left: 0px;
' onclick='funcComment<?php echo $row['id']; ?>()'>
  <div  style='
  width: 203px;
  padding: 0 58px;
  height: 38px;
  text-align: left;
  color: #65676b;
  '>
<i class='far fa-comment'></i> Bình luận
<script type='text/javascript'>
  function funcComment<?php echo $row['id']; ?>() {
  $('#comment<?php echo $row['id']; ?>').focus();
}
</script>
</div>
</div>
<div id='butto2' style='height: 33px;width: 200px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;'>
  <div  style='width: 200px;padding: 0 62px;height: 38px;text-align: left;color: #65676b;'>
<i class='far fa-share-square'></i> Chia sẻ
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
<img src='/images/tunna.jpg' style='border-radius: 50%;width: 40px;float:left;margin-left: 20px;'>

<div id='textbox2' style='display: inline-block;width: 530px;height: 41px;border-radius: 20px;transition: 0.3s;'><textarea class='commentar' id='comment<?php echo $row['id']; ?>' placeholder='Viết một bình luận...' style='border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 445px;height: 40px;margin-left: 9px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px'></textarea>
<i class='fas fa-camera' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>
<i class='far fa-smile' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>
</div>
</div>


</div>
</div>

<?php
  }
} else {
  $content = "block";
}
$conn->close();
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
<img src="/images/404.svg" style="
    width: 110px;
">
<h4 style="color: #64676b">Nội dung bạn truy cập không có sẵn!</h4>
<p style="color: #64676b">Liên kết có thể bị hỏng hoặc trang có thể đã bị xóa.<br> Hãy thử kiểm tra xem liên kết bạn đang cố mở có <br>chính xác không.</p>
<button type="button" class="btn btn-primary" style="
    width: 186px;
    margin-bottom: 10px;
" onclick="location.href = '/';">Đi đến bảng tin</button><br>
<a href="/">Quay lại</a><br>
</center>
</div>

</body>
</html>