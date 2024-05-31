<?php
session_start();
include "env.php";
include "vendor/autoload.php";
include "common/route.php";
include_once "controllers/AuthController.php";
include_once "controllers/UserController.php";
include_once "controllers/HomeController.php";
include_once "models/Auth.php";
include_once "models/Home.php";
include_once "models/User.php";
//include_once "controllers/CustomerController.php";
//include_once "controllers/ProductController.php";
//include_once "models/Customer.php";
//include_once "models/Product.php";
//use App\Controllers\CustomerController;
//$ct = new CustomerController();
