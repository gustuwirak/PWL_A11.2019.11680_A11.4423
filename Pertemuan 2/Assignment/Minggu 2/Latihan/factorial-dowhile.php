<?php
$number = 4;
$y = $number;
$factorial = 1;
do {
  $factorial *= $number;
  $number = $number - 1;
} while ($number > 0);
echo "Faktorial dari $y adalah $factorial";
?>