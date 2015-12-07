<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
</head>
    <body>
        <h1>検索結果</h1>
        <?php
        //ログ出力の関数の呼び出し
        log_access();
        //入力がない場合nullにする処理を追加
        if(empty($_GET['name'])){
            $_GET['name'] = null;
        }

        if(empty($_GET['year'])){
            $_GET['year'] = null;
        }

        if(empty($_GET['type'])){
            $_GET['type'] = null;
        }

        $result = null;
        //全ての入力がない場合の関数、条件分岐を削除
        $result = serch_profiles($_GET['name'],$_GET['year'],$_GET['type']);

        //データが存在しない場合にエラーが表示される処理を追加
        if(!empty($result)){
            ?>
            <!--検索結果を表示する処理を移動-->
            <table border=1>
                <tr>
                    <th>名前</th>
                    <th>生年</th>
                    <th>種別</th>
                    <th>登録日時</th>
                </tr>

            <?php
            foreach($result as $value){
            ?>
                <tr>
                    <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']?>"><?php echo $value['name']; ?></a></td>
                    <!--生年月日が表示されていたのを生年のみが表示されるように修正-->
                    <td><?php echo date('Y年', strtotime($value['birthday'])); ?></td>
                    <td><?php echo ex_typenum($value['type']); ?></td>
                    <td><?php echo date('Y年n月j日　G時i分s秒', strtotime($value['newDate'])); ?></td>
                </tr>
            <?php
            }
        }else{
            echo 'データが存在しません。<br>';
        }
        ?>
        </table>
        <!--トップページへのリンクを追加-->
        <?php echo return_top(); ?>
</body>
</html>
