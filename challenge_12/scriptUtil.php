<?php
require_once '../common/defineUtil.php';

/**
 * 使用した場所にトップページへのリンクを挿入する
 * @return トップページへのリンクのaタグ
 */
function return_top(){
    return "<a href='".ROOT_URL."'>トップへ戻る</a>";
}

/**
 * 種別番号から実際の種別名を返却する
 * @param type $type 種別と対応した数字
 * @return string 種別名
 */
function ex_typenum($type){
    switch ($type){
        case 1;
            return "エンジニア";
        case 2;
            return "営業";
        case 3;
            return "その他";
    }
}

/**
 * フォームの再入力時に、すでにセッションに対応した値があるときはその値を返却する
 * @param type $name formのname属性
 * @return type セッションに入力されていた値
 */
function form_value($name){
    if(isset($_POST['mode']) && $_POST['mode']=='REINPUT'){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
    }
}

/**
 * ポストからセッションに存在チェックしてから値を渡す。
 * 二回目以降のアクセス用に、ポストから値の上書きがされない該当セッションは初期化する
 * @param type $name
 * @return type
 */
function bind_p2s($name){
    if(!empty($_POST[$name])){
        $_SESSION[$name] = $_POST[$name];
        return $_POST[$name];
    }else{
        $_SESSION[$name] = null;
        return null;
    }
}

//画面遷移のログを出力する関数の追加
function log_access($file){
    $fp = fopen('../logs/log.txt', 'a');
    fwrite($fp, "\r\n" . date('Y-m-d H:i:s') . '　' . $file . 'に遷移');
    fclose($fp);
}

//処理のログを出力する関数の追加
function log_syori($syori){
    $fp = fopen('../logs/log.txt', 'a');
    fwrite($fp, '　' . $syori);
    fclose($fp);
}

//エラーのログを出力する関数の追加
function log_error($error){
    $fp = fopen('../logs/log.txt', 'a');
    fwrite($fp, '　ERROR:' . $error);
    fclose($fp);
}
