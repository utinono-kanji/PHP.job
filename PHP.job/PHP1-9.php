<?php
//配列(Array)
$countrise = ["America","Japan","China","Korea"];
//配列の宣言（配列は0から数える）
// 0番目のAmericaを出力したい場合
echo $countrise[0];
// 1番目のJapanを出力したい場合
echo $countrise[1];
// 2番目のChinaを出力したい場合
echo $countrise[2];
// 3番目のKoreaを出力したい場合
echo $countrise[3];

/*配列の各要素にアクセスする方法は上記になりますが、
配列全体を表示させたい場合は、以前使用したvar_dumpを使用します。*/

var_dump($countrise);
echo '<br>';
//連想配列(0番目、1番目、2番目にある箱に名前をつけて、分かりやすくしよう という考えが連想配列です。)
$fruits = ["りんご","みかん","ぶどう"];
// 0番目のりんごを出力
echo $fruits[0];
echo '<br>';
// 1番目のみかんを出力
echo $fruits[1];
echo '<br>';
// 2番目のぶどうを出力
echo $fruits[2];
echo '<br>';
// 配列全体を出力
var_dump($fruits);
echo '<br>';


//連想配列の宣言
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

// りんごを出力
echo $fruits["apple"];
echo '<br>';
// みかんを出力
echo $fruits["orange"];
echo '<br>';
// ぶどうを出力
echo $fruits["grape"];
echo '<br>';
var_dump($fruits);
echo '<br>';
//配列、連想配列への要素の追加

//配列の場合
$fruits = ["りんご","みかん","ぶどう"];
// 0、1、2番目はもうつかわれているので、次は3番目
$fruits[3] = "もも";
//また連番で良いという場合は、下記のように書けます。

// プログラムが勝手に判断して順番をつけてくれる
//$fruits[] = "もも";
var_dump($fruits);
echo '<br>';
//連想配列の場合
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"]; 
$fruits["peach"] = "もも";
var_dump($fruits);
?>

