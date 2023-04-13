<?php
date_default_timezone_set('Asia/Tokyo');
#便利な関数（日付・時間）
#time（現在時刻を取得）
echo time() . "<br>";
/*現在時刻が1970/1/1 00:00:00 から何秒経過しているか 
表示しています*/
var_dump(time());
echo "<br>";
#date（タイムスタンプから日付に戻す）
//現在の時刻を取得
echo date("Y-m-d H:i:s",time()) . "<br>";

#直接タイムスタンプを指定する
//例2017/4/12 16:00:00
echo date("Y-m-d H:i:s",1491980400) . "<br>";

#数値以外のところは比較的自由にできるので、例えば日本語にするなら、
echo strtotime("2017/2/16 11:25:00") . "<br>";

/*日付ではない指定方法
strtotimeは案外便利で、 last Sunday と渡すと、先週の日曜日の現時刻を返してくれます。
また、 +2 day と書くと、2日後の現時刻を返してくれます。

*/
#先週の日曜日
echo strtotime("last Sunday") . "<br>";
//2日後
echo strtotime("+2 day") . "<br>";
?>