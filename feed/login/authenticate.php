<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  

} else {
  header('Location: /');


}
?>
<?php
$error = "";
require_once $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	$error = 'Please fill both the username and password field!';
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password, email, name, permission, oauth_provider, profile_pic FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password, $email, $name, $permission, $oauth, $profile_pic);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
    $_SESSION['permission'] = $permission;
    $_SESSION['oauth'] = $oauth;
    $_SESSION['profile_pic'] = $profile_pic;

		if ($_SESSION['permission'] == 'admin') { // nếu id = 11
    header('Location: /'); // chuyển đến trang admin
    
} else {
	header('Location: /'); // còn lại nếu không phải thì chuyển về forum
}
	} else {
		$error = 'Sai mật khẩu!';
		
	}
} else {
	$error = 'Tài khoản không tồn tại!';
}
$stmt->close();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="/c4k60.png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Đăng nhập vào C4K60</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Đăng nhập vào <strong>C4K60</strong></h3>
              <p class="mb-4">Mạng xã hội hàng đầu THPT Chuyên Biên Hoà. Thật đó ahihi :))</p>
            </div>
            <form action="authenticate.php" method="POST">
              <div class="form-group first">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="password">

              </div>
              <p style="color:red;text-align:center;"><?php echo $error; ?></p>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Ghi nhớ đăng nhập</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu</a></span> 
              </div>

              <input type="submit" style="
              background-color: #f2c413;
    border-color: #f2c413;" value="Đăng nhập" class="btn text-white btn-block btn-primary">
<br>
              <a href="/register">Chưa có tài khoản? Đăng ký tại đây</a>
              <span class="d-block text-left my-4 text-muted"> hoặc đăng nhập bằng</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>