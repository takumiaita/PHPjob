<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checktest</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $myname = $_POST['my_name'];

    //①画像を参考に問題文の選択肢の配列を作成してください。
    $question1 = [80 , 22 , 20 , 21];
    $question2 = ["PHP" , "Python" , "JAVA" , "HTML"];
    $question3 = ["join" , "select" , "insert" , "update"];

    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $answers1 = 80;
    $answers2 = "HTML";
    $answers3 = "select";

    ?>
    <p>お疲れ様です<?php echo $myname?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action = "answer.php" method = "post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question1 as $value) { ?>
        <input type="radio" name="ans1" value=<?php echo $value ?>><?php echo $value ?>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question2 as $value) { ?>
        <input type="radio" name="ans2" value=<?php echo $value ?>><?php echo $value ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($question3 as $value) { ?>
        <input type="radio" name="ans3" value=<?php echo $value ?>><?php echo $value ?>
    <?php } ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <br>
    <input type="hidden" name="answers1" value=<?php echo $answers1 ?> />
    <input type="hidden" name="answers2" value=<?php echo $answers2 ?> />
    <input type="hidden" name="answers3" value=<?php echo $answers3 ?> />
    <input type="hidden" name="my_name" value=<?php echo $myname ?> />
    <input type="submit" value="回答する" />
    </form>
        
    </body>
</html>

