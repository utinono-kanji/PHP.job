<form action="result2.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
    お名前：<input type= "text" name="my_name"><br>
    パスワード：<input type="password" name ="password"><br>
    性別：
    <input type ="radio" name ="sex"value="男性">男性
    <input type= "radio" name ="sex"value="女性">女性
    <br>
    <input type= "hidden" name ="hidden_param" value = "隠しパラメータから" />
        <input type="submit" value="送信するよ" /><br>
    </form>




    