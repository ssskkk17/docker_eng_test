<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$pref=["北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"];
?>
<?php
$family_name='';
$last_name='';
$user_name='';
$mail='';
$gender='';
if(!empty($_POST['search'])) {
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
    if(isset($_POST['gender']) and $_POST['gender']==1 or $_POST['gender']==2) {
        $gender=$_POST['gender'];
    }
    if(!empty($_POST['pre']) && $_POST['pre']=="未選択") {
        $pre_null=1;
    } else {
        $pre=$_POST['pre'];
    }
}
?>
<?php
if(!empty($_POST['search'])) {
    try {
        $pdo=new PDO("mysql:dbname=eng_test;host=mysql_testing;", "root", "root");
        if(!empty($gender) && !empty($pre)) {
            $stmt=$pdo->query("select * from user where family_name LIKE '%$family_name%' AND last_name LIKE '%$last_name%' AND user_name LIKE '%$user_name%' AND mail LIKE '%$mail%' AND gender='$gender' AND pre='$pre' AND delete_flag='0' order by id desc");
        } elseif(!empty($gender)) {
            $stmt=$pdo->query("select * from user where family_name LIKE '%$family_name%' AND last_name LIKE '%$last_name%' AND user_name LIKE '%$user_name%' AND mail LIKE '%$mail%' AND gender='$gender' AND delete_flag='0' order by id desc");
        } elseif(!empty($pre)) {
            $stmt=$pdo->query("select * from user where family_name LIKE '%$family_name%' AND last_name LIKE '%$last_name%' AND user_name LIKE '%$user_name%' AND mail LIKE '%$mail%' AND pre='$pre' AND delete_flag='0' order by id desc");
        } elseif(!empty($pre_null)) {
            $stmt=$pdo->query("select * from user where family_name LIKE '%$family_name%' AND last_name LIKE '%$last_name%' AND user_name LIKE '%$user_name%' AND mail LIKE '%$mail%' AND delete_flag='0' order by id desc");
        }
    } catch (PDOException) {
        header('Location:error.php');
    }
    $msg="<h3>該当アカウント一覧</h3>";
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>検索</title>
        <link rel="stylesheet"type="text/css"href="./css/style7.css">
    </head>
    
    <body>
        <h1>検索画面</h1>
        <h3>以下のフォームに検索条件を指定してください。</h3>
        <form method="post"action="">
            <div>
                <label>名前（姓）</label>
                <input type="text"name="family_name">
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text"name="last_name">
            </div>
            <div>
                <label>ユーザネーム</label>
                <input type="text"name="user_name">
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="email"name="mail">
            </div>
            <div>
                <label>性別</label>
                <input type="radio"name="gender"value="0"checked>未選択
                <input type="radio"name="gender"value="1">男性
                <input type="radio"name="gender"value="2">女性
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select class="dropdown"name="pre">
                    <option value="未選択"checked>未選択</option>
                    <?php foreach($pref as $value):?>
                    <option value='<?php echo $value;?>'><?php echo $value;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <input type="submit"class="search"name="search"value="検索">
        </form>
        <br><br>
        <table border="1"cellspacing="0"class="table">
            <?php if(!empty($msg)) { echo $msg;}?>
            <?php
            foreach ($stmt as $row) {?>
            <tr>
                <th>名前（姓）</th>
                <td><?php echo $row['family_name'];?></td>
            </tr>
            <tr>
                <th>名前（名）</th>
                <td><?php echo $row['last_name'];?></td>
            </tr>
            <tr>
                <th>ユーザー名</th>
                <td><?php echo $row['user_name'];?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php echo $row['mail'];?></td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <?php if($row['gender']=="1") { echo "男性";} else { echo "女性";}?>
                </td>
            </tr>
            <tr>
                <th>住所（都道府県）</th>
                <td><?php echo $row['pre'];?></td>
            </tr>
            <tr>
                <th>TOEICの点数</th>
                <td><?php echo $row['score'];?></td>
            </tr>
            <tr>
                <th align='center'>
                    <form method="post"action="delete.php">
                        <input type="submit"class="button"value="削除">
                        <input type="hidden"name="id"value="<?php echo $row['id'];?>">
                    </form>
                </th>
                <td align='center'>
                    <form method="post"action="update.php">
                        <input type="submit"class="button"value="更新">
                        <input type="hidden"name="id"value="<?php echo $row['id'];?>">
                    </form>
                </td>
            </tr>
            <?php };?>
        </table>
        <br>
        <form method="post"action="contents.php">
            <input type="submit"class="button_2"value="1つ前に戻る">
        </form>
    </body>
</html>