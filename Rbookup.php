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
    <?php
        $RNumber=$_GET['RNumber'];

        $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
        $sql = "select * from request where RNumber =". $RNumber. "";
        $result = mysqli_query($link,$sql);
   
        if($row=mysqli_fetch_assoc($result))
        {
            $RName=$row['RName'];
            $category=$row['category'];
        }
    ?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php include "sidebar.php"; ?>
                <div class="col-lg-9">
                <div style="background-color:#FAFAFA">
                    <form action="Bdblink.php" method="post" enctype="multipart/form-data">
                        <input type=hidden name="dbaction" value="insert">
                        <h1><font size="6">&emsp;賣家上架書籍表單</font></h1><br>
                        <table width=100%>
                            <tbody width=100%>
                                <tr>
                                    <td width=50% rowspan="5"><input type="file" name="file" accept=".jpg,.jpeg,.png"></td>
                                    <td width=5%>
                                        <span>書名：</span>
                                    </td>
                                    <td width=45%>
                                        <font><?php echo $RName; ?></font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>定價：</span>
                                    </td>
                                    <td>
                                        <input type="text" name="price" placeholder="請輸入價格" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>類別：</span>
                                    </td>
                                    <td>
                                        <font><?php echo $category; ?></font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>學院：</span>
                                    </td>
                                    <td>
                                        <select name="college">
                                            <option value="文學院">文學院</option>
                                            <option value="藝術學院">藝術學院</option>
                                            <option value="傳播學院">傳播學院</option>
                                            <option value="教育學院">教育學院</option>
                                            <option value="醫學院">醫學院</option>
                                            <option value="理工學院">理工學院</option>
                                            <option value="外國語文學院">外國語文學院</option>
                                            <option value="民生學院">民生學院</option>
                                            <option value="法律學院">法律學院</option>
                                            <option value="社會科學院">社會科學院</option>
                                            <option value="管理學院">管理學院</option>
                                            <option value="織品服裝學院">織品服裝學院</option>
                                            <option value="全人通識課程">全人通識課程</option>
                                            <option value="其他">其他</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>書況：</span>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="new" value="全新">全新
                                                </td>
                                                <td>
                                                    <input type="radio" name="new" value="非全新">非全新
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="yellowing" value="無自然泛黃">無自然泛黃
                                                </td>
                                                <td>
                                                    <input type="radio" name="yellowing" value="有自然泛黃">有自然泛黃
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="dirty" value="無髒污">無髒污
                                                </td>
                                                <td>
                                                    <input type="radio" name="dirty" value="有髒污">有髒污
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><input type="radio" name="wrinkle" value="無皺褶">無皺褶</label>
                                                </td>
                                                <td>
                                                    <label><input type="radio" name="wrinkle" value="有皺褶">有皺褶</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><input type="radio" name="lack" value="無缺頁">無缺頁</label>
                                                </td>
                                                <td>
                                                    <label><input type="radio" name="lack" value="有缺頁">有缺頁</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><input type="radio" name="note" value="無筆記">無筆記</label>
                                                </td>
                                                <td>
                                                    <label><input type="radio" name="note" value="有筆記">有筆記</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label><font color ="#689F38">&emsp;※請上傳實體書的真實照片，請勿上傳網路上的照片</font></label>
                                    </td>
                                    

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label><font color ="#689F38">&emsp;※請上傳清晰的照片，建議三張以上，含封面、背面、內頁</font></label>
                                    </td>
                                    

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
                            </tbody>
                    
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