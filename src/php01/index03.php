<?php

$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo "算術演算子<br />";
echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";

$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a /= $d;
$c += $d;

echo "代入演算子と複合演算子<br />";
echo $a;
echo "<br />";
echo $c;
echo "<br />";

$a = 20;
$b = 5;


echo "比較演算子<br />";
echo ($a > $b);
echo "<br />";

echo "論理演算子<br />";
$answer1 = 10 < $a;
$answer2 = $a < 30;

echo ($answer1 and $answer2);
echo "<br />";

echo "加算子と減算子<br />";
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo (++$a);
echo "<br />";
echo ($b++);
echo "<br />";
echo (--$c);
echo "<br />";
echo ($d--);
echo "<br />";


