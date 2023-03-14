<?php
//関数
//それぞれの三角形の面積を求めなさい
/*1)底辺10cm 高さ5cm
  2)底辺15cm 高さ8cm
  3)底辺8cm 高さ6cm*/
function getTringleArea($base,$height){
  $area =$base * $height / 2;
  print "三角形の面積は".$area. "だよ。";
}
/* 
関数の文法
function 関数名（引数）{
  //処理
}*/
getTringleArea(10,5);
echo '<br>';
getTringleArea(15,8);
echo '<br>';
getTringleArea(8,6);




//ローカル変数＝関数の中で定義した変数のこと　その関数のなかでしか有効にならない
//関数の中で$mynameを出力してみよう
function sayHi($name = "goto"){
  //関数の中で定義する変数 => ローカル変数
  $myname = "php";
  return "Hi!" .$name. "from" . $myname;

}
echo '<br>';
echo sayHi();



?>