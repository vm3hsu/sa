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
                <?php include "sidebar.php";?>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/book.jpg">
                        <div class="hero__text">
                            <span>Welcome to second hand bookstore for FJU</span>
                            <h2>輔仁2手書平台</h2>
                            <p>這個平台歡迎每個人上架、購買二手書，<br />我們將會給您最簡單以及簡潔的頁面，<br>但卻擁有最好的二手書交易經驗。</p>
                            <a href="shop.php" class="primary-btn">
                                <font size="4">我要買書</font>
                            </a>
                            <a href="bookup.php" class="primary-btn">
                                <font size="4">我要賣書</font>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/book1.jpg">
                            <h5><a href="#">Microeconomics</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/book2.jpg">
                            <h5><a href="#">Economics</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/book3.jpg">
                            <h5><a href="#">Economics</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/book4.jpg">
                            <h5><a href="#">Statistics</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/book5.jpg">
                            <h5><a href="#">Statistics</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>2手書總覽</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">全部</li>
                            <li data-filter=".oranges">哲學宗教</li>
                            <li data-filter=".fresh-meat">應用科學</li>
                            <li data-filter=".oranges">社會科學</li>
                            <li data-filter=".fresh-meat">語言文學</li>
                            <li data-filter=".oranges">藝術人文</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Financial Accounting</a></h6>
                            <h5>$300</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Financial Accounting</a></h6>
                            <h5>$350</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Accounting</a></h6>
                            <h5>$320</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book9.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Intermediate Accounting</a></h6>
                            <h5>$250</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book10.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">電子商務</a></h6>
                            <h5>$280</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book11.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">C++編程(第二版)</a></h6>
                            <h5>$400</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book12.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">C Program</a></h6>
                            <h5>$360</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/book13.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">C++ Programming</a></h6>
                            <h5>$350</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->



    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>最新上架</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book13.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C++ Programming</h6>
                                        <span>$350</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book14.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$300</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$350</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Intermediate Accounting</h6>
                                        <span>$250</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book12.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C Program</h6>
                                        <span>$360</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Statistics</h6>
                                        <span>$320</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>月暢銷書</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book13.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C++ Programming</h6>
                                        <span>$300</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book14.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$250</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$360</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Intermediate Accounting</h6>
                                        <span>$330</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book12.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C Program</h6>
                                        <span>$310</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Statistics</h6>
                                        <span>$280</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>年暢銷書</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book13.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C++ Programming</h6>
                                        <span>$300</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book14.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$360</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Calculus</h6>
                                        <span>$300</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Intermediate Accounting</h6>
                                        <span>$250</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book12.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>C Program</h6>
                                        <span>$360</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/book4.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Statistics</h6>
                                        <span>$310</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

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