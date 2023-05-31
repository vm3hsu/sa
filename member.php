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
                        echo"<li class='active'><a href='member2.php'>會員專區</a></li>";
                    }
                    else
                    {
                        echo"<li class='active'><a href='member.php'>會員專區</a></li>";
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
                            <li><a href="common.php">常見問題</a></li>
                            <li><a href="QA.php">提問專區</a></li>
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


    <section class="hero">
        <div class="container">
            <div class="row">
                <?php include "sidebar.php";?>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <span style="font-family:DFKai-sb;width:77%">
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
                                

                                
                                <form action='compare.php' method='post'>
                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">

                                        <tr>
                                            <th colspan=4><font color="#ffffff">你的購物車</th>
                                            <th><input type='submit' value='按此比較'></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><b>書籍名稱</b></td>
                                            <td><b>價格</b></td>
                                            <td><b>賣家</b></td>
                                            <td><b>功能</b></td>
                                        </tr>
                        <?php
                        $link = mysqli_connect('localhost','root','12345678','sa');
                        $sql = "SELECT SNumber, BName, price, name, seller , b.BNumber from book b, shoppingcart c, user u where b.BNumber = c.BNumber AND u.account = b.seller";
                    
                        $result = mysqli_query($link,$sql);
                        while ($row=mysqli_fetch_assoc($result)){
                            echo "                          
                            <tr><td><input type='checkbox' name='compare[]' value=".$row['BNumber']."></td><td>", $row['BName'], "</td><td>", $row['price'], "</td><td>", $row['name'],
                            "</td><td><a href=transaction.php?SNumber=", $row['SNumber'], "&seller=", $row['seller'], "&BNumber=", $row['BNumber'], "&dbaction=buy>[購買]</a><a href=delete.php?SNumber=", $row['SNumber'], "BNumber=", $BNumber, ">[刪除]</a></td></tr>";
                        }
                    ?>
                                    </tbody>
                                </table>
                    </form>
                                <hr size="2px" align="top" width="100%">
                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">
                                        <tr>
                                            <th colspan=4><font color="#ffffff">你的訂單</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><b>書籍名稱</b></td>
                                            <td><b>價格</b></td>
                                            <td><b>賣家</b></td>
                                            
                                        </tr>
                                        

                                        <?php
                                        
                        
                        $link = mysqli_connect('localhost','root','12345678','sa');
   
                        $sql = "SELECT BName, price , name, b.BNumber FROM record r, book b, user u WHERE r.BNumber = b.BNumber AND b.seller = u.account";
                    
                        $result = mysqli_query($link,$sql);
                        while ($row=mysqli_fetch_assoc($result)){
                            echo "<tr><td>", $row['BName'], "</td><td>", $row['price'], "</td><td>", $row['name'],
                            "</td><td><a href=reason.php?BNumber=", $row['BNumber'], ">[取消]</a></td></tr>";
                        }
                    ?>
                                    </tbody>
                                </table>

                            </div>
                            <div id="mid">
                            <hr size="2px" align="top" width="100%">
                                <h3>我是賣家<br>
                                    <hr size="2px" align="top" width="100%">
                                </h3>
                                

                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">

                                        <tr>
                                            <th colspan=2><font color="#ffffff">已上架書籍</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>書籍名稱</b></td>
                                            <td></td>
                                        </tr>

                                        <?php
                        $link = mysqli_connect('localhost','root','12345678','sa');
                        $sql = "SELECT * from book where seller = ".$_SESSION['account'];
                    
                        $result = mysqli_query($link,$sql);
                        while ($row=mysqli_fetch_assoc($result)){
                            echo "                          
                            <tr><td>", $row['BName'], "</td>
                            <td><a href=delete.php?BNumber=", $row['BNumber'], "&dbaction=remove>[下架此書]</a></td></tr>";
                        }
                    ?>
                                    
                                    </tbody>
                                </table>

                                <table class="table table-bordered border-warning table-hover">
                                    <thead style="background-color:#7fad39">

                                        <tr>
                                            <th colspan=3><font color="#ffffff">是否同意取消訂單</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>書籍名稱</b></td>
                                            <td><b>取消原因</b></td>
                                            <td><b>是否同意</b></td>
                                        </tr>

                                        <?php
                                        
                        
                        $link = mysqli_connect('localhost','root','12345678','sa');
   
                        $sql = "SELECT BName, reason , name, b.BNumber FROM record r, book b, user u WHERE r.BNumber = b.BNumber AND b.seller = u.account";
                    
                        $result = mysqli_query($link,$sql);
                        while ($row=mysqli_fetch_assoc($result)){
                            echo "<tr><td>", $row['BName'], "</td><td>", $row['reason'], "</td><td><a href=delete.php?SNumber=", $row['SNumber'], "&seller=", $row['seller'], "&BNumber=", $row['BNumber'], "&dbaction=agree>[同意]</a><a href=delete.php?SNumber=", $row['SNumber'], "BNumber=", $BNumber, ">[不同意]</a></td></tr>";
                        }
                    ?>

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