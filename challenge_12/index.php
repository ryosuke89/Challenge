<?php require_once '../common/defineUtil.php'; ?>
<!--scriptUtil.phpのrequireの追加-->
<?php require_once '../common/scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <title>ユーザー情報管理トップ</title>
</head>
<body>
    <!--トップ画面への遷移をログに出力する処理を追加-->
    <?php log_access('トップ画面'); ?>
    <h1>ユーザー情報管理トップ画面</h1><br>
    <h3>ここでは、ユーザー情報管理システムとしてユーザー情報の登録や検索、
        付随して修正や削除を行うことができます</h3><br>
    <a href="<?php echo INSERT; ?>">新規登録</a><br>
    <a href="<?php echo SEARCH; ?>" >検索(修正・削除)</a><br>
</body>
</html>
