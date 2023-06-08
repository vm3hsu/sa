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
                    if($_SESSION['name']=="")
                    {
                        echo"<li><a href='member2.php'>會員專區</a></li>";
                    }
                    else
                    {
                        echo"<li><a href='member.php'>會員專區</a></li>";
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
                                if($_SESSION['name']=="")
                                {
                                    echo"<tr><td>[<a href='SAlogin.php'>登入</a>]</td><td>[<a href='register.php'>註冊</a>]</td></tr>";
                                }
                                else
                                {
                                    echo"<tr><td>".$_SESSION['name']."，你好</td><td>[<a href='logout.php'>登出</a>]</td></tr>";
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
                                if($_SESSION['name']=="")
                                {
                                    echo"<li class='active'><a href='member2.php'>會員專區</a></li>";
                                }
                                else
                                {
                                    echo"<li class='active'><a href='member.php'>會員專區</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php include "sidebar.php";?>
                <div class="col-lg-9" style="margin-bottom: 10px;">
                    <div class="reservation-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11" style="margin-bottom: 10px;">
                                    <div style="background-color:#F5F5F5;">
                                        <form method="post" action="dblink.php">
                                            <input type=hidden name="dbaction" value="insert">
                                            <div class="row">
                                                <div class="col-lg-12" style="margin-bottom: 20px; margin-left: 37%; margin-top: 10%;">
                                                    <span>
                                                        <font size="6"><b>會員註冊</b></font>
                                                    </span>
                                                </div>
                                                <div class="col-lg-6" style="margin-bottom: 20px; margin-left:33%; ">
                                                    <fieldset>
                                                        <label for="Name" class="form-label">
                                                            <font size="4">帳號</font>
                                                        </label>
                                                        <input type="text" name="account" class="Number" autocomplete="on" placeholder="請輸入學號" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6" style="margin-bottom: 20px; margin-left:33%; ">
                                                    <fieldset>
                                                        <label for="Number" class="form-label">
                                                            <font size="3">密碼</font>
                                                        </label>
                                                        <input type="Password" name="password" class="Password" autocomplete="on" placeholder="請輸入密碼" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6" style="margin-bottom: 20px; margin-left:33%; ">
                                                    <fieldset>
                                                        <label for="Nickname" class="form-label">
                                                            <font size="3">暱稱</font>
                                                        </label>
                                                        <input type="text" name="name" class="Nickname" autocomplete="on" placeholder="請輸入暱稱" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-6" style="margin-bottom: 20px; margin-left:33%; ">
                                                    <fieldset>
                                                        <label for="Nickname" class="form-label">
                                                            <font size="3">電郵</font>
                                                        </label>
                                                        <input type="text" name="email" class="email" autocomplete="on" placeholder="請輸入電子郵件" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12" style="margin-bottom: 10px; margin-left:42%; ">
                                                    <fieldset>
                                                        <input type=submit value="送出資料">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


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