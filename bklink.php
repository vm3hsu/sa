<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輔仁2手書平台</title>
    
</head>
<body>
<?php
session_start();
 $BNumber = $_POST['BNumber'];
 $BName = $_POST['BName'];
 $seller = $_POST['seller'];
 $buyer = $_SESSION['account'];
    $dbaction = $_POST['dbaction'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $BCondition = $_POST['BCondition'];
    $link = mysqli_connect('localhost','root','12345678','sa');
    
if($dbaction=="insert"){
    $sql = "insert into shoppingcart (SNumber, BNumber, buyer) values ('$SNumber', '$BNumber', '$buyer')";
    if($_SESSION['acount']==$buyer){
        ?>
              <script>
              alert("無法加入自己賣的書");
                location.href="shop.php";
                </script><?php
    }
    elseif(mysqli_query($link,$sql)){
        header("location:message.php?message=已加入購物車");
    }    
    else{
        header("location:message.php?message=加入失敗");
    }
                    
   
    
}
elseif($dbaction=="update"){
    $sql = "update sign set SName='$SName', email='$email', camp='$camp', uniform='$uniform', dance='$dance' where SID='$SID'";
    if(mysqli_query($link,$sql)){
        //echo "修改成功";
        header("location:message3.php?message=修改成功");
    }    
    else{
        //echo "修改失敗";
        header("location:message3.php?message=修改失敗");
    }
}    
    
?>
</body>
</html>