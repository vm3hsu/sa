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
                <li class="active"><a href="common.php">常見問題</a></li>
                <?php
                                session_start();
                                if($_SESSION['name']=="")
                                {
                                    echo"<li><a href='member2.php?show_alert=true'>提問專區</a></li>";
                                }
                                else
                                {
                                    echo"<li><a href='QA.php'>提問專區</a></li>";
                                }
                            ?>
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
                                    echo"<tr><td colspan=2>
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
                            <li class="active"><a href="common.php">常見問題</a></li>
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
                                    echo"<li><a href='member2.php'>會員專區</a></li>";
                                }
                                else
                                {
                                    echo"<li><a href='member.php'>會員專區</a></li>";
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
                <div class="col-lg-9">
                    <div style="background-color:#F5F5F5">
                        <div class="hero__text">
                            <span>
                                <font size="6"> 常見問題<i class="fa fa-comment-o	"></i></font>
                            </span>
                            <p>Question and Answer</p>

                            <div style="width:95%;
                                    height:100px;  
                                    background-color:#FCFCFC;
                                    border-radius:15px;border:2px gray solid;margin: auto;margin-bottom: 20px; padding: 10px;height: auto;">

                                <div style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px; 
                                        font-size:23px; font-weight:bold;">如何買書？</div>
                                <p style="margin-left: 10px; margin-bottom: 10px; 
                                        font-size:18px; font-weight:light;">在"瀏覽二手書"中找到你想要的書並按下確認購買，
                                    然後等待賣家同意給你他的連絡資訊後，便可以去會員專區查看賣家的聯絡方式並連繫賣家商討
                                    事後購書事宜細節。</p>
                            </div>

                            <div style="width:95%;
                                    height:100px;  
                                    background-color:#FCFCFC;
                                    border-radius:15px;border:2px gray solid;margin: auto;margin-bottom: 20px; padding: 10px;height: auto;">

                                <div style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px; 
                                        font-size:23px; font-weight:bold;">如何賣書？</div>
                                <p style="margin-left: 10px; margin-bottom: 10px; 
                                        font-size:18px; font-weight:light;">在"首頁"可以看到"我要賣書，點此連結填寫上架表單"
                                    ，點進去後依照指示填完表格並按"送出表單"即可成功上架書籍。這邊提醒您，上船二手書時請上
                                    傳清晰的照片，切勿用網路圖片，並詳述書本的實際狀況。</p>

                                <p style="margin-left: 10px; margin-bottom: 10px; 
                                        font-size:18px; font-weight:light;">若有買家想購買您的書籍，您必須在"會員專區"按下"同意"向此買家透漏您的個人聯絡方式，買家
                                    才能聯絡您並商討事後購書細節。
                                </p>
                            </div>
                            <div style="width:95%;
                                    height:100px;  
                                    background-color:#FCFCFC;
                                    border-radius:15px;border:2px gray solid;margin: auto;margin-bottom: 20px; padding: 10px;height: auto;">

                                <div style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px; 
                                        font-size:23px; font-weight:bold;">如果買家(或賣家)搞失蹤或放鳥我怎麼辦？</div>
                                <p style="margin-left: 10px; margin-bottom: 10px; 
                                        font-size:18px; font-weight:light;">遇到這種情況麻煩幫我到"提問專區"填寫表單，詳細敘述發生經過，後續我們將會審核並給予不良的
                                    買家或賣家貼上警告標籤，警告下一位與此使用者交易的人。

                                </p>
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