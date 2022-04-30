<?php

// セッション変数がなければ、空文字を代入
if(!isset($_SESSION['token'])) {
    $_SESSION['token'] = '';
}

// POSTされたデータを変数に代入（magic_quotes_gpc = On ＋ NULLバイト 対策）
foreach (array('token','qa_type','familyname','firstname','familykana','firstkana','email','pref_name','tel','content','qa_method') as $v) {
    $$v = filter_input(INPUT_POST, $v, FILTER_DEFAULT);
}

// セッション変数に代入
$_SESSION['qa_type'] = $qa_type;
$_SESSION['familyname'] = $familyname;
$_SESSION['firstname'] = $firstname;
$_SESSION['familykana'] = $familykana;
$_SESSION['firstkana'] = $firstkana;
$_SESSION['email'] = $email;
$_SESSION['pref_name'] = $pref_name;
$_SESSION['tel'] = $tel;
$_SESSION['content'] = $content;
$_SESSION['qa_method'] = $qa_method;

// 確認用画面の表示
?>