<?php

//���O�F�����l
if(empty($_COOKIE['name'])){
	$name = null;
}else{
	$name = $_COOKIE['name'];
}

//���O�F����̓���
if(!empty($_POST['txtName'])){
	$name = $_POST['txtName'];
	setcookie('name', $name);
}

//���ʁF�����l
if(empty($_COOKIE['seibetsu'])){
	$seibetsu = null;
}else{
	$seibetsu = $_COOKIE['seibetsu'];
}

//���ʁF����̓���
if(!empty($_POST['rdoSample'])){
	$seibetsu = $_POST['rdoSample'];
	setcookie('seibetsu', $seibetsu);
}

//��F�����l
if(empty($_COOKIE['syumi'])){
	$syumi = null;
}else{
	$syumi = $_COOKIE['syumi'];
}

//��F����̓���
if(!empty($_POST['mulText'])){
	$syumi = $_POST['mulText'];
	setcookie('syumi', $syumi);
}

?>

<html>
 <head>
 </head>
 <body>
  <form action="./5_7challenge.php" method="POST">
  ���O�F<br>
   <input type="text" name="txtName" value="<?php if(!empty($name)){echo $name;} ?>"><br><br>
  ���ʁF<br>
   <input type="radio" name="rdoSample" value="�j" <?php if(!empty($seibetsu) && ($seibetsu == "�j")){echo 'checked';} ?>> �j<br>
   <input type="radio" name="rdoSample" value="��" <?php if(!empty($seibetsu) && ($seibetsu == "��")){echo 'checked';} ?>> ��<br><br>
  ��F<br>
   <textarea name="mulText"><?php if(!empty($syumi)){echo $syumi;} ?></textarea><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>
