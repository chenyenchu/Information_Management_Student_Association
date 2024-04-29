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
    $dbaction = $_GET['dbaction'];
    $AName = $_GET['AName'];
    $Time = $_GET['Time'];
    $Money = $_GET['Money'];
    $Place = $_GET['Place'];
    $ANote = $_GET['ANote'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'fjuim');
    if($dbaction == "insert"){
        $sql = "insert into activity (AName, Time, Money, Place, ANote) value ('$AName', '$Time', '$Money', '$Place', '$ANote')";
        if (mysqli_query($link, $sql)){
            header("Location:message.php?message=新增成功");
        }
        else{
            header("Location:message.php?message=新增失敗");
        }
    }
    else{
        $sql = "update activity set Time='$Time', Money='$Money', Place='$Place', ANote='$ANote' where AName='$AName'";
        if (mysqli_query($link, $sql)){
            header("Location:message.php?message=修改成功");
        }
        else{
            header("Location:message.php?message=修改失敗");
        }
    }
    ?>
</body>
</html>