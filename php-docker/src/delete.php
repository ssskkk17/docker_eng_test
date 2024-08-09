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
    $stmt=$pdo->query("select * from user where id='$id'");
} catch (PDOException) {
    header('Location:error.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>削除</title>
        <link rel="stylesheet"type="text/css"href="./css/style8.css">
    </head>
    
    <body>
        <h1>削除画面</h1>
        <h3>以下のアカウントを削除します。<br>よろしければ、削除ボタンを押してください。</h3>
        <form method="post"action="delete_complete.php">
            <?php foreach ($stmt as $row) {;?>
            <div>
                <label>名前（姓）:</label>
                <?php echo $row['family_name'];?>
            </div>
            <div>
                <label>名前（名）:</label>
                <?php echo $row['last_name'];?>
            </div>
            <div>
                <label>ユーザネーム:</label>
                <?php echo $row['user_name'];?>
            </div>
            <div>
                <label>メールアドレス:</label>
                <?php echo $row['mail'];?>
            </div>
            <div>
                <label>性別:</label>
                <?php if($row['gender']=="1") { echo "男性";} else { echo "女性";}?>
            </div>
            <div>
                <label>住所（都道府県）:</label>
                <?php echo $row['pre'];?>
            </div>
            <?php };?>
            <input type="submit"class="right"value="削除">
            <input type="hidden"name="id"value="<?php echo $row['id'];?>">
        </form>
        <form method="post"action="search.php">
            <input type="submit"class="left"value="戻る">
        </form>
    </body>
</html>