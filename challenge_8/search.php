<html>
 <head>
 </head>
 <body>
  <form action="./search_result.php" method="GET">
  名前：<br>
   <input type="text" name="name"><br><br>
  生年：<br>
   <select name="birthday">
    <option value="" selected></option>
    <?php for($i=1950; $i<=2010; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  年<br><br>
  種別：<br>
   <input type="radio" name="type" value="1"> エンジニア<br>
   <input type="radio" name="type" value="2"> 営業<br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>
