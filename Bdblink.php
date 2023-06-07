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
    $SNumber = $_POST['SNumber'];
    $RNumber = $_POST['RNumber'];
    
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
            
            $path = "bookpicture/".$BNumber;
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            
            try{
                for($i=0;$i<3;$i++){
                    $is_upload = move_uploaded_file($_FILES["file"]["tmp_name"][$i],"bookpicture/".$BNumber."/".$_FILES["file"]['name'][$i]);
                    rename("bookpicture/".$BNumber."/".$_FILES["file"]['name'][$i],"bookpicture/".$BNumber.'/'.$i.'.png');

                }
                
            }
            catch(Exception $e){}
            
            
            $sql = "UPDATE request SET requested = 1 WHERE RNumber = '$RNumber'";
            mysqli_query($link, $sql);

            if($_POST['sendmail']==1){
                try{
                    include "mail.php";
                    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
                    $sql = "select * from request r ,user u where r.requester = u.account";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
    
                        $requestermail = $row['email'];
                        $requesterName = $row['name'];
                        $mail->addAddress($requestermail,$requesterName);
                
                        //Set the subject line
                        $mail->Subject = '您在輔大2手書交易平台的索書需求得到了回應!!!!';
                
                        $sql = "select * from book where BNumber = '$BNumber'";
                
                        $mail->Body = '您曾經在輔大2手書交易平台提出索要'.$RName.'的需求，現在已經有賣家上架了，快去看看吧';
                        $mail->send();
            
                    
                    }
                    catch(Exception $e){
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    }
            }

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