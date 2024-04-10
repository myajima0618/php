<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$products = htmlspecialchars($_POST['products'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、" . $name . "<br />";
echo "ご希望の商品は、" . $products . "<br />";
echo "注文数は、" . $number . "<br />";



$con = "<a href=\"index.php\">フライテックでphpを学ぶ！！</a>";
echo $con;
echo "
";
htmlspecialchars($con, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($con);