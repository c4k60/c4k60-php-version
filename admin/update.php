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



<head>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<!-- Trumbowyg -->
<script src="/trumbowyg/dist/trumbowyg.min.js"></script>
<link rel="stylesheet" href="/trumbowyg/dist/ui/trumbowyg.min.css">



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
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

$str = (isset($_POST['content']) ? $_POST['content'] : '');
$content_m = nl2br($str);
	if(isset($_POST['submit'])){

		$topic_name= mysqli_real_escape_string($db, $_POST['title']);

		$content = mysqli_real_escape_string($db, $content_m);
date_default_timezone_set('Asia/Ho_Chi_Minh');
		$date=date("Y-m-d H:i:s");

		if(isset($_POST['submit'])){
			if($topic_name&&$content)

			{

				if(strlen($topic_name)>=10){

					$query = "UPDATE btvn SET title='$topic_name', content='$content', date='$date' WHERE id=1";

					mysqli_query($db, $query);

					echo "<p style='color:green'>Đăng bài viết thành công !</p>";

				}else{

					echo "<p style='color:red'>Tiêu đề quá ngắn! (>10 kí tự)</p>";
				}

			}else{

				echo "<p style='color:red'>Bạn thiếu tiêu đề / nội dung</p>";

			}
		
			
		
		}

		

		

		

	

	}

?>
	<form action="post.php" method="POST" id="form1">



			<div class="form-group">

    <label for="exampleFormControlInput1">Tiêu đề bài viết</label>
<br>
    <input type="text" id="text" name="title"  class="form-control form-control-lg" style="
    max-width: 500px; width: 100%;
">

  </div>

			<div class="form-group">
       
<br>
    <label for="exampleFormControlTextarea1">Nội dung bài viết</label>

<textarea name="content" id="trumbowyg-demo"></textarea>
<script>
$('#trumbowyg-demo').trumbowyg();
</script>

  </div>
			<input type="submit" id="submitbutton" name="submit"  value="Đăng bài viết">
			</div>
			
			</body>

			