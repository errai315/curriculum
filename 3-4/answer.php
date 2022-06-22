<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
$user_name = $_POST['user_name'];
$response1 = $_POST['response1'];
$response2 = $_POST['response2'];
$response3 = $_POST['response3'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];

function checkAnswer($response, $answer_key) {
  if ($response == $answer_key) {
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}

?>
<p><?php echo $user_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<p><?php echo checkAnswer($response1, $answer1); ?></p>

<p>②の答え</p>
<p><?php echo checkAnswer($response2, $answer2); ?></p>

<p>③の答え</p>
<p><?php echo checkAnswer($response2, $answer2); ?></p>

</body>
</html>