<?php
#便利な関数(配列)

#count(要素の数を数える)
$name =["tanaka", "nakamura","kikuti","yoneda"];
echo count($name). "<br>";

#sort(要素の並び替え)
#アルファベット順に並び替える
$name =["tanaka", "nakamura","kikuti","yoneda","anndou"];
sort($name);
var_dump($name);
echo "<br>";
#数字も小さい順に並び替えれる
$number = [34,28,1,65,54];
sort($number);
var_dump($number);
echo "<br>";

#in_array（配列に中にある要素が存在しているか）
$name=["taka","hitomi","roura","miyra"];
//in_array(調べたい文字もしくは数値, 対象の配列)
var_dump(in_array("taka",$name));
// 論理値が結果として返る => bool(true)
echo "<br>";
/*このin_arrayはif文の条件でよく使用します。
 例えば、配列の中に田中さんがいたら、「
 田中さんがいるよ！」と表示し、いなければ「田中さんはいないよ！」
というプログラムは下記になります。 */
$name=["taka","hitomi","roura","miyra"];
if(in_array("taka",$name)){
  echo "takaさんがいるよ";

}else {
  echo "takaさんはいないよ";
}
echo "<br>";

#implode（配列を結合して文字列に変換）
$name=["taka","hitomi","roura","miyra"];
$a= implode("@",$name);
echo $a. "<br>";

#explode（文字列を指定の区切りで配列にする）
$name=["taka","hitomi","roura","miyra"];
$a =implode("@",$name);
var_dump($a);

$b=explode("@",$a);
var_dump($b);
?>