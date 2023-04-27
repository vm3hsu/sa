<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
    session_start();
    $dbaction = $_POST['dbaction'];
    $BNumber = 0;
    $BName = $_POST['BName'];
    $Bconditon = "";
    
    $category = $_POST['category'];
    $price = $_POST['price'];
    $selled = 0;
    $seller = $_SESSION['name'];

    $link = mysqli_connect('localhost','root','12345678','temp');
if($dbaction=="insert"){
    $sql = "insert into student (SID, SName, phone, address) values ('$SID', '$SName', '$phone', '$address')";
    if(mysqli_query($link,$sql)){
        //echo "新增成功";
        header("location:index.php?method=message&message=新增成功");
    }    
    else{
        //echo "新增失敗";
        header("location:index.php?method=message&message=新增失敗");
    }
}
elseif($dbaction=="update"){
    $sql = "update student set SName='$SName', phone='$phone', address='$address' where SID='$SID'";
    if(mysqli_query($link,$sql)){
        //echo "新增成功";
        header("location:index.php?method=message&message=修改成功");
    }    
    else{
        //echo "新增失敗";
        header("location:index.php?method=message&message=修改失敗");
    }
}    
    
?>
</body>
</html>