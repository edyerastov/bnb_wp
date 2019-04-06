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

define( 'WC_REMOVE_ALL_DATA', true);

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'left4mad');

/** Имя пользователя MySQL */
define('DB_USER', 'left4mad');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Edik1999');

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
define('AUTH_KEY',         'Z_ e(M{o{mUdA579gRDs5ZR*24]6Vd@aq0.ZA+n4aH:l@@>v-1?ApTI -f%p>95y');
define('SECURE_AUTH_KEY',  'hi)Vb@CwGw5q*2Z|y(?@}mDb@$,2<Vi=3-2_sE*U4uT(o=j[|[bGm50O8Uh;F2b*');
define('LOGGED_IN_KEY',    ':3otzE;, `,8q/i#Fm!C0X<FXwIp[&^4%HqJEM?35lXtNKr.L! UH<J)yKGp*=N/');
define('NONCE_KEY',        'aU.CDep*a1+OTOkMupB,Mh?jp@K9oq?Q*0N?@[AJZy+mWe1exXQtp6N[,P<$8@d]');
define('AUTH_SALT',        'cw,{*~t=Egl~sKal>zpln4Ti9b9P;/yP6EcSB 3`kPBh_HAz%R;F1nM+i<Fj9wp&');
define('SECURE_AUTH_SALT', '39E!sgRMPwMb.=){$hD[TlJD!O@W}j)sRi,g4>,fSNRO3:$OmL**[KA,,PH.f|m7');
define('LOGGED_IN_SALT',   'nX=KNQ=CkCD{>a$yS$k@ncXNx~oi~Tm+3jcf_V:sY}G3fak=%^O<2]m_}Q7gpMAQ');
define('NONCE_SALT',       '2P:P1qw6&1T&*Wy&#.okM|,C)vo/gDNs?0qtFMcY4KA-Wk7<@N*-3lna>gRq.M|V');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bnb_';

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
