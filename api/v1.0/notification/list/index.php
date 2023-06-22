<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json;charset=utf-8");
$encodedData = file_get_contents('php://input');
$decodedData = json_decode($encodedData, true);
if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['show'] == "all") {
    function getNotification2()
    {
require "../../../db.php";
        mysqli_set_charset($conn, 'utf8mb4');

        $sql = "SELECT COUNT(id) AS totalNotification from thongbaolop"; // This is just my code example.

        $result2 = $conn->query($sql);

        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $tem2 = $row2["totalNotification"];
            }
        } else {
            $tem2 = "0";
        }

        echo "{\"total\":" . $tem2 . ",\"results\":[";

        $sql = "SELECT * from thongbaolop ORDER BY id DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "{\"id\":" . $row["id"] . ",\"title\":\"" . addslashes($row['title']) . "\",\"content\":\"" . addslashes($row['content']) . "\",\"createdBy\":\"" . addslashes($row['createdBy']) . "\",\"image\":[";
                $images = explode(",", $row['image']);
                $counter = count($images);
                $ranger = range(1, $counter);
                $a1 = new ArrayIterator($ranger);
                $a2 = new ArrayIterator($images);

                $it = new MultipleIterator;
                $it->attachIterator($a1);
                $it->attachIterator($a2);
                foreach ($it as $e) {
                    echo "{\"img_id\":" . $e[0] . ",\"url\":\"" . addslashes($e[1]) . "\"},";
                }
                echo "],\"date\":\"" . $row['date'] . "\"},";
            }
            echo "], \"hideMore\":true}";
        } else {
            die("{\"error\":\"no_notification_found\"");
        }
    }
    ob_start();
    getNotification2();
    $output = ob_get_clean();
    $replace = array("},],", "},]}");
    $with = array("}],", "}]}");
    $ob = preg_replace("/\r|\n/", "\\n", str_replace($replace, $with, $output));
    $ob = str_replace("\\n\\n", "\\n", $ob);
    echo $ob;
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    function getNotification()
    {
require "../../../db.php";
        mysqli_set_charset($conn, 'utf8mb4');

        $sql = "SELECT COUNT(id) AS totalNotification from thongbaolop"; // This is just my code example.

        $result2 = $conn->query($sql);

        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $tem2 = $row2["totalNotification"];
            }
        } else {
            $tem2 = "0";
        }

        echo "{\"total\":" . $tem2 . ",\"results\":[";

        $sql = "SELECT * from thongbaolop ORDER BY id DESC LIMIT 5";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "{\"id\":" . $row["id"] . ",\"title\":\"" . addslashes($row['title']) . "\",\"content\":\"" . addslashes($row['content']) . "\",\"createdBy\":\"" . addslashes($row['createdBy']) . "\",\"image\":[";
                $images = explode(",", $row['image']);
                $counter = count($images);
                $ranger = range(1, $counter);
                $a1 = new ArrayIterator($ranger);
                $a2 = new ArrayIterator($images);

                $it = new MultipleIterator;
                $it->attachIterator($a1);
                $it->attachIterator($a2);
                foreach ($it as $e) {
                    echo "{\"img_id\":" . $e[0] . ",\"url\":\"" . addslashes($e[1]) . "\"},";
                }
                echo "],\"date\":\"" . $row['date'] . "\"},";
            }
            echo "],\"otherNotifications\":" . ($tem2 - 2) . "}";
        } else {
            die("{\"error\":\"no_notification_found\"");
        }
    }
    ob_start();
    getNotification();
    $output = ob_get_clean();
    $replace = array("},],", "},]}");
    $with = array("}],", "}]}");
    print preg_replace("/\r|\n/", "\\n", str_replace($replace, $with, $output));
} else {
    die("{\"error\":\"wrong_params\"}"); 
}

$ob = ob_get_clean();
$ob = str_replace("\\n\\n", "\\n", $ob);
echo $ob;