<?php
#例外処理
/*例外処理の書き方
もしも例外が発生した時のための処理は、 try{ } catch( ){ }  finally { }という構文を使います。
tryで囲われた中でエラーが発生した時に、その時点で処理を停止し、catchの中で書かれた処理が実行されます。
finallyはなくても大丈夫ですが、例外に関係なく最後に処理される内容を記述します。

try構文の書き方*/
/*try{
  //例外が発生する可能性があるコード
  throw new  #例外クラス名(引数)
}catch (){#(例外クラス名　例外を代入する変数名){
    //例外が発生した場合に行う処理

}
//エラーが発生しなければ続く通常の処理*/
 #０で割り算をしたという事例で見てみましょう。
 function devide($int1,$int2){
  try{
    if($int2 ==0){
      throw new Exception('0で割り切ることはできません');
    }
    return $int1 / $int2;

  } catch(Exception $e){
    echo "例外処理が発生しました";
    echo "<br>";
    echo $e->getMessage();
}
}

echo devide(5, 0);
  
?>