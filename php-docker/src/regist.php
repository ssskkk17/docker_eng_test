<?php
$pre=["北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"];
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
    if(empty($_POST['password'])) {
        $error['password']='blank';
    }
    if(empty($_POST['gender'])) {
        $error['gender']='blank';
    }
    if($_POST['pre']=='未選択') {
        $error['pre']='blank';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
        <link rel="stylesheet"type="text/css"href="./css/style2.css">
    </head>
    
    <body>
        <main>
            <h1>新規登録画面</h1>
            <h3>新規アカウントを作成するため、以下に入力してください。</h3>
            <form method="post"action="<?php if(empty($error) && !empty($_POST['button'])){echo 'regist_confirm.php';}?>">
                <div>
                    <label>名前（姓）</label>
                    <input type="text"name="family_name"pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"value="<?php if(!empty($_POST['family_name'])){echo $_POST['family_name'];}?>">
                    <?php if(!empty($error['family_name'])){echo "<p>"."未入力です。名前（姓）を入力してください。"."</p>";}?>
                </div>
                <div>
                    <label>名前（名）</label>
                    <input type="text"name="last_name"pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"value="<?php if(!empty($_POST['last_name'])){echo $_POST['last_name'];}?>">
                    <?php if(!empty($error['last_name'])){echo "<p>"."未入力です。名前（名）を入力してください。"."</p>";}?>
                </div>
                <div>
                    <label>ユーザー名</label>
                    <input type="text"name="user_name"pattern="^[ァ-ヶーa-zA-Z]+$"placeholder="カタカナと英字のみ"value="<?php if(!empty($_POST['user_name'])){echo $_POST['user_name'];}?>">
                    <?php if(!empty($error['user_name'])){echo "<p>"."未入力です。ユーザー名を入力してください。"."</p>";}?>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <input type="email"name="mail"pattern="^[-@a-zA-Z0-9]+$"value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];}?>">
                    <?php if(!empty($error['mail'])){echo "<p>"."未入力です。メールアドレスを入力してください。"."<p>";}?>
                </div>
                <div>
                    <label>パスワード</label>
                    <input type="password"name="password"pattern="^[-@a-zA-Z0-9]+$"value="<?php if(!empty($_POST['password'])){echo $_POST['password'];}?>">
                    <?php if(!empty($error['password'])){echo "<p>"."未入力です。パスワードを入力してください。"."</p>";}?>
                </div>
                <div>
                    <label>性別</label>
                    <input type="radio"name="gender"value="0"checked>未選択
                    <input type="radio"name="gender"value="1"<?php if(!empty($_POST['gender']) && $_POST['gender']=="1") {echo 'checked';}?>>男性
                    <input type="radio"name="gender"value="2"<?php if(!empty($_POST['gender']) && $_POST['gender']=="2") {echo 'checked';}?>>女性
                    <?php if(!empty($error['gender'])){echo "<p>"."未選択です。性別を選択してください。"."</p>";}?>
                </div>
                <div>
                    <label>住所（都道府県）</label>
                    <select class="dropdown"name="pre">
                        <option value="<?php if(!empty($_POST['pre'])) {echo $_POST['pre'];} else {echo "未選択";}?>"selected><?php if(!empty($_POST['pre'])) {echo $_POST['pre'];} else {echo "未選択";}?></option>
                        <?php foreach($pre as $value):?>
                        <option value='<?php echo $value;?>'><?php echo $value;?></option>
                        <?php endforeach;?>
                    </select>
                    <?php if(!empty($error['pre'])){echo "<p>"."未選択です。都道府県を選択してください。"."</p>";}?>
                </div>
                <div>
                    <label>TOEICのスコア</label>
                    <input type="number"name="score"maxlength="3"placeholder="数字のみ入力可能です"value="<?php if(!empty($_POST['score'])) { echo $_POST['score'];}?>">
                    <br>
                    <a>*受験したことがなかったら大丈夫です</a>
                </div>
                <div class="right">
                    <input type="submit"name="button"class="button"value="確認する">
                </div>
            </form>
            <form method="post"action="index.php">
                <div class="left">
                    <input type="submit"class="button"value="TOPページ">
                </div>
            </form>
        </main>
    </body>
</html>