<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>変更入力画面</title>
</head>
<body>
    <?php
    //update.phpへの遷移をログに出力する処理を追加
    log_access(UPDATE);
    //詳細画面から「変更」ボタンを押した場合のみ処理を行う条件分岐を追加
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        //URLで直接アクセスした場合にエラーをログに出力する処理を追加
        log_error('アクセスルートが不正です。');
    }elseif($_POST['mode']=="KOUSHIN"){

        $result = profile_detail($_GET['id']);
        ?>
        <!--update_result.phpのURLに該当するuserIDを追加する処理を追加-->
        <!--関数profile_detailの処理の後に移動-->
        <form action="<?php echo UPDATE_RESULT; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">

        名前:
        <input type="text" name="name" value="<?php echo $result[0]['name']; ?>">
        <br><br>

        生年月日:　
        <select name="year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
            <!--年が選択された状態になるように処理を追加-->
            <option value="<?php echo $i;?>" <?php if($i==date('Y', strtotime($result[0]['birthday']))){echo "selected";}?>><?php echo $i;?></option>
            <?php } ?>
        </select>年
        <select name="month">
            <option value="">--</option>
            <?php
            for($i = 1; $i<=12; $i++){?>
            <!--月が選択された状態になるように処理を追加-->
            <option value="<?php echo $i;?>" <?php if($i==date('n', strtotime($result[0]['birthday']))){echo "selected";}?>><?php echo $i;?></option>
            <?php } ;?>
        </select>月
        <select name="day">
            <option value="">--</option>
            <?php
            for($i = 1; $i<=31; $i++){ ?>
            <!--日が選択された状態になるように処理を追加-->
            <option value="<?php echo $i;?>" <?php if($i==date('j', strtotime($result[0]['birthday']))){echo "selected";}?>><?php echo $i;?></option>
            <?php } ?>
        </select>日
        <br><br>

        種別:
        <br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$result[0]['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
        <?php } ?>
        <br>

        電話番号:
        <input type="text" name="tell" value="<?php echo $result[0]['tell']; ?>">
        <br><br>

        自己紹介文
        <br>
        <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $result[0]['comment']; ?></textarea><br><br>

        <!--valueを変更-->
        <input type="hidden" name="mode"  value="KOUSHIN_RESULT">
        <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">
        </form>
        <!--result_detail.phpのURLに該当するuserIDを追加する処理を追加-->
        <form action="<?php echo RESULT_DETAIL; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">
          <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
        </form>
    <?php
    }
    echo return_top(); ?>
</body>

</html>
