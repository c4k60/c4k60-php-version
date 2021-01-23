<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login/index.php");
    exit;
}
?>
<head>
	  <link rel="stylesheet" href="/assets/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700">
</head>

 <nav class="nav">
  <div class="nav-container">
    <a href="/">
      <h2 class="nav-title">Dương Tùng Anh's Blog</h2>
    </a>
    <ul>
      <li><a href="/cv">CV</a></li>
      <li><a href="/about">Giới thiệu</a></li>
      <li><a href="/bookreview">Book Review</a></li>
	  <li><a href="/dailywriting">Daily Writing</a></li>
	  <li><a href="https://duongtunganh.github.io/en">English</a></li>
	  
    </ul>
  </div>
</nav>


<head>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<!-- Trumbowyg -->
<script src="/trumbowyg/dist/trumbowyg.min.js"></script>
<link rel="stylesheet" href="/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>


</head>
<body style="
    margin-left: 20px;
    margin-right: 20px;
">
<style type="text/css">
	@media only screen and (max-width: 479px){
    #con { width: 90%; }
}
</style>
<div class="content" id="con" style="
   padding-top: 20px;
    max-width: 800px; width: 100%;
    margin: 0 auto;
    position: relative;
">
<h2>Xoá bài viết</h2>
<h4>Các bài viết có sẵn:</h4>
<?php
error_reporting(0);
require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT * FROM posts ORDER BY id DESC";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
        echo "<h3 style='display:inline'><a style='color:black' href='/post.php?id=".$row['id']."'>".$row['name']."</a> <i class='fas fa-trash-alt' style='color:red'></i></h3> <a href='delete.php?id=".$row['id']."' style='color:red;display:inline'>Xoá bài viết</a><br><p>Viết bởi ".$row['author']." | Vào lúc ".$row['date']."</p>";
        }
      }


      if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM posts WHERE id='$id'";
        $results_u = mysqli_query($db, $query);
         if ($db->query($query) === TRUE) {

  header("location: delete.php?f=die1");
} else {
  header("location: delete.php?f=die2");
}
      }

     if(function_exists($_GET['f'])) {
   $_GET['f']();
}
function die1(){
  die('Xoá bài viết thành công!');
}
function die2(){
  die('Xoá bài viết thất bại!');
}
?>
</div>
			</body>

			