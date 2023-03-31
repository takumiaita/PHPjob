<?php

  //②フォームからのデータを受け取ります
$myname = $_POST['my_name'];
$number = $_POST['number'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
$random = mt_rand(1,6);
$resultnum = $number * $random;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if ($resultnum <= 10) {
    $result = "凶";
} elseif ($resultnum <=15 ){
    $result = "小吉";
} elseif ($resultnum <=20 ){
    $result = "中吉";
} elseif ($resultnum <=25 ){
    $result = "吉";
} elseif ($resultnum <=36 ){
    $result = "大吉";
} else {
    $result = "残念";
}

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
echo date("Y-m-d H:i:s", time());
echo "<br>";
echo "名前は".$myname."です。";
echo "<br>";
echo "番号は".$resultnum."です。";
echo "<br>";
echo "結果は".$result."です。";

?>