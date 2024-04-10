<?php

echo "for文 <br />";
for($i = 0; $i <= 10; $i++) {

    if ($i % 2 === 0) {
        echo $i;
        echo "<br />";
    }

}
echo "<br />";

echo "while文 <br />";
$count = 0;
while ($count < 20) {
    $count++;
    echo $count . "<br />";
}
echo "<br />";

echo "break & continue <br />";
$count = 0;

while ($count < 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;

}

echo "<br />";

echo "do while文 <br />";
$num = 0;
do {
    echo "num = " . $num . "<br />";
    $num++;
} while ($num < 3);

echo "<br />";

echo "FizzBuzz問題 <br />";

$Fizz = "Fizz <br />";
$Buzz = "Buzz <br />";
$FizzBuzz = "FizzBuzz <br />";

for ($i = 1; $i <= 50; $i++) {   
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    } elseif ($i % 3 == 0) {
        echo $Fizz;
    } elseif ($i % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i . "<br />";
    }
}

echo "<br />";

echo "二重ループ問題 <br />";

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) {
            echo "●";
    }
    echo "<br />";
}