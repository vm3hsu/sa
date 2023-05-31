<?php
$dbaction = $_POST['dbaction'];
$rateNumber = $_POST['rateNumber'];
$target = $_POST['target'];
$content = $_POST['content'];
session_start();

$link = mysqli_connect('localhost', 'root', '12345678', 'SA');
$sql = "select * from user where name ='".$target."'";
$result = mysqli_query($link, $sql);
if($_SESSION['name']==$target){
  header("location:message.php?message=不要投訴自己啦");
}
elseif ($row = mysqli_fetch_assoc($result) ){
  $sql = "insert into rate (rateNumber, writer, target, content) values (Null, ".$_SESSION['name'].", '$target', '$content')";
  $result = mysqli_query($link, $sql);
  if ($result) {
    header("location:message.php?message=投訴成功");
  } else {
    header("location:message.php?message=投訴失敗");
  }

} else {
  echo $target;
  echo 
  header("location:message.php?message=投訴失敗，查無此人");
}






?>