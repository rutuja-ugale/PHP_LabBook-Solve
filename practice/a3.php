<?php
    $name = $_COOKIE['name'];
    $address = $_COOKIE['address'];
    $mobile = $_COOKIE['mobile'];

    $pname = $_POST['a4'];
    $pqty = $_POST['a5'];
    $prate = $_POST['a6'];
    $total = $pqty*$prate;


    echo "<h1> Customer Info </h1>";
    echo "Customer Name: ".$name."<br>";
    echo "Customer Address: ".$address."<br>";
    echo "Customer Mobile: ".$mobile."<br>";
    echo "<h1> Product Info </h1>";
    echo "Product Name: ".$pname."<br>";
    echo "Product Quantity: ".$pqty."<br>";
    echo "Product Rate: ".$prate."<br>";
    echo "Total: ".$total."<br>";

   
?>