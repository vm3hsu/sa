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
$link = mysqli_connect('localhost','root','12345678','sa');
$sql = "delete from shoppingcart where SNumber ='$SNumber'";
if(mysqli_query($link,$sql)){
    header("location:message.php?message=刪除成功");
}
else{
    header("location:message.php?message=刪除失敗");
}
?>
</body>
</html>