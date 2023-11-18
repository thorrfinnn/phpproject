

<?php
session_start();
?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
</head>
<body>
    <?php include("navbar.php"); ?>
    <?php include("css.php"); ?>

    <?php
    if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        $emailValue = $_SESSION["email"];
        $passwordValue = $_SESSION["password"];
        echo "Hey Mr $emailValue";
    } else {
        echo "Session not set, please register first";
    }
    ?>
</body>
</html>

