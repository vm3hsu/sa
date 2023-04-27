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
    $Bconditon = "";
    $new = $_POST['new'];
    $yellowing = $_POST['yellowing'];
    $dirty = $_POST['dirty'];
    $wrinkle = $_POST['wrinkle'];
    $lack = $_POST['lack'];
    $note = $_POST['note'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $selled = 0;
    $seller = $_SESSION['name'];

    if ($new == 0) {
        $Bconditon = $Bconditon + "全新";
    } else {
        $Bconditon = $Bconditon + "非全新";
    }
    if ($yellowing == 0) {
        $Bconditon = $Bconditon + ", 無自然泛黃";
    } else {
        $Bconditon = $Bconditon + ", 有自然泛黃";
    }
    if ($dirty == 0) {
        $Bconditon = $Bconditon + ", 無髒污";
    } else {
        $Bconditon = $Bconditon + ", 有髒污";
    }
    if ($wrinkle == 0) {
        $Bconditon = $Bconditon + ", 無皺褶";
    } else {
        $Bconditon = $Bconditon + ", 有皺褶";
    } 
    if ($lack == 0) {
        $Bconditon = $Bconditon + ", 無缺頁";
    } else {
        $Bconditon = $Bconditon + ", 有缺頁";
    }
    if ($note == 0) {
        $Bconditon = $Bconditon + ", 無筆記";
    } else {
        $Bconditon = $Bconditon + ", 有筆記";
    }

    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    if ($dbaction == "insert") {
        $sql = "insert into book (BNumber, BName, BCondition, category, price, selled, seller) values (NULL, '$BName', '$BCondition', '$category', '$price', '$selled', '$seller')";
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