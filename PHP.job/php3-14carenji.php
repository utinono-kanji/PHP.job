<form action="result3.php"  method="post">

お名前：<input type ="text" name="my_name"><br>
ご希望商品:<input type = "radio" name = "num"value ="A">A賞
<input type = "radio" name = "num"value ="B">B賞
<input type = "radio" name = "num"value ="C">C賞
<br>
個数： <select name="number">
<?php for($i=1;$i<=5;$i++){
  ?>
  <option value="<?php echo $i; ?>">
  <?php echo $i; ?>
  </option>
  <?php } ?>
</select><br>

<input type= "hidden" name ="hidden_param" value = "隠しパラメータから" />
<input type="submit" value= "申込">
</form>