<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除結果画面</title>
</head>
<body>
    <?php
    //delete_result.phpへの遷移をログに出力する処理を追加
    log_access(DELETE_RESULT);
    //削除確認画面から「はい」ボタンを押した場合のみ処理を行う条件分岐を追加
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        //URLで直接アクセスした場合にエラーをログに出力する処理を追加
        log_error('アクセスルートが不正です。');
    }elseif($_POST['mode']=="SAKUJYO_RESULT"){

        $result = delete_profile($_GET['id']);
        //エラーが発生しなければ表示を行う
        if(!isset($result)){
        //データを削除した場合にログに出力する処理を追加
        log_syori('データを削除しました。');
        ?>
        <h1>削除確認</h1>
        削除しました。<br>
        <?php
        }else{
            echo 'データの削除に失敗しました。次記のエラーにより処理を中断します:'.$result;
            //データの削除に失敗した場合にエラーをログに出力する処理を追加
            log_error('データの削除に失敗しました。');
        }
    }
    echo return_top();
    ?>
   </body>
</body>
</html>
