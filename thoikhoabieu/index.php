<!DOCTYPE html>
<html>

  <!-- Trang web được lập trình bởi Dương Tùng Anh - C4K60 Chuyên Hà Nam -->
<!-- Mọi thông tin chi tiết xin liên hệ https://facebook.com/tunnaduong/ -->

	<?php 
$title = 'C4K60 - Thời khoá biểu';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>
  <body style="margin-top: 100px;">
  	
    <script>
function MyFunction() {
    var thongbao = 1;
    var tbl1 = document.getElementById("tbl").innerHTML;
    tbl1 = thongbao - 1;
    if (tbl1.innerHTML = 0){
      document.getElementById("bell1").style = "display:none;";
    }
}
setTimeout(MyFunction, 1); 
</script>
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
$thoikhoabieu = 'active';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>
<div class="container">
    
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


        <style>
.equilibrium{
  width: 100%;
  border: 1px solid #999;
  border-right: none;
  border-bottom: none;
  background-color: rgba(236,236,236,.5);
}

.equilibrium td{
    border-right: 1px solid #999;
    border-bottom: 1px solid #999;
}

.equilibrium td{
  position: relative;
  height: 200px;
}

.equilibrium .sup{
  display: block;
  position: relative;
  width: 50%;
  float: left;
  padding-bottom: 15%;
  line-height: 100%;
  text-align: center;
  z-index: 1;
}

.equilibrium .inf{
  display: block;
  position: relative;
  width: 50%;
  float: left;
  padding-top: 15%;
line-height: 100%;
  text-align: center;
  z-index: 1;
}

.equilibrium td::after{
  content: "";
  position: absolute;
  z-index: 0;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(218,218,218,.5);
  background-size: cover;
  clip-path: polygon(100% 0%, 0% 0%, 0% 100%);
}
    </style>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM tkb";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
        $sql2 = "SELECT * FROM tkb_color";
$results2 = mysqli_query($db, $sql2);
if (mysqli_num_rows($results2)){
      while($row2=mysqli_fetch_assoc($results2)){
        echo "<h3><i class='far fa-calendar-alt'></i> Thời khoá biểu (Tuần ".$row['tuan'].") - 12C4</h3>
<h5>Áp dụng từ ngày ".$row['date']."</h5>
<p><br /></p>
<div style='overflow-x:auto;'>
<table class='table table-bordered'>
<thead>
    <tr class='table-active'>
        <th class='table-light'>
      </th>
        <th>Thứ 2</th>
        <th>Thứ 3</th>
        <th>Thứ 4</th>
        <th>Thứ 5</th>
        <th>Thứ 6</th>
        <th>Thứ 7</th>
    </tr>
</thead>
<tbody>
 <tr>
    <th class='table-active'>Buổi sáng<br />Tiết 1</th>
    <td class='table-".$row2['t2t1']."'>".$row['t2t1']."</td>
    <td class='table-".$row2['t3t1']."'>".$row['t3t1']."</td>
    <td class='table-".$row2['t4t1']."'>".$row['t4t1']."</td>
    <td class='table-".$row2['t5t1']."'>".$row['t5t1']."</td>
    <td class='table-".$row2['t6t1']."'>".$row['t6t1']."</td>
    <td class='table-".$row2['t7t1']."'>".$row['t7t1']."</td>
    </tr>
    <tr>
        <th class='table-active'>Tiết 2</th>
        <td class='table-".$row2['t2t2']."'>".$row['t2t2']."</td>
    <td class='table-".$row2['t3t2']."'>".$row['t3t2']."</td>
    <td class='table-".$row2['t4t2']."'>".$row['t4t2']."</td>
    <td class='table-".$row2['t5t2']."'>".$row['t5t2']."</td>
    <td class='table-".$row2['t6t2']."'>".$row['t6t2']."</td>
    <td class='table-".$row2['t7t2']."'>".$row['t7t2']."</td>
</tr>
<tr>
        <th class='table-active'>Tiết 3</th>
        <td class='table-".$row2['t2t3']."'>".$row['t2t3']."</td>
    <td class='table-".$row2['t3t3']."'>".$row['t3t3']."</td>
    <td class='table-".$row2['t4t3']."'>".$row['t4t3']."</td>
    <td class='table-".$row2['t5t3']."'>".$row['t5t3']."</td>
    <td class='table-".$row2['t6t3']."'>".$row['t6t3']."</td>
    <td class='table-".$row2['t7t3']."'>".$row['t7t3']."</td>
</tr>
<tr>
        <th class='table-active'>Tiết 4</th>
        <td class='table-".$row2['t2t4']."'>".$row['t2t4']."</td>
    <td class='table-".$row2['t3t4']."'>".$row['t3t4']."</td>
    <td class='table-".$row2['t4t4']."'>".$row['t4t4']."</td>
    <td class='table-".$row2['t5t4']."'>".$row['t5t4']."</td>
    <td class='table-".$row2['t6t4']."'>".$row['t6t4']."</td>
    <td class='table-".$row2['t7t4']."'>".$row['t7t4']."</td>
</tr>
<tr>
        <th class='table-active'>Tiết 5</th>
        <td class='table-".$row2['t2t5']."'>".$row['t2t5']."</td>
    <td class='table-".$row2['t3t5']."'>".$row['t3t5']."</td>
    <td class='table-".$row2['t4t5']."'>".$row['t4t5']."</td>
    <td class='table-".$row2['t5t5']."'>".$row['t5t5']."</td>
    <td class='table-".$row2['t6t5']."'>".$row['t6t5']."</td>
    <td class='table-".$row2['t7t5']."'>".$row['t7t5']."</td>
</tr>
 <tr>
    <th class='table-active'>Buổi chiều</th>
    <td class='table-".$row2['t2c']."'>".$row['t2c']."</td>
    <td class='table-".$row2['t3c']."'>".$row['t3c']."</td>
    <td class='table-".$row2['t4c']."'>".$row['t4c']."</td>
    <td class='table-".$row2['t5c']."'>".$row['t5c']."</td>
    <td class='table-".$row2['t6c']."'>".$row['t6c']."</td>
    <td class='table-".$row2['t7c']."'>".$row['t7c']."</td>
</tr>
</tbody>
</table></div>";
      }
    }
  }
}
?>
<p><br /></p>
<h5><i class="fas fa-question-circle"></i> Chú giải:</h5>
<p><a class="text-info">Màu xanh nước biển:</a> Giờ trống, có thể nghỉ</p>
<p><a class="text-success">Màu xanh lá cây:</a> Các giờ có thể làm việc riêng, giáo viên dễ tính
</p>
<p><a class="text-warning">Màu vàng:</a> Các giờ không nên làm việc riêng, giáo viên bình thường</p>
<p><a class="text-danger">Màu đỏ:</a> Các giờ nên tập trung, giáo viên khó tính</p>


 <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>

  </body>
</html>
