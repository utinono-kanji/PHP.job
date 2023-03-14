<?php
//$myname =  "ruby"
$myname = "ruby";

function sayHi($name = "goto"){
  $myname = "php";
  return "Hi!" . $name . "from".$myname;
}
 
  echo sayHi();
  echo '<br>';
  echo $myname;
  ?>