<?php
// We need to use sessions, so you should always start sessions using the below code.

session_start();

    // If the user is not logged in redirect to the login page...

if (!isset($_SESSION['loggedin'])) {

  $edit = 'none';

  $editpro = 'none';

  $addfriend = "none";

  $doyouknow = "none";

  $doyouknowbr = "block";

} else {

$edit = 'block';

$editpro = 'inline';

$addfriend = "inline";

$doyouknow = "block";

$doyouknowbr = "none";

if ($_SESSION['username'] == str_replace("/","",$_SERVER['REQUEST_URI'])) {

  $edit = 'block';

  $editpro = 'inline';

  $addfriend = "none";

  $doyouknow = "none";

  $doyouknowbr = "block";

} else {

  $edit = 'none';

  $editpro = 'none';

  $addfriend = "inline";

  $doyouknow = "block";

  $doyouknowbr = "none";

}

}



$tieude = "Trang cá nhân";

require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';

require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';

?>





<body style="background-color: #f0f2f5;">





<style type="text/css">

  .content {

    width: 940px;

    margin: 0 auto;

  }

</style>

<?php

$content2 = "none";

$back = 'block';

require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

if (isset($_GET['username'])) {

$username = $_GET['username'];

$sql = "SELECT name, email, about, has_cover, profile_pic, other_name, cover_pic, date, verified, permission, location,school,live_in,relationship,followers, highlight_photo, profile_pic_id, cover_pic_id, highlight_pic_id FROM accounts WHERE username='$username'";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    if (empty($row['other_name'])) {

      $other_name = 'none';

    } else {

      $other_name = 'inline-block';

    }

    if ($row['verified'] == 'yes') {

      $is_veri = 'inline';

    } else {

      $is_veri = 'none';

    }

    if (empty($row['location'])) {

      $location = 'none';

    } else {

      $location = 'block';

    }

    if (empty($row['school'])) {

      $school = 'none';

    } else {

      $school = 'block';

    }

    if (empty($row['live_in'])) {

      $live_in = 'none';

    } else {

      $live_in = 'block';

    }

    if (empty($row['relationship'])) {

      $relationship = 'none';

    } else {

      $relationship = 'block';

    }

    if ($row['followers'] == 0) {

      $followers = 'none';

    } else {

      $followers = 'block';

    }

    if (empty($row['highlight_photo'])) {

      $hphoto = 'none';

    } else {

      $hphoto = 'block';

    }

$back_height = 545;

$top = 548;

if ($edit == 'none') {

$back_height = 520;

$top = 523;

} 

if (empty($row['about'])) {

      $back_height = 490;

      $top = 493;

    }

    if (empty($row['about']) && $edit == 'block') {

$back_height = 520;

$top = 524;

    }

?>

<div style="display: <?php echo $back; ?>;background-color: white;width:100%;height: <?php echo $back_height ?>px;position: absolute;z-index: -3;    -webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);">

<img src="/images/black_fade.png" style="width: 100%;height:300px;position: absolute;z-index: -3;">

</div>

<div class="content" style="

    margin-top: 50px;

    margin-bottom: 65px;

">

<div style="position:relative">

  <style type="text/css">

  .profile_pic:hover {

    opacity: 90%;

    cursor: pointer;

  }

  .cover_edit {

    background-color: #e4e6eb;

  }

  .cover_edit:hover {

    background-color: #d8d9da;

    cursor: pointer;

  }

</style>

  <img src="/images/gray.jpg" style="object-fit: cover;

width: 100%;position: absolute;

height: 355px;border-radius: 10px;z-index: -2;">

<a href="/photo?id=<?php echo $row['cover_pic_id'] ?>">

<img src="<?php echo $row['cover_pic'] ?>" style="display: <?php echo $row['has_cover'] ?>;object-fit: cover;

width: 100%;position: absolute;

height: 355px;border-radius: 10px;z-index: 0;cursor: pointer;">

</a>

<div class="cover_edit" style="position: absolute;border-radius: 10px;top: 306px;right: 30px;padding-top: 5px;padding-bottom: 5px;padding-left: 12px;padding-right: 12px;font-weight: 500;display: <?php echo $edit ?>"><i class="fas fa-camera"></i> Chỉnh sửa ảnh bìa</div>

<a href="/photo?id=<?php echo $row['profile_pic_id'] ?>">

  <img class="profile_pic" src="<?php echo $row['profile_pic'] ?>" alt="Logo" style="width:165px;border: 4px solid #fff;border-radius: 50%;position: absolute;left: 41%;margin-top: 210px;z-index: 1">

 </a>

<style type="text/css">

  

  .camera {

  background-color: #e4e6eb;

  }

  .camera:hover {

    background-color: #d0d2d6;

  }

</style>

<div class="camera" style="border-radius: 50%;width: 35px;height: 35px;position: absolute;top: 325px;right: 399px;cursor: pointer;z-index: 2;display: <?php echo $edit ?>">

  <i class="fas fa-camera" style="font-size:21px;top: 350px;right: 408px;display: flex;margin-left: 7.5;margin-top: 7px;margin-left: 7.500px;"></i>

</div>

  

  </div>

<h2 style="

    padding-top: 385px;

    text-align: center;

vertical-align: middle;font-weight: 490;

    font-size: 1.78rem;

"><strong style="

    font-size: 2rem;

"><?php echo $row['name'] ?></strong>

 <span style="display: <?php echo $other_name ?>">(<?php echo $row['other_name'] ?>)</span> <i title="Tài khoản đã xác minh" style="color:#07f;font-size:17px;display:<?php echo $is_veri ?>" class="fas fa-check-circle" data-toggle="tooltip" data-placement="top"></i></h2>



<p style="text-align: center;line-height: 22px;margin-bottom: 0;

vertical-align: middle;font-size: 1.1rem;color:#65676b;"><?php echo htmlspecialchars($row['about']) ?></p>

<div style="display:<?php echo $edit ?>;text-align: center;vertical-align: middle;font-weight: 500;">

<a href="#">Chỉnh sửa</a>

</div>

<hr style="margin-top: 10px;margin-bottom: 10px;">

<div>

<div style="width: 82px;float: left;cursor: pointer;padding-top: 6px;">

  <span style="color:#1876f2;font-weight: 500;margin-left: 15px;">Bài viết</span>

  <div style="background-color: #1876f2;height: 3px;margin-top: 14px;"></div>

</div>

<div style="width: 100px;display: inline;float: left;color: #65676b;cursor: pointer;padding-top: 6px;">

  <span style="font-weight: 500;margin-left: 15px;">Giới thiệu</span>

</div>

<div style="width: 80px;display: inline;float: left;color: #65676b;cursor: pointer;padding-top: 6px;">

  <span style="font-weight: 500;margin-left: 15px;">Bạn bè</span>

</div>

<div style="width: 60px;display: inline;float: left;color: #65676b;cursor: pointer;padding-top: 6px;">

  <span style="font-weight: 500;margin-left: 15px;">Ảnh</span>

</div>

</div>



<div style="float: right;">

  <style type="text/css">

    .editprofile {

      border-radius: 7px;

      border: none;

      transition: 0.3s;

      background-color: #e4e6eb;

    }

    .editprofile:hover{

      background-color:#cccccc;

    }

    .editprofile2 {

      border-radius: 7px;

      border: none;

      transition: 0.3s;

      background-color: #e7f3ff;

    }

    .editprofile2:hover{

      background-color:#b4c7da;

    }

    .editprofile3 {

      border-radius: 7px;

      border: none;

      transition: 0.3s;

      background-color: #1877f2;

    }

    .editprofile3:hover{

      background-color:#0f53ab;

    }

    

  </style>

<button class="editprofile" style="

display: <?php echo $editpro ?>;

    padding-top: 7px;

    padding-bottom: 7px;

    

    left: 1177px;

    top: <?php echo $top ?>px;

"><i class="fas fa-pencil-alt"></i> Chỉnh sửa trang cá nhân</button>



<div style="display: <?php echo $addfriend ?>;">

<button class="editprofile2" style="

    padding-top: 7px;

    padding-bottom: 7px;

    color: #0571ed;

    padding-left: 15px;

    padding-right: 15px;font-weight: 500;

"><i class="fas fa-user-plus"></i> Thêm bạn bè</button>

<button class="editprofile" style="

    padding-top: 7px;

    padding-bottom: 7px;

    width: 43px;

"><i class="fas fa-comment"></i></button>

</div>

<button class="editprofile" style="

    padding-top: 7px;

    padding-bottom: 7px;

    

    left: 1388px;

    top: <?php echo $top ?>px;

    width: 43px;

"><i class="fas fa-ellipsis-h"></i></button>

</div>

<br>

<div style="background-color: white;padding-top: 10px;padding-left: 15px;padding-bottom: 5px;margin-top: 38px;-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);border-radius: 7px;height: 79px;display: <?php echo $doyouknow ?>">

  <div style="float: left;margin-left: 19px;">

<h4 style="font-size: 1.2rem;font-weight: 700;">Bạn có biết <?php echo $row['name'] ?> không?</h4>

  <p style="color:#65676b;font-size: 1.1rem;">Hãy gửi lời mời kết bạn để xem những gì anh ấy chia sẻ với bạn bè.</p>

  </div>

  <button class="editprofile3" style="

  float: right;

  padding-top: 7px;

  padding-bottom: 7px;

  color: white;

  padding-left: 15px;

  padding-right: 15px;

  margin-right: 15px;

  margin-top: 10px;

font-weight: 500;

"><i class="fas fa-user-plus"></i> Thêm bạn bè</button>

</div>

<br style="display: <?php echo $doyouknowbr ?>">

<div style="float: left;">

<div style="background-color: white;padding-top: 10px;padding-left: 15px;padding-bottom: 15px;margin-top: 12px;-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);border-radius: 7px;width: 385px;padding-right: 15px;float: left;">

  <h5 style="

    margin-bottom: 12px;

"><strong>Giới thiệu</strong></h5>



<p style="margin-bottom: 13px;display: <?php echo $school ?>"><i class="fas fa-graduation-cap" style="color: #8c939d;font-size: 20px;margin-right: 7px;"></i> Học ở <strong style="font-weight: 500;"><?php echo $row['school'] ?></strong></p>

  <p style="margin-bottom: 13px;display: <?php echo $live_in ?>"><i class="fas fa-home" style="color: #8c939d;font-size: 20px;margin-right: 10px;"></i> Sống tại <strong style="font-weight: 500;"><?php echo $row['live_in'] ?></strong></p>

  <p style="margin-bottom: 13px;display: <?php echo $location ?>"><i class="fas fa-map-marker-alt" style="color: #8c939d;font-size: 20px;margin-right: 13px;margin-left: 4px;"></i> Đến từ <strong style="font-weight: 500;"><?php echo $row['location'] ?></strong></p>

  <p style="margin-bottom: 13px;display: <?php echo $relationship ?>"><i class="fas fa-heart" style="color: #8c939d;font-size: 20px;margin-left: 2px;margin-right: 10px;"></i> <?php echo $row['relationship'] ?></p>

<p style="margin-bottom: 13px;display: <?php echo $followers ?>"><i class="fas fa-wifi" style="transform: rotate(45deg);color: #8c939d;font-size: 20px;margin-right: 7px;"></i> Có <strong style="font-weight: 500;"><?php echo number_format($row['followers'],0,".","."); ?> người</strong> theo dõi</p>



<button class="editprofile" style="display: <?php echo $editpro ?>;padding-top: 7px;padding-bottom: 7px;width: 100%;margin-bottom: 15px;">Chỉnh sửa chi tiết</button>



<img src="<?php echo $row['highlight_photo'] ?>" style="

object-fit: cover;

width: 100%;

height: 355px;

border-radius: 10px;

border: 1px solid black;

display: <?php echo $hphoto ?>

">

<button class="editprofile" style="display: <?php echo $editpro ?>;padding-top: 7px;padding-bottom: 7px;width: 100%;margin-top: 15px;">Chỉnh sửa phần Đáng chú ý</button>

</div>



<br>



<div style="background-color: white;padding-top: 10px;padding-left: 15px;padding-bottom: 15px;margin-top: 15px;-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);border-radius: 7px;width: 385px;padding-right: 15px;float: left;">

  <h5><strong>Ảnh</strong></h5>

</div><br>

<div style="background-color: white;margin-bottom: 10px;padding-top: 10px;padding-left: 15px;padding-bottom: 15px;margin-top: 15px;-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);border-radius: 7px;width: 385px;padding-right: 15px;float: left;">

  <h5><strong>Bạn bè</strong></h5>

</div>



<p style="color:#65676b;font-size: 0.8rem;"><a href="/privacy" style="color:#65676b;">Quyền riêng tư</a> · <a href="/ads" style="color:#65676b;">Quảng cáo</a> · <a href="/about" style="color:#65676b;">Giới thiệu</a> · <a href="/help" style="color:#65676b;">Trợ giúp</a> · C4K60 © 2021</p>

</div>



<div id="mydiv" style="float: right;background-color: white;padding-top: 10px;padding-left:20px;padding-right: 20px;padding-bottom: 10px;margin-top: 12px;width: 537px;-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);border-radius: 7px;margin-bottom: 5px;display: <?php echo $edit ?>">

  <div>

<img src="<?php echo $_SESSION['profile_pic'] ?>" style="border-radius: 50%;width: 40px;display: inline-block;">



<div id="textbox" onclick="setTimeout(myFunction2, 2000);" data-toggle="modal" data-target="#myModal" style="display: inline-block;width: 445px;margin-left: 5px;height: 41px;padding-top: 8px;border-radius: 20px;padding-left: 13px;transition: 0.3s;cursor: pointer;">Bạn đang nghĩ gì?</div>

<style type="text/css">

  #textbox{

    background-color: #f0f2f5



   }

  #textbox:hover{



    background-color: #e6e6e6

   }

</style>

<hr style="margin-top: 10px;margin-bottom: 8px;">

</div>

<div id="butto1" style="

    height: 40px;

    width: 243px;

    padding-top: 8px;

    position: absolute;

    float: left;

    border-radius: 7px;

    transition: 0.3s;

    cursor: pointer;

">

<div style="

  width: auto;

  padding: 0 70px;

  height: 100%;

  width: 240px;

  float: left;

  text-align: left;

  color: #65676b;

  ">

 

<i class="fas fa-images" style="color: #45bd62"></i> Ảnh/Video

  </div>

</div>

<div id="butto2" style="height: 40px;width: 250px;padding-top: 8px;border-radius: 7px;float: right;transition: 0.3s;cursor: pointer;">

  <div style="width: auto;

  padding: 0 42px;

  height: 100%;

  float: right;

  text-align: left;

 color: #65676b">

<i class="fas fa-smile" style="color: #f7b928"></i> Cảm xúc/Hoạt động

</div>

  </div>

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

</div>





<div id="newsfeed">

<?php



$sql = "SELECT id, author, content, username, timeofpost, image, has_image, avatar, c4id FROM tintuc_posts WHERE username='$username' ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

 // output data of each row

 while($row = mysqli_fetch_assoc($result)) {

 ?>



<div id='mydiv' style='

    background-color: white;

    padding-top: 10px;

    padding-left: 0px;

    padding-right: 0px;

    padding-bottom: 5px;

    margin-top: 11px;

    -webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);

    border-radius: 7px;

    width: 537px;

    float: right;

    margin-bottom: 4px;

    '>

  <img src='<?php echo $row['avatar']; ?>' style='border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-left: 15px;'>

  <div style='display: inline-block;margin-left: 65px;'>

  <a href="/<?php echo $row['username'] ?>" style="color: black;"><strong><?php echo $row['author']; ?> <i title='Tài khoản đã xác minh' style='color:#07f;font-size:14px;display:<?php echo $is_veri ?>' class='fas fa-check-circle'></i></strong></a>

  <p style='position: absolute;font-size: 12px;color:#9e9b9b'>

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

<a href="/photo?id=<?php echo $row['c4id'] ?>">

<img src='<?php echo $row['image'] ?>' style='width: 537px;margin-bottom: 0px;cursor: pointer;display: <?php echo $row['has_image'] ?>;

'>

</a>

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

  <i class='fas fa-circle fa-stack-2x backlike'></i>

  <i class='fas fa-thumbs-up fa-stack-1x fa-inverse' style='

    margin-left: 9px;

'></i>

</span>

<p style='display: inline;color: #65676b;'><?php echo $_SESSION['name'] ?></p>

</div>

<div id='reaction1' class='noselect'>

 

<div id='butto2' style='height: 33px;width: 175px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;' onclick='funcLike<?php echo $row['id']; ?>()'>

  <div id='like1<?php echo $row['id']; ?>' class='unlike' style="

  width: 180px;

  padding: 0 60px;

  height: 38px;

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

<div id='butto2' style='height: 33px;width: 175px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;' onclick='funcComment<?php echo $row['id']; ?>()'>

  <div style="

  width: 175px;

  padding: 0 43px;

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

<div id='butto2' style="height: 33px;width: 175px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;">

  <div  style='width: 200px;padding: 0 50px;height: 38px;text-align: left;color: #65676b;'>

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





<div id='textbox2' style='display: inline-block;width: 530px;height: 41px;border-radius: 20px;transition: 0.3s;'>

<img src='<?php echo $_SESSION['profile_pic'] ?>' style='border-radius: 50%;width: 40px;float:left;margin-left: 20px;'>

  <textarea class='commentar' id='comment<?php echo $row['id']; ?>' placeholder='Viết một bình luận...' style='border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 387px;height: 40px;margin-left: 9px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px;'></textarea>

<i class='fas fa-camera' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>

<i class='far fa-smile' style='float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;'></i>

</div>

</div>





</div>



<?php

 }

}

?>

</div>



</div>

<?php

}

} else {

  $content2 = "block";

  $back = "none";

}

}



?>



<div class="content2" style="

display: <?php echo $content2 ?>;

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

<a href="#" onclick="window.history.back();">Quay lại</a><br>

</center>

</div>

<!-- The Modal -->

<div class="modal" id="myModal" >

  <div class="modal-dialog">

    <div class="modal-content" style="width: 600px;top: 200px;left: -10%;">



 <!-- Modal Header -->

 <div class="modal-header" style="

    padding-left: 240px;

">

   <h4 class="modal-title" style="text-align: center;">Tạo bài viết</h4>

   <button type="button" class="close" data-dismiss="modal">&times;</button>

 </div>



 <!-- Modal body -->

 <div class="modal-body" style="

    height: 297px;

">

<div id="createpost" style="display: none;">

   <img src="<?php echo $_SESSION['profile_pic'] ?>" style="border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-top: 5px;">

  <div style="display: inline-block;margin-left: 52px;">

  <p style="

    margin-bottom: 0px;

"><strong style=""><?php echo $_SESSION['name'] ?></strong></p>

<div id="butto55" style="

    height: 21px;

    width: 83.11687px;

    padding-top: 2px;

    position: absolute;

    float: left;

    border-radius: 7px;

    transition: 0.3s;

    cursor: pointer;

    padding-left: 5px;background-color: #f1f1f1;

">

<div style="

  width: 78px;

  padding: 0 0;

  height: 100%;

  float: left;

  text-align: left;

  color: #65676b;

  ">



<p style="position: absolute;font-size: 12px;color:#9e9b9b">

  <i class="fas fa-globe-americas"></i> Công khai</p>

</div>

</div>



</div>



<form id="myform" action="index.php" method="POST" enctype=multipart/form-data>



  <input type="hidden" id="avatar" name="avatar" value="<?php echo $_SESSION['profile_pic'] ?>">

  <input type="hidden" id="username" name="username" value="<?=$_SESSION['username']?>">

  <input type="hidden" id="name" name="name" value="<?=$_SESSION['name']?>">

<div id="textbox2" onkeyup="success()" style="display: inline-block;width: 530px;height: 41px;border-radius: 20px;transition: 0.3s;margin-top: 28px;"><textarea class="commentar" id="postcontent" name="postcontent" placeholder="Bạn đang nghĩ gì?" style="border: none;outline: none;resize: none;overflow: auto;width: 567px;height: 160px;padding-top: 7px;background-color: white;padding-left: 0px;font-size: 25px;"></textarea>

</div>

<script type="text/javascript">

  function success() {

   if(document.getElementById("textbox2").value==="") { 

  document.getElementById('post_button').disabled = true; 

   } else { 

  document.getElementById('post_button').disabled = false;

   }

    }

</script>

<div id="butto66" style="

    height: 48px;

    width: 566px;

    padding-top: 2px;

    position: absolute;

    float: left;

    border-radius: 7px;

    transition: 0.3s;

    padding-left: 5px;

    display: block;

">

<p style="

    margin-top: 10px;

    margin-left: 13px;

    width: 135px;

    cursor: pointer;

    float: left;

">

Thêm vào bài viết

</p>

<i class="fas fa-ellipsis-h" style="float: right;margin-top: 15px;margin-right: 20px;cursor: pointer;"></i>

<i class="fas fa-smile" style="float: right;margin-top: 13px;margin-right: 20px;font-size: 20px;color: #f7b928;cursor: pointer;"></i>

<i class="fas fa-map-marker-alt" style="float: right;margin-top: 13px;margin-right: 20px;font-size: 20px;color: #f5533e;cursor: pointer;"></i>

<i class="fas fa-user-tag" style="float: right;margin-top: 13px;margin-right: 20px;font-size: 20px;color: #037bff;cursor: pointer;"></i>

<i class="fas fa-images" onclick="myfunction3()" style="float: right;margin-top: 13px;margin-right: 20px;font-size: 20px;color: #45bd62;cursor: pointer;"></i>

<i class="fas fa-circle" style="float: right;margin-top: 11px;margin-right: 47px;font-size: 24px;color: #2abba7;cursor: pointer;"><p style="position: absolute;font-size: 11px;color: white;margin-top: 6px;margin-left: 2px;">GIF</p></i>

</div>

<style type="text/css">

  .fa-circle:before {

    content: "\f111";

    position: absolute;

}

</style>

<script type="text/javascript">

  function myfunction3(){

    document.getElementById("butto66").style.display = "none";

    document.getElementById("custom-file").style.display = "block";

  }

   

</script>



  <div class="custom-file" id="custom-file" style="display: none;">





  <div class="custom-file">

    <input type="file" class="custom-file-input" name="userfile" id="customFile">

    <label class="custom-file-label" name="imagefilename" for="customFile">Chọn ảnh</label>

  </div>

  </div>

<?php

error_reporting(0);

if(!empty($_POST)) {

   echo "<meta http-equiv='refresh' content='0'>";

 $name = $_POST['name'];

 $email = $_POST['postcontent'];

 date_default_timezone_set('Asia/Ho_Chi_Minh');

 $time = date('Y-m-d H:i:s');

 $avatar = $_POST['avatar'];

 $image = "images/". $_FILES['userfile']['name']."";

 $username2 = $_POST['username'];

 if (!empty($_FILES['userfile']['name'])){

    $has_image = 'block';

 } else {

    $has_image = 'none';

 }

 require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

  $errors=array();

 $allowed_e=array('png','jpg','jpeg');

 $file_name=$_FILES['userfile']['name'];

 $file_e=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

 $file_s= $_FILES['userfile']['size'];

 $file_tmp=$_FILES['userfile']['tmp_name'];

 

    

 if($file_s>5097152){

   $errors[]='Chỉ có thể upload ảnh <5MB';

 }

 if(empty($errors)){

   move_uploaded_file($file_tmp,'images/'.$file_name);

  $sql = "INSERT INTO tintuc_posts (author, content, timeofpost, has_comment, avatar, has_image, image, username)

VALUES ('$name', '$email', '$time', 'no', '$avatar', '$has_image', ' $image', '$username2')";



if (mysqli_query($conn, $sql)) {

 echo "<script>console.log('Lệnh SQL thực thi thành công');";

} else {

 echo "Error: " . $sql . "" . mysqli_error($conn);

}

$con->close();  

   

   echo "console.log('Upload ảnh thành công');</script>";

 }else{

   foreach($errors as $error){

echo $error,'<br/>';

   }

 }

} 

 

?>





<script>

// Add the following code if you want the name of the file appear on select

$(".custom-file-input").on("change", function() {

  var fileName = $(this).val().split("\\").pop();

  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);

});

</script>







</div>



<script>

$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

function myFunction2() {

  document.getElementById("light").style.display = "none";

  document.getElementById("createpost").style.display = "block";

}

</script>

<div class="lightui1" id="light" style="

    padding-left: 0px;

    padding-right: 0px;

    padding-top: 0px;

">

 <div class="lightui1-shimmer">

   <div class="_2iwr"></div>

   <div class="_2iws"></div>

   <div class="_2iwt"></div>

   <div class="_2iwu"></div>

   <div class="_2iwv"></div>

   <div class="_2iww"></div>

   <div class="_2iwx"></div>

   <div class="_2iwy"></div>

   <div class="_2iwz"></div>

   <div class="_2iw-"></div>

   <div class="_2iw_"></div>

   <div class="_2ix0"></div>

 </div>

  </div>



 </div>



 <!-- Modal footer -->

 <div class="modal-footer" style="border-top: 0 none;padding-top: 0px;">

   <button type="submit" id="post_button" name="post_button" class="btn btn-primary2 btn-primary" style="

    width: 626px;border-radius: 7px;

" disabled>Đăng bài viết</button>

</form>

 </div>







</body>

</html>