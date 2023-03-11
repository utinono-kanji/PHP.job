<?php
//foreach=与えられた要素全てに対して、処理を行うことができます
$fruits =["りんご","みかん","もも"];
foreach($fruits as $value){
  echo $value;

}
//foreachはループ文の一種です。
/*foreach (配列変数 as 変数) {
  実行する処理;
}*/

//連想配列の場合
//$fruits =["apple" =>"りんご","orenge"=>"みかん", "peach" =>"もも"];
echo '<br>';
foreach($fruits as $key=>$value){
  echo $key;
  echo $value;
}
?>