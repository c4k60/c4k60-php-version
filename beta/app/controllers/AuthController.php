<?php
require_once "./models/Auth";

namespace App\Controllers;

use App\Models\Auth;

class AuthController extends BaseController
{
    public function login()
    {
        $error = "";
        // if request method is post 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $auth = new Auth();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $auth->login($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: ./");
            } else {
                $error = "Tên đăng nhập hoặc mật khẩu không chính xác!";
            }
        }
        return $this->render("pages.auth.login", compact("error"));
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        session_unset();
        session_destroy();
        header("Location: ./login");
    }
}