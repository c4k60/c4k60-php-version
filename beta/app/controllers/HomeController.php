<?php

namespace App\Controllers;

use App\Models\Home;
use App\Models\User;

class HomeController extends BaseController
{
    public $home;
    public $user;

    public function __construct()
    {
        $this->home = new Home();
        $this->user = new User();
    }

    public function index()
    {
        $notifications = $this->home->getNotifications();
        $birthdays = $this->user->getBirthdays();
        $daysLeft = []; // Array to store days left for each user
        foreach ($birthdays as $row) {
            $birthdate = $row->dayofbirth . "-" . $row->monthofbirth . "-" . $row->yearofbirth; // desired input DD-MM-YYYY

            //  $birthdate = "25-05-".(date('Y')-1);  if input DD-MM

            $current_date = date("d-m-Y");  // current date 

            $birth_time = strtotime($birthdate);
            $current_time = strtotime($current_date);

            $arr1 = explode("-", $birthdate);
            $year1 = $arr1[2];

            $arr2 = explode("-", $current_date);
            $year2 = $arr2[2];

            $year_diff = $year2 - $year1;

            $time_new = strtotime("+" . $year_diff . " year", $birth_time);

            if ($time_new < $current_time) {
                $time_new = strtotime("+1 year", $time_new);
            }

            $time_diff = $time_new - $current_time;

            $daysLeft[$row->id] = $time_diff / 86400; // Store days left for this user
            // $days = $time_diff / 86400;
        }
        // Sort the daysLeft array in descending order
        asort($daysLeft);

        // Sort the birthdays array based on the daysLeft array
        usort($birthdays, function ($a, $b) use ($daysLeft) {
            return $daysLeft[$a->id] <=> $daysLeft[$b->id];
        });

        return $this->render("pages.home.index", compact("notifications", "birthdays", "daysLeft"));
    }

    public function menu()
    {
        return $this->render("pages.menu.index");
    }

    public function error404()
    {
        return $this->render("pages.error.404");
    }
}