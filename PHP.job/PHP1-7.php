<?php
//ループ分//
/* While文
While(条件式){
  実行する処理
}*/
// While文を使って0~9まで数えるループ分を作る
$num=0;
while($num < 10){
  echo $num;
  $num++;
  
  // $num++;がないと無限ループになる
 
}

/*do...While
do{
  実行する処理
}while(条件式)
 do..While文を使って0~9まで数えるループ分を作る*/
 echo '<br>';
 $num =0;
 do{
  echo $num;
  $num++;
 } while($num < 10);


 echo '<br>';
 /*for文
 for(初期化式;条件式;変化式){
  実行する処理
 }*/
 //0~9まで数える
 for($i=0;$i<10;$i++){
  echo $i;
 }

 echo '<br>';
 /*break=繰り返しを途中で終了させる*/
$num = 0;
while($num < 10){
  echo $num;
  $num++;
  if($num ==5){
    break;
  }
} 

?>