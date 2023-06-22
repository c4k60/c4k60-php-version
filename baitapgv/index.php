<!DOCTYPE html>
<html>

  <!-- Trang web được lập trình bởi Dương Tùng Anh - C4K60 Chuyên Hà Nam -->
<!-- Mọi thông tin chi tiết xin liên hệ https://facebook.com/tunnaduong/ -->
<html>
	<head>
		<?php 
$title = 'C4K60 - Bài tập giáo viên giao';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>
	</head>
  <body style="margin-top: 100px;">
  	
   
<style>
@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
.navbar-icon-top .navbar-nav .nav-link > .faf {
  position: relative;
  width: 36px;
  font-size: 24px;
}
.navbar-icon-top .navbar-nav .nav-link > .faf > .badge {
  font-size: 0.75rem;
  position: absolute;
  right: 0;
  font-family: sans-serif;
}
.navbar-icon-top .navbar-nav .nav-link > .faf {
  top: 3px;
  line-height: 12px;
}
.navbar-icon-top .navbar-nav .nav-link > .faf > .badge {
  top: -10px;
}
@media (min-width: 576px) {
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .faf {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .faf > .badge {
    top: -7px;
  }
}
@media (min-width: 768px) {
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .faf {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .faf > .badge {
    top: -7px;
  }
}
@media (min-width: 992px) {
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .faf {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .faf > .badge {
    top: -7px;
  }
}
@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .faf {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .faf > .badge {
    top: -7px;
  }
}
</style>
<?php 
$tracuu = 'active';
$baitapgv = 'active';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
?>
<div class="container" style="max-width: 65rem;">
    
<style>
 {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  border-radius: 10px;
  background-color: #dbb926;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: -20px;
  right: 28px;
  width: 280px;
-webkit-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.4);
-moz-box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.4);
box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.4);
}
/* The popup chat - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
	background-color:white;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
} 

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
    cursor: pointer;
}
.top-center {
  position: absolute;
top: -9px;
right: 83px;
    font-size:40px;
      cursor: pointer;
}
.transparent {
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;

}
@media (min-width: 48em)
.container {
    max-width: 65rem;
}
</style>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";

window.scrollBy(0,50);

scrolldelay = setTimeout('pageScroll()',200); //Increase this # to slow down, decrease to speed up scrolling


}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
    document.getElementById("chatbar").style.display = "block";
} 
function openBar() {
  document.getElementById("chatbar").style.display = "block";
} 
function closeBar() {
  document.getElementById("chatbar").style.display = "none";
} 
function closeFormBar() {
  document.getElementById("chatbar").style.display = "none";
    document.getElementById("myForm").style.display = "none";
} 
</script>
<div class="open-button" style="display:none" id="chatbar"><img src="/logoc4k60.png" height="30" width="40" style="float:left;margin-left: -13px;margin-bottom: 0px;padding-bottom: 0px;margin-top: 0px;"><p onclick="openForm()" style="float:left;color:black;padding-top: 3px;">Chat chít C4K60 </p><span class="badge badge-danger" style="margin-left: 5px;">1</span> <div class="top-center transparent" style="color: white" onclick="openForm()" >bbbbbbbb</div><i style="float:right;color:black;margin-top: 5px;" class="fas fa-times-circle" onclick="closeBar()"></i></div>
 <div class="form-popup shadow" id="myForm" style=" width:300px;height:400px;border-radius: 10px;">

<div id="tlkio" data-theme="theme--yellow" data-channel="C4K60" data-custom-css="https://c4k60.ga/assets/custom.css" style="width:100%;height:400px; border-radius: 10px;"></div>
 <div class="top-left" style="color: white" onclick="closeFormBar()"><i class="fas fa-times-circle"></i></div>
 <div class="top-center transparent" style="color: white" onclick="closeForm()">bbbbbbbb</div>
 <script type="text/javascript">
$(document).ready(function() {
  $("#frame").load(function(){this.contentWindow.scrollBy(0,100000)});
});
</script>
<script>
  !function(t,e){var i=function(){var t=e.getElementById("tlkio"),i=t.getAttribute("data-env")||"production",n=t.getAttribute("data-channel"),a=t.getAttribute("data-theme"),o=t.getAttribute("data-custom-css"),s=t.getAttribute("data-nickname"),l=e.createElement("iframe"),r="//embed.tlk.io/"+n,m=[];"dev"==i&&(r="http://embed.lvh.me:3000/"+n),o&&o.length&&m.push("custom_css_path="+o),s&&s.length&&m.push("nickname="+s),a&&a.length&&m.push("theme="+a),m.length&&(r+="?"+m.join("&")),l.setAttribute("src",r),l.setAttribute("width","100%"),l.setAttribute("height","100%"),l.setAttribute("frameborder","0"),l.setAttribute("style","margin-bottom: -8px;");var u=t.getAttribute("style");t.setAttribute("style","overflow: auto; -webkit-overflow-scrolling: touch;"+u),t.textContent="",t.appendChild(l)},n=function(){var n=e.getElementById("tlkio"),a=e.createElement("style"),o=e.createElement("img");a.textContent=".tlkio-pulse{width:70px;margin:-27px 0 0 -35px;position:absolute;top:50%;left:50%;animation: tlkio-pulse 1.5s ease-in 0s infinite;}@keyframes tlkio-pulse{0%{transform:scale(1)}10%{transform:scale(1.15)}18%{transform:scale(0.95)}24%{transform:scale(1)}}",o.src="//tlk.io/images/logo.png",o.className="tlkio-pulse","static"==t.getComputedStyle(n).position&&(n.style.position="relative"),n.appendChild(a),n.appendChild(o),t.setTimeout(i,3e3)};t.addEventListener?t.addEventListener("load",n,!1):t.attachEvent("onload",n)}(window,document);
</script>

</div> 


        <h3><i class="fas fa-book"></i> Tra cứu bài tập giáo viên giao</h3>
<p style="margin: 0; padding: 0">
<br />
</p>
<style>
    @media (max-width: 576px) {
        table {
       zoom: 0.8;
        }
    }
</style>



<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM baitap_gv ORDER BY id DESC";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
    ?>
    <table class="table table-striped" style="overflow-x:auto;">
<thead>
  <tr>
    <th>Tiêu đề</th>
    <th>Giáo viên giao</th>
    <th>Ngày giao bài</th>
    <th>Hạn nộp</th>
  </tr>
</thead>
<tbody>
    <?php
      while($row=mysqli_fetch_assoc($results)){
          $idngaygiao = "";
$ngaygiao = strtotime($row['ngaygiao']);
$hientai = strtotime(date("Y-m-d H:i:s"));
$ngaygiaodenhientai = $hientai - $ngaygiao;

if($ngaygiaodenhientai < 86400) {
    $idngaygiao = "ngaygiaohnay".$row['id'];
 } elseif ($ngaygiaodenhientai < 146869) {
    $idngaygiao = "ngaygiaohqua".$row['id'];
 } elseif ($ngaygiaodenhientai < 233200) {
    $idngaygiao = "ngaygiaohkia".$row['id'];
 } else {
    $idngaygiao = "ngaygiao".$row['id'];
 }
 if ($row['urltype'] == "local") {
    $link = "baitap/".$row['link'];     
 } else {
    $link = $row['link'];
 }
?>
  <tr>
    <td><a href="<?php echo $link ?>"><span class="badge badge-secondary"><?php echo $row['monhoc'] ?></span> [<?php echo $row['theloai'] ?>]<?php echo $row['title'] ?></a></td>
    <td><?php echo $row['gvgiao'] ?></td>
    <td id="<?php echo $idngaygiao ?>"></td>
    <script type="text/javascript">
  document.getElementById('ngaygiao<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['ngaygiao'] ?>', 'YYYY-MM-DD h:m:s').format('Do MMMM [lúc] H:mm');
  </script>
  <script>
  document.getElementById('ngaygiaohnay<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['ngaygiao'] ?>', 'YYYY-MM-DD h:m:s').fromNow() + " (" + moment('<?php echo $row['ngaygiao'] ?>', 'YYYY-MM-DD h:m:s').format('HH:mm') + ")";
  </script>
  <script>
  document.getElementById('ngaygiaohqua<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['ngaygiao'] ?>', 'YYYY-MM-DD h:m:s').calendar();
  </script>
  <script>
  document.getElementById('ngaygiaohkia<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['ngaygiao'] ?>', 'YYYY-MM-DD h:m:s').format('[Hôm kia lúc] HH:mm');
</script>
    <td>
        <?php
        $idhannop = "";
$hannop = strtotime($row['hannop']);
$hientai = strtotime(date("Y-m-d H:i:s"));
$hannopdenhientai = $hientai - $hannop;
if ($hannopdenhientai < 146869 && $hannopdenhientai > 0) {
    $idhannop = "hannophnayhquanmai".$row['id'];
 } elseif ($hannopdenhientai < 233200 && $hannopdenhientai > 0) {
    $idhannop = "hannophkia".$row['id'];
 } elseif ($hannopdenhientai > -112400 && $hannopdenhientai < 0) {
    $idhannop = "hannophnayhquanmai".$row['id'];
 } elseif ($hannopdenhientai > -198800 && $hannopdenhientai < 0) {
    $idhannop = "hannopnkia".$row['id'];
 } elseif ($hannopdenhientai > -285200 && $hannopdenhientai < 0) {
    $idhannop = "hannop1".$row['id'];
 } elseif ($hannopdenhientai < -285200 && $hannopdenhientai < 0) {
    $idhannop = "hannop1".$row['id'];
 } elseif ($hannopdenhientai > 233200) {
    $idhannop = "hannop1".$row['id'];
 }
        ?>
        <span id="<?php echo $idhannop ?>"></span>
<script>
    document.getElementById('hannop1<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['hannop'] ?>', 'YYYY-MM-DD h:m:s').format('Do MMMM [lúc] H:mm');
</script>
  <script>
  document.getElementById('hannophnayhquanmai<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['hannop'] ?>', 'YYYY-MM-DD h:m:s').calendar();
  </script>
  <script>
  document.getElementById('hannophkia<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['hannop'] ?>', 'YYYY-MM-DD h:m:s').format('[Hôm kia lúc] HH:mm');
</script>
<script>
  document.getElementById('hannopnkia<?php echo $row['id'] ?>').innerHTML = moment('<?php echo $row['hannop'] ?>', 'YYYY-MM-DD h:m:s').format('[Ngày kia lúc] HH:mm');
</script>
    <?php
$date_now = date("Y-m-d H:i:s");
if ($date_now > $row['hannop']) {
    echo '<br>(Đã hết hạn)';
} else {
    echo "<br><span id='hannop".$row['id']."'></span>";
    ?>
<script type="text/javascript">
  document.getElementById('hannop<?php echo $row['id'] ?>').innerHTML = "(" + moment('<?php echo $row['hannop'] ?>', 'YYYY-MM-DD h:m:s').fromNow() + ")";
</script>
    <?php
}
    ?>
    </td>
  </tr>
<?php
}
?>
</tbody>
</table>
<?php
} else {
  echo "<h5><strong>Tạm thời không có bài tập nào :)</strong></h5>";
}
        ?>





<br>
    <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
?>

  </body>
</html>
