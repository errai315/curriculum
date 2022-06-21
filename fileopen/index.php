<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
  //書き込み可能な場合
  //対象のファイルを開く(w→完全上書き、a→追記)
  $fp = fopen($testFile, "a");
  //対象のファイルに書き込む
  fwrite($fp, $contents);
  //ファイルを閉じる
  fclose($fp);
  //書き込みした旨の表示
  echo "finish writing!!";
} else {
  //書き込み不可の場合
  echo "not writable!";
  exit;
}

$test_file = "test2.txt";
if (is_readable($test_file)) {
  //読み込み可能なときの処理
  //対象のファイルを開く
  $fp = fopen($test_file, "r");
  //開いたファイルから1行ずつ読み込む
  while ($line = fgets($fp)) {
    //改行コード込で1行ずつ出力
    echo $line.'<br>';
  }
  //ファイルを閉じる
  fclose($fp);
} else {
  //書き込み不可の場合
  echo "not writable!";
  exit;
}

?>