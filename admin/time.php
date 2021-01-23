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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Chỉnh sửa thời khoá biểu</title>
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



error_reporting(0);
	
date_default_timezone_set('Asia/Ho_Chi_Minh');
		$date=date("Y-m-d");
$t2t1 = $_POST['text1'];
$t3t1 = $_POST['text2'];
$t4t1 = $_POST['text3'];
$t5t1 = $_POST['text4'];
$t6t1 = $_POST['text5'];
$t7t1 = $_POST['text6'];
$t2t2 = $_POST['text7'];
$t3t2 = $_POST['text8'];
$t4t2 = $_POST['text9'];
$t5t2 = $_POST['text10'];
$t6t2 = $_POST['text11'];
$t7t2 = $_POST['text12'];
$t2t3 = $_POST['text13'];
$t3t3 = $_POST['text14'];
$t4t3 = $_POST['text15'];
$t5t3 = $_POST['text16'];
$t6t3 = $_POST['text17'];
$t7t3 = $_POST['text18'];
$t2t4 = $_POST['text19'];
$t3t4 = $_POST['text20'];
$t4t4 = $_POST['text21'];
$t5t4 = $_POST['text22'];
$t6t4 = $_POST['text23'];
$t7t4 = $_POST['text24'];
$t2t5 = $_POST['text25'];
$t3t5 = $_POST['text26'];
$t4t5 = $_POST['text27'];
$t5t5 = $_POST['text28'];
$t6t5 = $_POST['text29'];
$t7t5 = $_POST['text30'];
$t2c = $_POST['text31'];
$t3c = $_POST['text32'];
$t4c = $_POST['text33'];
$t5c = $_POST['text34'];
$t6c = $_POST['text35'];
$t7c = $_POST['text36'];


$t2t1z = $_POST['select1'];
$t3t1z = $_POST['select2'];
$t4t1z = $_POST['select3'];
$t5t1z = $_POST['select4'];
$t6t1z = $_POST['select5'];
$t7t1z = $_POST['select6'];
$t2t2z = $_POST['select7'];
$t3t2z = $_POST['select8'];
$t4t2z = $_POST['select9'];
$t5t2z = $_POST['select10'];
$t6t2z = $_POST['select11'];
$t7t2z = $_POST['select12'];
$t2t3z = $_POST['select13'];
$t3t3z = $_POST['select14'];
$t4t3z = $_POST['select15'];
$t5t3z = $_POST['select16'];
$t6t3z = $_POST['select17'];
$t7t3z = $_POST['select18'];
$t2t4z = $_POST['select19'];
$t3t4z = $_POST['select20'];
$t4t4z = $_POST['select21'];
$t5t4z = $_POST['select22'];
$t6t4z = $_POST['select23'];
$t7t4z = $_POST['select24'];
$t2t5z = $_POST['select25'];
$t3t5z = $_POST['select26'];
$t4t5z = $_POST['select27'];
$t5t5z = $_POST['select28'];
$t6t5z = $_POST['select29'];
$t7t5z = $_POST['select30'];
$t2cz = $_POST['select31'];
$t3cz = $_POST['select32'];
$t4cz = $_POST['select33'];
$t5cz = $_POST['select34'];
$t6cz = $_POST['select35'];
$t7cz = $_POST['select36'];

$tuan = $_POST['tuan'];
		if(isset($_POST['submit'])){
			
					$query = "UPDATE tkb SET t2t1='$t2t1',
          t2t2='$t2t2',
          t2t3='$t2t3',
          t2t4='$t2t4',
          t2t5='$t2t5',
          t3t1='$t3t1',
          t3t2='$t3t2',
          t3t3='$t3t3',
          t3t4='$t3t4',
          t3t5='$t3t5',
          t4t1='$t4t1',
          t4t2='$t4t2',
          t4t3='$t4t3',
          t4t4='$t4t4',
          t4t5='$t4t5',
          t5t1='$t5t1',
          t5t2='$t5t2',
          t5t3='$t5t3',
          t5t4='$t5t4',
          t5t5='$t5t5',
          t6t1='$t6t1',
          t6t2='$t6t2',
          t6t3='$t6t3',
          t6t4='$t6t4',
          t6t5='$t6t5',
          t7t1='$t7t1',
          t7t2='$t7t2',
          t7t3='$t7t3',
          t7t4='$t7t4',
          t7t5='$t7t5',t2c='$t2c',t3c='$t3c',t4c='$t4c',t5c='$t5c',t6c='$t6c',t7c='$t7c',date='$date', tuan='$tuan' WHERE id=1";

					mysqli_query($db, $query);

          $query2 = "UPDATE tkb_color SET t2t1='$t2t1z',
          t2t2='$t2t2z',
          t2t3='$t2t3z',
          t2t4='$t2t4z',
          t2t5='$t2t5z',
          t3t1='$t3t1z',
          t3t2='$t3t2z',
          t3t3='$t3t3z',
          t3t4='$t3t4z',
          t3t5='$t3t5z',
          t4t1='$t4t1z',
          t4t2='$t4t2z',
          t4t3='$t4t3z',
          t4t4='$t4t4z',
          t4t5='$t4t5z',
          t5t1='$t5t1z',
          t5t2='$t5t2z',
          t5t3='$t5t3z',
          t5t4='$t5t4z',
          t5t5='$t5t5z',
          t6t1='$t6t1z',
          t6t2='$t6t2z',
          t6t3='$t6t3z',
          t6t4='$t6t4z',
          t6t5='$t6t5z',
          t7t1='$t7t1z',
          t7t2='$t7t2z',
          t7t3='$t7t3z',
          t7t4='$t7t4z',
          t7t5='$t7t5z',t2c='$t2cz',t3c='$t3cz',t4c='$t4cz',t5c='$t5cz',t6c='$t6cz',t7c='$t7cz' WHERE id=1";

          mysqli_query($db, $query2) or die(mysqli_error($db));

					echo "<p style='color:green'>Đăng bài viết thành công !</p>";

		}

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
</table>";
      }
    }
  }
}
?>

<form method="post">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Thứ 2</th>
      <th scope="col">Thứ 3</th>
      <th scope="col">Thứ 4</th>
      <th scope="col">Thứ 5</th>
      <th scope="col">Thứ 6</th>
      <th scope="col">Thứ 7</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tiết 1</th>
      <td><input type="text" class="form-control" id="usr" name="text1" style="width: 69px"><select class="form-control" name="select1" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text2" style="width: 69px"><select class="form-control" name="select2" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text3" style="width: 69px"><select class="form-control" name="select3" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text4" style="width: 69px"><select class="form-control" name="select4" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text5" style="width: 69px"><select class="form-control" name="select5" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text6" style="width: 69px"><select class="form-control" name="select6" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
    </tr>
    <tr>
      <th scope="row">Tiết 2</th>
      <td><input type="text" class="form-control" id="usr" name="text7" style="width: 69px"><select class="form-control" name="select7" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text8" style="width: 69px"><select class="form-control" name="select8" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text9" style="width: 69px"><select class="form-control" name="select9" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text10" style="width: 69px"><select class="form-control" name="select10" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text11" style="width: 69px"><select class="form-control" name="select11" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text12" style="width: 69px"><select class="form-control" name="select12" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
    </tr>
    <tr>
      <th scope="row">Tiết 3</th>
      <td><input type="text" class="form-control" id="usr" name="text13" style="width: 69px"><select class="form-control" name="select13" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text14" style="width: 69px"><select class="form-control" name="select14" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text15" style="width: 69px"><select class="form-control" name="select15" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text16" style="width: 69px"><select class="form-control" name="select16" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text17" style="width: 69px"><select class="form-control" name="select17" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text18" style="width: 69px"><select class="form-control" name="select18" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
    </tr>
    <tr>
      <th scope="row">Tiết 4</th>
      <td><input type="text" class="form-control" id="usr" name="text19" style="width: 69px"><select class="form-control" name="select19" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text20" style="width: 69px"><select class="form-control" name="select20" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text21" style="width: 69px"><select class="form-control" name="select21" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text22" style="width: 69px"><select class="form-control" name="select22" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text23" style="width: 69px"><select class="form-control" name="select23" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text24" style="width: 69px"><select class="form-control" name="select24" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
    </tr>
    <tr>
      <th scope="row">Tiết 5</th>
      <td><input type="text" class="form-control" id="usr" name="text25" style="width: 69px"><select class="form-control" name="select25" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text26" style="width: 69px"><select class="form-control" name="select26" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text27" style="width: 69px"><select class="form-control" name="select27" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text28" style="width: 69px"><select class="form-control" name="select28" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text29" style="width: 69px"><select class="form-control" name="select29" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text30" style="width: 69px"><select class="form-control" name="select30" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>

    </tr>

    <tr>
      <th scope="row">Buổi chiều</th>
      <td><input type="text" class="form-control" id="usr" name="text31" style="width: 69px"><select class="form-control" name="select31" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text32" style="width: 69px"><select class="form-control" name="select32" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text33" style="width: 69px"><select class="form-control" name="select33" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text34" style="width: 69px"><select class="form-control" name="select34" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text35" style="width: 69px"><select class="form-control" name="select35" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
      <td><input type="text" class="form-control" id="usr" name="text36" style="width: 69px"><select class="form-control" name="select36" id="sel1">
    <option>info</option>
    <option>success</option>
    <option>warning</option>
    <option>danger</option>
  </select></td>
  
    </tr>
  </tbody>
</table>
<label>Tuần thứ</label>
<input type="text" class="form-control" id="usr" name="tuan" style="width: 100px">
<br>

<button class="btn btn-success" type="submit" name="submit">Tải lên thời khoá biểu mới</button>
</form>

			</body>

			