<?php

// セッション変数がなければ、空文字を代入
if(!isset($_SESSION['token'])) {
    $_SESSION['token'] = '';
}

// POST['token']の値をtoken変数に代入
$token = filter_input(INPUT_POST, 'token', FILTER_DEFAULT, FILTER_FLAG_STRIP_LOW);

// 各セッション変数を各変数に代入
$qa_type = isset($_SESSION['qa_type']) && is_string($_SESSION['qa_type']) ? $_SESSION['qa_type'] : '';
$familyname = isset($_SESSION['familyname']) && is_string($_SESSION['familyname']) ? $_SESSION['familyname'] : '';
$firstname = isset($_SESSION['firstname']) && is_string($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
$familykana = isset($_SESSION['familykana']) && is_string($_SESSION['familykana']) ? $_SESSION['familykana'] : '';
$firstkana = isset($_SESSION['firstkana']) && is_string($_SESSION['firstkana']) ? $_SESSION['firstkana'] : '';
$email = isset($_SESSION['email']) && is_string($_SESSION['email']) ? $_SESSION['email'] : '';
$pref_name = isset($_SESSION['pref_name']) && is_string($_SESSION['pref_name']) ? $_SESSION['pref_name'] : '';
$tel = isset($_SESSION['tel']) && is_string($_SESSION['tel']) ? $_SESSION['tel'] : '';
$content = isset($_SESSION['content']) && is_string($_SESSION['content']) ? $_SESSION['content'] : '';
$qa_method = isset($_SESSION['qa_method']) && is_string($_SESSION['qa_method']) ? $_SESSION['qa_method'] : '';



/*  運営側へ送信するメールの設定  */

// 送信先のメールアドレス
// $to = 'contact@wakohdenken.co.jp';
$to = 'nishikawa@tomorrowgate.co.jp';

// 件名
$subject = '【企業サイトから、お問合せがありました。】';
// 本文
$message = "◆お問い合わせの種類\n$qa_type\n\n◆お名前\n$familyname $firstname ($familykana $firstkana)\n\n◆メールアドレス\n$email\n\n◆お住まいの都道府県\n$pref_name\n\n◆電話番号\n$tel\n\n◆お問い合わせ内容\n$content\n\n◆連絡方法\n$qa_method";
// オプション
$option = '-f'. $to;

/*  問い合わせされた方へ自動返信するメールの設定  */

// 件名
$auto_subject = '【お問合せいただき、誠にありがとうございます】';
// 送信元のメールアドレス
$auto_from    = 'From:' . $to;
// 本文
$auto_message = "
※ このメールは自動返信によるものです。

$first_name $last_name 様

この度は、幸南食糧株式会社にお問合せいただき、誠にありがとうございました。

お送りいただきました内容を確認の上、担当者より折り返しご連絡させていただきます。

$message";

/* セーフモードがONの場合は、mb_send_mailの第5引数が使えないため、処理を分岐して送信 */
if(ini_get('safe_mode')) {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email") && mb_send_mail($email, $auto_subject, $auto_message, $auto_from)) {
        echo '<h3>お問い合わせありがとうございます。送信が完了したしました。</h3><p class="basetxt14">お問い合わせありがとうございました。内容を確認出来次第、ご連絡いたします。<br>送信後、確認メールが送られてこない場合は、メールアドレスの入力ミスの可能性がございます。<br>再度、送信お願いいたします。<br>お電話からのご相談も承っておりますのでご連絡ください。</p>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }

} else {

    /*  運営側と自動返信のメールの送信が完了したら、送信完了の文章を表示する  */
    if(mb_send_mail($to, $subject, $message, "From:$email", $option) && mb_send_mail($email, $auto_subject, $auto_message, $auto_from, $option)) {
        echo '<h3>お問い合わせありがとうございます。送信が完了したしました。</h3><p class="basetxt14">お問い合わせありがとうございました。内容を確認出来次第、ご連絡いたします。<br>送信後、確認メールが送られてこない場合は、メールアドレスの入力ミスの可能性がございます。<br>再度、送信お願いいたします。<br>お電話からのご相談も承っておりますのでご連絡ください。</p>';
    } else {
        echo '<p class="basetxt14">大変申し訳ございませんが、メールの送信に失敗しました。<br>お手数ですが最初からやり直してください。</p>';
    }
}

// セッションの破棄
$_SESSION = array();
session_destroy();
?>