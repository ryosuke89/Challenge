<html>
 <head>
 </head>
 <body>
  <form action="./update_result.php" method="POST">
  ���O�F<br>
   <input type="text" name="name"><br><br>
  ���N�����F<br>
   <select name="year">
    <option value="" selected></option>
    <?php for($i=1950; $i<=2010; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  �N
   <select name="month">
    <option value="" selected></option>
    <?php for($i=1; $i<=12; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  ��
   <select name="day">
    <option value="" selected></option>
    <?php for($i=1; $i<=31; $i++):?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php endfor;?>
   </select>
  ��<br><br>
  ��ʁF<br>
   <input type="radio" name="type" value="1"> �G���W�j�A<br>
   <input type="radio" name="type" value="2"> �c��<br><br>
  �d�b�ԍ��F<br>
   <input type="text" name="tell"><br><br>
  ���ȏЉ�F<br>
   <textarea name="comment"></textarea><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>