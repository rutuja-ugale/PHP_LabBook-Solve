<?php
    session_start();
    $a = $_POST['b1'];
    $b = $_POST['b2'];
    $c = $_POST['b3'];

    $_SESSION['b1']=$a;
    $_SESSION['b2']=$b;
    $_SESSION['b3']=$c;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="b3.php" method="post">
        EMI Number <input type="text" name="e1"><br><br>
        EMI Amount <input type="text" name="e2"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>