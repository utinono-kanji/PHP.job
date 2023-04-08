
#フォームに入力した内容を取得する
<form action="result.php" method="post">
  <!--formタグには設定しなければならない属性があります。

action・・・データを渡す先のページ（ボタンを押すと、そのページに移ります。）
method・・・通信するプロトコル（手段）を指定します。後ほど解説しますが、今回は GET で送ります-->
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="emall"/>
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>

