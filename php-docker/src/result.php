<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$id=$_SESSION['id'];
try {
    $pdo=new PDO("mysql:dbname=eng_test;host=mysql_testing;", "root", "root");
    if(!empty($_POST['correct_1'])) {
        $correct=$_POST['correct_1'];
        $pdo->exec("update user set point_1='$correct' where id=$id");
    } elseif(!empty($_POST['correct_2'])) {
        $correct=$_POST['correct_2'];
        $pdo->exec("update user set point_2='$correct' where id=$id");
    } elseif(empty($_POST['correct_1'])) {
        $correct=0;
        $pdo->exec("update user set point_1='$correct' where id=$id");
    } elseif(empty($_POST['correct_2'])) {
        $correct=0;
        $pdo->exec("update user set point_2='$correct' where id=$id");
    }
} catch (PDOException) {
    header('Location:error.php');
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>結果</title>
        <style>
            h1 {
               color: red; 
            }
            .button {
                border: 6px groove green;
                font-size: 15px;
                color: white;
                background-color: darkgreen;
            }
            body {
                background: black;
                height: 100%;
                width: 100%;
                text-align: center;
                color: white;
                margin-top: 10%;
            }
        </style>
    </head>
    
    <body>
        <h1>結果</h1>
        <br>
        <?php
        echo $_SESSION['user_name']."さん、10問中".$correct."問正解でした！";
        if($correct > 7) {
            echo "このまま学習を続けていきましょう！";
        } elseif($correct > 3) {
            echo "まずは間違った選択肢を英英辞書で調べるのがいいかもしれません。";
        } else {
            echo "伸びしろの塊です。少しずつ頑張っていきましょう。";
        }
        ?>
        <form method="post"action="contents.php">
            <input type="submit"class="button"value="目次画面に戻る">
        </form>
        <br>
        <br>
        <br>
        <p>ログアウトする場合は以下のボタンを押してください。</p>
        <form method="post"action="logout.php">
            <input type="submit"class="button"value="ログアウト">
        </form>
    </body>
</html>