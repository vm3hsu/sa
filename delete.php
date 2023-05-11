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
$sql = "delete from shoppingcart where SNumber ='$SNumber'";
mysqli_query($link,$sql);
if ($dbaction=="buy"){
    $sql = "insert into record (RNumber, BNumber, date, buyer, seller) values ( NULL, '$BNumber', '$date', '$buyer', '$seller')";
    if(mysqli_query($link,$sql)){
        header("location:message.php?message=購買成功");
    }
    else{
        header("location:message.php?message=購買失敗");
    }
}
  
?>
</body>
</html>