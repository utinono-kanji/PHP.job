<?php
#便利な関数
#celi 切り上げ
$x =5.2;
echo ceil($x) . "<br>";
#floor (切り捨て)
$x=5.2;
echo floor($x) . "<br>";

#round(四捨五入)
$x=5.2;
echo round($x) . "<br>";

#pi(円周率)
$x=5.2;
echo pi();
function circleArea($r){
  $circle_area=$r*$r*pi();
  echo $circle_area;
}
//半径が２の円の面積の計算
circleArea(2) ;
echo "<br>";
#mt_rand(乱数)
/*乱数というと聞き馴染みがないかもしれませんが、要はランダムな値を1つ出力します。
ゲームなどでよく使用します（最近だとガチャですね）。
1から100の範囲で、ランダムに1つ数字を取り出す場合の例を書きます。*/

echo mt_rand(1,100) . "<br>";

#strlen(文字列の長さ)
$str = "hogehoge";
echo strlen($str) . "<br>";

/*strpos（検索）
公式ドキュメント-strpos-
strposは、対象の文字列の中に、ある文字が何番目にあるか教えてくれます。
例えば、yoneyamaという文字列の中で、aという文字を探すと、6文字目と8文字目にあります。
ただし、strposは 最初に出てくる順番 なので、出力としては6文字目が該当します。
また、プログラミングにおいて、順番は0から始まるので、6文字目は 5 で返却されます。*/ 

$str ="yoneyama";
echo strpos($str, "a"). "<br>";
// 5と出力される

//substr 文字列の切り取り
#substr(対象の文字列,開始位置,文字数)
$str ="yoneyama";
echo substr($str, -2,2) . "<br>"; 
#substr($str, -2, 2)であれば、$strの-2番目から2文字を切り取るということですね。
//maと出力される

#str_replace(置換)
$str ="yoneyama";
#str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
echo str_replace("neya","NEYA",$str) . "<br>";
#「 空白を空文字で置き換える 」という意味で、空白を削除する、という使い方もされます。
$str = "I am Yoneyama";
echo str_replace("","",$str). "<br>";

#日本語において、文字列操作の関数を使用する場合
$str ="あいうえお";
echo strlen($str) . "<br>"; #15
/*これを実行すると、15と出力されます。
これは、日本語の文字が マルチバイト文字列 というものだからです。
半角英数字とは違う数え方をするので、こうなってしまいます。
そこでそれを対応させる為にはmb_とつく、マルチバイトに対応したメソッドを使用してあげましょう。
ちなみに、mbはマルチバイトの略です。*/
$str = "あいうえお";
echo mb_strlen($str) . "<br>"; #5

#表示に関する関数
#printf（フォーマット化した文字列を出力）
$name = "米山さん";
$limit_number = 40;
printf("%sの残り時間はあと%dです",$name,$limit_number );
echo "<br>";
/*%s、%dは %記法 と呼び、何のデータ型で入るか指定してあげます。

%s…文字列
%d…数値*/
$name = "米山さん"; $limit_time = 40; $price = 4000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
echo "<br>";
$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

#sprintf（変数に代入できるprintf）
/*printfに似たメソッドで、sprintfというメソッドがあります。
ほとんど同じように使用できますが、printfはechoと同様出力をしますが、sprintfはフォーマット化して終わりです。
そのため、出力するためには別途echoする必要があります。*/ 
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time . "<br>";
?>