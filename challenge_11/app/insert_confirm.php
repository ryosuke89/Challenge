<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php

    //課題2：年月日が「----」,「--」の場合、nullになるように変更
    if($_POST['year'] == '----'){
      $_POST['year'] = null;
    }

    if($_POST['month'] == '--'){
      $_POST['month'] = null;
    }

    if($_POST['day'] == '--'){
      $_POST['day'] = null;
    }

    //課題2：月日がnullの場合、処理が通過しないように変更
    if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment'])){

        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //課題4：year,month,dayのPOST取得を追加
        $post_year = $_POST['year'];
        $post_month = $_POST['month'];
        $post_day = $_POST['day'];

        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

        //課題4：year,month,dayのセッションを追加
        $_SESSION['year'] = $post_year;
        $_SESSION['month'] = $post_month;
        $_SESSION['day'] = $post_day;
    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo ex_typenum($post_type);?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <!--課題5：hiddenを追加-->
          <input type="hidden" name="link" value="link">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="hidden" name="session" value="1">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>

        <!--課題3：POST取得を追加-->
        <?php
        if(empty($_POST['name'])){
        	$post_name = null;
        }else{
        	$post_name = $_POST['name'];
        }

        if(empty($_POST['year'])){
        	$post_year = null;
        }else{
        	$post_year = $_POST['year'];
        }

        if(empty($_POST['month'])){
        	$post_month = null;
        }else{
        	$post_month = $_POST['month'];
        }

        if(empty($_POST['day'])){
        	$post_day = null;
        }else{
        	$post_day = $_POST['day'];
        }

        if(empty($_POST['type'])){
        	$post_type = null;
        }else{
        	$post_type = $_POST['type'];
        }

        if(empty($_POST['tell'])){
        	$post_tell = null;
        }else{
        	$post_tell = $_POST['tell'];
        }

        if(empty($_POST['comment'])){
        	$post_comment = null;
        }else{
        	$post_comment = $_POST['comment'];
        }

        //課題4：セッションの追加
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['year'] = $post_year;
        $_SESSION['month'] = $post_month;
        $_SESSION['day'] = $post_day;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

        //課題3：不完全な項目を表示する処理を追加
        if(empty($post_name)){
          echo '名前が入力されていません' . "<br>";
        }

        if(empty($post_year) || empty($post_month) || empty($post_day)){
          echo '生年月日が選択されていません' . "<br>";
        }

        if(empty($post_tell)){
          echo '電話番号が入力されていません' . "<br>";
        }

        if(empty($post_comment)){
          echo '自己紹介が入力されていません' . "<br>";
        }
        ?>

        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="hidden" name="session" value="2">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
</body>
</html>

<!--課題1：トップページへの戻るリンクを追加-->
<?php
echo "<br>";
echo return_top();
