<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	

} else {
	header('Location: /');


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

    <title>Đăng ký tài khoản C4K60</title>
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
              <h3>Đăng ký tài khoản <strong>C4K60</strong></h3>
              <p class="mb-4">Mạng xã hội hàng đầu THPT Chuyên Biên Hoà. Thật đó ahihi :))</p>
            </div>
            <form action="register.php" method="POST">
              <div class="form-group">
                        <div><input type="text" class="form-control" name="name" placeholder="Họ và tên"></div>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập">
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu"  >
                        
                    </div>
              
              

              <input type="submit" style="
              background-color: #f2c413;
    border-color: #f2c413;" value="Đăng ký" class="btn text-white btn-block btn-primary">
<br>
              <a href="/login">Đã có tài khoản? Đăng nhập tại đây</a>
              <span class="d-block text-left my-4 text-muted"> hoặc đăng ký bằng</span>
              
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