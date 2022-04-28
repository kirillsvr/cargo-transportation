<?php
/**
 * �������� ��������� WordPress.
 *
 * ������ ��� �������� wp-config.php ���������� ���� ���� � ��������
 * ���������. ������������� ������������ ���-���������, �����
 * ����������� ���� � "wp-config.php" � ��������� �������� �������.
 *
 * ���� ���� �������� ��������� ���������:
 *
 * * ��������� MySQL
 * * ��������� �����
 * * ������� ������ ���� ������
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** ��������� MySQL: ��� ���������� ����� �������� � ������ �������-���������� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'ci99361_gruz');

/** ��� ������������ MySQL */
define('DB_USER', 'ci99361_gruz');

/** ������ � ���� ������ MySQL */
define('DB_PASSWORD', 'qwerty123');

/** ��� ������� MySQL */
define('DB_HOST', 'localhost');

/** ��������� ���� ������ ��� �������� ������. */
define('DB_CHARSET', 'utf8');

/** ����� �������������. �� �������, ���� �� �������. */
define('DB_COLLATE', '');
/**#@+
 * ���������� ����� � ���� ��� ��������������.
 *
 * ������� �������� ������ ��������� �� ���������� �����.
 * ����� ������������� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}
 * ����� �������� ��, ����� ������� ������������ ����� cookies �����������������. ������������� ����������� �������������� �����.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4^H=BgsCJyTWE~3.!*!(++K)_|!IDCQ*#_3LM*7Ngl_CcxEb{sf`ywQ26O8l:J(7');
define('SECURE_AUTH_KEY',  '%m|}Ym`g~rKr#PM`c(~ekOj-Uwn2bK-U0Ed):s-c*~,`Eer&?y_bl<61q.6frK?H');
define('LOGGED_IN_KEY',    '*_Iss]hoYd%;FIGZ{0gTn:3={F^kg}$M<dS9a+7jLG`KtP%,q8j[@l3Tz{{`7n /');
define('NONCE_KEY',        '[}n/*W<JhT^^;7^^ho-C:sMi{rv1(0r>Lgn/Cp_mHb6U*JGx||fc!&c3t*LPW,J/');
define('AUTH_SALT',        'P(mX2CB+{i9]]]$b|>*d,7*^!F|bs-E)S_/+*4~c`z-B h3>P+y}PsZN$3Y?W%lq');
define('SECURE_AUTH_SALT', '_B46E8l8i5nl?&HuWN$E|C^??:-y:/lMzH[Z07eiFtp2^>Te_Ri}}A9Sru^Og-x1');
define('LOGGED_IN_SALT',   ')~45cu(eWVnO4X-pa8C,[<40_nx<IoW`TILg|2>5TSHF@BSeC80@3*X$H5[zT%Sw');
define('NONCE_SALT',       'RcV{:R`*=#/cL$FsnTL}[8eZr.<g5*%,r`K+Z3|wK@aO}Zh,q%7e$Si}$*K{? Jv');

/**#@-*/

/**
 * ������� ������ � ���� ������ WordPress.
 *
 * ����� ���������� ��������� ������ � ���� ���� ������, ���� ������������
 * ������ ��������. ����������, ���������� ������ �����, ����� � ���� �������������.
 */
$table_prefix  = 'wp_';

/**
 * ��� �������������: ����� ������� WordPress.
 *
 * �������� ��� �������� �� true, ����� �������� ����������� ����������� ��� ����������.
 * ������������� �������� � ��� ������������ ������������� ������������ WP_DEBUG
 * � ���� ������� ���������.
 *
 * ���������� � ������ ���������� ���������� ����� ����� � �������.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
ini_set( 'upload_max_size' , '20M' );
/* ��� ��, ������ �� �����������. �������! */

/** ���������� ���� � ���������� WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	/* Multisite */
	define( 'WP_ALLOW_MULTISITE', true );
/** �������������� ���������� WordPress � ���������� �����. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}