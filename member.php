<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

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
                <li class="active"><a href="member.php">會員專區</a></li>
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
                            <li><a href="QA.php">提問專區</a></li>
                            <li class="active"><a href="member.php">會員專區</a></li>
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
                <?php include "sidebar.php";?>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <span style="font-family:DFKai-sb;">
                            <div id="top">
                                <h3>
                                <?php
                                session_start();
                                if($_SESSION['name']=="")
                                {
                                    echo"<tr><td>請先<a href='SAlogin.php'>登入</a></td><td>或<a href='register.php'>註冊</a></td></tr>";
                                }
                                else
                                {
                                    echo"<tr><td>你好，".$_SESSION['name']." !</td></tr>";
                                }
                                ?>
                                    <hr size="2px" align="top" width="100%">
                                </h3>
                                <h3>我是買家
                                    <hr size="2px" align="top" width="100%">
                                </h3>
                                <table class="table table-bordered border-warning">
                                    <thead style="background-color:#7fad39">
                                        <tr>
                                            <th><font color="#ffffff">你的購物車</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="comic" value="a">&nbsp;2隻老虎____黃偉柔<br>
                                                <input type="checkbox" name="comic" value="b">&nbsp;黃色的巧虎____陳俊宇<br>
                                                <input type="checkbox" name="comic" value="c">&nbsp;名偵探柯南<br>
                                                <div align=right>
                                                    <input type="submit" value="從車裡刪除">
                                                    <input type="submit" value="確認購買">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>



                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">
                                        <tr>
                                            <th><font color="#ffffff">確認購買書籍的賣家聯絡方式</th>
                                            <th><font color="#ffffff">賣家是否接單</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2隻老虎____黃偉柔,Line ID:09XXXXX985</td>
                                            <td>否,您還不能聯絡賣家</td>
                                        </tr>
                                        <tr>
                                            <td>黃色的巧虎____陳俊宇,IG:IAM_SMART</td>
                                            <td>是,您已可以聯絡賣家</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div id="mid">
                                <h3>我是賣家<br>
                                    <hr size="2px" align="top" width="100%">
                                </h3>
                                <p>上架欲賣出書籍請點此填寫表單</p>

                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">

                                        <tr>
                                            <th><font color="#ffffff">已上架書籍</th>
                                            <th align="right"><font color="#ffffff">書籍狀態</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>喵咪吃罐頭</td>
                                            <td>
                                                <input type="button" value="下架此書">
                                                <input type="button" value="已售出">
                                            </td>
                                        </tr>

                                    </tbody>
                                </tabl