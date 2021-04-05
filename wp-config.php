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
define('DB_NAME', 'ouspen_lam');

/** Имя пользователя MySQL */
define('DB_USER', 'ouspen_lam');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'm*S6!K3V');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(~{zXMc)RiK4M&e?l:+9?*3.j3Ns^CqLp5{NwM,SG7cPh$0,%0Hp%3>cfP6bm6Fo');
define('SECURE_AUTH_KEY',  'h^$]b/o~2IlalJi. T_r/Z}qv./%G7V`!(yce9y!r1j&4~9hHY]hgsQ:Wc,VUN4A');
define('LOGGED_IN_KEY',    '89Go-el$^ujU.Ie.`C|$3*5~pKc7Q=NUUT|`?Dp<CrhF(=<Srx$HFl%oAa^3k[N.');
define('NONCE_KEY',        'iICaSspx7QwPkZlda:-VlFo>Q#&&&nyjDf/`>Fo-t `9SO?g0Tk0%B(K2ATx<16r');
define('AUTH_SALT',        '_ Ub%~*F,eo/fIA846c#scck0/k#`H-O>0GrAIf]*[*>P,f9=j[9`lW_ A#<sOSh');
define('SECURE_AUTH_SALT', 'gh EUz-@E]28sky;Pp4q&B.|bD$Z,)xal%uQ3O`L-rz};*HGCS%F`/<I5crVN`x}');
define('LOGGED_IN_SALT',   'PYB62fIjg6@cSG:Y2E!(n#m?P.TZVGX|a/y7Qt%_7sqW_GG[pkZyoZGs;B6$2@B.');
define('NONCE_SALT',       'xnhn]p$f0_^TFGb2jUp,4<jzo?$g<~T9#g1X3a97{K;|ooOh*XO4rvf@]AtXuv_V');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'lm_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
