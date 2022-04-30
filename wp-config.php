<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'salonblessyou' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nJWP)yr=>{D[cTDMjbE]`f8ed>5=wOh4{#uL+,9-0PX5Mh#KSai_fK^-{AZ`;qYL' );
define( 'SECURE_AUTH_KEY',  '~wvx?H}Ng#kf6+bQBp@S{t48W,C7ey!=RO,|2:+Dk*ud`Md8Xdi5$FYe.o46!d/x' );
define( 'LOGGED_IN_KEY',    '##AZ:fiK uZ!B&#D]hM/2+T4~gN3*-FT9l}JEZ8o;oYq`l DDlV%_D_GdS6-B8d(' );
define( 'NONCE_KEY',        'X#ZnI[fgUFSplGDkX.6H#OGu~p$b.#hr%!CYxeF*g2KV{=s7f]YGBvTKsE<Wzb#+' );
define( 'AUTH_SALT',        '4) * S.%/ TdUOUH-garV1dn &xfSn><a,L--BZGje!(K$@Q4hY:^oipQb~(Sc{.' );
define( 'SECURE_AUTH_SALT', '*)r<RV .yCSK&n.H5x=;`.T0^r+q2[-7&hAV42n0(3twVIx}~Ze+PxPt|Z|KDo<}' );
define( 'LOGGED_IN_SALT',   '{$.Ellu_+.90x`,Z:[T72?)^-F71.`,8EPhj$?l2?4Q30B^i,rc($o][#d4ibN?1' );
define( 'NONCE_SALT',       'B#lTwA=8O#Jm5.Y]%v$!}/-nBB8$aJi2Vc/93U.xyQZ*U|=vPHIn.MQ*Ong;.vN,' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
