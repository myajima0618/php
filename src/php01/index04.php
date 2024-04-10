<?php

echo "条件分岐 <br />";
echo "if文 <br />";

$a = 5;
if ($a === 5) {
    echo "\$aは5です";
}else {
    
}
echo "<br />";

$a = 7;
if ($a === 5) {
    echo "\$aは5です";
}else {
    echo "\$aは5以外です";
}
echo "<br />";

$a = 7;
if ($a === 5) {
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else {
    echo "\$aは5,7以外です";
}
echo "<br />";
echo "<br />";

echo "switch 文<br />";
$people = "Saburo";

switch ($people) {
    case 'Taro':
        echo "太郎です";
        break;
    case 'Jiro';
        echo "次郎です";
        break;
    case 'Saburo':
        echo "三郎です";
        break;
    
    default:
        break;
}
echo "<br />";

echo "三項演算子<br />";
$a = 7;
$result = ($a === 7) ? "TRUE" : "FALSE";

echo $result;
echo "<br />";


