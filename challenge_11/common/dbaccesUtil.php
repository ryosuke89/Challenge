<?php

//課題8：データベースアクセス系の処理を切り離しconnect2MySQLの関数に統合
//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL($sql,$name,$birthday,$tell,$type,$comment){
    //db接続を確立
    try{
        //課題7：charset、ユーザー名、パスワードを変更、エラーが表示されるように追加
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }

    //課題7：正しくデータが格納できなかった場合にエラーが表示されるようにtryを追加
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=cp932','kato','kr890122');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //クエリとして用意
    $query = $pdo->prepare($sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $query->bindValue(':name',$name);
    $query->bindValue(':birthday',$birthday);
    $query->bindValue(':tell',$tell);
    $query->bindValue(':type',$type);
    $query->bindValue(':comment',$comment);
    //課題6：現在時刻が正しく格納されるように変更
    $query->bindValue(':newDate',date('Y-m-d H:i'));

    //SQLを実行
    $query->execute();

    //課題7：正しくデータが格納できなかった場合にエラーが表示されるようにcatchを追加
    }catch(PDOException $e){
        die('データの挿入に失敗しました:'.$e->getMessage());
  }
    //接続オブジェクトを初期化することでDB接続を切断
    $pdo=null;
}
