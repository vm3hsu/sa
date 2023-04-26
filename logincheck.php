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
    $account = $_POST['account'];
    $password = $_POST['password'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    $sql = "select * from user where account = '$account' and password = '$password'";

    $result = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['account'] = $row['account'];
        $_SESSION['name'] = $row['name'];
        header("location:message.php?message=登入成功");
    } else {
        header("location:message.php?message=登入失敗，重新登入");
    }
    ?>
    </table>
    </div>
</body>

</html>