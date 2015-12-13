<html>
 <head>
 </head>
 <body>
  <form action="./7_13update_2challenge.php" method="POST">
  データの更新<br><br>
  カラム名の選択：<br>
   <select name="column">
    <option value="" selected>･･･選択してください･･･</option>
    <option value="ID">ID</option>
    <option value="名前">名前</option>
    <option value="電話番号">電話番号</option>
    <option value="年齢">年齢</option>
    <option value="生年月日">生年月日</option>
   </select><br><br>
  選択したカラム名に元のデータを入力してください<br>
  それ以外に更新するデータを入力してください<br><br>
  ID：<br>
   <input type="text" name="profilesID"><br><br>
  名前：<br>
   <input type="text" name="name"><br><br>
  電話番号：<br>
   <input type="text" name="tell"><br><br>
  年齢：<br>
   <input type="text" name="age"><br><br>
  生年月日：<br>
   <input type="text" name="birthday"><br><br>
   <input type="submit" name="btnSubmit">
  </form>
 </body>
</html>