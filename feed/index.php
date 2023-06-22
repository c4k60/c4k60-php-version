<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /login');
}
?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'delete') {
  $post_id = $_GET['post_id'];
  $sql = "DELETE FROM tintuc_posts WHERE id='$post_id'";
$conn->query($sql);
 }
}
$tieude = "Trang chủ";
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
?>

<body style="background-color: #f0f2f5;">
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
?>
<style type="text/css">
  .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
		.content {
    width: 600px;
    margin: 0 auto;
}
.vertical-center {
  margin: 0;
  position: absolute;
    top: 23%;
  right: 35.5%;

  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.fa-arrow-right{
	 margin: 0;
  position: absolute;
top: 34.9%;
    right: 39.2%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.wrap , .wrap2{
  max-width:600px;
  margin:auto;
  background:#fff; 
}
  .media{
    padding:1em;
  }
  .media-img, .media-desc{
    display:inline-block;
    vertical-align:top;
  }
  .media-img {
    margin:0 1em 0 0;
    width:30%;
    height:100px;
    background-color:#f0f0f0;
  }
  .media-desc{
    width:60%;
  }
  .media-desc .bar{
    margin:0 0 1em 0;
    height:20px;
    background-color:#f0f0f0;
  }

  .media-img, .media-desc .bar{
    -webkit-animation: gleam 2s ease-in-out infinite;
    background-image:-webkit-linear-gradient(left, #E9EAED, #f8f8f8, #E9EAED);
    background-size:600px auto;
  }

@-webkit-keyframes gleam{
  0% { background-position:0 0 }
  100% { background-position:600px 0 }
}
#mydiv, #post1, #post2, .wrap, #butto66{
box-shadow: 0px 0px 8px -1px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px 0px 3px -1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 8px -1px rgba(0,0,0,0.75);
border-radius: 7px;
}
}
#u_0_v {
  width: 500px;
  margin: 0 auto;
}

.lightui1{border-color:#bdbdbd;border-radius:2px;
padding: 20px;
background: #ffffff;}

.lightui1-shimmer {
  -webkit-animation-duration: 1s;
  -webkit-animation-fill-mode: forwards;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-name: placeHolderShimmer;
  -webkit-animation-timing-function: linear;
  background: #d8d8d8;
  background-image: linear-gradient(to right, #d8d8d8 0%, #bdbdbd 20%, #d8d8d8 40%, #d8d8d8 100%);
  background-repeat: no-repeat;
  background-size: 800px 104px;
  height: 104px;
  position: relative
}

.lightui1-shimmer div {
  background: #ffffff;
  height: 6px;
  left: 0;
  position: absolute;
  right: 0
}




._2iwo {
  height: 200px;
  padding: 12px
}


div._2iwr {
  height: 40px;
  left: 40px;
  right: auto;
  top: 0;
  width: 8px;
}

div._2iws {
  height: 8px;
  left: 48px;
  top: 0
}

div._2iwt {
  left: 136px;
  top: 8px
}

div._2iwu {
  height: 12px;
  left: 48px;
  top: 14px
}

div._2iwv {
  left: 100px;
  top: 26px
}

div._2iww {
  height: 10px;
  left: 48px;
  top: 32px
}

div._2iwx {
  height: 20px;
  top: 40px
}

div._2iwy {
  left: 410px;
  top: 60px
}

div._2iwz {
  height: 13px;
  top: 66px
}

div._2iw- {
  left: 440px;
  top: 79px
}

div._2iw_ {
  height: 13px;
  top: 85px
}

div._2ix0 {
  left: 178px;
  top: 98px
}

@-webkit-keyframes placeHolderShimmer {
  0% {
    background-position: -468px 0
  }
  100% {
    background-position: 468px 0
  }
}

@-webkit-keyframes prideShimmer {
  from {
    background-position: top left
  }
  to {
    background-position: top right
  }
}


.bgColor {
max-width: 440px;
height:150px;
background-color: #fff4be;
border-radius: 4px;
}
.bgColor label{
font-weight: bold;
color: #A0A0A0;
}
#targetLayer{
float:left;
width:150px;
height:150px;
text-align:center;
line-height:150px;
font-weight: bold;
color: #C0C0C0;
background-color: #F0E8E0;
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}
#uploadFormLayer{
  float:left;
  padding: 20px;
}
.btnSubmit {
  background-color: #696969;
    padding: 5px 30px;
    border: #696969 1px solid;
    border-radius: 4px;
    color: #FFFFFF;
    margin-top: 10px;
}
.inputFile {
  padding: 5px;
  background-color: #FFFFFF;
  border:#F0E8E0 1px solid;
  border-radius: 4px;
}
.image-preview {  
width:150px;
height:150px;
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}

.container{padding:20px;margin:20px 0;}

/* Radio group */
.segmented {
    display:flex;
    flex-flow:row wrap;
    box-sizing:border-box;
    font-family:"Helvetica Neue";
    font-size:90%;
    text-align:center;
}
.segmented label {
    display:block;
    flex:1;
    box-sizing:border-box;
    border:1px solid #167efb;
    border-right:none;
    color:#167efb;
    margin:0;
    padding:.4em;
    cursor: pointer;
    user-select:none;
    -webkit-user-select:none;
}
.segmented label.checked {
    background:#167efb;
    color:#fff;
}
.segmented.inverted label {
    border-color:#fff;
    color:#fff;
    background:none;
}
.segmented.inverted label.checked {
    background:#fff;
    color:inherit;
}
.segmented label:first-child {
    border-radius:.4em 0 0 .4em;
    border-right:0;
}
.segmented label:last-child {
    border-radius:0 .4em .4em 0;
    border-right:1px solid;
}
.segmented input[type="radio"] {
    appearance:none;
    -webkit-appearance:none;
    margin:0;
    position: absolute;
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
<div class="content" style="
    margin-top: 86px;
    margin-bottom: 65px;
">
<div id="mydiv" style="background-color: white;padding-top: 10px;padding-left:20px;padding-right: 20px;padding-bottom: 48px;margin-top: 20px;">
  <div>
<img src="/images/tunna.jpg" style="border-radius: 50%;width: 40px;display: inline-block;">

<div id="textbox" onclick="setTimeout(myFunction2, 2000);" data-toggle="modal" data-target="#myModal" style="display: inline-block;;width: 510px;margin-left: 5px;height: 41px;padding-top: 8px;border-radius: 20px;padding-left: 13px;transition: 0.3s;cursor: pointer;">Bạn đang nghĩ gì vậy, Tùng Anh?</div>
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
    width: 270px;
    padding-top: 8px;
    position: absolute;
    float: left;
    border-radius: 7px;transition: 0.3s;
cursor: pointer;
">
<div style="width: auto;
  padding: 0 86px;
  height: 100%;
  width: 280px;
  float: left;
  text-align: left;
 color: #65676b;">
 
<i class="fas fa-images" style="color: #45bd62"></i> Ảnh/Video
  </div>
</div>
<div id="butto2" style="
height: 40px;
    width: 270px;
    padding-top: 8px;
 border-radius: 7px;
    float: right;transition: 0.3s;cursor: pointer;
">
  <div style="   width: auto;
  padding: 0 51px;
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
$sql = "SELECT tintuc_posts.id, tintuc_posts.author, tintuc_posts.content, tintuc_posts.username, tintuc_posts.timeofpost, tintuc_posts.image, tintuc_posts.has_image, tintuc_posts.avatar, tintuc_posts.c4id, accounts.verified FROM tintuc_posts INNER JOIN accounts ON tintuc_posts.username = accounts.username ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
  if ($row['verified'] == 'yes') {
      $is_veri = 'inline';
    } else {
      $is_veri = 'none';
    }
 ?>

<div id='mydiv' style='background-color: white;padding-top: 10px;padding-left: 0px;padding-right: 0px;padding-bottom: 5px;margin-top: 20px;'>
  <img src='<?php echo $row['avatar']; ?>' style='border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-left: 15px;'>
  <div style='display: inline-block;margin-left: 65px;'>
  <a href="/<?php echo $row['username'] ?>" style="color: black;"><strong style=''><?php echo $row['author']; ?> <i title='Tài khoản đã xác minh' style='color:#07f;font-size:14px;display:<?php echo $is_veri ?>' class='fas fa-check-circle'></i></strong></a><p style='position: absolute;font-size: 12px;color:#9e9b9b'>
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
<img src='<?php echo $row['image'] ?>' style='width: 600px;margin-bottom: 0px;cursor: pointer;display: <?php echo $row['has_image'] ?>;
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
<img src='<?php echo $_SESSION['profile_pic'] ?>' style='border-radius: 50%;width: 40px;float:left;margin-left: 20px;'>

<div id='textbox2' style='display: inline-block;width: 530px;height: 41px;border-radius: 20px;transition: 0.3s;'><textarea class='commentar' id='comment<?php echo $row['id']; ?>' placeholder='Viết một bình luận...' style='border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 445px;height: 40px;margin-left: 9px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px'></textarea>
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



<div id="post1" style="background-color: white;padding-top: 10px;padding-left: 0px;padding-right: 0px;padding-bottom: 5px;margin-top: 20px;">
  <img src="/images/phatdeptrai.jpg" style="border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-left: 15px;">
  <div style="display: inline-block;margin-left: 65px;">
  <a href="/hoangphat" style="color: black;"><strong style="">Hoàng Phát <i id='tunganh2' title='Tài khoản đã xác minh' style='color:#07f;font-size:14px;display:none;' class='fas fa-check-circle'></i></strong></a><p style="position: absolute;font-size: 12px;color:#9e9b9b">
  <a href="post.php?id=1015" id="concac" style="color: #9e9b9b"></a> · <i class="fas fa-globe-americas"></i></p>
<script type="text/javascript">
  document.getElementById('concac').innerHTML = moment('2020-11-23 15:03:22', 'YYYY-MM-DD h:m:s').fromNow();
</script>
</div>
<style type="text/css">
.dropdown {
  position: relative;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;
border-radius: 10px;
}

.show {display: block;}

</style>
 <div class="dropdown" onclick="funcDropdown()">
 <i class="fas fa-ellipsis-h dropbtn" style="margin-top: 7px;margin-right: 15px;cursor: pointer;"></i>
<div id="myDropdown" class="dropdown-content">
  <a href="#"><i class="far fa-bookmark" style="margin-right: 6px;"></i> Lưu bài viết</a>
  <a href="#" data-toggle="modal" data-target="#deleteModal"><i class="far fa-trash-alt" style="margin-right: 6px;"></i> Xoá bài viết</a>
</div>
<!-- The Modal -->
<div class="modal" id="deleteModal">
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
        <a href="/index.php?action=delete&post_id=1" class="btn btn-danger" style="background-color: #3568dc;
    border-color: #3568dc;color: white;cursor: pointer;">Xoá</a>
      </div>

    </div>
  </div>
</div>
 </div>
 <script type="text/javascript">
   function funcDropdown(){
    document.getElementById("myDropdown").classList.toggle("show");
   }
   // Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
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
 <div id="post-content" style="
    margin-left: 15px;
    margin-right: 15px;
">
<p style="
    margin-top: 25px;
">Xin chào các cháu đã quay trở lại kênh của bà tân vê lóc...</p>

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
  <div id="peopleliked" class="pl" style="
    margin-bottom: 7px;
">
    <span class="fa-stack" style="
    font-size: 0.6rem;
    margin-bottom: 4px;
    margin-left: 3px;
    margin-right: 8px;
">
  <i class="fas fa-circle fa-stack-2x backlike"></i>
  <i class="fas fa-thumbs-up fa-stack-1x fa-inverse" style="
    margin-left: 9px;
"></i>
</span>
<p style="display: inline;color: #65676b;">Dương Tùng Anh</p>
</div>
<div id="reaction1" class="noselect">
 
<div id="butto2" style="
height: 33px;
width: 200px;
padding-top: 5px;
border-radius: 7px;
float:left;
transition: 0.3s;
cursor: pointer;
margin-top: 4px;
margin-left: 0px;
" onclick="funcLike()">
  <div id="like1" class="unlike" style="
  width: auto;
  padding: 0 69px;
  height: 38px;
  text-align: left;
  
  ">
<i class="far fa-thumbs-up" id="likee"></i> Thích
</div>
<script type="text/javascript">
  function funcLike() {
  document.getElementById("likee").classList.toggle("fas");
  document.getElementById("like1").classList.toggle("liked");
  document.getElementById("peopleliked").classList.toggle("peopleliked");
}
</script>
</div>
<div id="butto2" style="
height: 33px;
width: 200px;
padding-top: 5px;
border-radius: 7px;
float:left;
transition: 0.3s;
cursor: pointer;
margin-top: 4px;
margin-left: 0px;
" onclick="funcComment()">
  <div  style="
  width: 203px;
  padding: 0 58px;
  height: 38px;
  text-align: left;
  color: #65676b;
  ">
<i class="far fa-comment"></i> Bình luận
<script type="text/javascript">
  function funcComment() {
  $('#comment').focus();
}
</script>
</div>
</div>
<div id="butto2" style="height: 33px;width: 200px;padding-top: 5px;border-radius: 7px;float:left;transition: 0.3s;cursor: pointer;margin-top: 4px;margin-left: 0px;">
  <div  style="width: 200px;padding: 0 62px;height: 38px;text-align: left;color: #65676b;">
<i class="far fa-share-square"></i> Chia sẻ
</div>
</div>
<hr style="
    margin-bottom: 38px;
    margin-top: 0px;
    margin-left: 15px;
    margin-right: 15px;
">
<hr style="
   margin-bottom: 10px;
   margin-top: 6px;
   margin-left: 15px;
   margin-right: 15px;
">
<img src="/images/tunna.jpg" style="border-radius: 50%;width: 40px;float:left;margin-left: 20px;">

<div id="textbox2" style="display: inline-block;width: 530px;height: 41px;border-radius: 20px;transition: 0.3s;"><textarea class="commentar" id="comment" placeholder="Viết một bình luận..." style="border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 445px;height: 40px;margin-left: 9px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px"></textarea>
<i class="fas fa-camera" style="float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;"></i>
<i class="far fa-smile" style="float: right;margin-right: 15px;margin-top: 12px;cursor: pointer;"></i>
</div>
</div>


</div>




<center>
  <br>
  <img src="/images/pingpong.png" style="
    height: 97px;
">
  <br><br>
<p style="color: grey">Có vẻ như không còn bài viết nào.</p>
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
   <img src="/images/tunna.jpg" style="border-radius: 50%;width: 40px;display: inline-block;position: absolute;margin-top: 5px;">
  <div style="display: inline-block;margin-left: 52px;">
  <p style="
    margin-bottom: 0px;
"><strong style="">Dương Tùng Anh</strong></p>
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

  <input type="hidden" id="avatar" name="avatar" value="/images/tunna.jpg">
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

if(!empty($_POST)) {
   echo "<meta http-equiv='refresh' content='0'>";
 $name = $_POST['name'];
 $email = $_POST['postcontent'];
 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $time = date('Y-m-d H:i:s');
 $avatar = $_POST['avatar'];
 $image = "/images/". $_FILES['userfile']['name']."";
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
   if ($image != "/images/") {
   $c4id = rand(10000, 99999);
 } else {
  $c4id = 0;
 }
  $sql = "INSERT INTO tintuc_posts (author, content, timeofpost, has_comment, avatar, has_image, image, username, c4id)
VALUES ('$name', '$email', '$time', 'no', '$avatar', '$has_image', ' $image', '$username2', '$c4id')
";
$sql2 = "INSERT INTO images_upload (c4id, username, filename, time_of_upload, caption) VALUES ('$c4id', '$username2', '$image', '$time', '$email')";
if (mysqli_query($conn, $sql)) {
 echo "<script>console.log('Lệnh SQL thực thi thành công');";
} else {
 echo "Error: " . $sql . "" . mysqli_error($conn);
}
if ($image != "/images/") {
mysqli_query($conn, $sql2);
}

$conn->close();  
   
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

    </div>
  </div>
</div>
</body>
</html>