<?php

  //②フォームからのデータを受け取ります
$myname = $_POST['myname'];
$number =$_POST['number'];

//③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
$random = rand(1,6);
$result1 =$number * $random;
$result2 =['凶','小吉','中吉','吉','大吉','残念'];
  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if($result1  >= 1 && $random <=10){
    $result2=  "凶" ;
  }elseif ($result1 >= 11 && $result1<=15){
    $result2="小吉";
  }elseif ($result1 >= 16 && $result1<=20){
    $result2= "中吉";
  }elseif ($result1 >= 21 && $result1<=25){
    $result2= "吉";
  }else if($result1 >= 26 && $result1<=36){
    $result2= "大吉";
  }else {
    $result2= "残念" . "<br>";
  }

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう


date_default_timezone_set('Asia/Tokyo');
echo date("Y-m-d H:i:s", time());

?>
<p>名前は <?php echo $myname; ?> です。</p>
<p>番号は <?php echo $number; ?> です。</p>
<p>結果は<?php echo $result1 ?>です。</p>