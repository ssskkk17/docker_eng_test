<?php
if(empty($error) && !empty($_POST['regist'])) {
    $family_name=$_POST['family_name'];
    $last_name=$_POST['last_name'];
    $user_name=$_POST['user_name'];
    $mail=$_POST['mail'];
    $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender=$_POST['gender'];
    $pre=$_POST['pre'];
    if(!empty($_POST['score'])) {
        $score=$_POST['score'];
    } else {
        $score=0;
    }
    date_default_timezone_set('Asia/Tokyo');
    $register_time=date('Y-m-d h:i:s');
    $delete_flag=0;
    try {
        $pdo=new PDO("mysql:dbname=eng_test;host=mysql_testing;", "root", "root");
        $pdo->exec("insert into user(family_name, last_name, user_name, mail, password, gender, pre, score, register_time, delete_flag) values('$family_name', '$last_name', '$user_name', '$mail', '$pass', '$gender', '$pre', '$score', '$register_time', '$delete_flag');");
    } catch (PDOException) {
        header('Location:error.php');
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規登録完了</title>
        <link rel="stylesheet"type="text/css"href="./css/style3.css">
    </head>
    
    <body>
        <h1>新規登録完了画面</h1>
        <h3>新規登録が完了しました。</h3>
        <p>以下のボタンからログインしてください。</p>
        <form method="post"action="login.php">
            <input type="submit"class="button"value="ログイン">
        </form> 
    </body>
</html>