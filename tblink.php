<?php
$dbaction = $_POST['dbaction'];
$rateNumber = $_POST['rateNumber'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

$link = mysqli_connect('localhost', 'root', '12345678', 'SA');




    $sql = "insert into rate (rateNumber, writer, target, content) values (Null, '$writer', '$target', '$content')";
    $result = mysqli_query($link, $sql);
    if ($result) {
      header("location:message.php?message=投訴成功");
    } else {
      header("location:message.php?message=投訴失敗");
    }





?>