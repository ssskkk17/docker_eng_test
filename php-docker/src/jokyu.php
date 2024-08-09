<?php
session_start();
if(empty($_SESSION['user_name'])) {
    header('Location:index.php');
}
?>
<?php
//deploy
$q1="to move soldiers or weapons into a position where they are ready fpr military action";
//glitch
$q2="a small problem or fault that stops something working successfully";
//avert
$q3="to prevent something bad or dangerous from happening";
//converse
$q4="the oppsite or reverse of a fact or statement";
//fabulous
$q5="extremely good";
//inheritance
$q6="the money, property, etc. that you receive from somebody when they die; the fact of receiving something when somebody dies";
//kindle
$q7="1. to start burning; to make a fire start burning.<br>2. to make something such as an interest, emotion, etc. start to grow in somebody";
//epidemic
$q8="a large number of cases of a pareicular disease happening at the same time in a paticular community";
//extravagant
$q9="spending a lot more money or using a lot more of something than you can afford or than is necessary";
//warranty
$q10="a written agreement in which a company selling something promises to repair or replace it if there is a problem within a particular period of time";
//alternative
$q11="a thing that you can choose to do or have out of two or more possibilities";
//lurk
$q12="to wait somewhere secretly, especially because you are going to do something bad or illegal";
//vulnerable
$q13="weak and easily hurt physically or emotionally";
//verify
$q14="to check that something is true or accurate";
//insulation
$q15="the act of protecting something with a material that prevents heat, sound, electricity, etc. from passing through; the materials used for this";
//oust
$q16="to force somebody out of a job or position of power, especially in order to take their place";
//exclusive
$q17="only to be used by one particular person or group; only given to one particular person or group";
//affluent
$q18="having a lot of money and a good standard of living. The word is similar to prosperous, wealthy.";
//purge
$q19="to remove people from an organization, often violently, because their opinions or activities are unacceptable to the people in power";
//abort
$q20="to end a pregnancy early in order to prevent a baby from developing and being born alive";
$text=array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20);
$rand=array_rand($text, 10);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>上級</title>
        <link rel="stylesheet"type="text/css"href="./css/style6.css">
    </head>
    
    <body>
        <form method="post"action="jokyu_kaito.php">
            <h1>上級問題</h1>
            <h3>以下の英単語の意味に適する単語を選んでください。</h3>
            <h3>すべての問題に答えてください。</h3>
            <br>
            <?php 
            foreach($rand as $key) {
                echo $text[$key];
                echo "<br>";
                if ($text[$key] == "$q1") {
                    echo "<input type='radio'name='q1'value='flee'required>flee";
                    echo "<input type='radio'name='q1'value='perceive'>perceive";
                    echo "<input type='radio'name='q1'value='deploy'>deploy";
                    echo "<input type='radio'name='q1'value='acend'>ascend";
                } elseif ($text[$key] == "$q2") {
                    echo "<input type='radio'name='q2'value='glitch'required>glitch";
                    echo "<input type='radio'name='q2'value='endorsement'>endorsement";
                    echo "<input type='radio'name='q2'value='fame'>fame";
                    echo "<input type='radio'name='q2'value='eclipse'>eclipse";
                } elseif ($text[$key] == "$q3") {
                    echo "<input type='radio'name='q3'value='surpass'required>surpass";
                    echo "<input type='radio'name='q3'value='stink'>stink";
                    echo "<input type='radio'name='q3'value='merge'>merge";
                    echo "<input type='radio'name='q3'value='avert'>avert";
                } elseif ($text[$key] == "$q4") {
                    echo "<input type='radio'name='q4'value='converse'required>converse";
                    echo "<input type='radio'name='q4'value='malicious'>malicious";
                    echo "<input type='radio'name='q4'value='inborn'>inborn";
                    echo "<input type='radio'name='q4'value='considerable'>considerable";
                } elseif ($text[$key] == "$q5") {
                    echo "<input type='radio'name='q5'value='inclement'required>inclement";
                    echo "<input type='radio'name='q5'value='fabulous'>fabulous";
                    echo "<input type='radio'name='q5'value='fierce'>fierce";
                    echo "<input type='radio'name='q5'value='evil'>evil";
                } elseif ($text[$key] == "$q6") {
                    echo "<input type='radio'name='q6'value='inheritance'required>inheritance";
                    echo "<input type='radio'name='q6'value='drawback'>drawback";
                    echo "<input type='radio'name='q6'value='deposit'>deposit";
                    echo "<input type='radio'name='q6'value='patent'>patent";
                } elseif ($text[$key] == "$q7") {
                    echo "<input type='radio'name='q7'value='ponder'required>ponder";
                    echo "<input type='radio'name='q7'value='descend'>descend";
                    echo "<input type='radio'name='q7'value='hover'>hover";
                    echo "<input type='radio'name='q7'value='kindle'>kindle";
                } elseif ($text[$key] == "$q8") {
                    echo "<input type='radio'name='q8'value='flaw'required>flaw";
                    echo "<input type='radio'name='q8'value='epidemic'>epidemic";
                    echo "<input type='radio'name='q8'value='immune'>immune";
                    echo "<input type='radio'name='q8'value='venomous'>venomous";
                } elseif ($text[$key] == "$q9") {
                    echo "<input type='radio'name='q9'value='impecable'required>impecable";
                    echo "<input type='radio'name='q9'value='transparent'>transparent";
                    echo "<input type='radio'name='q9'value='sustainable'>sustainable";
                    echo "<input type='radio'name='q9'value='extravagant'>extravagant";
                } elseif ($text[$key] == "$q10") {
                    echo "<input type='radio'name='q10'value='contamination'required>contamination";
                    echo "<input type='radio'name='q10'value='warranty'>warranty";
                    echo "<input type='radio'name='q10'value='pang'>pang";
                    echo "<input type='radio'name='q10'value='malfunction'>malfunction";
                } elseif ($text[$key] == "$q11") {
                    echo "<input type='radio'name='q11'value='rhinoceros'required>rhinoceros";
                    echo "<input type='radio'name='q11'value='radish'>radish";
                    echo "<input type='radio'name='q11'value='excerpt'>excerpt";
                    echo "<input type='radio'name='q11'value='alternative'>alternative";
                } elseif ($text[$key] == "$q12") {
                    echo "<input type='radio'name='q12'value='lurk'required>lurk";
                    echo "<input type='radio'name='q12'value='forge'>forge";
                    echo "<input type='radio'name='q12'value='transcend'>transcend";
                    echo "<input type='radio'name='q12'value='deteriorate'>deteriorate";
                } elseif ($text[$key] == "$q13") {
                    echo "<input type='radio'name='q13'value='imaginary'required>imaginary";
                    echo "<input type='radio'name='q13'value='vigorous'>vigorous";
                    echo "<input type='radio'name='q13'value='cosmic'>cosmic";
                    echo "<input type='radio'name='q13'value='vulnerable'>vulnerable";
                } elseif ($text[$key] == "$q14") {
                    echo "<input type='radio'name='q14'value='verify'required>verify";
                    echo "<input type='radio'name='q14'value='issue'>issue";
                    echo "<input type='radio'name='q14'value='consolidate'>consolidate";
                    echo "<input type='radio'name='q14'value='dilute'>dilute";
                } elseif ($text[$key] == "$q15") {
                    echo "<input type='radio'name='q15'value='eggplant'required>eggplant";
                    echo "<input type='radio'name='q15'value='cuisine'>cuisine";
                    echo "<input type='radio'name='q15'value='insulation'>insulation";
                    echo "<input type='radio'name='q15'value='railing'>railing";
                } elseif ($text[$key] == "$q16") {
                    echo "<input type='radio'name='q16'value='admonish'required>admonish";
                    echo "<input type='radio'name='q16'value='condense'>condense";
                    echo "<input type='radio'name='q16'value='allay'>allay";
                    echo "<input type='radio'name='q16'value='oust'>oust";
                } elseif ($text[$key] == "$q17") {
                    echo "<input type='radio'name='q17'value='exclusive'required>exclusive";
                    echo "<input type='radio'name='q17'value='nasal'>nasal";
                    echo "<input type='radio'name='q17'value='bogus'>bogus";
                    echo "<input type='radio'name='q17'value='coarse'>coarse";
                } elseif ($text[$key] == "$q18") {
                    echo "<input type='radio'name='q18'value='impoverished'required>impoverished";
                    echo "<input type='radio'name='q18'value='giddy'>giddy";
                    echo "<input type='radio'name='q18'value='affluent'>affluent";
                    echo "<input type='radio'name='q18'value='indefferent'>indefferent";
                } elseif ($text[$key] == "$q19") {
                    echo "<input type='radio'name='q19'value='muse'required>muse";
                    echo "<input type='radio'name='q19'value='chide'>chide";
                    echo "<input type='radio'name='q19'value='bask'>bask";
                    echo "<input type='radio'name='q19'value='purge'>purge";
                } elseif ($text[$key] == "$q20") {
                    echo "<input type='radio'name='q20'value='endorse'required>endorse";
                    echo "<input type='radio'name='q20'value='wince'>wince";
                    echo "<input type='radio'name='q20'value='abort'>abort";
                    echo "<input type='radio'name='q20'value='soothe'>soothe";
                }
                echo "<br>";
                echo "<br>";
                echo "<br>";
            }
            ?>
            <input type="submit"class="button"value="答え合わせをする">
        </form>
    </body>
</html>