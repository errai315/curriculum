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

$port_number = [80, 22, 20, 21];
$lang = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];

$a1 = $port_number[0];
$a2 = $lang[3];
$a3 = $command[1];

?>
<p>お疲れ様です<?php echo $user_name; ?>さん</p>
<form action="answer.php" method="POST">
  <h2>①ネットワークのポート番号は何番？</h2>
  <?php
    foreach ($port_number as $value1) {
      echo '<input type="radio" name="response1" value="'.$value1.'" />'.$value1;
    }
  ?>
  <input type="hidden" name="answer1" value="<?php echo $a1 ?>" />

  <h2>②Webページを作成するための言語は？</h2>
  <?php
    foreach ($lang as $value2) {
      echo '<input type="radio" name="response2" value="'.$value2.'" />'.$value2;
    }
  ?>
  <input type="hidden" name="answer2" value="<?php echo $a2 ?>" />

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <?php
    foreach ($command as $value3) {
      echo '<input type="radio" name="response3" value="'.$value3.'" />'.$value3;
    }
  ?>
  <input type="hidden" name="answer3" value="<?php echo $a3 ?>" />
  <br>
  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type="hidden" name="user_name" value="<?php echo $user_name; ?>" />
  <input type="submit" value="回答する" />    

</form>

</body>
</html>