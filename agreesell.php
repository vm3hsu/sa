<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>輔仁2手書平台</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style type="text/css">
    #login {
        position: absolute;
        width: auto;
        height: auto;
        top: auto;
        right: 0;
        bottom: 10%;
        left: auto;
    }

    #menu {
        position: relative;
        width: auto;
        height: auto;
        top: auto;
        right: auto;
        bottom: auto;
        left: 5%;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="index.php">首頁</a></li>
                <li><a href="shop.php">瀏覽二手書</a></li>
                <li><a href="request.php">索書專區</a></li>
                <li><a href="common.php">常見問題</a></li>
                <li><a href="QA.php">提問專區</a></li>
                <?php
                session_start();
                if ($_SESSION['name'] == "") {
                    echo "<li class='active'><a href='member2.php'>會員專區</a></li>";
                } else {
                    echo "<li class='active'><a href='member.php'>會員專區</a></li>";
                }
                ?>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Humberger End -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header__cart">
                        <table id="login">
                            <?php
                            session_start();
                            if ($_SESSION['name'] == "") {
                                echo "<tr><td>[<a href='SAlogin.php'>登入</a>]</td><td>[<a href='register.php'>註冊</a>]</td></tr>";
                            } else {
                                echo "<tr><td>" . $_SESSION['name'] . "，你好</td><td>[<a href='logout.php'>登出</a>]</td></tr>";
                                echo "<tr><td colspan=2>
                                    <div><a href='member.php'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='30' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'><path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/></svg><font style='font-size: x-large;vertical-align: top;'>購物車</font></a></div></td></tr>";
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form method="post" action="shop.php" style="border: 2px solid #4569ff;border-radius: 10px;overflow: hidden; position: relative; width: auto; height: auto; top: 30%; right: auto; bottom: auto; left: auto;">
                        <input type="text" name="searchtxt" value="<?php echo $searchtxt; ?>" placeholder="搜尋書名" style="width: 80%">
                        <button type="submit" style="border: none;background-color: #ffffff;color: #fff;width: 15%"><img src="img/search.png" style="width:85%;height:85%"></button>
                    </form>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu" id="menu">
                        <ul>
                            <li><a href="index.php">首頁</a></li>
                            <li><a href="shop.php">瀏覽二手書</a></li>
                            <li><a href="request.php">索書專區</a></li>
                            <li><a href="common.php">常見問題</a></li>
                            <?php
                                session_start();
                                if($_SESSION['name']=="")
                                {
                                    echo"<li><a href='QA.php?show_alert=true'>提問專區</a></li>";
                                }
                                else
                                {
                                    echo"<li><a href='QA1.php'>提問專區</a></li>";
                                }
                            ?>
                            <?php
                            session_start();
                            if ($_SESSION['name'] == "") {
                                echo "<li class='active'><a href='member2.php'>會員專區</a></li>";
                            } else {
                                echo "<li class='active'><a href='member.php'>會員專區</a></li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <section class="hero">
        <div class="container">
            <div class="row">
                <?php include "sidebar.php"; ?>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <span style="font-family:DFKai-sb;width:77%">
                            <div id="top">

                                <h3>
                                    <?php
                                    session_start();
                                    if ($_SESSION['name'] == "") {
                                        echo "<tr><td>請先<a href='SAlogin.php'>登入</a></td><td>或<a href='register.php'>註冊</a></td></tr>";
                                    } else {
                                        echo "<tr><td>你好，" . $_SESSION['name'] . " !</td></tr>";
                                    }
                                    ?>
                                    <hr size="2px" align="top" width="100%">
                                </h3>
                                <form action="agreedblink.php" method="post" enctype="multipart/form-data">
                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">

                                        <tr>
                                            <th colspan=4>
                                                <font color="#ffffff">交易確認
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><b>日期</b></td>
                                            <td><b>時間</b></td>
                                            <td><b>地點</b></td>
                                        </tr>
                                        <?php
                                        $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
                                        session_start();
                                        $SNumber = $_GET['SNumber'];
                                        $sql = "SELECT * FROM record WHERE SNumber = $SNumber";
                                        $result = mysqli_query($link, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        ?>
                                        <input type=hidden name="SNumber" value="<?php echo $SNumber; ?>">
                                                <?php
                                                echo"
                                                <tr>
                                                    <td><input type='radio' name='date' value=1></td>
                                                    <td>
                                                        ".$row['date1']."
                                                    </td>
                                                    <td>
                                                        ".$row['time1']."
                                                    </td>
                                                    <td>
                                                        <select name='location1'>
                                                        <option value=''>請選擇</option>";
                                                        $string = $row['location1'];
                                                        $delimiter = ",";
                                                        $locations = explode($delimiter, $string);
                                                        foreach ($locations as $location1) {
                                                            echo "
                                                                <option value='".$location1."'>".$location1."</option>";
                                                        }
                                                        echo"    
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td><input type='radio' name='date' value=2></td>
                                                <td>
                                                    ".$row['date2']."
                                                </td>
                                                <td>
                                                    ".$row['time2']."
                                                </td>
                                                <td>
                                                    <select name='location2'>
                                                    <option value=''>請選擇</option>";
                                                    $string = $row['location2'];
                                                    $delimiter = ",";
                                                    $locations = explode($delimiter, $string);
                                                    foreach ($locations as $location2) {
                                                        echo "
                                                            <option value='".$location2."'>".$location2."</option>";
                                                    }
                                                    echo"    
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td><input type='radio' name='date' value=3></td>
                                                    <td>
                                                        ".$row['date3']."
                                                    </td>
                                                    <td>
                                                        ".$row['time3']."
                                                    </td>
                                                    <td>
                                                        <select name='location3'>
                                                        <option value=''>請選擇</option>";
                                                        $string = $row['location3'];
                                                        $delimiter = ",";
                                                        $locations = explode($delimiter, $string);
                                                        foreach ($locations as $location3) {
                                                            echo "
                                                                <option value='".$location3."'>".$location3."</option>";
                                                        }
                                                        echo"    
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td><input type='radio' name='date' value=4></td>
                                                    <td>
                                                        ".$row['date4']."
                                                    </td>
                                                    <td>
                                                        ".$row['time4']."
                                                    </td>
                                                    <td>
                                                        <select name='location4'>
                                                        <option value=''>請選擇</option>";
                                                        $string = $row['location4'];
                                                        $delimiter = ",";
                                                        $locations = explode($delimiter, $string);
                                                        foreach ($locations as $location4) {
                                                            echo "
                                                                <option value='".$location4."'>".$location4."</option>";
                                                        }
                                                        echo"    
                                                        </select>
                                                    </td>
                                                </tr>";

                                                
                                                ?>
                                            </tbody>
                                    
                                        </table> 
                                        <label>
                                            <span>&nbsp;</span>
                                            <input type="submit" class="button" value="Send" />
                                        </label>
                                    </form>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a>輔仁2手書平台</a>
                        </div>
                        <ul>
                            <li>電話: (02)29052000</li>
                            <li>信箱: pubwww@mail.fju.edu.tw</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>所有資訊</h6>
                        <ul>
                            <li><a href="#">首頁</a></li>
                            <li><a href="shop.php">瀏覽二手書</a></li>
                            <li><a href="request.php">索書專區</a></li>
                        </ul>
                        <ul>
                            <li><a href="common.php">常見問題</a></li>
                            <li><a href="QA.php">提問專區</a></li>
                            <li><a href="member.php">會員專區</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>WELCOME TO SECOND HAND BOOKSTORE FOR FJU</h6>
                        <p>我們將會給您最簡單以及簡潔的頁面，但卻擁有最好的二手書交易經驗。</p>
                        <form action="#">
                            <input type="text" placeholder="輸入你的信箱">
                            <button type="submit" class="site-btn">寄出</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>