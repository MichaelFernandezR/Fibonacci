<?php
    echo "Print the Fibonacci series in php==>";

    $f1 = 0;
    $f2 = 1;

    $count = 0;

    echo $f1 . ",";
    echo $f2 . ",";

    while($count<=20) {
        $f3 = $f1 + $f2;
        echo $f3 . ",";

        $f1 = $f2;
        $f2 = $f3;
        $count = $count+1;
    }
?>