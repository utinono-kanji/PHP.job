<?php
//条件分岐
//if文
$age =18;
if($age>= 20){
  echo "お酒が飲めるぞ";
}else{
  echo "お酒は20になってから";

}
echo '<br>';

//論理値の条件分岐
$is_student = true;
if($is_student){
  echo "あなたは学生です";
}

//複数条件分岐
//年齢が２５歳未満で学生であれば学割パックが使えますと表示
$age = 24;

$is_student = true;
if($age <25 && $is_student ){
echo '学割パックが使えるよ';

//elseif
}elseif($age <25){
  echo "若者応援割が使えます";
}
echo '<br>';
//血液型を診断する条件分岐
$blood ='B';
if($blood =='A'){
  echo "A型です";
  }elseif($blood == 'B'){
    echo "B型です";
}elseif($blood=="o"){

echo "O型です";
}elseif($blood=="AB"){
  echo "AB型です";
}else{
  echo "A/B/C/ABから選択してください";
}
echo '<br>';
//Switch文
$blood ="B";
switch($blood){
case 'A':
    print 'A型です';
    break;
case 'B':
  print 'B型です';
  break;
  case 'O':
    print 'O型です';
    break;
    case 'AB':
      print 'AB型です';
      break;
      default:
      echo 'A/B/O/ABから選択してください';
}

echo '<br>';

$name="";
if($name !=""){
  echo '名前を受け付けましょう';
}else{
  echo '名前を入力してください';
}
echo '<br>';
//三項演算子 if文を簡潔に書く方法 
//条件式　? 式1 : 式2
$name="";

echo($name !="")? '名前を受け付けました' : '名前を入力して下ださい';
echo '<br>';
//1===
/*A === B	  AとBが等しく、同じ型である場合
A !== B	    AとBが等しくないか、同じ型でない場合*/
$string = '1';
$int =1;

if(1 ===$string){
  echo '変数stringはint型です。';
}else{
  echo '変数stringはstring型です。';
}
echo '<br>';
//「変数stringはstring型です」が出力される
if(1=== $int){
  echo '変数stringはint型です。';
}else{
  echo '変数stringはstring型です。';
}
// 「変数stringはint型です。」が出力される
?>