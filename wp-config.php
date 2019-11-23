<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'brightech' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vitaliy' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qbSe4!d9SY9se2Xo6[W*MN=!%jjIh.s}OQQqp{=]|>Tq?l*yFP_t 2Si%;vw`|pd' );
define( 'SECURE_AUTH_KEY',  '&**aNJ_{kWo5>-jjT.5wB3b|U-0(SL(S[oSK+Ey=JR{5/#_.#7=(+sXw2#7yzIDf' );
define( 'LOGGED_IN_KEY',    ';pl#d/!}Hnr7Dmk,SOxI+:n(tr~D>udoo!|qpnI7`Y;se]o4nf)|*qow~TiyFu3>' );
define( 'NONCE_KEY',        'GhN[B}fKT3YzCh&xuuMc%:7M?iAcgN~_HGv~@H ;H(m:;JQ@!mv<WR&uI+h X7&6' );
define( 'AUTH_SALT',        'm~=94c ^$nGqO6(YVx_eWxBG?*(mmMOBdrmsM2yP<4x>3XSG#U,_5Ka2*T$5qXIR' );
define( 'SECURE_AUTH_SALT', 'vV?C~PB7Ik 7=!`tC`^eG+ZUOF%@lxBZn+YHb+t3/QX!=-m/*WRNfsab#b8H_#{u' );
define( 'LOGGED_IN_SALT',   'cecqf@!81x<C#Crb87ickIl:RW~bf^z[;V*|gg>~:]AtF|_sf1[ss^jSc?K:AW]o' );
define( 'NONCE_SALT',       '$<H(%mSMu2X%~1Q4|VEt_%`rAGx.Wz,c,Bg4Mn[7fQ81;jDO4yaPZ@[HvG!<cD<+' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
