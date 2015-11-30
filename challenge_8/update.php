<html>
 <head>
 </head>
 <body>
  <form action="./update_result.php" method="POST">
  名前：<br>
   <input type="text" name="name"><br><br>
  生年月日：<br>
   <select name="year">
    <option value="" selected></option>
    <?php for($i=1950; $i<=2010; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  年
   <select name="month">
    <option value="" selected></option>
    <?php for($i=1; $i<=12; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  月
   <select name="day">
    <option value="" selected></option>
    <?php for($i=1; $i<=31; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  日<br><br>
  種別：<br>
   <input type="radio" name="type" value="1"> エンジニア<br>
   <input type="radio" name="type" value="2"> 営業<br><br>
  電話番号：<br>
   <input type="text" name="tell"><br><br>
  自己紹介：<br>
   <textarea name="comment"></textarea><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>