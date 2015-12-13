<?php

//名前：初期値
if(empty($_COOKIE['name'])){
	$name = null;
}else{
	$name = $_COOKIE['name'];
}

//名前：今回の入力
if(!empty($_POST['txtName'])){
	$name = $_POST['txtName'];
	setcookie('name', $name);
}

//性別：初期値
if(empty($_COOKIE['seibetsu'])){
	$seibetsu = null;
}else{
	$seibetsu = $_COOKIE['seibetsu'];
}

//性別：今回の入力
if(!empty($_POST['rdoSample'])){
	$seibetsu = $_POST['rdoSample'];
	setcookie('seibetsu', $seibetsu);
}

//趣味：初期値
if(empty($_COOKIE['syumi'])){
	$syumi = null;
}else{
	$syumi = $_COOKIE['syumi'];
}

//趣味：今回の入力
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
  名前：<br>
   <input type="text" name="txtName" value="<?php if(!empty($name)){echo $name;} ?>"><br><br>
  性別：<br>
   <input type="radio" name="rdoSample" value="男" <?php if(!empty($seibetsu) && ($seibetsu == "男")){echo 'checked';} ?>> 男<br>
   <input type="radio" name="rdoSample" value="女" <?php if(!empty($seibetsu) && ($seibetsu == "女")){echo 'checked';} ?>> 女<br><br>
  趣味：<br>
   <textarea name="mulText"><?php if(!empty($syumi)){echo $syumi;} ?></textarea><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>
