<html>
 <head>
 </head>
 <body>
  <form action="./search_result.php" method="GET">
  ���O�F<br>
   <input type="text" name="name"><br><br>
  ���N�F<br>
   <select name="birthday">
    <option value="" selected></option>
    <?php for($i=1950; $i<=2010; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  �N<br><br>
  ��ʁF<br>
   <input type="radio" name="type" value="1"> �G���W�j�A<br>
   <input type="radio" name="type" value="2"> �c��<br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>
