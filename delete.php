<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刪除購物車</title>
</head>
<body>
    <?php
$SNumber=$_GET['SNumber'];
$date = "2023-05-11";
$BNumber = $_GET['BNumber'];
$seller = $_GET['seller'];
$buyer = $_SESSION['account'];
$link = mysqli_connect('localhost','root','12345678','sa');
$dbaction = $_GET['dbaction'];

if ($dbaction=="buy"){
    $sql = "delete from shoppingcart where SNumber ='$SNumber'";
    mysqli_query($link,$sql);
    $sql = "insert into record (SNumber, BNumber, date, buyer, seller) values (NULL, '$BNumber', '$date', '$buyer', '$seller')";
    if(mysqli_query($link,$sql)){
        $sql = "UPDATE book SET selled = '1' WHERE BNumber = '$BNumber'";
        mysqli_query($link,$sql);
        header("location:message.php?message=購買成功");
    }
    else{
        header("location:message.php?message=購買失敗");
    }
}
elseif ($dbaction=="cancel"){
    $sql = "UPDATE book SET selled = 0 WHERE BNumber = '$BNumber'";
    if(mysqli_query($link,$sql)){
        $sql = "delete from record where BNumber = '$BNumber'";
        mysqli_query($link,$sql);
        header("location:message.php?message=取消成功");
    }
    else{
        header("location:message.php?message=取消失敗");
    }
}
elseif ($dbaction=="remove"){
    $sql = "delete from shoppingcart s, book b where s.BNumber = b.BNumber";
    mysqli_query($link,$sql);
    $sql = "delete from book where BNumber ='$BNumber'";
    mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
        header("location:message.php?message=下架成功");
    }
    else{
        header("location:message.php?message=下架失敗");
    }
}
else{
    $sql = "delete from shoppingcart where SNumber ='$SNumber'";
    mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
        header("location:message.php?message=刪除成功");
    }
    else{
        header("location:message.php?message=刪除失敗");
    } 
} 
?>
</body>
</html>