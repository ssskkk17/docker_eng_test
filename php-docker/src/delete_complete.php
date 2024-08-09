<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$id=$_POST['id'];
try {
    $pdo=new PDO("mysql:dbname=eng_test;host=mysql_testing;", "root","root");
    $stmt=$pdo->exec("update user set delete_flag='1' where id='$id'");
} catch (PDOException) {
    header('Location:error.php');
}
?>
<!DOCTYPE html>
<html lan="ja">
    <head>
        <meta charset="utf-8">
        <title>削除完了</title>
        <style>
            body {
                background: black;
                height: 90%;
                width: 100%;
            }
            form {
                text-align: center;
            }
            h1 {
                color: red;
                padding-left: 20px;
            }
            h3 {
                color: yellow;
                text-align: center;
            }
            .button {
                border: 6px groove green;
                font-size: 15px;
                color: white;
                background-color: darkgreen;
                margin-top: 15%;
            }
        </style>
        
        <body>
            <h1>削除完了画面</h1>
            <h3>アカウント削除が完了しました。</h3>
            <form method="post"action="index.php">
                <input type="submit"class="button"value="TOPページ">
            </form>
        </body>
    </head>
</html>