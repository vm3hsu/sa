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
    if($_GET['agree'] == "no"){
        try{
            include "mail.php";
        $SNumber = $_GET['SNumber'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
        $sql = "select * from record r, user u where u.account = r.buyer";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $buyermail = $row['email'];
        $buyerName = $row['name'];
        $sql = "select * from record r ,book b where SNumber = ".$SNumber." and b.BNumber = r.BNumber";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $buyer = $row['buyer'];
        $seller = $row['seller'];
        $BName = $row['BName'];
        $mail->addAddress($buyermail,$buyerName);

        //Set the subject line
        $mail->Subject = '輔大2手書交易平台有一筆新的回應!!!!';
        $mail->Body = '您的訂單編號：'.$SNumber.' 書籍名稱：'.$row['BName'].' 賣家不願將此書賣給您，實在非常抱歉';
        $mail->send();


        $sql = "DELETE FROM `record` WHERE `record`.`SNumber` = ".$SNumber."";
        $result = mysqli_query($link, $sql);
        }
        catch(Exception $e){
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        header("location:message.php?message=成功不同意");
    }
    else{
        session_start();
    $SNumber = $_POST['SNumber'];
    $date = $_POST['date'];
    if($_POST['location1'] <> ""){
        $location1 = $_POST['location1'];
    }
    elseif($_POST['location2'] <> ""){
        $location1 = $_POST['location2'];
    }
    elseif($_POST['location3'] <> ""){
        $location1 = $_POST['location3'];
    }
    elseif($_POST['location4'] <> ""){
        $location1 = $_POST['location4'];
    }
    
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    $sql = "select * from record r ,book b where SNumber = ".$SNumber." and b.BNumber = r.BNumber";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $buyer = $row['buyer'];
    $seller = $row['seller'];
    $BName = $row['BName'];
    $BNumber = $row['BNumber'];
    if($date == 1){
        $date = $row['date1'];
        $time = $row['time1'];
    }
    elseif($date == 2){
        $date = $row['date2'];
        $time = $row['time2'];
    }
    elseif($date == 3){
        $date = $row['date3'];
        $time = $row['time3'];
    }
    elseif($date == 4){
        $date = $row['date4'];
        $time = $row['time4'];
    }
    $sql = "UPDATE `record` SET `date1` = '".$date."', `time1` = '".$time."', `location1` = '".$location1."', date2 = NULL, time2 = NULL, location2 = NULL, date3 = NULL,  time3 = NULL, location3 = NULL,  date4 = NULL,  time4 = NULL,  location4 = NULL WHERE `record`.`SNumber` = ".$SNumber."";
    mysqli_query($link, $sql);
            
            try{
                include "mail.php";
                $buyerAcc = $_SESSION['account'];
                $buyerName = $_SESSION['name']; 
                $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
                $sql = "select * from user where account =".$buyer."";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);

                    $buyermail = $row['email'];
                    $buyerName = $row['name'];
                    $mail->addAddress($buyermail,$buyerName);
            
                    //Set the subject line
                    $mail->Subject = '輔大2手書交易平台有一筆新的交易紀錄!!!!';
                    $mail->Body = '您的訂單編號：'.$SNumber.' 書籍名稱：'.$row['BName'].' 賣家已經確認時間地點，日期：'.$date.' 時間：'.$time.' 地點：'.$location1.'';
                    $mail->send();
        
                } 
                catch(Exception $e){
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                $sql = "delete from book where BNumber = '$BNumber'";
                mysqli_query($link, $sql);
                header("location:message.php?message=交易成功");
        
    }
    

    ?>
</body>

</html>