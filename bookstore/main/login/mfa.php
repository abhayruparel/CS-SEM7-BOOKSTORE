<?php
include("../connect.php");

 if(isset($_POST["submit"]) && $_POST["submit"] != "") {
    $codefromUSR = $_POST['mfa'];

    $select = "SELECT * FROM code ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($conn, $select);

    $row = mysqli_fetch_assoc($result);
    $codefromDB = $row['MFA'];
    if($codefromUSR == $codefromUSR){
        header("location: ../index.php");
    }
    else{
        echo 'wrong code ';
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>MFA code:</label>
        <input type="text" name="mfa">
        <input type="submit" name="submit" value="send">
    </form>

</body>
</html>