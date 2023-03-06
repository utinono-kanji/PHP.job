<?php
$num=1;
while($num <101){
  echo '<br>';
  echo $num;

  if($num % 3 && $num % 5){
    echo "FizzBuzz!!";
  }else if($num % 3){
    echo "Fizz!";
  }else if($num % 5){
    echo "Buzz!!";
    
  }
  $num++;
}

?>