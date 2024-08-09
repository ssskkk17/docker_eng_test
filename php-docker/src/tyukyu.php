<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
//resign
$q1="to officially tell somebody that you are leaving your job, an organization, etc";
//omit
$q2="not to include something/somebody, either deliberately or because you have forgotten it/them";
//lung
$q3="either of the two organs in the chest that you use for breathing";
//decline
$q4="to refuse politely to accept or to do something";
//diagnose
$q5="to say exactly what an illness or the cause of a problem is";
//deduction
$q6="the process of using information you have in order to understand a particular situation or to find the answer to a problem";
//spinach
$q7="a vegetable with large dark green leaves that are cooked or eaten in salads";
//pharmacist
$q8="a person whose job is to prepare medicines and sell or give them to the public in a shop/store or in a hospital";
//confidential
$q9="meant to be kept secret and not told to or shared with other people";
//nutrition
$q10="the process by which living things receive the food necessary for them to grow and be healthy";
//jealous
$q11="feeling angry or unhappy because somebody you like or love is showing interest in somebody else";
//hostile
$q12="very unfriendly or aggressive and ready to argue or fight";
//representative
$q13="a person who has been chosen to speak or vote for somebody else or on behalf of a group";
//controversial
$q14="causing a lot of angry public discussion and disagreement";
//temporary
$q15="lasting or intended to last or be used only for a short time; not permanent";
//ditinctive
$q16="having a quality or characteristic that makes something different and easily noticed";
//detect
$q17="to discover or notice something, especially something that is not easy to see, hear, etc";
//religion
$q18="the belief in the existence of a god or gods, and the activities that are connected with the worship of them, or in the teachings of a spiritual leader";
//embarrass
$q19="to make somebody feel shy, awkward or ashamed, especially in a social situation";
//emergency
$q20="a sudden serious and dangerous event or situation which needs immediate action to deal with it";
$text=array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20);
$rand=array_rand($text, 10);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>中級</title>
        <link rel="stylesheet"type="text/css"href="./css/style6.css">
    </head>
    
    <body>
        <form method="post"action="tyukyu_kaito.php">
            <h1>中級問題</h1>
            <h3>以下の英単語の意味に適する単語を選んでください。</h3>
            <h3>*すべての問題に答えてください。</h3>
            <br>
            <?php
            foreach($rand as $key) {
                echo $text[$key];
                echo "<br>";
                if ($text[$key] == "$q1") {
                    echo "<input type='radio'name='q1'value='avoid'required>avoid";
                    echo "<input type='radio'name='q1'value='rub'>rub";
                    echo "<input type='radio'name='q1'value='resign'>resign";
                    echo "<input type='radio'name='q1'value='generate'>generate";
                    
                } elseif ($text[$key] == "$q2") {
                    echo "<input type='radio'name='q2'value='regist'required>regist";
                    echo "<input type='radio'name='q2'value='advertise'>advertise";
                    echo "<input type='radio'name='q2'value='cease'>cease";
                    echo "<input type='radio'name='q2'value='omit'>omit";
                } elseif ($text[$key] == "$q3") {
                    echo "<input type='radio'name='q3'value='lung'required>lung";
                    echo "<input type='radio'name='q3'value='heart'>heart";
                    echo "<input type='radio'name='q3'value='thumb'>thumb";
                    echo "<input type='radio'name='q3'value='headache'>headache";
                } elseif ($text[$key] == "$q4") {
                    echo "<input type='radio'name='q4'value='decline'required>decine";
                    echo "<input type='radio'name='q4'value='adopt'>adopt";
                    echo "<input type='radio'name='q4'value='provide'>provide";
                    echo "<input type='radio'name='q4'value='imply'>imply";
                } elseif ($text[$key] == "$q5") {
                    echo "<input type='radio'name='q5'value='solicit'required>solicit";
                    echo "<input type='radio'name='q5'value='diagnose'>diagnose";
                    echo "<input type='radio'name='q5'value='bolster'>bolster";
                    echo "<input type='radio'name='q5'value='scrabble'>scrabble";
                } elseif ($text[$key] == "$q6") {
                    echo "<input type='radio'name='q6'value='assembly'required>assembly";
                    echo "<input type='radio'name='q6'value='delusion'>delusion";
                    echo "<input type='radio'name='q6'value='architecture'>architecture";
                    echo "<input type='radio'name='q6'value='deduction'>deduction";
                } elseif ($text[$key] == "$q7") {
                    echo "<input type='radio'name='q7'value='radish'required>radish";
                    echo "<input type='radio'name='q7'value='spinach'>spinach";
                    echo "<input type='radio'name='q7'value='eggplant'>eggplant";
                    echo "<input type='radio'name='q7'value='burglar'>burglar";
                } elseif ($text[$key] == "$q8") {
                    echo "<input type='radio'name='q8'value='carpenter'required>carpenter";
                    echo "<input type='radio'name='q8'value='surgeon'>surgeon";
                    echo "<input type='radio'name='q8'value='pharmacist'>pharmacist";
                    echo "<input type='radio'name='q8'value='smuggler'>smuggler";
                } elseif ($text[$key] == "$q9") {
                    echo "<input type='radio'name='q9'value='confidential'required>confidential";
                    echo "<input type='radio'name='q9'value='valid'>valid";
                    echo "<input type='radio'name='q9'value='exempt'>exempt";
                    echo "<input type='radio'name='q9'value='woozy'>woozy";
                } elseif ($text[$key] == "$q10") {
                    echo "<input type='radio'name='q10'value='cancer'required>cancer";
                    echo "<input type='radio'name='q10'value='hesitation'>hesitation";
                    echo "<input type='radio'name='q10'value='nutrition'>nutrition";
                    echo "<input type='radio'name='q10'value='oxygen'>oxygen";
                } elseif ($text[$key] == "$q11") {
                    echo "<input type='radio'name='q11'value='lazy'required>lazy";
                    echo "<input type='radio'name='q11'value='jealous'>jealous";
                    echo "<input type='radio'name='q11'value='greedy'>greedy";
                    echo "<input type='radio'name='q11'value='available'>available";
                } elseif ($text[$key] == "$q12") {
                    echo "<input type='radio'name='q12'value='vacant'required>vacant";
                    echo "<input type='radio'name='q12'value='steady'>steady";
                    echo "<input type='radio'name='q12'value='hostile'>hostile";
                    echo "<input type='radio'name='q12'value='coincidental'>coincidental";
                } elseif ($text[$key] == "$q13") {
                    echo "<input type='radio'name='q13'value='representative'required>representative";
                    echo "<input type='radio'name='q13'value='vet'>vet";
                    echo "<input type='radio'name='q13'value='novice'>novice";
                    echo "<input type='radio'name='q13'value='attorney'>attorney";
                } elseif ($text[$key] == "$q14") {
                    echo "<input type='radio'name='q14'value='roomy'required>roomy";
                    echo "<input type='radio'name='q14'value='controversial'>controversial";
                    echo "<input type='radio'name='q14'value='priviledge'>previledge";
                    echo "<input type='radio'name='q14'value='complicated'>complicated";
                } elseif ($text[$key] == "$q15") {
                    echo "<input type='radio'name='q15'value='comtemporary'required>comtemporary";
                    echo "<input type='radio'name='q15'value='latest'>latest";
                    echo "<input type='radio'name='q15'value='spectacular'>spectacular";
                    echo "<input type='radio'name='q15'value='temporary'>temporary";
                } elseif ($text[$key] == "$q16") {
                    echo "<input type='radio'name='q16'value='urgent'required>urgent";
                    echo "<input type='radio'name='q16'value='distinctive'>distinctive";
                    echo "<input type='radio'name='q16'value='present'>present";
                    echo "<input type='radio'name='q16'value='vague'>vague";
                } elseif ($text[$key] == "$q17") {
                    echo "<input type='radio'name='q17'value='withdraw'required>withdraw";
                    echo "<input type='radio'name='q17'value='accomplish'>accomplish";
                    echo "<input type='radio'name='q17'value='fulfill'>fulfill";
                    echo "<input type='radio'name='q17'value='detect'>detect";
                } elseif ($text[$key] == "$q18") {
                    echo "<input type='radio'name='q18'value='capacity'required>capacity";
                    echo "<input type='radio'name='q18'value='religion'>religion";
                    echo "<input type='radio'name='q18'value='incovenience'>incovenience";
                    echo "<input type='radio'name='q18'value='rug'>rug";
                } elseif ($text[$key] == "$q19") {
                    echo "<input type='radio'name='q19'value='impose'required>impose";
                    echo "<input type='radio'name='q19'value='sneeze'>sneeze";
                    echo "<input type='radio'name='q19'value='embarrass'>embarrass";
                    echo "<input type='radio'name='q19'value='qualify'>qualify";
                } elseif ($text[$key] == "$q20") {
                    echo "<input type='radio'name='q20'value='insuarance'required>insuarance";
                    echo "<input type='radio'name='q20'value='suggestion'>suggestion";
                    echo "<input type='radio'name='q20'value='emergency'>emergency";
                    echo "<input type='radio'name='q20'value='debt'>debt";
                }
                echo "<br>";
                echo "<br>";
                echo "<br>";
            }
            ?>
            <input type="submit"class="button"name="button"value="答え合わせをする">
            <br>
            <br>
        </form>
    </body>
</html>