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
    #DIV_A {
        box-shadow: 3px 3px 9px yellow;
    }

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
    table{
  width: 100%;
  border-collapse: collapse;
}

table tr{
  border-bottom: solid 2px white;
}

table tr:last-child{
  border-bottom: none;
}

table th{
  position: relative;
  width: 25%;
  background-color: #7d7d7d;
  color: white;
  text-align: center;
  padding: 10px 0;
}

table th:after{
  display: block;
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  top:calc(50% - 10px);
  right:-10px;
  border-left: 10px solid #7d7d7d;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}

table td{
  text-align: left;
  width: 25%;
  text-align: center;
  background-color: #eee;
  padding: 10px 0;
}

.main {
  margin: 20px auto;
  item-align: center;
  width: 80%;
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
                <li class="active"><a href="shop.php">瀏覽二手書</a></li>
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
                            <li ><a href="shop.php">瀏覽二手書</a></li>
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
                                    echo"<li><a href='member2.php'>會員專區</a></li>";
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


    <!-- Blog Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
            <?php include "sidebar.php";?>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 site_map" style="margin-bottom: 15px;">
                        <table>
                            <h1><font size="6">&emsp;書籍比較</font></h1><br>
                            <tr>
                                <th>書名</th>                     
                            <?php
                            $compare = $_POST['compare'];
                            for ($i=0;$i<sizeof($compare); $i++){
                            
                                $link = mysqli_connect('localhost','root','12345678','sa');
                                $sql = "SELECT BName from book where BNumber = $compare[$i]";
                                $result = mysqli_query($link,$sql);
                                while ($row=mysqli_fetch_assoc($result)){
                                    echo"<td>".$row['BName']."</td>";
                                
                                }
                            }
                            
                            ?>
                            </tr>
                            <tr>
                                <th>賣家</th>                     
                            <?php
                            $compare = $_POST['compare'];
                            for ($i=0;$i<sizeof($compare); $i++){
                            
                                $link = mysqli_connect('localhost','root','12345678','sa');
                                $sql = "SELECT name from book b, user u where b.seller=u.account and BNumber = $compare[$i]";
                                $result = mysqli_query($link,$sql);
                                while ($row=mysqli_fetch_assoc($result)){
                                    echo"<td><a href=review.php?name=".$row['name']." style='color:orange;'>".$row['name']."</a></td>";
                                
                                }
                            }
                            
                            ?>
                            </tr>
                            <tr>
                                <th>價錢</th>                     
                            <?php
                            $compare = $_POST['compare'];
                            for ($i=0;$i<sizeof($compare); $i++){
                            
                                $link = mysqli_connect('localhost','root','12345678','sa');
                                $sql = "SELECT price from book where BNumber = $compare[$i]";
                                $result = mysqli_query($link,$sql);
                                while ($row=mysqli_fetch_assoc($result)){
                                    echo"<td>".$row['price']."</td>";
                                
                                }
                            }
                            
                            ?>
                            </tr>
                            <tr>
                                <th>書況</th>                     
                            <?php
                            $compare = $_POST['compare'];
                            for ($i=0;$i<sizeof($compare); $i++){
                            
                                $link = mysqli_connect('localhost','root','12345678','sa');
                                $sql = "SELECT BCondition from book where BNumber = $compare[$i]";
                                $result = mysqli_query($link,$sql);
                                while ($row=mysqli_fetch_assoc($result)){
                                    echo"<td>".$row['BCondition']."</td>";
                                
                                }
                            }
                            
                            ?>
                            </tr>
                    </table>
                    <form action='member.php' method='post' role='form' >
                    <div align='right'>    
                    <input type='submit' value='回會員專區'>
                    </div>
                    </form>
                </div>

                    

    </section>
    <!-- Blog Section End -->
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