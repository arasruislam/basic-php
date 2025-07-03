<?php

for ($x = 0; $x <= 10; $x++) {
   echo $x;
   echo PHP_EOL;
}

$total = 0;
echo PHP_EOL;

for ($x = 0; $x <= 10; $x++) {
   $total += $x;
}

echo $total;
echo PHP_EOL;

$arr = ['ashraful', "city university", "Dhaka, Bangladesh"];

for ($x = 0; $x < count($arr); $x++) {
   echo $arr[$x];
   echo PHP_EOL;
}
