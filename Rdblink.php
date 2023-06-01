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
    $RName = $_POST['RName'];
    $category = $_POST['category'];
    $requester = $_SESSION['account'];
    $image_new_name = "1";
    $image_upload_path = "requestbookpicture/";

        echo"檔案名稱".$_FILES["file"]['name']."<br/>";
        echo"檔案類型".$_FILES["file"]['type']."<br/>";
        echo"檔案大小".($_FILES["file"]['size']/1024)."KB<br/>";
        echo"暫存名稱".$_FILES["file"]['tmp_name']."<br/>";
        echo $_FILES['file']['error'];
        echo basename($_FILES["file"]['name'],'jpg');
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    if ($dbaction == "insert") {
        $sql = "insert into request (RNumber, requester, RName, category) values (NULL, '$requester', '$RName', '$category')";
        if (mysqli_query($link, $sql)) {
            //echo "新增成功";
            $sql = "SELECT * FROM request ORDER BY RNumber DESC LIMIT 1";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $RNumber = $row['RNumber'];
            }
            echo $RNumber;
            $path = "requestbookpicture/".$RNumber;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $is_upload = move_uploaded_file($_FILES["file"]["tmp_name"],"requestbookpicture/".$RNumber."/".$_FILES["file"]['name']);
            rename("requestbookpicture/".$RNumber."/".$_FILES["file"]['name'],"requestbookpicture/".$RNumber.'/1.png');
            try{
                include "mail.php";
                $buyerAcc = $_SESSION['account'];
                $buyerName = $_SESSION['name']; 
                $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
                $sql = "select * from record r ,user u,book b where b.BName = '".$RName."' and r.buyer = u.account";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){

                    $sellermail = $row['email'];
                    $sellerName = $row['name'];
                    $mail->addAddress($sellermail,$sellerName);
            
                    //Set the subject line
                    $mail->Subject = '輔大2手書交易平台有一筆新的索書需求!!!!';
            
                    $sql = "select * from book where BNumber = '$BNumber'";
            
                    $mail->Body = '您曾經在輔大2手書交易平台買過'.$RName.'，您現在還有需要這本書嗎，不妨交給下一個有緣人';
                    $mail->send();
        
                } 
                
                }
                catch(Exception $e){
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
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