<?php
setcookie("name", $_POST['a1']);
setcookie("address", $_POST['a2']);
setcookie("mobile", $_POST['a3']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="a3.php" method="post">
        Product Name: <input type="text" name="a4"><br><br>
        Product Qty: <input type="text" name="a5"><br><br>
        Product Rate: <input type="text" name="a6"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>