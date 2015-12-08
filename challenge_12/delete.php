<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除確認画面</title>
</head>
  <body>
    <?php
    //delete.phpへの遷移をログに出力する処理を追加
    log_access(DELETE);
    //詳細画面から「削除」ボタンを押した場合のみ処理を行う条件分岐を追加
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        //URLで直接アクセスした場合にエラーをログに出力する処理を追加
        log_error('アクセスルートが不正です。');
    }elseif($_POST['mode']=="SAKUJYO"){

        $result = profile_detail($_GET['id']);
        //エラーが発生しなければ表示を行う
        if(is_array($result)){
        ?>
        <h1>削除確認</h1>
        <!--改行を追加-->
        以下の内容を削除します。よろしいですか？<br>
        名前:<?php echo $result[0]['name'];?><br>
        生年月日:<?php echo $result[0]['birthday'];?><br>
        種別:<?php echo ex_typenum($result[0]['type']);?><br>
        電話番号:<?php echo $result[0]['tell'];?><br>
        自己紹介:<?php echo $result[0]['comment'];?><br>
        登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>

        <!--delete_result.phpのURLに該当するuserIDを追加する処理を追加-->
        <form action="<?php echo DELETE_RESULT; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">
          <!--URLでdelete_result.phpに直接アクセスするとエラーが表示される処理を追加するためにhiddenを追加-->
          <input type="hidden" name="mode"  value="SAKUJYO_RESULT">
          <input type="submit" name="YES" value="はい"style="width:100px">
        </form>
        <!--改行を削除-->
        <!--result_detail.phpのURLに該当するuserIDを追加する処理を追加-->
        <form action="<?php echo RESULT_DETAIL; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">
          <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
        </form>

        <?php
        }else{
            echo 'データの取得に失敗しました。次記のエラーにより処理を中断します:'.$result;
            //データの取得に失敗した場合にエラーをログに出力する処理を追加
            log_error('データの取得に失敗しました。');
        }
    }
        echo return_top();
        ?>
   </body>
</html>
