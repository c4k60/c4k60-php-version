<!-- Project name: C4K60 Online (Cổng thông tin điện tử lớp 12 Chuyên Nga)

	 Project link: https://c4k60.com/

 	 Created by Fatties Software 2021

 	 Team members:

 	 - Duong Tung Anh (CEO/Founder - C4K60 Bien Hoa Gifted High School) | https://fb.me/tunnaduong

	 - Hoang Phat (Co-Founder/Lead Developer - A1K60 Bien Hoa Gifted High School) | https://fb.me/hoangphathandsome

	 All rights reserved 

-->

<?php 

// File serverconnect.php chứa các thông tin quan trọng cần thiết để kết nối với máy chủ

// Bổ sung dòng `require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';` ở các file cần kết nối với máy chủ

// Chỉnh sửa thông tin máy chủ một lần duy nhất ở 4 dòng này

////////////////////////////////////////////

//$maychu = "42.112.30.39";

//$tendangnhap = "fattiembt6od";

//$matkhau = "5JPx5xb9c3fV";

//$tendb = "fattiembt6od_members";

$maychu = "localhost";
$tendangnhap = "tunnaduong";
$matkhau = "Tunganh2003";
$tendb = "tunnaduong_c4k60";

////////////////////////////////////////////

	$db = mysqli_connect($maychu, $tendangnhap, $matkhau, $tendb);

	$servername = $maychu;

	$username = $tendangnhap;

	$password = $matkhau;

	$dbname = $tendb;

	$conn = new mysqli($servername, $username, $password, $dbname);

	$DATABASE_HOST = $maychu;

	$DATABASE_USER = $tendangnhap;

	$DATABASE_PASS = $matkhau;

	$DATABASE_NAME = $tendb;

	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Mã này giúp cho trang khỏi bị các ký tự Unicode kì lạ

	mysqli_set_charset($conn, 'UTF8');

	mysqli_set_charset($db, 'UTF8');

	mysqli_set_charset($con, 'UTF8');

?>