<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規登録確認</title>
        <link rel="stylesheet"type="text/css"href="./css/style2.css">
    </head>
    
    <body>
        <main>
            <h1>新規登録確認画面</h1>
            <h3>ご登録する内容はこちらでよろしいですか。よろしければ、登録ボタンを押してください。</h3>
            <h3>修正したい場合は修正ボタンを押してください。</h3>
            <form method="post"action="regist_complete.php">
                <div>
                    <label>名前（姓）</label>
                    <?php echo $_POST['family_name'];?>
                </div>
                <div>
                    <label>名前（名）</label>
                    <?php echo $_POST['last_name'];?>
                </div>
                <div>
                    <label>ユーザー名</label>
                    <?php echo $_POST['user_name'];?>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <?php echo $_POST['mail'];?>
                </div>
                <div>
                    <label>パスワード</label>
                    <?php $password=$_POST['password'];
                    echo str_repeat('●', strlen($password)), PHP_EOL;
                    ?>
                </div>
                <div>
                    <label>性別</label>
                    <?php if($_POST['gender']=="1") {echo "男性";} else {echo "女性";}?>
                </div>
                <div>
                    <label>住所</label>
                    <?php echo $_POST['pre'];?>
                </div>
                <div>
                    <label>TOEICのスコア</label>
                    <?php if(!empty($_POST['score'])){echo $_POST['score'];} else {echo "未回答";}?>
                </div>
                <div class="right">
                    <input type="submit"class="button"name="regist"value="登録">
                    <input type="hidden"value="<?php echo $_POST['family_name'];?>"name="family_name">
                    <input type="hidden"value="<?php echo $_POST['last_name'];?>"name="last_name">
                    <input type="hidden"value="<?php echo $_POST['user_name'];?>"name="user_name">
                    <input type="hidden"value="<?php echo $_POST['mail'];?>"name="mail">
                    <input type="hidden"value="<?php echo $_POST['password'];?>"name="password">
                    <input type="hidden"value="<?php echo $_POST['gender'];?>"name="gender">
                    <input type="hidden"value="<?php echo $_POST['pre'];?>"name="pre">
                    <input type="hidden"value="<?php echo $_POST['score'];?>"name="score">
                </div>
            </form>
            <form method="post"action="regist.php">
                <div class="left">
                    <input type="submit"class="button"value="修正">
                    <input type="hidden"value="<?php echo $_POST['family_name'];?>"name="family_name">
                    <input type="hidden"value="<?php echo $_POST['last_name'];?>"name="last_name">
                    <input type="hidden"value="<?php echo $_POST['user_name'];?>"name="user_name">
                    <input type="hidden"value="<?php echo $_POST['mail'];?>"name="mail">
                    <input type="hidden"value="<?php echo $_POST['password'];?>"name="password">
                    <input type="hidden"value="<?php echo $_POST['gender'];?>"name="gender">
                    <input type="hidden"value="<?php echo $_POST['pre'];?>"name="pre">
                    <input type="hidden"value="<?php echo $_POST['score'];?>"name="score">
                </div>
            </form>
        </main>
    </body>
</html>