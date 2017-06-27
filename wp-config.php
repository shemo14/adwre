<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'adwre_adwre');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'adwre_adwre');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', 'adwreP@ssw0rd');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')}_Hs,[@8ngaSZ]3c`e&vw>[X5Ta1IxWU{6||K,YBi+} nE*L1@*HSv4M|iSeTHE');
define('SECURE_AUTH_KEY',  'xYAH!us&|.=G(gE*`q:(g_Nq$tb+km,K1=*#4b4+O6tN]er[iQ=ye9i^F,d-5qrF');
define('LOGGED_IN_KEY',    'cm_<R47c+?lB|xn9@B=4K2=@+OsyyP2:[X!w=kD7:OB:6)M]wag}Xs`ARPM9N0h ');
define('NONCE_KEY',        'axrTW;0Iz?}y&jyOGPzeH0IOt=(8$B+&B>9.NL y?Y$/q,Rc^* C>c9^B ##{2h>');
define('AUTH_SALT',        'W_=a$?|5rGF[@J9z&+43X~X+uADWjDW2-5R@;d}[X}ge,x}m0%L =mmI9ls<UKaH');
define('SECURE_AUTH_SALT', '{^h<sY`j]_-JW`9-aOui6$*+WYd8iB[ lw6)|{*<JUdt}px3}?U]x8:Si|=^5/_j');
define('LOGGED_IN_SALT',   'R!k%dAE!nB_ q($$rAl77kHlHvYt.=gT-{w^^9#;)KBWwCN}qSGL*L-I.C2-hPDb');
define('NONCE_SALT',       'Akv76x0Ct22ehv3NGK,}DGUc@T%$E,:lHHC^6qDyHA6yJ^NENZwtPxE_ D8nIo21');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');