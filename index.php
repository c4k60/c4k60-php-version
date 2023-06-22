<!DOCTYPE html>

<html>



<?php

$title = 'C4K60 - Trang chủ';

require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';

?>

<body style="margin-top: 80px;">



    <style>
    @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    .navbar-icon-top .navbar-nav .nav-link>.faf {

        position: relative;

        width: 36px;

        font-size: 24px;

    }

    .navbar-icon-top .navbar-nav .nav-link>.faf>.badge {

        font-size: 0.75rem;

        position: absolute;

        right: 0;

        font-family: sans-serif;

    }

    .navbar-icon-top .navbar-nav .nav-link>.faf {

        top: 3px;

        line-height: 12px;

    }

    .navbar-icon-top .navbar-nav .nav-link>.faf>.badge {

        top: -10px;

    }

    @media (min-width: 576px) {

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {

            text-align: center;

            display: table-cell;

            height: 70px;

            vertical-align: middle;

            padding-top: 0;

            padding-bottom: 0;

        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.faf {

            display: block;

            width: 48px;

            margin: 2px auto 4px auto;

            top: 0;

            line-height: 24px;

        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.faf>.badge {

            top: -7px;

        }

    }

    @media (min-width: 768px) {

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {

            text-align: center;

            display: table-cell;

            height: 70px;

            vertical-align: middle;

            padding-top: 0;

            padding-bottom: 0;

        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.faf {

            display: block;

            width: 48px;

            margin: 2px auto 4px auto;

            top: 0;

            line-height: 24px;

        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.faf>.badge {

            top: -7px;

        }

    }

    @media (min-width: 992px) {

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {

            text-align: center;

            display: table-cell;

            height: 70px;

            vertical-align: middle;

            padding-top: 0;

            padding-bottom: 0;

        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.faf {

            display: block;

            width: 48px;

            margin: 2px auto 4px auto;

            top: 0;

            line-height: 24px;

        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.faf>.badge {

            top: -7px;

        }

    }

    @media (min-width: 1200px) {

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {

            text-align: center;

            display: table-cell;

            height: 70px;

            vertical-align: middle;

            padding-top: 0;

            padding-bottom: 0;

        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.faf {

            display: block;

            width: 48px;

            margin: 2px auto 4px auto;

            top: 0;

            line-height: 24px;

        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.faf>.badge {

            top: -7px;

        }

    }
    </style>

    <?php

    $trangchu = 'active';

    require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';

    ?>

    <div class="container">



        <style>
        {
            box-sizing: border-box;
        }



        /* Button used to open the chat form - fixed at the bottom of the page */

        .open-button {

            border-radius: 10px;

            background-color: #dbb926;

            color: white;

            padding: 16px 20px;

            border: none;

            cursor: pointer;

            opacity: 0.8;

            position: fixed;

            bottom: -20px;

            right: 28px;

            width: 280px;

            -webkit-box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);

            -moz-box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);

            box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);

        }

        /* The popup chat - hidden by default */

        .form-popup {

            display: none;

            position: fixed;

            bottom: 0;

            right: 15px;

            border: 3px solid #f1f1f1;

            z-index: 9;

            background-color: white;

        }



        /* Add styles to the form container */

        .form-container {

            max-width: 300px;

            padding: 10px;

            background-color: white;

        }



        /* Full-width textarea */

        .form-container textarea {

            width: 100%;

            padding: 15px;

            margin: 5px 0 22px 0;

            border: none;

            background: #f1f1f1;

            resize: none;

            min-height: 200px;

        }



        /* When the textarea gets focus, do something */

        .form-container textarea:focus {

            background-color: #ddd;

            outline: none;

        }



        /* Set a style for the submit/login button */

        .form-container .btn {

            background-color: #4CAF50;

            color: white;

            padding: 16px 20px;

            border: none;

            cursor: pointer;

            width: 100%;

            margin-bottom: 10px;

            opacity: 0.8;

        }



        /* Add a red background color to the cancel button */

        .form-container .cancel {

            background-color: red;

        }



        /* Add some hover effects to buttons */

        .form-container .btn:hover,
        .open-button:hover {

            opacity: 1;

        }



        /* Top left text */

        .top-left {

            position: absolute;

            top: 8px;

            left: 16px;

            cursor: pointer;

        }

        .top-center {

            position: absolute;

            top: -9px;

            right: 83px;

            font-size: 40px;

            cursor: pointer;

        }

        .transparent {

            -webkit-text-fill-color: transparent;

            -webkit-background-clip: text;



        }
        </style>

        <script>
        function openForm() {

            document.getElementById("myForm").style.display = "block";



            window.scrollBy(0, 50);



            scrolldelay = setTimeout('pageScroll()',
                200); //Increase this # to slow down, decrease to speed up scrolling





        }



        function closeForm() {

            document.getElementById("myForm").style.display = "none";

            document.getElementById("chatbar").style.display = "block";

        }

        function openBar() {

            document.getElementById("chatbar").style.display = "block";

        }

        function closeBar() {

            document.getElementById("chatbar").style.display = "none";

        }

        function closeFormBar() {

            document.getElementById("chatbar").style.display = "none";

            document.getElementById("myForm").style.display = "none";

        }
        </script>

        <div class="open-button" style="display:none" id="chatbar"><img src="/logoc4k60.png" height="30" width="40"
                style="float:left;margin-left: -13px;margin-bottom: 0px;padding-bottom: 0px;margin-top: 0px;">
            <p onclick="openForm()" style="float:left;color:black;padding-top: 3px;">Chat chít C4K60 </p><span
                class="badge badge-danger" style="margin-left: 5px;">1</span>
            <div class="top-center transparent" style="color: white" onclick="openForm()">bbbbbbbb</div><i
                style="float:right;color:black;margin-top: 5px;" class="fas fa-times-circle" onclick="closeBar()"></i>
        </div>

        <div class="form-popup shadow" id="myForm" style=" width:300px;height:400px;border-radius: 10px;">



            <div id="tlkio" data-theme="theme--yellow" data-channel="C4K60"
                data-custom-css="https://c4k60.com/assets/custom.css"
                style="width:100%;height:400px; border-radius: 10px;"></div>

            <div class="top-left" style="color: white" onclick="closeFormBar()"><i class="fas fa-times-circle"></i>
            </div>

            <div class="top-center transparent" style="color: white" onclick="closeForm()">bbbbbbbb</div>

            <script type="text/javascript">
            $(document).ready(function() {

                $("#frame").load(function() {
                    this.contentWindow.scrollBy(0, 100000)
                });

            });
            </script>

            <script>
            ! function(t, e) {
                var i = function() {
                        var t = e.getElementById("tlkio"),
                            i = t.getAttribute("data-env") || "production",
                            n = t.getAttribute("data-channel"),
                            a = t.getAttribute("data-theme"),
                            o = t.getAttribute("data-custom-css"),
                            s = t.getAttribute("data-nickname"),
                            l = e.createElement("iframe"),
                            r = "//embed.tlk.io/" + n,
                            m = [];
                        "dev" == i && (r = "http://embed.lvh.me:3000/" + n), o && o.length && m.push(
                                "custom_css_path=" + o), s && s.length && m.push("nickname=" + s), a && a.length && m
                            .push("theme=" + a), m.length && (r += "?" + m.join("&")), l.setAttribute("src", r), l
                            .setAttribute("width", "100%"), l.setAttribute("height", "100%"), l.setAttribute(
                                "frameborder", "0"), l.setAttribute("style", "margin-bottom: -8px;");
                        var u = t.getAttribute("style");
                        t.setAttribute("style", "overflow: auto; -webkit-overflow-scrolling: touch;" + u), t
                            .textContent = "", t.appendChild(l)
                    },
                    n = function() {
                        var n = e.getElementById("tlkio"),
                            a = e.createElement("style"),
                            o = e.createElement("img");
                        a.textContent =
                            ".tlkio-pulse{width:70px;margin:-27px 0 0 -35px;position:absolute;top:50%;left:50%;animation: tlkio-pulse 1.5s ease-in 0s infinite;}@keyframes tlkio-pulse{0%{transform:scale(1)}10%{transform:scale(1.15)}18%{transform:scale(0.95)}24%{transform:scale(1)}}",
                            o.src = "//tlk.io/images/logo.png", o.className = "tlkio-pulse", "static" == t
                            .getComputedStyle(n).position && (n.style.position = "relative"), n.appendChild(a), n
                            .appendChild(o), t.setTimeout(i, 3e3)
                    };
                t.addEventListener ? t.addEventListener("load", n, !1) : t.attachEvent("onload", n)
            }(window, document);
            </script>



        </div>





        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">

                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img class="d-block w-100" src="/1.jpg" alt="First slide" />

                    <div class="carousel-caption d-none d-md-block">

                        <h5>Welcome to C4K60</h5>

                        <p>Cổng thông tin điện tử lớp 12 Chuyên Nga THPT Chuyên Hà Nam</p>

                    </div>

                </div>

                <div class="carousel-item">

                    <img class="d-block w-100" src="/2.jpg" alt="Second slide" />

                </div>

                <div class="carousel-item">

                    <img class="d-block w-100" src="/3.jpg" alt="Third slide" />

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>



        <div class="row marketing" style="display:block;margin-top: 28px;">

            <div>

                <h4><strong><i class="fas fa-question-circle"></i> Đây là gì?</strong></h4>

                <p>Chào mừng đến với cổng thông tin điện tử dành cho học sinh C4K60! Trang web này là công cụ để tra cứu
                    dễ dàng các thông tin của lớp 12 Nga THPT Chuyên Hà Nam</p>

                <h4><strong><i class="fas fa-bullhorn"></i> Thông báo lớp</strong></h4>

                <div class="content list">

                    <?php

                    require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

                    $sql = "SELECT * FROM thongbaolop ORDER BY id DESC LIMIT 5";

                    $results = mysqli_query($db, $sql);

                    if (mysqli_num_rows($results)) {

                        while ($row = mysqli_fetch_assoc($results)) {

                            echo "<h5><a href='/thongbaolop/notification.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h5>";
                        }
                    } else {

                        echo "<h5>Không có thông báo nào :)</h5>";
                    }

                    ?>





                </div>

                <br />

                <h4><strong><i class="fas fa-book"></i> Bài tập về nhà</strong></h4>

                <div class="content list">

                    <?php

                    require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';

                    $sql = "SELECT * FROM btvn";

                    $results = mysqli_query($db, $sql);

                    if (mysqli_num_rows($results)) {

                        while ($row = mysqli_fetch_assoc($results)) {

                            echo "<h5><a href='/baitap'>" . $row['title'] . "</a></h5>";
                        }
                    } else {

                        echo "<h5><strong>Hôm nay tạm thời không có bài tập nào :)</strong></h5>";
                    }

                    ?>



                </div>

                <br />

                <h4><strong><i class="fas fa-birthday-cake"></i> Sinh nhật sắp tới</strong></h4>

                <script>
                function RemoveList() {

                    document.getElementById("r1").style.display = "none";

                    document.getElementById("r2").style.display = "none";

                    document.getElementById("r3").style.display = "none";

                    document.getElementById("r4").style.display = "none";

                    document.getElementById("r5").style.display = "none";

                    document.getElementById("r6").style.display = "none";

                    document.getElementById("r7").style.display = "none";

                    document.getElementById("r8").style.display = "none";

                    document.getElementById("r9").style.display = "none";

                    document.getElementById("r10").style.display = "none";

                    document.getElementById("r11").style.display = "none";

                    document.getElementById("r12").style.display = "none";

                    document.getElementById("r13").style.display = "none";

                    document.getElementById("r13").style.display = "none";

                    document.getElementById("r14").style.display = "none";

                    document.getElementById("r15").style.display = "none";

                    document.getElementById("r16").style.display = "none";

                    document.getElementById("r17").style.display = "none";

                    document.getElementById("r18").style.display = "none";

                    document.getElementById("r19").style.display = "none";

                    document.getElementById("r20").style.display = "none";

                    document.getElementById("r21").style.display = "none";

                    document.getElementById("r22").style.display = "none";

                    document.getElementById("r23").style.display = "none";

                    document.getElementById("r24").style.display = "none";

                    document.getElementById("r25").style.display = "none";

                    document.getElementById("r26").style.display = "none";

                    document.getElementById("r27").style.display = "none";

                    document.getElementById("r28").style.display = "none";

                    document.getElementById("r29").style.display = "none";

                    document.getElementById("r30").style.display = "none";

                    document.getElementById("r31").style.display = "none";

                    document.getElementById("r32").style.display = "none";

                    document.getElementById("r33").style.display = "none";

                    document.getElementById("r34").style.display = "none";

                }

                function daysUntilNext(month, day) {

                    var tday = new Date(),
                        y = tday.getFullYear(),
                        next = new Date(y, month - 1, day);

                    tday.setHours(0, 0, 0, 0);

                    if (tday > next) next.setFullYear(y + 1);

                    return Math.round((next - tday) / 8.64e7);

                }

                setTimeout(sortTable, 2);

                setTimeout(RemoveList, 1);

                function sortTable() {

                    var table, rows, switching, i, x, y, shouldSwitch;

                    table = document.getElementById("myTable");

                    switching = true;

                    /*Make a loop that will continue until

                    no switching has been done:*/

                    while (switching) {

                        //start by saying: no switching is done:

                        switching = false;

                        rows = table.rows;

                        /*Loop through all table rows (except the

                        first, which contains table headers):*/

                        for (i = 0; i < (rows.length - 1); i++) {

                            //start by saying there should be no switching:

                            shouldSwitch = false;

                            /*Get the two elements you want to compare,

                            one from current row and one from the next:*/

                            x = rows[i].getElementsByTagName("TD")[1];

                            y = rows[i + 1].getElementsByTagName("TD")[1];

                            //check if the two rows should switch place:

                            if (Number(x.innerHTML) > Number(y.innerHTML)) {

                                //if so, mark as a switch and break the loop:

                                shouldSwitch = true;

                                break;

                            }

                        }

                        if (shouldSwitch) {

                            /*If a switch has been marked, make the switch

                            and mark that a switch has been done:*/

                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);

                            switching = true;

                        }

                    }

                }

                //Dương Huyền Anh

                var d1 = daysUntilNext(08, 27);

                if (d1 === 0) {

                    var today1 =
                        "Hôm nay là sinh nhật của Dương Huyền Anh (27/08/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t1, 1);

                } else {

                    var dm1 = "Còn " + d1 + " ngày nữa là đến sinh nhật của Dương Huyền Anh"



                }

                function b1() {

                    document.getElementById("d1").innerHTML = d1;

                }

                function t1() {

                    document.getElementById("today").innerHTML = today1;

                    document.getElementById("r1").style.display = "none";

                }

                setTimeout(b1, 1);



                //Dương Tùng Anh

                var d2 = daysUntilNext(11, 21);

                if (d2 === 0) {

                    var today2 =
                        "Hôm nay là sinh nhật của Dương Tùng Anh (21/11/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t2, 1);

                } else {

                    var dm2 = "Còn " + d2 + " ngày nữa là đến sinh nhật của Dương Tùng Anh"



                }

                function b2() {

                    document.getElementById("d2").innerHTML = d2;

                }

                function t2() {

                    document.getElementById("today").innerHTML = today2;

                    document.getElementById("r2").style.display = "none";

                }

                setTimeout(b2, 1);



                //Ngô Phương Anh

                var d3 = daysUntilNext(6, 30);

                if (d3 === 0) {

                    var today3 =
                        "Hôm nay là sinh nhật của Ngô Phương Anh (30/6/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t3, 1);

                } else {

                    var dm3 = "Còn " + d3 + " ngày nữa là đến sinh nhật của Ngô Phương Anh"



                }

                function b3() {

                    document.getElementById("d3").innerHTML = d3;

                }

                function t3() {

                    document.getElementById("today").innerHTML = today3;

                    document.getElementById("r3").style.display = "none";

                }

                setTimeout(b3, 1);



                //Nguyễn Đạt Thái Dương

                var d4 = daysUntilNext(12, 12);

                if (d4 === 0) {

                    var today4 =
                        "Hôm nay là sinh nhật của Nguyễn Đạt Thái Dương (12/12/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t4, 1);

                } else {

                    var dm4 = "Còn " + d4 + " ngày nữa là đến sinh nhật của Nguyễn Đạt Thái Dương"



                }

                function b4() {

                    document.getElementById("d4").innerHTML = d4;

                }

                function t4() {

                    document.getElementById("today").innerHTML = today4;

                    document.getElementById("r4").style.display = "none";

                }

                setTimeout(b4, 1);



                //Nguyễn Đặng Hải

                var d5 = daysUntilNext(12, 10);

                if (d5 === 0) {

                    var today5 =
                        "Hôm nay là sinh nhật của Nguyễn Đặng Hải (10/12/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t5, 1);

                } else {

                    var dm5 = "Còn " + d5 + " ngày nữa là đến sinh nhật của Nguyễn Đặng Hải"



                }

                function b5() {

                    document.getElementById("d5").innerHTML = d5;

                }

                function t5() {

                    document.getElementById("today").innerHTML = today5;

                    document.getElementById("r5").style.display = "none";

                }

                setTimeout(b5, 1);



                //Dương Huyền Anh

                var d6 = daysUntilNext(12, 11);

                if (d6 === 0) {

                    var today6 =
                        "Hôm nay là sinh nhật của Nguyễn Anh Bảo Hân (19/08/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t6, 1);

                } else {

                    var dm6 = "Còn " + d6 + " ngày nữa là đến sinh nhật của Nguyễn Anh Bảo Hân"



                }

                function b6() {

                    document.getElementById("d6").innerHTML = d6;

                }

                function t6() {

                    document.getElementById("today").innerHTML = today6;

                    document.getElementById("r6").style.display = "none";

                }

                setTimeout(b6, 1);



                //Dương Tùng Anh

                var d7 = daysUntilNext(11, 10);

                if (d7 === 0) {

                    var today7 =
                        "Hôm nay là sinh nhật của Bùi Thu Hiền (10/11/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t7, 1);

                } else {

                    var dm7 = "Còn " + d7 + " ngày nữa là đến sinh nhật của Bùi Thu Hiền"



                }

                function b7() {

                    document.getElementById("d7").innerHTML = d7;

                }

                function t7() {

                    document.getElementById("today").innerHTML = today7;

                    document.getElementById("r7").style.display = "none";

                }

                setTimeout(b7, 1);



                //Ngô Phương Anh

                var d8 = daysUntilNext(5, 17);

                if (d8 === 0) {

                    var today8 =
                        "Hôm nay là sinh nhật của Nguyễn Thuý Hiền (17/5/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t8, 1);

                } else {

                    var dm8 = "Còn " + d8 + " ngày nữa là đến sinh nhật của Ngô Phương Anh"



                }

                function b8() {

                    document.getElementById("d8").innerHTML = d8;

                }

                function t8() {

                    document.getElementById("today").innerHTML = today8;

                    document.getElementById("r8").style.display = "none";

                }

                setTimeout(b8, 1);



                //Nguyễn Đạt Thái Dương

                var d9 = daysUntilNext(12, 29);

                if (d9 === 0) {

                    var today9 =
                        "Hôm nay là sinh nhật của Phạm Thu Hiền (29/12/2003)! Hãy gửi Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t9, 1);

                } else {

                    var dm9 = "Còn " + d9 + " ngày nữa là đến sinh nhật của Phạm Thu Hiền"



                }

                function b9() {

                    document.getElementById("d9").innerHTML = d9;

                }

                function t9() {

                    document.getElementById("today").innerHTML = today9;

                    document.getElementById("r9").style.display = "none";

                }

                setTimeout(b9, 1);



                //Nguyễn Đặng Hải

                var d10 = daysUntilNext(1, 21);

                if (d10 === 0) {

                    var today10 =
                        "Hôm nay là sinh nhật của Hồ Trung Hiếu (21/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t10, 1);

                } else {

                    var dm10 = "Còn " + d10 + " ngày nữa là đến sinh nhật của Hồ Trung Hiếu"



                }

                function b10() {

                    document.getElementById("d10").innerHTML = d10;

                }

                function t10() {

                    document.getElementById("today").innerHTML = today10;

                    document.getElementById("r10").style.display = "none";

                }

                setTimeout(b10, 1);



                //Nguyễn Anh Bảo Hân

                var d11 = daysUntilNext(12, 25);

                if (d11 === 0) {

                    var today11 =
                        "Hôm nay là sinh nhật của Phạm Bảo Sơn Hoa (25/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t11, 1);

                } else {

                    var dm11 = "Còn " + d11 + " ngày nữa là đến sinh nhật của Phạm Bảo Sơn Hoa"



                }

                function b11() {

                    document.getElementById("d11").innerHTML = d11;

                }

                function t11() {

                    document.getElementById("today").innerHTML = today11;

                    document.getElementById("r11").style.display = "none";

                }

                setTimeout(b11, 1);

                //Bùi Thu Hiền

                var d12 = daysUntilNext(4, 13);

                if (d12 === 0) {

                    var today12 =
                        "Hôm nay là sinh nhật của Dư Thanh Hoài (13/4/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t12, 1);

                } else {

                    var dm12 = "Còn " + d12 + " ngày nữa là đến sinh nhật của Dư Thanh Hoài"



                }

                function b12() {

                    document.getElementById("d12").innerHTML = d12;

                }

                function t12() {

                    document.getElementById("today").innerHTML = today12;

                    document.getElementById("r12").style.display = "none";

                }

                setTimeout(b12, 1);

                //NguyenThuyHien

                var d13 = daysUntilNext(12, 23);

                if (d13 === 0) {

                    var today13 =
                        "Hôm nay là sinh nhật của Lã Kim Huệ (23/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t13, 1);

                } else {

                    var dm13 = "Còn " + d13 + " ngày nữa là đến sinh nhật của Lã Kim Huệ"



                }

                function b13() {

                    document.getElementById("d13").innerHTML = d13;

                }

                function t13() {

                    document.getElementById("today").innerHTML = today13;

                    document.getElementById("r13").style.display = "none";

                }

                setTimeout(b13, 1);

                //Nguyễn Đặng Hải

                var d14 = daysUntilNext(11, 13);

                if (d14 === 0) {

                    var today14 =
                        "Hôm nay là sinh nhật của Phạm Thị Thiên Hương (13/11/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t14, 1);

                } else {

                    var dm14 = "Còn " + d14 + " ngày nữa là đến sinh nhật của Phạm Thị Thiên Hương"



                }

                function b14() {

                    document.getElementById("d14").innerHTML = d14;

                }

                function t14() {

                    document.getElementById("today").innerHTML = today14;

                    document.getElementById("r14").style.display = "none";

                }

                setTimeout(b14, 1);

                //Nguyễn Đặng Hải

                var d15 = daysUntilNext(12, 16);

                if (d15 === 0) {

                    var today15 =
                        "Hôm nay là sinh nhật của Nguyễn Quang Huy (16/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t15, 1);

                } else {

                    var dm15 = "Còn " + d15 + " ngày nữa là đến sinh nhật của Nguyễn Quang Huy"



                }

                function b15() {

                    document.getElementById("d15").innerHTML = d15;

                }

                function t15() {

                    document.getElementById("today").innerHTML = today15;

                    document.getElementById("r15").style.display = "none";

                }

                setTimeout(b15, 1);

                //Nguyễn Đặng Hải

                var d16 = daysUntilNext(1, 2);

                if (d16 === 0) {

                    var today16 =
                        "Hôm nay là sinh nhật của Trần Thị Diệu Huyền (2/1/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t16, 1);

                } else {

                    var dm16 = "Còn " + d16 + " ngày nữa là đến sinh nhật của Trần Thị Diệu Huyền"



                }

                function b16() {

                    document.getElementById("d16").innerHTML = d16;

                }

                function t16() {

                    document.getElementById("today").innerHTML = today16;

                    document.getElementById("r16").style.display = "none";

                }

                setTimeout(b16, 1);

                //Nguyễn Đặng Hải

                var d17 = daysUntilNext(5, 1);

                if (d17 === 0) {

                    var today17 =
                        "Hôm nay là sinh nhật của Nguyễn Minh Khôi (1/5/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t17, 1);

                } else {

                    var dm17 = "Còn " + d17 + " ngày nữa là đến sinh nhật của Nguyễn Minh Khôi"



                }

                function b17() {

                    document.getElementById("d17").innerHTML = d17;

                }

                function t17() {

                    document.getElementById("today").innerHTML = today17;

                    document.getElementById("r17").style.display = "none";

                }

                setTimeout(b17, 1);

                //Nguyễn Đặng Hải

                var d18 = daysUntilNext(09, 2);

                if (d18 === 0) {

                    var today18 =
                        "Hôm nay là sinh nhật của Lê Hoàng Tùng Lâm (2/09/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t18, 1);

                } else {

                    var dm18 = "Còn " + d18 + " ngày nữa là đến sinh nhật của Lê Hoàng Tùng Lâm"



                }

                function b18() {

                    document.getElementById("d18").innerHTML = d18;

                }

                function t18() {

                    document.getElementById("today").innerHTML = today18;

                    document.getElementById("r18").style.display = "none";

                }

                setTimeout(b18, 1);

                //Nguyễn Đặng Hải

                var d19 = daysUntilNext(5, 18);

                if (d19 === 0) {

                    var today19 =
                        "Hôm nay là sinh nhật của Lê Kim Liên (18/5/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t19, 1);

                } else {

                    var dm19 = "Còn " + d19 + " ngày nữa là đến sinh nhật của Lê Kim Liên"



                }

                function b19() {

                    document.getElementById("d19").innerHTML = d19;

                }

                function t19() {

                    document.getElementById("today").innerHTML = today19;

                    document.getElementById("r19").style.display = "none";

                }

                setTimeout(b19, 1);

                //Nguyễn Đặng Hải

                var d20 = daysUntilNext(2, 25);

                if (d20 === 0) {

                    var today20 =
                        "Hôm nay là sinh nhật của Đinh Thuỳ Linh (19/08/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t20, 1);

                } else {

                    var dm20 = "Còn " + d20 + " ngày nữa là đến sinh nhật của Đinh Thuỳ Linh"



                }

                function b20() {

                    document.getElementById("d20").innerHTML = d20;

                }

                function t20() {

                    document.getElementById("today").innerHTML = today20;

                    document.getElementById("r20").style.display = "none";

                }

                setTimeout(b20, 1);



                //Nguyễn Đặng Hải

                var d21 = daysUntilNext(12, 13);

                if (d21 === 0) {

                    var today21 =
                        "Hôm nay là sinh nhật của Nguyễn Khánh Linh (13/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t21, 1);

                } else {

                    var dm21 = "Còn " + d21 + " ngày nữa là đến sinh nhật của Nguyễn Khánh Linh"



                }

                function b21() {

                    document.getElementById("d21").innerHTML = d21;

                }

                function t21() {

                    document.getElementById("today").innerHTML = today21;

                    document.getElementById("r21").style.display = "none";

                }

                setTimeout(b21, 1);

                //Nguyễn Đặng Hải

                var d22 = daysUntilNext(1, 19);

                if (d22 === 0) {

                    var today22 =
                        "Hôm nay là sinh nhật của Bùi Ngọc Lĩnh (19/1/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t22, 1);

                } else {

                    var dm22 = "Còn " + d22 + " ngày nữa là đến sinh nhật của Bùi Ngọc Lĩnh"



                }

                function b22() {

                    document.getElementById("d22").innerHTML = d22;

                }

                function t22() {

                    document.getElementById("today").innerHTML = today22;

                    document.getElementById("r22").style.display = "none";

                }

                setTimeout(b22, 1);

                //Nguyễn Đặng Hải

                var d23 = daysUntilNext(08, 09);

                if (d23 === 0) {

                    var today23 =
                        "Hôm nay là sinh nhật của Nguyễn Đức Mạnh (09/08/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t23, 1);

                } else {

                    var dm23 = "Còn " + d23 + " ngày nữa là đến sinh nhật của Nguyễn Đức Mạnh"



                }

                function b23() {

                    document.getElementById("d23").innerHTML = d23;

                }

                function t23() {

                    document.getElementById("today").innerHTML = today23;

                    document.getElementById("r23").style.display = "none";

                }

                setTimeout(b23, 1);

                //Nguyễn Đặng Hải

                var d24 = daysUntilNext(4, 13);

                if (d24 === 0) {

                    var today24 =
                        "Hôm nay là sinh nhật của Đỗ Thảo Nguyên (13/4/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t24, 1);

                } else {

                    var dm24 = "Còn " + d24 + " ngày nữa là đến sinh nhật của Đỗ Thảo Nguyên"



                }

                function b24() {

                    document.getElementById("d24").innerHTML = d24;

                }

                function t24() {

                    document.getElementById("today").innerHTML = today24;

                    document.getElementById("r24").style.display = "none";

                }

                setTimeout(b24, 1);

                //Nguyễn Đặng Hải

                var d25 = daysUntilNext(08, 6);

                if (d25 === 0) {

                    var today25 =
                        "Hôm nay là sinh nhật của Đào Thu Phương (6/08/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t25, 1);

                } else {

                    var dm25 = "Còn " + d25 + " ngày nữa là đến sinh nhật của Đào Thu Phương"



                }

                function b25() {

                    document.getElementById("d25").innerHTML = d25;

                }

                function t25() {

                    document.getElementById("today").innerHTML = today25;

                    document.getElementById("r25").style.display = "none";

                }

                setTimeout(b25, 1);

                //Nguyễn Đặng Hải

                var d26 = daysUntilNext(11, 08);

                if (d26 === 0) {

                    var today26 =
                        "Hôm nay là sinh nhật của Đỗ Hồng Quân (08/11/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t26, 1);

                } else {

                    var dm26 = "Còn " + d26 + " ngày nữa là đến sinh nhật của Đỗ Hồng Quân"



                }

                function b26() {

                    document.getElementById("d26").innerHTML = d26;

                }

                function t26() {

                    document.getElementById("today").innerHTML = today26;

                    document.getElementById("r26").style.display = "none";

                }

                setTimeout(b26, 1);

                //Nguyễn Đặng Hải

                var d27 = daysUntilNext(4, 28);

                if (d27 === 0) {

                    var today27 =
                        "Hôm nay là sinh nhật của Vũ Minh Quang (28/4/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t27, 1);

                } else {

                    var dm27 = "Còn " + d27 + " ngày nữa là đến sinh nhật của Vũ Minh Quang"



                }

                function b27() {

                    document.getElementById("d27").innerHTML = d27;

                }

                function t27() {

                    document.getElementById("today").innerHTML = today27;

                    document.getElementById("r27").style.display = "none";

                }

                setTimeout(b27, 1);

                //Nguyễn Đặng Hải

                var d28 = daysUntilNext(10, 7);

                if (d28 === 0) {

                    var today28 =
                        "Hôm nay là sinh nhật của Đan Thị Phương Thảo (7/10/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t28, 1);

                } else {

                    var dm28 = "Còn " + d28 + " ngày nữa là đến sinh nhật của Đan Thị Phương Thảo"



                }

                function b28() {

                    document.getElementById("d28").innerHTML = d28;

                }

                function t28() {

                    document.getElementById("today").innerHTML = today28;

                    document.getElementById("r28").style.display = "none";

                }

                setTimeout(b28, 1);

                //Nguyễn Đặng Hải

                var d29 = daysUntilNext(12, 14);

                if (d29 === 0) {

                    var today29 =
                        "Hôm nay là sinh nhật của Dương Phương Thảo (14/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t29, 1);

                } else {

                    var dm29 = "Còn " + d29 + " ngày nữa là đến sinh nhật của Dương Phương Thảo"



                }

                function b29() {

                    document.getElementById("d29").innerHTML = d29;

                }

                function t29() {

                    document.getElementById("today").innerHTML = today29;

                    document.getElementById("r29").style.display = "none";

                }

                setTimeout(b29, 1);

                //Nguyễn Đặng Hải

                var d30 = daysUntilNext(08, 19);

                if (d30 === 0) {

                    var today30 =
                        "Hôm nay là sinh nhật của Nguyễn Minh Thư (19/08/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t30, 1);

                } else {

                    var dm30 = "Còn " + d30 + " ngày nữa là đến sinh nhật của Nguyễn Minh Thư"



                }

                function b30() {

                    document.getElementById("d30").innerHTML = d30;

                }

                function t30() {

                    document.getElementById("today").innerHTML = today30;

                    document.getElementById("r30").style.display = "none";

                }

                setTimeout(b30, 1);

                //Nguyễn Đặng Hải

                var d31 = daysUntilNext(12, 21);

                if (d31 === 0) {

                    var today31 =
                        "Hôm nay là sinh nhật của Vũ Huyền Trang (21/12/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t31, 1);

                } else {

                    var dm31 = "Còn " + d31 + " ngày nữa là đến sinh nhật của Vũ Huyền Trang"



                }

                function b31() {

                    document.getElementById("d31").innerHTML = d31;

                }

                function t31() {

                    document.getElementById("today").innerHTML = today31;

                    document.getElementById("r31").style.display = "none";

                }

                setTimeout(b31, 1);

                //Nguyễn Đặng Hải

                var d32 = daysUntilNext(4, 18);

                if (d32 === 0) {

                    var today32 =
                        "Hôm nay là sinh nhật của Nguyễn Thị Ánh Tuyết (18/4/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t32, 1);

                } else {

                    var dm32 = "Còn " + d32 + " ngày nữa là đến sinh nhật của Nguyễn Thị Ánh Tuyết"



                }

                function b32() {

                    document.getElementById("d32").innerHTML = d32;

                }

                function t32() {

                    document.getElementById("today").innerHTML = today32;

                    document.getElementById("r32").style.display = "none";

                }

                setTimeout(b32, 1);

                //Nguyễn Đặng Hải

                var d33 = daysUntilNext(11, 25);

                if (d33 === 0) {

                    var today33 =
                        "Hôm nay là sinh nhật của Trần Khánh Vân (25/11/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t33, 1);

                } else {

                    var dm33 = "Còn " + d33 + " ngày nữa là đến sinh nhật của Trần Khánh Vân"



                }

                function b33() {

                    document.getElementById("d33").innerHTML = d33;

                }

                function t33() {

                    document.getElementById("today").innerHTML = today33;

                    document.getElementById("r33").style.display = "none";

                }

                setTimeout(b33, 1);

                //Nguyễn Đặng Hải

                var d34 = daysUntilNext(11, 16);

                if (d34 === 0) {

                    var today34 =
                        "Hôm nay là sinh nhật của Hà Gia Văn (16/11/2003)! Hãy gửi lời chúc mừng sinh nhật bạn ấy!"

                    setTimeout(t34, 1);

                } else {

                    var dm34 = "Còn " + d34 + " ngày nữa là đến sinh nhật của Hà Gia Văn"



                }

                function b34() {

                    document.getElementById("d34").innerHTML = d34;

                }

                function t34() {

                    document.getElementById("today").innerHTML = today34;

                    document.getElementById("r34").style.display = "none";

                }

                setTimeout(b34, 1);
                </script>

                <h5 id="today">Hôm nay không có sinh nhật nào diễn ra...</h5>

                <br />



            </div>

            <h4><strong><i class="fas fa-comment-dollar"></i> Nó có miễn phí không?</strong></h4>

            <p>Tất nhiên rồi! Miễn phì từ nay và mãi mãi về sau! Tuy nhiên nếu bạn muốn ủng hộ người lập trình, bạn có
                thể donate một cốc cafe 1$ qua <a href="https://paypal.me/techup">PayPal</a> :)</p>

            <h4><strong><i class="fas fa-coffee"></i> Top Donators:</strong></h4>
            <p>C4K60 Web và C4K60 Mobile có thể đã không được tồn tại mà không có sự hỗ trợ từ các mạnh thường quân sau:
            </p>
            <ul>
                <li><a href="https://facebook.com/ndhai1012">Nguyễn Đặng Hải</a> - $8</li>
                <li><a href="https://facebook.com/">Vũ Minh Quang</a> - 100.000đ</li>
                <li><a href="https://facebook.com/">Dương Phương Thảo</a> - 22.222đ</li>
                <li><a href="https://facebook.com/">Đỗ Hồng Quân</a> - 20.000đ</li>
                <li>Ẩn danh - 20.000đ</li>
            </ul>
            <p>Bạn muốn ủng hộ cho dự án này? Mình rất cảm ơn tấm lòng của bạn. Dưới đây là các kênh thanh toán
                mình đang mở:</p>
            <ol>
                <li>Agribank: 2904220080690</li>
                <li>MB Bank: 0376953283</li>
                <li>MoMo: 0376953283</li>
                <li>Viettel Money: 9704229245853309</li>
                <li>MSB: 03801017934767</li>
                <li>PayPal: paypal.me/techup</li>
            </ol>
            <p>Chủ tài khoản: Dương Tùng Anh</p>
            <p>Cảm ơn các bạn một lần nữa vì đã quan tâm và ủng hộ dự án này của mình! Nó có ý nghĩa về mặt tinh thần
                rất lớn đối với mình!</p>

            <h4><strong><i class="fas fa-user-check"></i> Ai tạo ra cái này?</strong></h4>

            <p>Dương Tùng Anh - Coder, Web Designer | Hiện đang học lớp 12 Nga THPT Chuyên Hà Nam.</p>

            <div>

                <button type="button" class="btn btn-info" onclick="location.href='http://facebook.com/tunnaduong';"
                    style="

    margin-top: 4px;

">

                    <i class="fab fa-facebook-square"></i>

                    Facebook</button>

                <button type="button" class="btn btn-info"
                    onclick="location.href='http://instagram.com/tunna.handsome';" style="

    margin-top: 4px;

">

                    <i class="fab fa-instagram"></i>

                    Instagram</button>

                <button type="button" class="btn btn-info" onclick="location.href='http://twitter.com/tunnaduong';"
                    style="

    margin-top: 4px;

">

                    <i class="fab fa-twitter"></i>

                    Twitter</button>

                <button type="button" class="btn btn-info" onclick="location.href='http://github.com/tunnaduong';"
                    style="

    margin-top: 4px;

">

                    <i class="fab fa-github"></i>

                    GitHub</button>

                <button type="button" class="btn btn-info" onclick="location.href='https://blog.tunnaduong.com';" style="

    margin-top: 4px;

">

                    <i class="fas fa-blog"></i>

                    Blog cá nhân</button>

            </div>



            <br />

            <h4><strong><i class="fab fa-creative-commons"></i> Tôi có thể tự tạo ra trang web cho lớp mình dựa theo
                    trang web này?</strong></h4>

            <p>Đây là một dự án mã nguồn mở, mọi người được phép tự chỉnh sửa trang web này mà không cần phải xin phép
                từ tác giả. Mã nguồn của trang web này có thể tìm thấy trên GitHub tại <a
                    href="http://github.com/tunganh03/c4k60-v3">đây</a>. Đừng ngại ngùng mày mò nghiên cứu và thay đổi
                :P</p>





            <style type="text/css">
            div.scroll {

                margin: 4px, 4px;

                padding: 4px;

                width: 100%;

                height: 410px;

                overflow-x: hidden;

                overflow-y: auto;

                text-align: justify;

            }
            </style>

            <!-- START CONTENT -->

            <div id="content">
                <h4><strong><i class="fas fa-clipboard-check"></i> Những thay đổi</strong></h4>

                <div class="scroll">

                    <h5>Phiên bản 3.6</h5>

                    <p>Ngày phát hành: 21/02/2021</p>



                    <ul>

                        <li>Bản cập nhật trong kỳ nghỉ học do dịch Covid-19</li>

                        <li>Đã gộp tính năng Videos và Ảnh thành một</li>

                        <li>Đã sửa lại lớp 11 -> lớp 12 trong phần Ai tạo ra cái này? ở Trang chủ</li>

                        <li>Đã thêm tính năng đăng nhập vào trang quản trị viên ở Navbar</li>

                        <li>Đã xoá bỏ tính năng Wiki</li>

                        <li>Đã thêm tính năng tìm kiếm tên học sinh trong phần tra cứu hồ sơ học sinh</li>

                        <li>Giới thiệu tính năng Thư viện ảnh hoàn toàn mới được thiết kế để mọi người đều có thể upload
                            ảnh hoặc video thay vì chỉ có quản trị viên</li>

                        <li>Đã thêm tính năng Tạo album mới</li>

                        <li>Đã thêm tính năng Tải lên ảnh</li>

                        <li>Đã thêm tính năng Tải lên video</li>

                        <li>Đã thêm trang dành cho quản trị viên</li>

                        <li>Đã chỉnh sửa tính năng Thông báo lớp, Bài tập về nhà và Thời khoá biểu để có thể dễ dàng
                            thêm bớt bài viết, thời khoá biểu trong trang quản trị viên</li>

                        <li>Đã sửa lại phần Những thay đổi ở Trang chủ để có thể cuộn xuống mà không chiếm diện tích lớn
                            trong trang chủ</li>

                    </ul>



                    <h5>Phiên bản 3.5.3</h5>

                    <p>Ngày phát hành: 31/05/2020</p>



                    <ul>

                        <li>Bản cập nhật trong tuần học bù sau dịch Covid-19</li>

                        <li>Đã cập nhật thời khoá biểu theo màu mới sau khoảng nửa năm không cập nhật</li>

                    </ul>



                    <h5>Phiên bản 3.5.2</h5>

                    <p>Ngày phát hành: 27/03/2020</p>



                    <ul>

                        <li>Bản cập nhật trong kì nghỉ Tết do chủng mới của virus Corona</li>

                        <li>Đã thêm thông báo về dịch COVID-19 và đường dẫn đến trang web của Bộ Y Tế ở đầu mọi trang
                        </li>

                        <li>Đã fix lỗi chuyển hướng trang web vô tận số lần</li>

                        <li>Đã xoá thông báo lớp cũ từ trước đây</li>

                        <li>Đã xoá nút đăng nhập ở thanh navbar</li>

                        <li>Đã thêm thông báo nghỉ học</li>

                    </ul>



                    <h5>Phiên bản 3.5.1</h5>

                    <p>Ngày phát hành: 11/03/2020</p>



                    <ul>

                        <li>Bản cập nhật sau kì nghỉ Tết do chủng mới của virus Corona</li>

                        <li>Đã thêm mục Wiki</li>

                        <li>Đã thay logo mới nhân dịp mùa dịch Corona</li>

                        <li>Đã fix lỗi hiện 2 logo trên trang chủ</li>

                        <li>Đã fix lỗi hiện khoảng trống ở navbar</li>

                        <li>Đã fix lỗi thanh tìm kiếm</li>

                    </ul>



                    <h5>Phiên bản 3.5</h5>

                    <p>Ngày phát hành: 24/01/2020</p>



                    <ul>

                        <li>Bản cập nhật đầu xuân năm mới Canh Tý 2020</li>

                        <li>Đã thêm tính năng "Videos"</li>

                        <li>Đã hoàn thiện tính năng "Games"</li>

                        <li>Đã xoá bỏ hình ảnh ở đầu trang</li>

                        <li>Đã thêm Carousel ở đầu trang</li>

                        <li>Đã thêm trang Đăng nhập</li>

                        <li>Đã redesign lại navbar</li>

                        <li>Đã thêm mục Thời khoá biểu</li>

                        <li>Đã sửa lại ảnh của Tùng Anh</li>

                        <li>Đã thêm tính năng gửi bằng cách nhấn Enter</li>

                    </ul>



                    <h5>Phiên bản 3.4</h5>

                    <p>Ngày phát hành: 25/07/2019</p>



                    <ul>

                        <li>Bản cập nhật đặc biệt và có nhiều thay đổi nhất của phiên bản 3.0</li>

                        <li>Cập nhật giao diện thanh menu mới</li>

                        <li>Đã thêm logo C4K60 mới trên thanh menu (Credit goes to <a
                                href="https://www.facebook.com/phamhuong131">Thiên Hương</a> for designing)</li>

                        <li>Đã thêm tính năng "Games" (Vẫn chưa phát triển xong. Sorry guys)</li>

                        <li>Đã thêm tính năng tìm kiếm trong trang với Google trên thanh menu</li>

                        <li>Đã thay đổi Favicon của website thành logo mới</li>

                        <li>Màu sắc chủ đạo của trang web nay trở thành màu vàng</li>

                        <li>Đã fix một lỗi khiến website không thể quay lại trang chủ</li>

                        <li>Đã fix một lỗi khiến các trang bị biến dạng</li>

                        <li>Đã xoá bỏ tính năng gửi tin nhắn hỗ trợ ở góc phải màn hình</li>

                        <li>Tính năng Chat nhóm nay được chuyển thành dạng tab ở dưới màn hình</li>

                        <li>Thay đổi màu sắc cuộc trò chuyện trong phần Chat thành màu vàng</li>

                        <li>Đã cố định thanh menu ở góc trên màn hình</li>

                        <li>Đã thêm phần "Top Donators" trên trang chủ</li>

                        <li>Đã thêm thông báo "Top Donator" ở đầu mọi trang</li>

                        <li>Đã thêm liên kết đến trang Facebook cá nhân của Thiên Hương</li>

                        <li>Đã thay đổi màu sắc của nút mở khóa hồ sơ học sinh thành màu vàng</li>

                    </ul>



                    <h5>Phiên bản 3.3</h5>

                    <p>Ngày phát hành: 24/07/2019</p>



                    <ul>

                        <li>Bản cập nhật thứ ba của phiên bản 3.0</li>

                        <li>Đã thêm tính năng tra cứu ngày sinh nhật sắp tới của học sinh 11 Nga</li>

                        <li>Đã thêm phần "Sinh nhật sắp tới" trên trang chủ</li>

                        <li>Đã thêm phần mở ngoặc ngày sinh trong phần tra cứu ngày sinh nhật sắp tới. Cảm ơn góp ý của
                            Đan Thị Phương Thảo!</li>

                        <li>Fix lỗi logo C4K60 bé lại ở một số trang</li>

                        <li>Đã thêm phần mở ngoặc ngày sinh trong phần sinh nhật hôm nay</li>

                        <li>Fix lỗi sai ngày sinh nhật của một số người</li>

                        <li>Đã chuyển phần "Thông báo lớp" và "Sinh nhật sắp tới" lên đầu trang chủ</li>

                        <li>Đã thêm phần "Bài tập về nhà" lên trang chủ</li>

                    </ul>





                    <h5>Phiên bản 3.2</h5>

                    <p>Ngày phát hành: 23/07/2019</p>



                    <ul>

                        <li>Bản cập nhật thứ hai của phiên bản 3.0</li>

                        <li>Đã thêm phần "Ai tạo ra cái này?" trên trang chủ</li>

                        <li>Đã thêm liên kết đến mạng xã hội của tác giả trên trang chủ</li>

                        <li>Đã thêm phần "Tôi có thể tự tạo ra trang web cho lớp mình dựa theo trang web này?" trên
                            trang chủ</li>

                        <li>Bình luận Facebook ở mỗi bài viết trong phần thông báo lớp nay đã hoạt động.</li>

                        <li>Thay đổi màu sắc cuộc trò chuyện trong phần Chat thành màu hồng.</li>

                        <li>Đã thêm phần "Thông tin thêm" và "Tính cách" trong hồ sơ học sinh.</li>

                        <li>Đã sửa lại địa chỉ của Dư Thanh Hoài.</li>

                        <li>Đã sửa lại tên giáo viên trong thời khoá biểu.</li>

                    </ul>





                    <h5>Phiên bản 3.1</h5>

                    <p>Ngày phát hành: 23/07/2019</p>



                    <ul>

                        <li>Bản cập nhật đầu tiên của phiên bản 3.0</li>

                        <li>Đã sửa lại ngày sinh của Đinh Thuỳ Linh</li>

                        <li>Đã sửa lại link Instagram của Trần Khánh Vân</li>

                        <li>Đã sửa lại link Twitter của Dương Phương Thảo</li>

                        <li>Đã sửa lại số điện thoại của Phạm Bảo Sơn Hoa</li>

                        <li>Menu C4K60 đã được làm đậm hơn</li>

                        <li>Cửa sổ khung chat nay đã hoạt động</li>

                        <li>Độ dài khung chat giảm xuống một nửa</li>

                        <li>Thêm phần hướng dẫn nhập mật khẩu trong khung mật khẩu tra cứu hồ sơ học sinh</li>

                        <li>Thay đổi CNAME, sử dụng tên miền cũ c4k60.ga cho phiên bản mới</li>

                        <li>Fix lỗi BTVN Toán trong phần tra cứu bài tập về nhà</li>

                    </ul>





                    <h5>Phiên bản 3.0</h5>

                    <p>Ngày phát hành: 21/07/2019</p>



                    <ul>

                        <li>Ra mắt cổng thông tin điện tử 11 Chuyên Nga THPT Chuyên Biên Hoà phiên bản thứ ba trên
                            GitHub.</li>

                        <li>Phiên bản cải tiến nay sử dụng Jekyll để tiện quản lý và phát triển.</li>

                        <li>Đã thêm tính năng tra cứu hồ sơ học sinh, bài tập về nhà, thông báo lớp và chat.</li>

                        <li>Đã thêm tính năng bình luận Facebook ở cuối mỗi bài viết trong mục thông báo lớp.</li>

                        <li>Đã thêm tính năng liên lạc trợ giúp ở góc dưới bên phải màn hình.</li>

                        <li>Đã cập nhật giao diện mới cho trang 404.</li>

                    </ul>



                    <h5>Phiên bản 2.0</h5>

                    <p>Ngày phát hành: 23/05/2019</p>



                    <ul>

                        <li>Ra mắt cổng thông tin điện tử 10 Chuyên Nga THPT Chuyên Biên Hoà phiên bản thứ hai trên
                            GitHub.</li>

                        <li>Phiên bản cải tiến nay đã nhanh hơn và gọn nhẹ hơn.</li>

                        <li>Đã thêm tính năng tra cứu thời khoá biểu và thư viện ảnh.</li>

                    </ul>



                    <h5>Phiên bản 1.0</h5>

                    <p>Ngày phát hành: 24/03/2019</p>



                    <ul>

                        <li>Ra mắt cổng thông tin điện tử 10 Chuyên Nga THPT Chuyên Biên Hoà phiên bản đầu tiên trên
                            Blogspot.com.</li>

                        <li>Mục đích ban đầu tạo ra để tra điểm thi học kỳ.</li>

                    </ul>

                </div>

            </div>

            <!-- END CONTENT -->

        </div>





        <?php

        require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';

        ?>



</body>

</html>