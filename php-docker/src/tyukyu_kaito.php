<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
$good=[];
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>解答（中級）</title>
        <link rel="stylesheet"type="text/css"href="./css/style9.css">
    </head>
    
    <body>
        <h1>解答（中級）</h1>
        <?php
        echo $_SESSION['user_name']."さんの答えは上部に表示されます。";
        ?>
        <p><?php
            if(!empty($_POST['q1'])) {
                echo $_POST['q1'];
                echo "<br>";
                if($_POST['q1'] == "resign") {
                    array_push($good, "q1");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はresign</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q2'])) {
                echo $_POST['q2'];
                echo "<br>";
                if($_POST['q2'] == "omit") {
                    array_push($good, "q2");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はomit</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q3'])) {
                echo $_POST['q3'];
                echo "<br>";
                if($_POST['q3'] == "lung") {
                    array_push($good, "q3");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はlung</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q4'])) {
                echo $_POST['q4'];
                echo "<br>";
                if($_POST['q4'] == "decline") {
                    array_push($good, "q4");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdecline</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q5'])) {
                echo $_POST['q5'];
                echo "<br>";
                if($_POST['q5'] == "diagnose") {
                    array_push($good, "q5");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdiagnose</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q6'])) {
                echo $_POST['q6'];
                echo "<br>";
                if($_POST['q6'] == "deduction") {
                    array_push($good, "q6");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdeduction</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q7'])) {
                echo $_POST['q7'];
                echo "<br>";
                if($_POST['q7'] == "spinach") {
                    array_push($good, "q7");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はspinach</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q8'])) {
                echo $_POST['q8'];
                echo "<br>";
                if($_POST['q8'] == "pharmacist") {
                    array_push($good, "q8");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はpharmacist</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q9'])) {
                echo $_POST['q9'];
                echo "<br>";
                if($_POST['q9'] == "confidential") {
                    array_push($good, "q9");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はconfidential</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q10'])) {
                echo $_POST['q10'];
                echo "<br>";
                if($_POST['q10'] == "nutrition") {
                    array_push($good, "q10");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はnutrition</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q11'])) {
                echo $_POST['q11'];
                echo "<br>";
                if($_POST['q11'] == "jealous") {
                    array_push($good, "q11");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はjealous</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q12'])) {
                echo $_POST['q12'];
                echo "<br>";
                if($_POST['q12'] == "hostile") {
                    array_push($good, "q12");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はhostile</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q13'])) {
                echo $_POST['q13'];
                echo "<br>";
                if($_POST['q13'] == "representative") {
                    array_push($good, "q13");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はrepresentative</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q14'])) {
                echo $_POST['q14'];
                echo "<br>";
                if($_POST['q14'] == "controversial") {
                    array_push($good, "q14");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はcontroversial</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q15'])) {
                echo $_POST['q15'];
                echo "<br>";
                if($_POST['q15'] == "temporary") {
                    array_push($good, "q15");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はtemporary</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q16'])) {
                echo $_POST['q16'];
                echo "<br>";
                if($_POST['q16'] == "ditinctive") {
                    array_push($good, "q16");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdistinctive</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q17'])) {
                echo $_POST['q17'];
                echo "<br>";
                if($_POST['q17'] == "detect") {
                    array_push($good, "q17");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdetect</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q18'])) {
                echo $_POST['q18'];
                echo "<br>";
                if($_POST['q18'] == "religion") {
                    array_push($good, "q18");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はreligion</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q19'])) {
                echo $_POST['q19'];
                echo "<br>";
                if($_POST['q19'] == "embarrass") {
                    array_push($good, "q19");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はembarrass</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q20'])) {
                echo $_POST['q20'];
                echo "<br>";
                if($_POST['q20'] == "emergency") {
                    array_push($good, "q20");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はemergency</strong>";
                }
            }
            ?>
        </p>
        
        <br>
        <?php
        if(!empty($good)) {
            $count = count($good);
        } else {
            $count = 0;
        }
        ?>
        <form method="post"action="result.php">
            <input type="submit"class="button"value="結果を見る">
            <input type="hidden"value="<?php echo $count;?>" name="correct_1">
        </form>
    </body>
</html>