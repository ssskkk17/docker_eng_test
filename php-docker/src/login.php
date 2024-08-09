<?php
session_start();
if(!empty($_POST['login'])) {
    //$user_name='';
    //$mail='';
    //$password='';
    if(empty($_POST['user_name'])) {
        $error['user_name']='blank';
    } else {
        $user_name=$_POST['user_name'];
    }
    if(empty($_POST['mail'])) {
        $error['mail']='blank';
    } else {
        $mail=$_POST['mail'];
    }
    if(empty($_POST['password'])) {
        $error['password']='blank';
    } else {
        $password=$_POST['password'];
    }
    if(empty($error) && !empty($user_name) && !empty($mail) && !empty($password)) {
        try {
            $pdo=new PDO("mysql:dbname=eng_test;host=mysql_testing;", "root", "root");
            $stmt=$pdo->query("select * from user where user_name='$user_name' AND mail='$mail' AND delete_flag='0'");
            $row=$stmt->fetch();
            foreach($stmt as $row);
            if(!empty($row['password'])) {
                $hash=$row['password'];
            }
            if(!empty($password) && !empty($hash)) {
                if(password_verify($password, $hash)) {
                    $_SESSION['user_name']=$user_name;
                    $_SESSION['id']=$row['id'];
                    header('Location:contents.php');
                } else {
                    $error_m="組み合わせが正しくありません。もう一度入力してください。";
                }
            } else {
                $error_msg="組み合わせが正しくありません。もう一度入力してください。";
            }
        } catch (PDOException) {
            echo "DB error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet"type="text/css"href="./css/style4.css">
    </head>
    
    <body>
        <main>
            <h1>ログイン</h1>
            <form method="post"action="">
                <div>
                    <label>ユーザー名</label>
                    <input type="text"name="user_name"value="<?php if(!empty($user_name)){echo $user_name;}?>">
                    <p><?php if(!empty($error['user_name'])){echo "ユーザー名を入力してください";}?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <input type="email"name="mail"value="<?php if(!empty($mail)) {echo $mail;}?>">
                    <p><?php if(!empty($error['mail'])){echo "メールアドレスを入力してください";}?></p>
                </div>
                <div>
                    <label>パスワード</label>
                    <input type="password"name="password"value="<?php if(!empty($password)) {echo $password;}?>">
                    <p><?php if(!empty($error['password'])){echo "パスワードを入力してください";}?></p>
                </div>
                <p class="error"><?php if(!empty($error_msg)){echo $error_msg;}?></p>
                <p class="error"><?php if(!empty($error_m)){echo $error_m;}?></p>
                <input type="submit"class="login"name="login"value="ログイン">
            </form>
            <br><br><br><br><br>
            <form method="post"action="regist.php">
                <p>アカウントをお持ちでない方は、以下からアカウント作成をしてください。</p>
                <input type="submit"class="button"value="新規アカウント作成">
            </form>
        </main>
    </body>
</html>