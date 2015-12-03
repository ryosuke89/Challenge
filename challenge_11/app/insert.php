<?php require_once '../common/defineUtil.php'; ?>
<!--課題1：requireを追加-->
<?php require "../common/scriptUtil.php"; ?>

<!--課題4：セッション開始を追加-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <!--課題4：名前にセッションを追加-->
    <input type="text" name="name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name']; unset($_SESSION['name']);}?>">
    <br><br>

    生年月日:　
    <!--課題4：生年月日にセッションを追加-->
    <select name="year">
        <option value="----">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"<?php if(isset($_SESSION['year']) && $_SESSION['year'] == $i){?>selected<?php unset($_SESSION['year']);}?>><?php echo $i;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"<?php if(isset($_SESSION['month']) && $_SESSION['month'] == $i){?>selected<?php unset($_SESSION['month']);}?>><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i;?>"<?php if(isset($_SESSION['day']) && $_SESSION['day'] == $i){?>selected<?php unset($_SESSION['day']);}?>><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    <!--課題4：種別にセッションを追加-->
    種別:
    <br>
    <input type="radio" name="type" value="1" <?php if(empty($_SESSION['type'])){?>checked<?php }elseif($_SESSION['type'] == "1"){echo 'checked'; unset($_SESSION['type']);}?>>エンジニア<br>
    <input type="radio" name="type" value="2" <?php if(empty($_SESSION['type'])){}elseif($_SESSION['type'] == "2"){echo 'checked'; unset($_SESSION['type']);}?>>営業<br>
    <input type="radio" name="type" value="3" <?php if(empty($_SESSION['type'])){}elseif($_SESSION['type'] == "3"){echo 'checked'; unset($_SESSION['type']);}?>>その他<br>
    <br>

    <!--課題4：電話番号にセッションを追加-->
    電話番号:
    <input type="text" name="tell" value="<?php if(isset($_SESSION['tell'])){echo $_SESSION['tell']; unset($_SESSION['tell']);}?>">
    <br><br>

    <!--課題4：自己紹介にセッションを追加-->
    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard" ><?php if(isset($_SESSION['comment'])){echo $_SESSION['comment']; unset($_SESSION['comment']);}?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
</body>
</html>

<!--課題1：トップページへの戻るリンクを追加-->
<?php
echo "<br>";
echo return_top();
