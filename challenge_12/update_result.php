<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body>
    <?php
    //update_result.phpへの遷移をログに出力する処理を追加
    log_access(UPDATE_RESULT);
    //変更入力画面から「以上の内容で更新を行う」ボタンを押した場合のみ処理を行う条件分岐を追加
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        //URLで直接アクセスした場合にエラーをログに出力する処理を追加
        log_error('アクセスルートが不正です。');
    }elseif($_POST['mode']=="KOUSHIN_RESULT"){

        //入力項目が不足している場合にエラーが表示される処理の追加
        if(!empty($_POST['name']) && !empty($_POST['year']) &&
            !empty($_POST['month']) && !empty($_POST['day']) &&
            !empty($_POST['type']) && !empty($_POST['tell']) && !empty($_POST['comment'])){

            //POSTの取得を追加
            $name = $_POST['name'];
            $type = $_POST['type'];
            $tell = $_POST['tell'];
            $comment = $_POST['comment'];

            //月日を2桁に変更して格納
            $birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
            //関数の引数を追加
            $result = update_profile($_GET['id'], $name, $birthday, $type, $tell, $comment);

            //エラーが発生しなければ表示を行う
            if(!isset($result)){
                //データを更新した場合にログに出力する処理を追加
                log_syori('データを更新しました。名前:' . $name);
                ?>
                <h1>更新確認</h1><br>
                <!--更新内容の表示処理を追加-->
                名前:<?php echo $name;?><br>
                生年月日:<?php echo $birthday;?><br>
                種別:<?php echo ex_typenum($type);?><br>
                電話番号:<?php echo $tell;?><br>
                自己紹介:<?php echo $comment;?><br><br>
                以上の内容で更新しました。<br>
                <?php
            }else{
                echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
                //データの更新に失敗した場合にエラーをログに出力する処理を追加
                log_error('データの更新に失敗しました。');
            }
        }else{
            //入力項目が不完全の場合にエラーをログに出力する処理を追加
            log_error('入力項目が不完全です。');
            ?>
            <h1>入力項目が不完全です</h1><br>
            再度入力を行ってください<br>
            <!--入力画面に戻る処理の追加-->
            <form action="<?php echo UPDATE; ?>?id=<?php echo $_GET['id']; ?>" method="POST">
              <input type="hidden" name="mode" value="KOUSHIN">
              <input type="submit" name="NO" value="入力画面に戻る">
            </form>
        <?php
        }
    }
    echo return_top();
    ?>
  </body>
</html>
