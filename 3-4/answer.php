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
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $myname =$_POST['my_name'];
    $ans1 =$_POST['ans1'];
    $ans2 =$_POST['ans2'];
    $ans3 =$_POST['ans3'];
    $answer1 =$_POST['answers1'];
    $answer2 =$_POST['answers2'];
    $answer3 =$_POST['answers3'];

    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function getAns($answer, $right) {
        if ($answer === $right) {
            echo "正解！";
        } else {
            echo "残念・・・";
        }
    }
    ?>
    <p><?php echo $myname?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php getAns($ans1,$answer1);?>

    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php getAns($ans2,$answer2);?>

    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php getAns($ans3,$answer3);?>
    
</body>
</html>