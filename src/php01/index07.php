<?php

echo "配列<br />";

$people = array("Taro", "Jiro", "Saburo");

var_dump($people);
echo "<br />" . $people[0];

echo "<br />連想配列<br />";

$people = array(
    'person1' => "Taro",
    'person2' => "Jiro",
    'person3' => "Saburo"
);
var_dump($people);
echo "<br />";
echo $people['person2'];
echo "<br />";

echo "<br />多次元配列<br />";
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => "29",
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => "25",
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => "20",
        "gender" => "女性"
    ]
];

echo $people[0]["last_name"] . "<br />";

$people = array('Taro', 'Jiro', 'Saburo');

echo "<br />foreach文<br />";

$people = array("Taro", "Jiro", "Saburo");

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}

$people = array(
    'person1' => "Taro",
    'person2' => "Jiro",
    'person3' => "Saburo"
);
foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . "<br />";
}

echo "<br />Question<br />";
$people = [
    [
        "name" => "Taro",
        "age" => "25",
        "gender" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => "20",
        "gender" => "men"
    ],
    [
        "name" => "Hanako",
        "age" => "16",
        "gender" => "woman"
    ]
];

foreach ($people as $person => $value) {
    echo $value["name"] . "(" . $value["age"] . "歳" . $value["gender"] . ")" . "<br />";
}