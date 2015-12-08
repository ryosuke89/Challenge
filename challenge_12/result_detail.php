<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報詳細画面</title>
</head>
  <body>
    <?php
    //result_detail.phpへの遷移をログに出力する処理を追加
    log_access(RESULT_DETAIL);
    //userIDを指定せずURLで直接アクセスした場合にエラーが表示される処理を追加
    if(!empty($_GET['id'])){
        $result = profile_detail($_GET['id']);

        //URLで直接アクセスした時にデータが存在しない場合、エラーが表示される処理を追加
        if(!empty($result)){
            //エラーが発生しなければ表示を行う
            if(is_array($result)){
                ?>

                <h1>詳細情報</h1>
                名前:<?php echo $result[0]['name'];?><br>
                生年月日:<?php echo $result[0]['birthday'];?><br>
                種別:<?php echo ex_typenum($result[0]['type']);?><br>
                電話番号:<?php echo $result[0]['tell'];?><br>
                自己紹介:<?php echo $result[0]['comment'];?><br>
                登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>

                <!--update.phpのURLに該当するuserIDを追加する処理を追加-->
                <form action="<?php echo UPDATE; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">
                    <!--URLでupdate.phpに直接アクセスするとエラーが表示される処理を追加するためにhiddenを追加-->
                    <input type="hidden" name="mode" value="KOUSHIN">
                    <input type="submit" name="update" value="変更" style="width:100px">
                </form>
                <!--delete.phpのURLに該当するuserIDを追加する処理を追加-->
                <form action="<?php echo DELETE; ?>?id=<?php echo $result[0]['userID']; ?>" method="POST">
                    <!--URLでdelete.phpに直接アクセスするとエラーが表示される処理を追加するためにhiddenを追加-->
                    <input type="hidden" name="mode" value="SAKUJYO">
                    <input type="submit" name="delete" value="削除"style="width:100px">
                </form>

                <?php
            }else{
                echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
                //データの検索に失敗した場合にエラーをログに出力する処理を追加
                log_error('データの検索に失敗しました。');
            }
        }else{
            echo 'データが存在しません。<br>';
            //データが存在しない場合にエラーをログに出力する処理を追加
            log_error('データが存在しません。');
        }
    }else{
        echo 'データが存在しません。<br>';
        //データが存在しない場合にエラーをログに出力する処理を追加
        log_error('データが存在しません。');
    }
    echo return_top();
    ?>
  </body>
</html>
