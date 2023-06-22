<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /admin");
    exit;
}
 
// Include config file
require_once "serverconnect.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Vui lòng điền tên đăng nhập.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Vui lòng điền mật khẩu.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: /admin");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Mật khẩu bạn điền vào không đúng.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Không tìm thấy người dùng nào với tên đăng nhập này.";
                }
            } else{
                echo "Oops! Có gì đó không ổn. Hãy thử lại sau.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
$title = 'C4K60 - Đăng nhập tài khoản';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>
    <style type="text/css">
        body{ font: 14px ; }
        .wrapper{ width: 350px; padding: 20px;
    margin-top: 61px;
 }
    </style>
</head>
<body>
    <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>
    <div class="container" style="margin-top: 91px;">
        <h2>Đăng nhập vào khu vực quản trị viên</h2>
        <p>Vui lòng điền thông tin đăng nhập của bạn vào form bên dưới.<br>
        Thông tin đăng nhập này khác với thông tin đăng nhập của C4K60 Feed.
        </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Tên người dùng</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Đăng nhập">
            </div>
           
        </form>
        <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>
    </div>    

</body>
</html>