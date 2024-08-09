<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$pre=["北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"];
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
<?php
if(!empty($_POST['button'])) {
    $error=[];
    if(empty($_POST['family_name'])) {
        $error['family_name']='blank';
    }
    if(empty($_POST['last_name'])) {
        $error['last_name']='blank';
    }
    if(empty($_POST['user_name'])) {
        $error['user_name']='blank';
    }
    if(empty($_POST['mail'])) {
        $error['mail']='blank';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>更新</title>
        <link rel="stylesheet"type="text/css"href="./css/style2.css">
    </head>
    <body>
        <h1>更新画面</h1>
        <h3>以下のアカウントの更新したい箇所を修正してください。</h3>
        <form method="post"action="<?php if(empty($error)) {echo 'update_complete.php';}?>">
            <?php foreach ($stmt as $row) {;?>
            <div>
                <label>名前（姓）:</label>
                <input type="text"name="family_name"pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"value="<?php echo $row['family_name'];?>">
                <?php if(!empty($_POST['button']) && !empty($error['family_name'])) {echo "名前（姓）は入力必須です。";}?>
            </div>
            <div>
                <label>名前（名）:</label>
                <input type="text"name="last_name"pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"value="<?php echo $row['last_name'];?>">
                <?php if(!empty($_POST['button']) && !empty($error['last_name'])){echo "名前（名）は入力必須です。";}?>
            </div>
            <div>
                <label>ユーザネーム:</label>
                <input type="text"name="user_name"pattern="^[ァ-ヶー]+$"value="<?php echo $row['user_name'];?>">
                <?php if(!empty($_POST['button']) && !empty($error['user_name'])){echo "ユーザネームは入力必須です";}?>
            </div>
            <div>
                <label>メールアドレス:</label>
                <input type="email"name="mail"pattern="^[-@a-zA-Z0-9]+$"value="<?php echo $row['mail'];?>">
                <?php if(!empty($_POST['button']) && !empty($error['mail'])){echo "メールアドレスは入力必須です";}?>
            </div>
            <div>
                <label>パスワード:</label>
                <input type="password"pattern="^[-@a-zA-Z0-9]+$"name="password">
                <br>
                <strong>パスワードを変更しない場合は未入力のままで構いません。</strong>
            </div>
            <div>
                <label>性別:</label>
                <input type="radio"name="gender"value="1"<?php if($row['gender']=='1'){echo 'checked';}?>>男性
                <input type="radio"name="gender"value="2"<?php if($row['gender']=='2'){echo 'checked';}?>>女性
            </div>
            <div>
                <label>住所（都道府県）:</label>
                <select class="dropdown"name="pre">
                <option value="<?php echo $row['pre'];?>"selected><?php echo $row['pre'];?></option>
                <?php foreach($pre as $value):?>
                <option value='<?php echo $value;?>'><?php echo $value;?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div>
                <label>TOEICのスコア:</label>
                <input type="number"name="score"maxlength="3"placeholder="数字のみ入力可能です"value="<?php echo $row['score'];?>">
                <br>
                <strong>＊データがない場合、0と表示されます。</strong>
            </div>
            <?php };?>
            <div class="right">
                <input type="submit"name="button"class="button"value="更新">
            </div>
            <input type="hidden"name="id"value="<?php echo $row['id'];?>">
        </form>
        <form method="post"action="search.php">
            <div class="left">
                <input type="submit"class="button"value="戻る">
            </div>
        </form>
    </body>
</html>