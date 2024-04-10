<?php

echo "関数 <br />";
function outputNumber($num1, $num2) {

    $answer = $num1 - $num2;
    return $answer;

}


$i = outputNumber(3, 5);
echo $i . "<br />";

echo "関数問題1 <br />";
function checkScore($score1, $score2, $score3) {

    $total = $score1 + $score2 + $score3;

    if ($total >= 210) {
        $answer = "合計点は" . $total . "なので合格です";
    } else {
        $answer = "合計点は" . $total . "なので不合格です";
    }
    return $answer;
}

$answer = checkScore(50, 80, 98);
echo $answer . "<br />";

echo $i . "<br />";

echo "関数問題2 <br />";
#三角形の面積
function triangle($value1, $value2) {
    $area = $value1 * $value2 / 2;
    return $area;
}
#四角形の面積
function square($value1, $value2) {
    $area = $value1 * $value2;
    return $area;
}
#台形の面積
function trapezoid($value1, $value2, $value3) {
    $area = ($value1 + $value2) * $value3 /2;
    return $area;
}

$sankaku = triangle(15, 6);
$shikaku = square(15, 6);
$daikei = trapezoid(10, 5, 6);

echo "三角形" . $sankaku . "<br />";
echo "四角形" . $shikaku . "<br />";
echo "台形" . $daikei . "<br />";



