<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <<?php
    $dbaction = $_GET['dbaction'];
    $SName = $_GET['SName'];
    $SID = $_GET['SID'];
    $SGrade = $_GET['SGrade'];
    $SPhone = $_GET['SPhone'];
    $Contant = $_GET['Contant'];
    $Activity = $_GET['Activity'];
    $Note = $_GET['Note'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'fjuim');
    if($dbaction == "insert"){
        $sql = "insert into signup (SName, SID, SGrade, SPhone, Contant, Activity, Note) value ('$SName', '$SID', '$SGrade', '$SPhone', '$Contant', '$Activity', '$Note')";
        if (mysqli_query($link, $sql)){
            header("Location:message.php?message=報名成功");
        }
        else{
            header("Location:message.php?message=報名失敗");
        }
    }
    ?>
</body>
</html>