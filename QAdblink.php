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
    $new = $_POST['new'];
    $target = $_POST['target'];
    $content = $_POST['content'];
    $tbook = $_POST['tbook'];

    
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    


    $sql = "INSERT INTO `rate` (`rateNumber`, `writer`, `target`, `content`) VALUES (NULL, '".$_SESSION['name']."', '$target', '$content')";
    if(mysqli_query($link, $sql)){

        header("location:message.php?message=新增成功");
    
    } else {
        //echo "新增失敗";
        header("location:message.php?message=新增失敗");
    }



    if ($new == "是"){
    $sql = "select b.BNumber,b.BName from record r, book b where r.seller = ".$_SESSION['account']." AND r.BNumber = b.BNumber AND r.seller = b.seller And b.BName = '$tbook'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $BNumber = $row['BNumber'];
    $sql ="UPDATE `book` SET `selled` = '0' WHERE `BNumber` = $BNumber";

    mysqli_query($link, $sql);
    }
            


    ?>
</body>

</html>