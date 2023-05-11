  <?php
  $dbaction = $_POST['dbaction'];
  $account = $_POST['account'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $link = mysqli_connect('localhost', 'root', '12345678', 'SA');
  if ($dbaction == "insert") {
    $sql = "insert into user (account, password, name, email) values ('$account', '$password', '$name', '$email')";
    $result = mysqli_query($link, $sql);
    if ($result) {
      header("location:message.php?message=新增成功");
    } else {
      header("location:message.php?message=新增失敗");
    }
  } else {
    $sql = "update student set Name='$Name', phone='$phone', address='$address' where UID='$UID'";
    $result = mysqli_query($link, $sql);
    if ($result) {
      header("location:index1.php?method=message&message=修改成功");
    } else {
      header("location:index1.php?method=message&message=修改失敗");
    }
  }

  ?>
