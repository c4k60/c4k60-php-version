<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

header("Content-Type: application/json;charset=utf-8");

include('db.php');

mysqli_set_charset($conn, 'UTF8');

$input = $decodedData['input'];

if ($input != "" && $input != "show_all" && $input != "show_recents") {
    $sql = "SELECT name, dayofbirth, monthofbirth, yearofbirth, gender FROM c4_user WHERE username = '$input'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $birthdate = $row['dayofbirth'] . "-" . $row['monthofbirth'] . "-" . $row['yearofbirth']; // desired input DD-MM-YYYY

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

            $days = $time_diff / 86400;

            echo json_encode(array("name" => $row['name'], "birthday" => $row['dayofbirth'] . "/" . $row['monthofbirth'] . "/" . $row['yearofbirth'], "daysleft" => $days, "gender" => $row['gender']), JSON_UNESCAPED_UNICODE);
        }
    } else {
        echo json_encode(array("error" => "no_birthday_found"));
    }
} elseif ($input != "" && $input == "show_all") {
    $sql = "SELECT name, dayofbirth, monthofbirth, yearofbirth, gender FROM c4_user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {

            $birthdate = $row['dayofbirth'] . "-" . $row['monthofbirth'] . "-" . $row['yearofbirth']; // desired input DD-MM-YYYY

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

            $days = $time_diff / 86400;

            $row['birthday'] = $row['dayofbirth'] . "/" . $row['monthofbirth'] . "/" . $row['yearofbirth'];

            unset($row['dayofbirth']);
            unset($row['monthofbirth']);
            unset($row['yearofbirth']);

            $row['daysleft'] = $days;

            $data[] = $row;
        }
        usort($data, function ($item1, $item2) {
            return $item1['daysleft'] <=> $item2['daysleft'];
        });
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(array("error" => "no_birthday_found"));
    }
} elseif ($input != "" && $input == "show_recents") {
    $sql = "SELECT name, dayofbirth, monthofbirth, yearofbirth, gender FROM c4_user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {

            $birthdate = $row['dayofbirth'] . "-" . $row['monthofbirth'] . "-" . $row['yearofbirth']; // desired input DD-MM-YYYY

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

            $days = $time_diff / 86400;

            $row['birthday'] = $row['dayofbirth'] . "/" . $row['monthofbirth'] . "/" . $row['yearofbirth'];

            unset($row['dayofbirth']);
            unset($row['monthofbirth']);
            unset($row['yearofbirth']);

            $row['daysleft'] = $days;

            $data[] = $row;
        }
        usort($data, function ($item1, $item2) {
            return $item1['daysleft'] <=> $item2['daysleft'];
        });
        array_splice($data, 5, 99);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(array("error" => "no_birthday_found"));
    }
} else {
    echo json_encode(array("error" => "access_denied"));
}