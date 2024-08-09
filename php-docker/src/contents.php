<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$id=$_SESSION['id'];
try {
    $pdo=new PDO("mysql:dbname=eng_test; host=mysql_testing;", "root", "root");
    $stmt=$pdo->query("select * from user where id='$id'");
    $row=$stmt->fetch();
    foreach ($stmt as $row);
} catch (PDOException) {
    header('Location:error.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>目次</title>
        <link rel="stylesheet"type="text/css"href="./css/style5.css">
    </head>
    
    <body>
        <h1>目次</h1>
        <?php
        echo "<p>";
        echo $_SESSION['user_name'].'さん、ログインしました！';
        echo "</p>";
        ?>
        <h3>前回の正解数（中級）：
            <?php if(!empty($row['point_1'])) {echo $row['point_1'];} else {echo "データなし";}?>
        </h3>
        <h3>前回の正解数（上級）：
            <?php if(!empty($row['point_2'])) {echo $row['point_2'];} else {echo "データなし";}?>
        </h3>
        <p class="p2">受験したいレベルのボタンを押してください。</p>
        <form method="post"action="tyukyu.php">
            <input type="submit"class="button"value="中級">
        </form>
        <form method="post"action="jokyu.php">
            <input type="submit"class="button"value="上級">
        </form>
        <form method="post"action="search.php">
            <p>アカウント検索はこちらから</p>
            <input type="submit"class="search"value="アカウント検索">
        </form>
    </body>
</html>