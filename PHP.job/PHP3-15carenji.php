<?php
 /*本項で扱った各メソッドに関して、1つずつ自分で例題をつくって試してみましょう。
凝ったものである必要はありません。
マルチバイト対応の関数はやらなくてもよいです（mb_strlenなど）*/

#celi（切り上げ)
$a = 110.8;
echo ceil($a). "<br>";

#floor（切り捨て）
$a= 18.5;
echo floor($a) . "<br>";


#round(四捨五入)
$a=18.234;
echo round($a) . "<br>";

    #pi(円周率)
    echo pi();

    function circleArea($r){
      $asa =$r * $r *pi();
      echo $asa . "<br>";
    }
    #半径が６の面積の計算
    circleArea(14);

    #mt_rand(乱数)
    echo mt_rand(1,10) . "<br>";

    #strlen(文字列の長さ)
    $str =" tatatattatetesfhesfulnamchfdnuihfdnsui";
    echo strlen($str) . "<br>";
    #strpos（検索）
    $str = "dasihf;ashf ;ashf;haf;ia";
    echo strpos($str, "ash") . "<br>";

    #substr(文字の切り取り)
    $str = "jifhoishf";
    echo substr($str, -2, 4) . "<br>";

    #str_replace(置換)
    $str = "youdofoa";
    echo str_replace("you" ,"YOU", $str) . "<br>";

    #文字列長さ mt_strlen
    $str = "きろたにけの";
    echo mb_strlen($str) . "<br>";

    /*表示に関する関数
printf（フォーマット化した文字列を出力）*/

$name ="鴨居さん";

$age =35;
printf("%s現在の年齢は%d歳です",$name,$age) ;
echo "<br>";

$a=4;
$b=4;
printf("残り%02d時間%02d分",$a,$b) . "<br>";
echo "<br>";
$c=36;
$d=23;
printf("残り時間は%02d時間%02d分",$c,$d);
echo "<br>";
$e=sprintf("残り時間は%02d時間%02d分",$c,$d);
echo $e . "<br>";

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;


