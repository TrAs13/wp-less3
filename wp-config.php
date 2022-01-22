<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lesson35' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gqtc@4Ozys>DA_R+T<]BZ a/*c18B4AWGF~FTH*A`N2o&jyqP7qz(qq@SLf=,P@m' );
define( 'SECURE_AUTH_KEY',  'uILY(lG_ t?vP4bdGwcoI8tfm)E#3)OvZ..|w%{XV7l;[w3+Z;#AcY@e%X)heZ`i' );
define( 'LOGGED_IN_KEY',    '=PS~^ O.cWSuktW]Wv^3p&> ;K*-NP`]_aa(tE-Jg)_h2NE9vKc2`~/31yKdEw-+' );
define( 'NONCE_KEY',        'Te*2Oef1hfQ|8Sni-?9P.kj5l4;gG$8D3vOyb}>/1wSEhWS&|0CWwm@c&&kXY F$' );
define( 'AUTH_SALT',        '&<M%:qb(WQa/~E-c|9IphSQ =S-jsLUj$9n!QI,nj_ZA3I+TMO@3Ql;PJrc3 1uh' );
define( 'SECURE_AUTH_SALT', 'S0C*4,Zu/37HL<w2{D&:*$8MuX0vu](WV.$/!(,;}8)4;d&<c*hd_NQ;&eWYlrjE' );
define( 'LOGGED_IN_SALT',   'QTN|!GSe19oU)<md2VNd1-eEH(9//,B5w(2h`9]WDio;>esM]OCREnKzeaO]>ERG' );
define( 'NONCE_SALT',       't=wq<{.]i,iQPXSWZC$P|}HU6B*s:RA{DR2$F{pCdx,WeCZbIg2bk~wh)X>Vc3Ay' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
