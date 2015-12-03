<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/dbaccesUtil.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    session_start();
    $name = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
              . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

    //課題5：直接リンクしてアクセスした時のエラー処理を追加
    if(empty($_POST['link'])){
        echo 'アクセスエラーです。' . "<br>";
    }else{

        //課題8：データベースアクセス系の処理をdbaccesUtil.phpから取得
        connect2MySQL($insert_sql,$name,$birthday,$tell,$type,$comment);
    }

    //課題5：直接リンクしてアクセスした時に表示されない処理を追加
    if(isset($_POST['link'])){
    ?>
      <h1>登録結果画面</h1><br>
      名前:<?php echo $name;?><br>
      生年月日:<?php echo $birthday;?><br>
      種別:<?php echo ex_typenum($type);?><br>
      電話番号:<?php echo $tell;?><br>
      自己紹介:<?php echo $comment;?><br>
      以上の内容で登録しました。<br>
    <?php
    }
    ?>

    <?php echo return_top(); ?>

</body>

</html>
