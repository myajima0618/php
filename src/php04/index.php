<?php

require_once('config/status_codes.php');

// $status_codesの配列からランダムで4つ取得
$random_numbers = array_rand($status_codes, 4);

// ランダムで取得した配列を新たな配列に代入　→選択肢
foreach($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

// 選択肢の中から正解を決める
$question = $options[mt_rand(0, 3)];    // mt_rand(最小値,最大値)
// array_rand関数でも取得できる
//$question = $options[array_rand($options, 1)];

//echo "<pre>";
//var_dump($question);
//echo "</pre>";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description']; ?>
                </p>
            </div>
        </div>
        <form action="result.php" class="quiz-form" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <div class="quiz-form__item">
                <?php  foreach($options as $option) : ?>
                <div class="quiz-form__group">
                    <input type="radio" class="quiz-form__radio" name="option" value="<?php echo $option['code'] ?>" id="<?php echo $option['code'] ?>">
                    <label for="<?php echo $option['code'] ?>" class="quiz-form__label">
                        <?php echo $option['code'] ?>
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">
                    回答
                </button>
            </div>

        </form>
    </main>
    
</body>
</html>