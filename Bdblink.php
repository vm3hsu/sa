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
    $BName = $_POST['BName'];
    $BCondition = $_POST['new']."、".$_POST['yellowing']."、".$_POST['dirty']."、".$_POST['wrinkle']."、".$_POST['lack']."、".$_POST['note'];
    $category = $_POST['category'];
    $college = $_POST['college'];
    $price = $_POST['price'];
    $selled = 0;
    $seller = $_SESSION['account'];

    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    if ($dbaction == "insert") {
        $sql = "insert into book (BNumber, BName, BCondition, category, college, price, selled, seller) values (NULL, '$BName', '$BCondition', '$category', '$college', '$price', '$selled', '$seller')";
        if (mysqli_query($link, $sql)) {
            //echo "新增成功";
            header("location:message.php?message=新增成功");
        } else {
            //echo "新增失敗";
            header("location:message.php?message=新增失敗");
        }
    } elseif ($dbaction == "update") {
        $sql = "update student set SName='$SName', phone='$phone', address='$address' where SID='$SID'";
        if (mysqli_query($link, $sql)) {
            //echo "新增成功";
            header("location:index.php?method=message&message=修改成功");
        } else {
            //echo "新增失敗";
            header("location:index.php?method=message&message=修改失敗");
        }
    }

    ?>
</body>

</html>