<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public function getUserProfile($username)
    {
        $user = new User();
        $profile = $user->userProfile($username);
        // check if user is not found
        if (!$profile) {
            return $this->render("pages.errors.404");
        }
        return $this->render("pages.user.profile", compact("profile"));
    }
}