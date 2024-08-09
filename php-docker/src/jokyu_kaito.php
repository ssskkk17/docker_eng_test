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
        <title>解答（上級）</title>
        <link rel="stylesheet"type="text/css"href="./css/style9.css">
    </head>
    
    <body>
        <h1>解答（上級）</h1>
        <?php 
        echo $_SESSION['user_name']."さんの答え";
        ?>
        <p><?php
            if(!empty($_POST['q1'])) {
                echo $_POST['q1'];
                echo "<br>";
                if($_POST['q1'] == "deploy") {
                    array_push($good, "q1");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はdeploy</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q2'])) {
                echo $_POST['q2'];
                echo "<br>";
                if($_POST['q2'] == "glitch") {
                    array_push($good, "q2");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はglitch</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q3'])) {
                echo $_POST['q3'];
                echo "<br>";
                if($_POST['q3'] == "avert") {
                    array_push($good, "q3");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はavert</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q4'])) {
                echo $_POST['q4'];
                echo "<br>";
                if($_POST['q4'] == "converse") {
                    array_push($good, "q4");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はconverse</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q5'])) {
                echo $_POST['q5'];
                echo "<br>";
                if($_POST['q5'] == "fabulous") {
                    array_push($good, "q5");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はfabulous</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q6'])) {
                echo $_POST['q6'];
                echo "br";
                if($_POST['q6'] == "inheritance") {
                    array_push($good, "q6");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はinheritance</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q7'])) {
                echo $_POST['q7'];
                echo "<br>";
                if($_POST['q7'] == "kindle") {
                    array_push($good, "q7");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はkindle</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q8'])) {
                echo $_POST['q8'];
                echo "<br>";
                if($_POST['q8'] == "epidemic") {
                    array_push($good, "q8");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はepidemic</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q9'])) {
                echo $_POST['q9'];
                echo "<br>";
                if($_POST['q9'] == "extravagant") {
                    array_push($good, "q9");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はextravagant</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q10'])) {
                echo $_POST['q10'];
                echo "<br>";
                if($_POST['q10'] == "warranty") {
                    array_push($good, "q10");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はwarranty</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q11'])) {
                echo $_POST['q11'];
                echo "<br>";
                if($_POST['q11'] == "alternative") {
                    array_push($good, "q11");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はalternative</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q12'])) {
                echo $_POST['q12'];
                echo "<br>";
                if($_POST['q12'] == "lurk") {
                    array_push($good, "q12");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はlurk</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q13'])) {
                echo $_POST['q13'];
                echo "<br>";
                if($_POST['q13'] == "vulnerable") {
                    array_push($good, "q13");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はvulnerable</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q14'])) {
                echo $_POST['q14'];
                echo "<br>";
                if($_POST['q14'] == "verify") {
                    array_push($good, "q14");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はverify</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q15'])) {
                echo $_POST['q15'];
                echo "<br>";
                if($_POST['q15'] == "insulation") {
                    array_push($good, "q15");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はinsulation</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
            if(!empty($_POST['q16'])) {
                echo $_POST['q16'];
                echo "<br>";
                if($_POST['q16'] == "oust") {
                    array_push($good, "q16");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はoust</strong>";
                }
            }
            ?>
        </p>
        
        <p><?php
             if(!empty($_POST['q17'])) {
                echo $_POST['q17'];
                echo "<br>";
                if($_POST['q17'] == "exclusive") {
                    array_push($good, "q17");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はexclusive</strong>";
                }
             }
            ?>
        </p>
        
        <p><?php
             if(!empty($_POST['q18'])) {
                echo $_POST['q18'];
                echo "<br>";
                if($_POST['q18'] == "affluent") {
                    array_push($good, "q18");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はaffluent</strong>";
                }
             }
            ?>
        </p>
        
        <p><?php
             if(!empty($_POST['q19'])) {
                echo $_POST['q19'];
                echo "<br>";
                if($_POST['q19'] == "purge") {
                    array_push($good, "q19");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はpurge</strong>";
                }
             }
            ?>
        </p>
        
        <p><?php
             if(!empty($_POST['q20'])) {
                echo $_POST['q20'];
                echo "<br>";
                if($_POST['q20'] == "abort") {
                    array_push($good, "q20");
                    echo "正解";
                } else {
                    echo "<strong>不正解です。正解はabort</strong>";
                }
             }
            ?>
        </p>
        <?php
        if(!empty($good)) {
            $count = count($good);
        } else {
            $count = 0;
        }
        ?>
        <form method="post"action="result.php">
            <input type="submit"class="button"value="結果を見る">
            <input type="hidden"value="<?php echo $count;?>" name="correct_2">
        </form>
    </body>
</html>