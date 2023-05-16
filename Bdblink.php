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
    $image_new_name = "1";
    $image_upload_path = "bookpicture/";

        echo"檔案名稱".$_FILES["file"]['name']."<br/>";
        echo"檔案類型".$_FILES["file"]['type']."<br/>";
        echo"檔案大小".($_FILES["file"]['size']/1024)."KB<br/>";
        echo"暫存名稱".$_FILES["file"]['tmp_name']."<br/>";
        echo $_FILES['file']['error'];
        echo basename($_FILES["file"]['name'],'jpg');
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    if ($dbaction == "insert") {
        $sql = "insert into book (BNumber, BName, BCondition, category, college, price, selled, seller) values (NULL, '$BName', '$BCondition', '$category', '$college', '$price', '$selled', '$seller')";
        if (mysqli_query($link, $sql)) {
            //echo "新增成功";
            $sql = "SELECT * FROM book ORDER BY BNumber DESC LIMIT 1";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $BNumber = $row['BNumber'];
            }
            echo $BNumber;
            $path = "bookpicture/".$BNumber;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $is_upload = move_uploaded_file($_FILES["file"]["tmp_name"],"bookpicture/".$BNumber."/".$_FILES["file"]['name']);
            rename("bookpicture/".$BNumber."/".$_FILES["file"]['name'],"bookpicture/".$BNumber.'/1.png');
            echo rename("bookpicture/".$BNumber."/".$_FILES["file"]['name'],"bookpicture/".$BNumber.'/1.png');
            $sql = "UPDATE request SET requested = 1 WHERE RName = '$BName' and category = '$category'";
            mysqli_query($link, $sql);
            header("location:message.php?message=新增成功");
        } else {
            //echo "新增失敗";
            header("location:message.php?message=新增失敗");
        }
    } elseif ($dbaction == "update") {
        //$sql = "update student set SName='$SName', phone='$phone', address='$address' where SID='$SID'";
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