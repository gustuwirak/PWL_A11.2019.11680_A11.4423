<?php
    $n = 4;
    $res = 1;
    $str = "1";
    $f = 2;
        while ($f<=$n) {
            $res = $res * $f;
            $f++;
        }
        echo "faktorial dari $n adalah $res";
?>