<?php
    $n=$_GET['n'];
    $a=array();
    $a[]="Rutuja";
    $a[]="Bhavna";
    $a[]="Kshitija";
    $a[]="Priyanka";
    echo "List of Names: <br>";
    foreach($a as $value)
    {
        $s=substr($value,0,strlen($n));
        if($s==$n)
        echo $value."<br>";
    }
?>