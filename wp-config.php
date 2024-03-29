<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress39');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J}Y80<xX-FO&.}&zO;j%=} <_He_%=WJBIFd5zq2u;%?~j*d+oE_+QKQDGdjO#];');
define('SECURE_AUTH_KEY',  'W;Rs?z:Odsw}q+W`,I-dy;d!_#S{II4oawX}cp,#O~!!FhdLQ(dX3s|[Ka]tCPH.');
define('LOGGED_IN_KEY',    'i)-N++c_F/!n^qNd8}D[y95cO$$wBSYGhR55p!tN+||Mp2i{%-.$;oHM,v?+2P<x');
define('NONCE_KEY',        'bFR~2khlpU4v _GZT -4}>G&{c({f|OqB^}2*<6G(H<YPY7nPIHKh[5f-4Jhz]mS');
define('AUTH_SALT',        'De`0oXq7CRI7QMlMJNE~,k-,^hPL}rg;~h%uBkVus*h-gzO,bf-D9PeQEMg$_|1x');
define('SECURE_AUTH_SALT', 'hXX(Ldxf9F$}idXbg%7h!G^bZ+mE3~bfCwlNu-d:!X$%PfHN6q;P8w}N$>/~?NQ1');
define('LOGGED_IN_SALT',   '_9^Zfr%,(+ l5U+- n6-Y_sT3Z $AGy&WHqWSr%+i,MhqRE%XFY@B$nwhK~Njxz,');
define('NONCE_SALT',       '%Npb=m3$3R<c;f!/D>(U8QZ(He*=%]ha8K|Hgl|$@^[F2PMgD&$}y|0zOy6qTBg]');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp39_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
