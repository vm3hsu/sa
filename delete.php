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
    session_start();
$SNumber=$_GET['SNumber'];
$date = "2023-05-11";
$BNumber = $_GET['BNumber'];
$seller = $_GET['seller'];
$buyer = $_SESSION['account'];
$link = mysqli_connect('localhost','root','12345678','sa');
$dbaction = $_GET['dbaction'];

if ($dbaction=="buy"){
    $seller = $_GET['seller'];
    $SNumber = $_GET['SNumber'];
    $BNumber = $_GET['BNumber'];
    $date1 = $_GET['selectedDates1'];
    $time1 = $_GET['time1'];
    $location1 = implode(",",$_GET['location1']);
    $date2 = $_GET['selectedDates2'];
    $time2 = $_GET['time2'];
    $location2 = implode(",",$_GET['location2']);
    $date3 = $_GET['selectedDates3'];
    $time3 = $_GET['time3'];
    $location3 = implode(",",$_GET['location3']);
    $date4 = $_GET['selectedDates4'];
    $time4 = $_GET['time4'];
    $location4 = implode(",",$_GET['location4']);
    $today = date('Y/m/d');
    $sql = "delete from shoppingcart where SNumber ='$SNumber'";
    mysqli_query($link,$sql);
    $sql = "insert into record (SNumber, BNumber, date, buyer, seller, reason, date1, time1, location1, date2, time2, location2, date3, time3, location3, date4, time4, location4) values (NULL, '$BNumber', '$today', '$buyer', '$seller', '$reason', '$date1', '$time1', '$location1', '$date2', '$time2', '$location2', '$date3', '$time3', '$location3', '$date4', '$time4', '$location4')";
    echo $sql;
    if(mysqli_query($link,$sql)){
        $sql = "UPDATE book SET selled = 1 WHERE BNumber = '$BNumber'";
        mysqli_query($link,$sql);
        include "mail.php";
        try{
            
            $buyerAcc = $_SESSION['account'];
            $buyerName = $_SESSION['name']; 
            $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
            $sql = "select * from user where account = '$buyerAcc'";

            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result); 
            $buyermail = $row['email'];

            $mail->addAddress($buyermail,$buyerName);

            //Set the subject line
            $mail->Subject = '恭喜您已完成訂單!!!!';

            $sql = "select * from book where BNumber = '$BNumber'";

            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result); 
            $mail->Body = '您的訂單編號：'.$SNumber." 書籍名稱：".$row['BName']." 價格：".$row['price']."，正在等待賣家確認訂單";
            $mail->send();
        
            $mail1->CharSet = "utf-8";
            $mail1->isSMTP();
            $mail1->isHTML(true);
            $mail1->SMTPDebug = 0;
            $mail1->Host = 'smtp.gmail.com';
            $mail1->Port = 465;
            $mail1->SMTPSecure = 'ssl';
            $mail1->SMTPAuth = true;
            $mail1->Username = "sa7thtest@gmail.com";
            $mail1->Password = "lkwvzaozsgikptnq";
            $mail1->setFrom('sa7thtest@gmail.com', '輔大2手書交易平台');
            $mail1->addReplyTo('sa7thtest@gmail.com', '輔大2手書交易平台');
            $mail1->Subject = '您在輔大2手書交易平台收到一筆訂單!!!!';
            $mail1->Body = '訂單編號：'.$SNumber." 書籍名稱：".$row['BName']." 價格：".$row['price']."，買家正在等待您確認訂單";

            $sql = "select * from user where account = '$seller'";

            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result); 
            $sellermail = $row['email'];
            $sellerName = $row['name'];

            $mail1->addAddress($sellermail,$sellerName);
            $mail1->send();
            
            header("location:message.php?message=購買成功");
        }
        catch(Exception $e){
            echo "Mailer Error: " . $mail1->ErrorInfo;
        }
        
    }
    else{
        header("location:message.php?message=購買失敗");
    }
}
elseif ($dbaction=="agree"){
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
elseif ($dbaction=="cancel"){
    $reason = $_GET['comments'];
    $sql = "UPDATE record SET reason = '$reason' WHERE BNumber = '$BNumber'";
    if(mysqli_query($link,$sql)){

        header("location:message.php?message=申請成功");
    }
    else{
        header("location:message.php?message=申請失敗");
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