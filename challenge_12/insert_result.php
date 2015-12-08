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
    //insert_result.phpへの遷移をログに出力する処理を追加
    log_access(INSERT_RESULT);
    //PHPのエラーが表示されないように条件分岐を変更
    if(empty($_POST['mode'])){
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        //URLで直接アクセスした場合にエラーをログに出力する処理を追加
        log_error('アクセスルートが不正です。');
    }elseif($_POST['mode']=="RESULT"){

        session_start();
        $name = $_SESSION['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $birthday = $_SESSION['year'].'-'.sprintf('%02d',$_SESSION['month']).'-'.sprintf('%02d',$_SESSION['day']);
        $type = $_SESSION['type'];
        $tell = $_SESSION['tell'];
        $comment = $_SESSION['comment'];

        //データのDB挿入処理。エラーの場合のみエラー文がセットされる。成功すればnull
        $result = insert_profiles($name, $birthday, $type, $tell, $comment);

        //エラーが発生しなければ表示を行う
        if(!isset($result)){
            //データを登録した場合にログに出力する処理を追加
            log_syori('データを登録しました。名前:' . $name);
            ?>
            <h1>登録結果画面</h1><br>
            名前:<?php echo $name;?><br>
            生年月日:<?php echo $birthday;?><br>
            種別:<?php echo ex_typenum($type);?><br>
            電話番号:<?php echo $tell;?><br>
            自己紹介:<?php echo $comment;?><br><br>
            以上の内容で登録しました。<br>
            <?php
        }else{
            echo 'データの挿入に失敗しました。次記のエラーにより処理を中断します:'.$result;
            //データの挿入に失敗した場合にエラーをログに出力する処理を追加
            log_error('データの挿入に失敗しました。');
        }
    }
    echo return_top();
    ?>
    </body>
</html>
