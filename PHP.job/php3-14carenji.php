<form action="result3.php"  method="post">

お名前：<input type ="text" name="my_name"><br>
ご希望商品:<input type = "radio" name = "num" value ="A賞">A賞
<input type = "radio" name = "num" value ="B賞">B賞
<input type = "radio" name = "num" value ="C賞">C賞
<br>
個数： <select name="number">
<?php for($i=1;$i<=5;$i++){
  ?>
  <option value="<?php echo $i; ?>">
  <?php echo $i; ?>
  </option>
  <?php } ?>
</select><br>


<input type="submit" value= "申込">
</form>