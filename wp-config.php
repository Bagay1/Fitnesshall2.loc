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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'j964582_fh2' );

/** Имя пользователя MySQL */
define( 'DB_USER', '047000719_fhadm' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Bagaycar290687' );

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
define( 'AUTH_KEY',         '8w[u3(- j&v<C cFNx,S_DB7cCs1;d+dF e><o3RtA@%]7PmKyD1-]8T.iZ|m<T,' );
define( 'SECURE_AUTH_KEY',  '0Cd[S6UacXf g~w7F?Jb=T>M*vSsL_.a0XNkg/I&G<l6^#J>Ee,=Blu(YIvfVTC-' );
define( 'LOGGED_IN_KEY',    ' SsA,|*Rzgy50VQg6CeUHJgPm&wQ7^oh*p/=dU|,hDIT)hGec?FNY*nu|cS[L&}^' );
define( 'NONCE_KEY',        'FW93)ne7d&J.*I:Ce)OeNQG&v+oiE204Js*g20tvSVV]$MY@D9C.UBbJ%!IWJju[' );
define( 'AUTH_SALT',        '#qCiYL`(m3<d@K_^by]eYIK4hBeulEfeE9K:&QRBI6xL$Qz:?2(/s)@0I}((y(+$' );
define( 'SECURE_AUTH_SALT', 'k8|bE4s~1=mify+Id.b|0~@P7}.k]r{)Kl(.n5MitqrUzTl)@_~;O*;$Q_O&8Gg@' );
define( 'LOGGED_IN_SALT',   '?~3x658r/tsbA,9tkx6Ji:A!e[:~}%4C>Z>yy7q Ta-O$^Vtac4:+?[AN5Qn+qLL' );
define( 'NONCE_SALT',       'GCst$mpukG}%qkP@V&hjiqX2]c>y]p&:qI*Xt}?R8gI@._/pvZsVl1mJHdvK}K7M' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
