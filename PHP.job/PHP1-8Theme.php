<?php

/*3の倍数のとき、 Fizz! と出力します。
5の倍数のとき、 Buzz! と出力します。
3の倍数かつ5の倍数のとき、 FizzBuzz!! と出力します。(15の倍数、と考えるのはナシです。)
3の倍数でも、5の倍数でもない場合は、その数を出力します。
それを1〜100まで実施してください。*/ 
$num=1;
while($num <=100){
  echo '<br>';
  echo $num;

  if($num % 3==0 && $num % 5==0){
    echo "FizzBuzz!!";
  }else if($num % 3==0){
    echo "Fizz!" ;
    
  }else if($num % 5==0){
    echo "Buzz!";
  }else{
    echo "";
  }
  $num++;

}



?>
