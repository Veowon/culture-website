<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'host1859400_3333' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'host1859400_2222' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1HAOAoh44s' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'U_}TyUJ{PI-=`l!XfOoS/NtnXEh,uYDKQJ2iT/WI@Xwu6s5(e$1h6p9$0!Y.`M[ ' );
define( 'SECURE_AUTH_KEY',  '0^,?O}{r2^Fxi1>cgZo4xQhh1<@Lk6?/Am=9g`TmDL1rK{}))8_ZxUy^?F3Ln:v ' );
define( 'LOGGED_IN_KEY',    'XmVnV3h%54R_-;6hu-}[GK(y/)/qqcvRb3U_ZRhp.F8vK7{r$4nl9pjekHV<N?x/' );
define( 'NONCE_KEY',        '|MbK$k:L)e~>|UfU{4*gX_w!3OaRIE##PYD.cTiGU?qVz@Ldn09eLSRNP($>hWk%' );
define( 'AUTH_SALT',        'qF0qWS|9y MI0T{BT=u8SI.}>#HHG7mfy52mx>yzF($Xvg4Qf9u%{B&:=oyZg5^Z' );
define( 'SECURE_AUTH_SALT', 'fkhVt@n<-]B{r{G!)qRdD.4:jMW9O:Uh8LPcItwm}AP&|;MT-LJ8DAm6B*>&AW]T' );
define( 'LOGGED_IN_SALT',   '[9_c@&D-l.a1F@`XWpNh9P@p#<Peqp3f+tO,/9tArno6](: lafDqO`vSPhsK>Dk' );
define( 'NONCE_SALT',       'Oh>M/r: .pUp)3!wi|C<<IgXdPBg=|_>S(<(_%6:n]+w5&rEpiq4;D#KbqS>f;e@' );

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