<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
if(!empty($_POST['family_name'])) {
    $family_name=$_POST['family_name'];
}
if(!empty($_POST['last_name'])) {
    $last_name=$_POST['last_name'];
}
if(!empty($_POST['user_name'])) {
    $user_name=$_POST['user_name'];
}
if(!empty($_POST['mail'])) {
    $mail=$_POST['mail'];
}
if(!empty($_POST['password'])) {
    $password=$_POST['password'];
    $pass=password_hash($password, PASSWORD_DEFAULT);
}
if(!empty($_POST['gender'])) {
    $gender=$_POST['gender'];
}
if(!empty($_POST['pre'])) {
    $pre=$_POST['pre'];
}
if(!empty($_POST['score'])) {
    $score=$_POST['score'];
} else {
    $score=0;
}
$id=$_POST['id'];
date_default_timezone_set('Asia/Tokyo');
$update_time=date('Y-m-d h:i:s');
?>
<?php
try {
    $pdo=new pdo("mysql:dbname=eng_test;host=mysql_testing;", "root", "root");
    if(!empty($password)) {
        $stmt=$pdo->exec("update user set family_name='$family_name', last_name='$last_name', user_name='$user_name', mail='$mail', password='$pass', gender='$gender', pre='$pre', score='$score', update_time='$update_time' where id='$id'");
    } else {
        $stmt=$pdo->exec("update user set family_name='$family_name', last_name='$last_name', user_name='$user_name', mail='$mail', gender='$gender', pre='$pre', score='$score', update_time='$update_time' where id='$id'");
    }
} catch (PDOException) {
    header('Location:error.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>更新完了</title>
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
            p {
                color: pink;
                text-align: center;
                margin-top: 50px;
            }
        </style>
    </head>
    
    <body>
        <h1>更新完了画面</h1>
        <h3>アカウント更新が完了しました。</h3>
        <p>以下からログインしてください。</p>
        <form method="post"action="login.php">
            <input type="submit"class="button"value="ログイン">
        </form>
    </body>
</html>