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
    $ID = $_POST['ID'];
    $pword = $_POST['pword'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'fjuim');
    $sql = "select * from member1 where ID = '$ID' and pword = '$pword'";
    $result = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($result)){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Identity'] = $row['Identity'];
        $_SESSION['depart'] = $row['depart'];
        $_SESSION['Grade'] = $row['Grade'];
        $_SESSION['Limits'] = $row['Limits'];
        if($row['Identity']=="管理員"){
            //echo $_SESSION['Name'], $_SESSION['Identity'];
            
            header("Location:index.php?message=登入成功");
        }
        else{
            //echo $_SESSION['Name'], $_SESSION['Identity'];
            header("Location:index_user.php?message=登入成功");
        }
    }
    else{
        header("Location:message_login.php?message=登入失敗");
    }
?>

</body>
</html>