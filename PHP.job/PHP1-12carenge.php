<?php

/*

それぞれの商品の税込価格を計算しましょう。
商品は連想配列に入れておきます。
税率は定数に入れておきます。
税込価格の計算は関数を用意し、その関数を使用するようにします。
以下のコードを参考にして、画像の通りに表示しましょう。

*/


  //商品の税込価格を計算しましょう
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
define('TAX',1.1);




  //②商品の情報を連想配列に入れましょう。
  $products = ["鉛筆" =>100 , "消しゴム" =>150 , "物差し" => 500];

  //③税率を計算する関数を用意します。
 function getTriangleArea($value){
return $value * TAX;
 }
  //④繰り返し文を使って画面に指定の文字を表示しましょう！
foreach($products as $key => $value ){

  echo '<br>';
  echo  $key. "の税込み価格は" . getTriangleArea($value) . "です";
}

/*下記の表示にする
  鉛筆の税込み価格は110円です
消しゴムの税込み価格は165円です
物差しの税込み価格は550円です*/

?>

