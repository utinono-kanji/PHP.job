<?php
/*
出力にはvar_dumpを使用します。
まず、連想配列を定義した後、要素を追加して再度出力します*/
$array =["red" =>"赤","bule" =>"青","green" =>"緑"];
var_dump($array);
echo '<br>';
$array =["red" =>"赤","bule" =>"青","green" =>"緑"];
$array ["yellow"] = "黄色";
var_dump($array);
?>