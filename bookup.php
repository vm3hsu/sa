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


    .basic-grey {
        margin-left: auto;
        margin-right: auto;
        max-width: 700px;
        background: #F7F7F7;
        padding: 25px 15px 25px 10px;
        font: 12px Georgia, "Times New Roman", Times, serif;
        color: #888;
        text-shadow: 1px 1px 1px #FFF;
        border: 1px solid #E4E4E4;
    }

    .basic-grey h1 {
        font-size: 25px;
        padding: 0px 0px 10px 40px;
        display: block;
        border-bottom: 1px solid #E4E4E4;
        margin: -10px -15px 30px -10px;
        ;
        color: #888;
    }

    .basic-grey h1>span {
        display: block;
        font-size: 11px;
    }

    .basic-grey label {
        display: block;
        margin: 0px;
    }

    .basic-grey label>span {
        float: left;
        width: 30%;
        text-align: right;
        padding-right: 10px;
        margin-top: 10px;
        color: #888;
    }

    .basic-grey input[type="text"],
    .basic-grey input[type="email"],
    .basic-grey textarea,
    .basic-grey select {
        border: 1px solid #DADADA;
        color: #888;
        height: 30px;
        margin-bottom: 16px;
        margin-right: 6px;
        margin-top: 2px;
        outline: 0 none;
        padding: 3px 3px 3px 5px;
        width: 250px;
        font-size: 12px;
        line-height: 15px;
        box-shadow: inset 0px 1px 4px #ECECEC;
        -moz-box-shadow: inset 0px 1px 4px #ECECEC;
        -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
    }

    .basic-grey textarea {
        padding: 5px 3px 3px 5px;
    }

    .basic-grey select {
        background: #FFF url('down-arrow.png') no-repeat right;
        background: #FFF url('down-arrow.png') no-repeat right;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        width: 70%;
        height: 35px;
        line-height: 25px;
    }

    .basic-grey textarea {
        height: 100px;
    }

    .basic-grey .button {
        background: #E27575;
        border: none;
        padding: 10px 25px 10px 25px;
        color: #FFF;
        box-shadow: 1px 1px 5px #B6B6B6;
        border-radius: 3px;
        text-shadow: 1px 1px 1px #9E3F3F;
        cursor: pointer;
    }

    .basic-grey .button:hover {
        background: #CF7A7A
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
                <li class="active"><a href="index.php">首頁</a></li>
                <li><a href="shop.php">瀏覽二手書</a></li>
                <li><a href="request.php">索書專區</a></li>
                <li><a href="common.php">常見問題</a></li>
                <li><a href="QA.php">提問專區</a></li>
                <li><a href="member.php">會員專區</a></li>
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
                        <a href="index.php"><img src="img/logo1.png"></a>
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
                    <form action="#" style="border: 2px solid #4569ff;border-radius: 10px;overflow: hidden; position: relative; width: auto; height: auto; top: 30%; right: auto; bottom: auto; left: auto;">
                        <input type="text" placeholder="搜尋書名" style="width: 80%">
                        <button type="submit" style="border: none;background-color: #ffffff;color: #fff;width: 15%"><img src="img/search.png" style="width:85%;height:85%"></button>
                    </form>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu" id="menu">
                        <ul>
                            <li class="active"><a href="index.php">首頁</a></li>
                            <li><a href="shop.php">瀏覽二手書</a></li>
                            <li><a href="request.php">索書專區</a></li>
                            <li><a href="common.php">常見問題</a></li>
                            <li><a href="QA.php">提問專區</a></li>
                            <li><a href="member.php">會員專區</a></li>
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
                <?php include "sidebar.php"; ?>
                <div class="col-lg-9">
                    <form action="" method="post" class="basic-grey" enctype="https://github.com/vm3hsu/sa/tree/master/books">
                        <h1>賣家上架書籍表單</h1>
                        <table>
                            <tr>
                                <td rowspan="3"><input type=file name="uploadfile" accept=".jpg,.jpeg,.png"></td>
                                <td>
                                    <span>書名：</span>
                                    <input type="text" name="BName" placeholder="請輸入完整的書名" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>定價：</span>
                                    <input type="text" name="price" placeholder="請輸入價格" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>書況：</span>
                                    <table align="center">
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="new" value="0">全新</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="new" value="1">非全新</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="yellowing" value="0">無自然泛黃</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="yellowing" value="1">有自然泛黃</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="dirty" value="0">無髒污</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="dirty" value="1">有髒污</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="wrinkle" value="0">無皺褶</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="wrinkle" value="1">有皺褶</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="lack" value="0">無缺頁</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="lack" value="1">有缺頁</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label><input type="radio" name="note" value="0">無筆記</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="note" value="1">有筆記</label>
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label>※請上傳實體書的真實照片，請勿上傳網路上的照片</label>
                                </td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>
                                    <label>※請上傳清晰的照片，建議三張以上，含封面、背面、內頁</label>
                                </td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <label>
                                        <span>&nbsp;</span>
                                        <input type="submit" class="button" value="Send" />
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </form>
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
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
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