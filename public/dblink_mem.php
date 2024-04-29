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
    $ID = $_GET['ID'];
    $pword = $_GET['pword'];
    $Name = $_GET['Name'];
    $Grade = $_GET['Grade'];
    $Identity = $_GET['Identity'];
    $Limits = $_GET['Limits'];

    $link = mysqli_connect('localhost', 'root', '12345678', 'fjuim');
    if($dbaction == "insert"){
        $sql = "insert into member1 (ID, pword, Name, Grade, Identity, Limits) value ('$ID', '$pword', '$Name', '$Grade', '$Identity', '$Limits')";
        if (mysqli_query($link, $sql)){
            header("Location:message.php?message=新增成功");
        }
        else{
            header("Location:message.php?message=新增失敗");
        }
    }
    else{
        $sql = "update member1 set pword='$pword', Name='$Name', Grade='$Grade', Identity='$Identity', Limits='$Limits' where ID='$ID'";
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