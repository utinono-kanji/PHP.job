<?php
#count関数
$number=[2,5,6,535,2424];
echo count($number) . "<br>";

#並び替え
$number=[2,5,6,535,2424,1,0, 4];
 sort($number);
 var_dump($number);
echo "<br>";

#配列の中に要素が存在してるか
$name=["田中","中村","木村","今野"];
var_dump(in_array("佐藤",$name));


echo "<br>";

#ifと組み合わせ
$name=["木下","中村","木村","今野"];
if(in_array("田中",$name)){
  echo "田中さんはいます";
} else{
  echo "田中さんはいません";
}
echo "<br>";
##implode（配列を結合して文字列に変換）
$name=["木下","中村","木村","今野"];
$a= implode("@",$name);
echo $a . "<br>";


#explode（文字列を指定の区切りで配列にする）
$name=["木下","中村","木村","今野"];
$a =implode("@",$name);
var_dump($a);
$b =explode("@",$a);
var_dump(($b));
echo "<br>";
?>