<?php
$my_name = $_POST['my_name']; /*GETで送信された値を受け取るためには、$_GETを使用します。(POSTで送信されたらPOSTで受け取る）*/
$emall = $_POST['emall'];

$password = $_POST['password'];
?>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは<?php echo $emall; ?><p>
<p>私のパスワードは、<?php echo $password; ?><p>
<?php
var_dump($_POST);
?>



